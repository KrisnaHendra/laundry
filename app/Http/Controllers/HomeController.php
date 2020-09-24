<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    public function index(){
      return view('owner/dashboard');
    }

    public function contact(){
      if(auth()->user() == null){
        $cart =  DB::table('cart')->where('users_id',0)->get();
      }else{
        $cart = DB::table('cart')->where('users_id',auth()->user()->id)->get();
      }
      return view('user/contact',['cart'=>$cart]);
    }

    public function sendMessage(Request $req){
      DB::table('message')->insert([
        'name' => $req->name,
        'email' => $req->email,
        'subject' => $req->subject,
        'message' => $req->message
      ]);
      session()->flash('notif','Message Sent Successfully');
      return back();
    }

    public function booking(){
      $cart = DB::table('cart')->where('users_id',auth()->user()->id)->get();
      $products = DB::table('barang')->get();
      return view('user/booking',['products'=>$products,'cart'=>$cart]);
    }

    public function postCart(Request $req){
      // dd($req->all());
      $this->validate($req,[
        'products_id' => 'unique:cart,products_id'
      ]);
      DB::table('cart')->insert([
        'users_id' => auth()->user()->id,
        'products_id' => $req->products_id,
        'jumlah' => 1,
        'harga' => $req->harga24,
        'harga12jam' => $req->harga12,
        'harga24jam' => $req->harga24,
        'sewa' => 24
      ]);
      session()->flash('notif','Barang telah masuk di keranjang booking');
      return back();
    }

    public function cart(){
      $cart = DB::table('cart')->where('users_id',auth()->user()->id)->get();
      $data = DB::table('cart')
              ->select('cart.*','barang.nama','barang.gambar','barang.jenis','barang.id AS barang_id')
              ->join('barang','barang.id','=','cart.products_id')
              ->get();
      $jamSewa = DB::table('jam_sewa')->get();
      $jamBook = DB::table('cart')->select('sewa')->where('users_id',auth()->user()->id)->groupBy('sewa')->get();
      // dd($jamBook[0]->sewa);
      return view('user/cart',['cart'=>$cart,'data'=>$data,'jamSewa'=>$jamSewa,'jamBook'=>$jamBook]);
    }

    public function moveCart($id){
      DB::table('cart')->where('id',$id)->delete();
      return back();
    }

    public function postTransaksi(Request $req){
      if($req->update){
        // dd($req->all());
        if($req->jam_sewa == 12){
          foreach($req->id as $key => $value){
            DB::table('cart')->where('id',$req->id[$key])->update([
              'jumlah' => $req->quantity[$key],
              'harga' => $req->harga12[$key],
              'sewa' => $req->jam_sewa
            ]);
          }
        }else{
          foreach($req->id as $key => $value){
            DB::table('cart')->where('id',$req->id[$key])->update([
              'jumlah' => $req->quantity[$key],
              'harga' => $req->harga24[$key] * ($req->jam_sewa/24),
              'sewa' => $req->jam_sewa
            ]);
          }
        }
        return back();
      }else{
        DB::table('transaksi')->insert([
          'kode' =>  'INV'.time(),
          'users_id' => auth()->user()->id,
          'tanggal' => date('Y-m-d'),
          'total' => $req->totalSemua,
          'jam_sewa' => $req->jam_sewa,
          'status' => 1,
          'created_at' => time()
        ]);
        $lastID = DB::table('transaksi')->selectRaw('MAX(id) AS lastID')->get();
        // dd($lastID[0]->lastID);
        $data = [];
        foreach($req->id as $key => $value){
          $data[] = [
            'transaksi_id' => $lastID[0]->lastID,
            'barang_id' => $req->barang_id[$key],
            'qty' => $req->quantity[$key],
            'harga' => $req->harga[$key],
            'subtotal' => $req->quantity[$key] * $req->harga[$key]
          ];
        }
        DB::table('transaksi_det')->insert($data);
        DB::table('cart')->where('users_id',auth()->user()->id)->delete();
        session()->flash('notif','Sukses Booking');
        return redirect('riwayatUser');
      }
    }

    public function riwayatUser(){
      $cart = DB::table('cart')->where('users_id',auth()->user()->id)->get();
      $data = DB::table('transaksi')
              ->select('transaksi.*','transaksi_det.transaksi_id','transaksi_det.qty','transaksi_det.harga','transaksi_det.subtotal','users.name','barang.nama')
              ->leftJoin('transaksi_det','transaksi_det.transaksi_id','transaksi.id')
              ->leftJoin('users','users.id','transaksi.users_id')
              ->leftJoin('barang','barang.id','transaksi_det.barang_id')
              ->where('users_id',auth()->user()->id)
              ->get();
      $listData = [];
      foreach($data as $key => $val){
        $listData[$val->id]['kode'] = $val->kode;
        $listData[$val->id]['customer'] = $val->name;
        $listData[$val->id]['tanggal'] = $val->tanggal;
        $listData[$val->id]['total'] = $val->total;
        $listData[$val->id]['tgl_book'] = $val->created_at;
        $listData[$val->id]['detail'][] = [
          'barang' => $val->nama,
          'qty' => $val->qty,
          'harga' => $val->harga,
          'subtotal' => $val->subtotal
        ];
      }
      // dd($listData);
      return view('user/riwayat',['cart'=>$cart,'transaksi'=>$listData]);
    }
}
