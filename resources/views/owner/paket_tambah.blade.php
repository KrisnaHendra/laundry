@extends('owner/template')

@section('app')
<div class="app-main" style="background: #f5f5f5; background-size:cover;">
@endsection

@section('content')
<style media="screen">
  .input-laundry:focus{
    outline: none !important;
    border-bottom:2px solid blue !important;
    /* box-shadow: 0 0 10px #719ECE */
  }
</style>

<div class="card">
  <div class="card-header">
    Tambah Paket Baru
  </div>
  <div class="card-body">
    <label class="m-0 p-0 font-weight-bold">Nama Pelanggan</label> <br>
    <input type="text" class="input-laundry" name="" placeholder="Tuliskan nama pelanggan" style="border: none; border-bottom: 1px solid #878787; width: 100%; height:30px;">

    <label class="m-0 p-0 font-weight-bold mt-2">Nama Pelanggan</label> <br>
    <input type="text" class="input-laundry" name="" placeholder="Tuliskan nama pelanggan" style="border: none; border-bottom: 1px solid #878787; width: 100%; height:30px;">
  </div>
</div>

@endsection
