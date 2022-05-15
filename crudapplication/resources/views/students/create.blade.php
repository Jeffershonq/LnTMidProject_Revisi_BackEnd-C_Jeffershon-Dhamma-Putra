@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Penambahan Buku</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Judul Buku</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Penulis</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Jumlah Halaman</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Tahun Terbit</label></br>
        <input type="text" name="total" id="total" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop