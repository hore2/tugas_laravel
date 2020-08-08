@extends('adminlte.master')
@section('content')
<div class="mt-3 ml-3">
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Edit {{$data->id}}</h3>
  </div>
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$data->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul',$data->judul)}}" placeholder="Enter Judul">
           @error('judul')
          <div class="alert alert-danger">{{message}}</div>  
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
            <textarea id="isi" name="isi" rows="4" cols="50" class="form-control" placeholder="Enter Isi ">{{ old('isi', $data->isi) }}</textarea> 
          @error('isi')
          <div class="alert alert-danger">{{message}}</div>  
          @enderror
        </div>
        <!--  <div class="form-group">
        <label>Date:</label>
          <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal_dibuat" />
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
          </div>
      </div> -->
       <!--  <input type="hidden" name="tgl_buat" value="<?php echo date("j F Y"); ?>"> -->
      <input type="hidden" name=" updated_at" readonly="  updated_at" value="<?php echo date("D M Y"); ?>">
      <!--<div class="form-group">
            <label for="isi">Profil</label>
          <input type="number" class="form-control" id="Isi" name="Profil_id" placeholder="Enter Isi">   
        </div>
          -->
     
      </div><!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div> 
 
@endsection

