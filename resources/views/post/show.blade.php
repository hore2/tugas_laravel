@extends('adminlte.master')
@section('content')
 <div class="mt-3 ml-3">
  <div class="card">
    <div class="card-card-body">
     <div class="card-header">
  <h3 class="card-title" style="text-align: center;">Detail Pertanyaan</h3> </div>
     <div class="mt-3 ml-3"><br>
        <p>{{$data->judul}}</p>
        <p>{{$data->isi}}</p>
        <p>{{$data->tgl_buat}}</p>
        <p>{{$data->updated_at}}</p>
      </div>
   
  </div>
</div>
</div>

@endsection

