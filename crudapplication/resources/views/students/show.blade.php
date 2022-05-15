@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Data Buku</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Judul Buku : {{ $students->name }}</h5>
        <p class="card-text">Penerbit : {{ $students->address }}</p>
        <p class="card-text">Jumlah Halaman : {{ $students->mobile }}</p>
        <p class="card-text">Tahun Terbit : {{ $students->total }}</p>
  </div>
       
    </hr>
  
  </div>
</div>