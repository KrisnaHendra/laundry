@extends('owner/template')
@section('app')
<div class="app-main" style="background: #f5f5f5; background-size:cover;">
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card" style="border-radius: 10px;">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-7">
            <i class="fa fa-store"></i> <b>Bougenville</b>
          </div>
          <div class="col-5 text-right">
            Krisna Hendra
            <!-- <br> <a href="#" class="text-success" style="font-size: 12px">Edit Profil</a> -->
          </div>
        </div>
        <div class="row">
          <div class="input-group input-group-sm pl-2 pr-2 mt-1">
            <input type="text" class="form-control text-center" value="{{ date('d F Y') }}" readonly>
            <div class="input-group-append">
              <a href="#" class="input-group-text bg-dark text-white" data-toggle="tooltip" title="Langganan"><b> <i class="fa fa-calendar-alt"></i> </b></a>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col text-left">
            Paket Terdaftar : Trial
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<div class="row mt-1">
  <div class="col-6 pr-1">
    <div class="card">
      <div class="card-body text-center p-1 pt-2 pb-2">
        <span class="text-dark"><i class="fa fa-wallet"></i> Pendapatan Hari Ini</span>
        <hr class="m-0">
        Rp. 980,000,-
      </div>
    </div>
  </div>
  <div class="col-6 pl-1">
    <div class="card">
      <div class="card-body text-center p-1 pt-2 pb-2">
        <span class="text-dark"><i class="fa fa-shopping-bag"></i> Transaksi Hari Ini</span>
        <hr class="m-0">
        16x
      </div>
    </div>
  </div>
</div>

<div class="row mt-1">
  <div class="col">
  <div class="card">
    <div class="card-header pt-1 pb-1 bg-dark text-white">
      Total Pendapatan
    </div>
    <div class="card-body p-1 text-center">
      <div class="row">

      <div class="col-5">
        <img src="{{ URL::asset('template/image/money.jpg') }}" alt="image" width="150px">
      </div>
      <div class="col-7 mt-4" style="vertical-align: center;">
        <b style="font-size: 22px">Rp. 9,200,800</b> <hr class="m-0"> 160 Transaksi
      </div>
    </div>
    </div>
  </div>
  </div>
</div>

<div class="row mt-1">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <!-- <h5 class="card-title">{{ date('d M Y') }}</h5> -->
        <div class="row">
          <div class="col-8 font-weight-bold">
            <i class="fa fa-thumbtack"></i> Dalam Pengerjaan
          </div>
          <div class="col-4 text-right">
            19
          </div>
        </div>
        <div class="row">
          <div class="col-8 font-weight-bold">
            <i class="fa fa-thumbtack"></i> Siap Diambil
          </div>
          <div class="col-4 text-right">
            19
          </div>
        </div>
        <div class="row">
          <div class="col-8 font-weight-bold">
            <i class="fa fa-thumbtack"></i> Transaksi Selesai
          </div>
          <div class="col-4 text-right">
            19
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-1">
  <div class="col">
    <div class="card">
    <div class="card-header pt-2 pb-2">
      <i class="fa fa-exclamation-circle"></i> Order Siap
    </div>
    <div class="card-body p-0">
      <div class="scroll-area-sm" style="height: 250px">
      <div class="scrollbar-container ps--active-y">
      <table class="table table-hover table-striped m-0 p-0">
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>
        <tr>
          <td><span class="text-primary font-weight-bold">INV18956215</span> <br> Sabilla </td>
          <td class="text-right">
            Rp. 96,000 <br>
            <a href="#"><i class="fa fa-edit text-danger"></i></a> <span class="badge badge-info">Siap</span>
          </td>
        </tr>


      </table>
    </div>
  </div>
    </div>
  </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-4 pr-1">
    <div class="card">
      <div class="card-body p-1 text-center text-dark">
        <i class="fa fa-box-open" style="font-size: 35px"></i> <br> <b class="text-dark">Paket</b>
      </div>
    </div>
  </div>
  <div class="col-4 pl-1 pr-1">
    <div class="card">
      <div class="card-body p-1 text-center text-dark">
        <i class="fa fa-users" style="font-size: 35px"></i> <br> <b class="text-dark">Pelanggan</b>
      </div>
    </div>
  </div>
  <div class="col-4 pl-1">
    <div class="card">
      <div class="card-body p-1 text-center text-dark">
        <i class="fa fa-cogs" style="font-size: 35px"></i> <br> <b class="text-dark">Settings</b>
      </div>
    </div>
  </div>
</div>

<div class="row mt-2 mb-3">
  <div class="col-4 pr-1">
    <div class="card">
      <div class="card-body p-1 text-center text-dark">
        <i class="fa fa-phone-square" style="font-size: 35px"></i> <br> <b class="text-dark">Contact</b>
      </div>
    </div>
  </div>
  <div class="col-4 pl-1 pr-1">
    <div class="card">
      <div class="card-body p-1 text-center text-dark">
        <i class="fa fa-exclamation-circle" style="font-size: 35px"></i> <br> <b class="text-dark">Info</b>
      </div>
    </div>
  </div>
  <div class="col-4 pl-1">
    <div class="card">
      <div class="card-body p-1 text-center text-dark">
        <i class="fa fa-envelope" style="font-size: 35px"></i> <br> <b class="text-dark">Message</b>
      </div>
    </div>
  </div>
</div>

@endsection
