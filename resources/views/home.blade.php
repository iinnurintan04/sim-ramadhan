<?php
   require_once 'E:\ramadhanku\public\lib\Hijri_GregorianConvert.class'; 
   $DateConv=new Hijri_GregorianConvert;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>

@extends('layouts.main')

@section('container')
<?php 
    $format= "YYYY";
    date_default_timezone_set("Asia/Jakarta");
    $date= date("Y");   
?>
  <h1 class="text-neutral-900 font-semibold text-3xl ">Selamat Datang Panitia Ramadhan!</h1>
    <h1 class="text-neutral-900 font-semibold text-2xl ">Manajemen Ramadhan Tahun <?php echo date("Y");?> / <?php echo $DateConv->GregorianToHijri($date,$format); ?> H
  
  </h1>
    <br>
  <hr>
@endsection