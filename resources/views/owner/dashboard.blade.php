@extends('owner/template')
@section('app')
<div class="app-main" style="background: #3889CB; background-size:cover;">
@endsection
@section('content')

<div class="row text-center">
  <div class="col-12 text-center text-white">
    <b>Krishna Hendra Wijaya <br> <span style="font-size: 12px;"> <i class="fa fa-calendar-alt"></i> {{ date('d F Y') }} <span></b>
  </div>
</div>

<div class="row mt-2">
  <div class="col-6">
    <div class="card bg-white text-center" style="border-radius: 10px;">
      <div class="card-body p-1">
        <b>Transaksi</b>
        <img src="{{ URL::asset('template/image/transaksi.svg') }}" class="mt-1 mb-1" alt="ilustrasi" width="100px"><br>
        208 x
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card bg-white text-center" style="border-radius: 10px;">
      <div class="card-body p-1">
        <b>Pendapatan</b>
        <img src="{{ URL::asset('template/image/pendapatan.svg') }}" class="mt-1 mb-1" alt="ilustrasi" width="100px"><br>
        Rp. 19,690,800
      </div>
    </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-12">
    <div class="card">
        <div class="card-header pt-1 pb-1">
            <ul class="nav nav-justified">
                <li class="nav-item text-center"><a data-toggle="tab" href="#proses" class="active nav-link"><b>Dalam Proses</b></a></li>
                <li class="nav-item text-center"><a data-toggle="tab" href="#selesai" class="nav-link"><b>Order Selesai</b></a></li>
            </ul>
        </div>
        <div class="card-body p-3">
            <div class="tab-content">
                <div class="tab-pane active" id="proses" role="tabpanel">
                  <!-- Data -->
                  <div class="card card-border border-info">
                    <div class="card-body pl-1 pr-1 pt-2 pb-2">
                      <div class="row">
                        <div class="col-1 text-center">
                          <i class="fa fa-thumbtack text-primary mt-2"></i>
                        </div>
                        <div class="col-7 p-0 pl-1" style="font-size: 12px;">
                          <b>Haifa Shalsabella</b> <br>
                          Senin, 24 Agustus 2020
                        </div>
                        <div class="col-3 p-0 mt-2" style="font-size: 12px;">
                          <b>Rp. 28,500</b>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End -->
                </div>
                <div class="tab-pane" id="selesai" role="tabpanel">
                  <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-12 mb-0">
    <div class="card card-border shadow" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row">
          <div class="col-2 p-0">
            <img src="{{ URL::asset('template/image/pendapatan.svg') }}" alt="image" width="100%" height="100%">
          </div>
          <div class="col-10">
            <b>Paket</b> <br> Lihat seluruh paket laundry anda
          </div>
        </div>
      </div>
    </div>

    <div class="card card-border shadow mt-2" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row">
          <div class="col-2 p-0">
            <img src="{{ URL::asset('template/image/transaksi.svg') }}" alt="image" width="100%" height="100%">
          </div>
          <div class="col-10">
            <b>Kontrak</b> <br> Lihat detail kontrak anda dengan kami
          </div>
        </div>
      </div>
    </div>

    <div class="card card-border shadow mt-2" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row">
          <div class="col-2 p-0">
            <img src="{{ URL::asset('template/image/pendapatan.svg') }}" alt="image" width="100%" height="100%">
          </div>
          <div class="col-10">
            <b>Laporan</b> <br> Lihat laporan omset anda lebih detail
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
