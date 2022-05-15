@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Buku</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Judul Buku</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Penerbit</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Jumlah Halaman</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <label>Tahun Terbit</label></br>
        <input type="text" name="total" id="total" value="{{$students->total}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop