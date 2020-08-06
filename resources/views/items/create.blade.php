@extends('adminlte.master')

@section('content')
  <h2>Ini halaman Create</h>
@endsection

@push('scripts')
<script>
  var wrappers = document.getElmentByClassName('wrappers');
  var items =["ini","contoh"];
  console.log(items)
</script>
@endpush