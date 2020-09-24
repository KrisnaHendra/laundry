@extends('owner/template')

@section('app')
<div class="app-main" style="background: #f5f5f5; background-size:cover;">
@endsection

@section('content')
<style media="screen">
.act-btn{
          background:blue;
          display: block;
          width: 50px;
          height: 50px;
          text-align: center;
          color: white;
          /* vertical-align: middle; */
          font-size: 20px;
          font-weight: bold;
          border-radius: 50%;
          -webkit-border-radius: 50%;
          text-decoration: none;
          transition: ease all 0.3s;
          position: fixed;
          right: 30px;
          bottom:30px;
      }
.act-btn:hover{
  background: #0091ff;
  color: white;
}
.card-header>.nav .nav-link.active{
  color: #0091ff;
}
.card-header>.nav .nav-link::before{
  background: #0091ff;
}
</style>

<div class="mb-3 card">
    <div class="card-header">
        <ul class="nav nav-justified">
            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="font-weight-bold active nav-link">KILOAN</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="font-weight-bold nav-link">SATUAN</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="font-weight-bold nav-link">EXPRESS</a></li>
        </ul>
    </div>
    <div class="card-body p-2">
        <div class="tab-content">
          <!-- <input type="text" class="form-control form-control-sm" name="" value=""> -->
            <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
              <div class="card-shadow-info border card card-body border-info p-1">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-4 pr-0">
                      <img src="{{ URL::asset('template/image/undraw1.png') }}" alt="img" width="100%" height="100%">
                    </div>
                    <div class="col-4 mt-3 pl-0 pr-0">
                      <b>Paket Halo</b><br>
                      <span class="text-primary">&#177;</span> 3 Hari
                    </div>
                    <div class="col-4 text-right mt-4">
                      <b class="mr-2"> Rp. 6,500</b>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pemisah -->
              <div class="card-shadow-info border card card-body border-info p-1 mt-2">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-4 pr-0">
                      <img src="{{ URL::asset('template/image/undraw1.png') }}" alt="img" width="100%" height="100%">
                    </div>
                    <div class="col-4 mt-3 pl-0 pr-0">
                      <b>Paket Halo</b><br>
                      <span class="text-primary">&#177;</span> 3 Hari
                    </div>
                    <div class="col-4 text-right mt-4">
                      <b class="mr-2"> Rp. 6,500</b>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pemisah -->
              <div class="card-shadow-info border card card-body border-info p-1 mt-2">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-4 pr-0">
                      <img src="{{ URL::asset('template/image/undraw1.png') }}" alt="img" width="100%" height="100%">
                    </div>
                    <div class="col-4 mt-3 pl-0 pr-0">
                      <b>Paket Halo</b><br>
                      <span class="text-primary">&#177;</span> 3 Hari
                    </div>
                    <div class="col-4 text-right mt-4">
                      <b class="mr-2"> Rp. 6,500</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
              <img src="{{ URL::asset('template/image/undraw1.png') }}" alt="image" width="80%"> <br>
              <h6 class="text-center"><b>Opps... Data kosong</b> <br> Silahkan tambah data paket</h6>
            </div>
            <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
              <div class="card-shadow-info border card card-body border-info p-2">
                <div class="card-body p-2">
                  <div class="row">
                    <div class="col">
                      <b>Paket Halo</b><br>
                      <span>&#177;</span> 3 Hari
                    </div>
                    <div class="col text-right">
                      <b> Rp. 6,500</b>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pemisah -->
              <div class="card-shadow-info border card card-body border-info p-2 mt-1">
                <div class="card-body p-2">
                  <div class="row">
                    <div class="col">
                      <b>Paket Halo</b><br>
                      <span>&#177;</span> 3 Hari
                    </div>
                    <div class="col text-right">
                      <b> Rp. 6,500</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


<a href="{{ url('paket/tambah_view') }}" class="act-btn">
  <i class="fa fa-plus pt-3"></i>
</a>

@endsection
