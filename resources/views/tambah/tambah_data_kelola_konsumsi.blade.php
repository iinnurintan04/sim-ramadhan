@extends('layouts.main')
<?php
   require_once 'E:\ramadhanku\public\lib\Hijri_GregorianConvert.class'; 
   $DateConv= new Hijri_GregorianConvert;
?>
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kelola_konsumsi</title>
</head>
<body>
   
<?php 
    $format= "YYYY";
    date_default_timezone_set("Asia/Jakarta");
    $date= date("Y");   
?>
<div class="flex flex-col text-center">
  <h1 class="text-neutral-900 font-semibold text-3xl ">Tambah Data Kelola Konsumsi</h1>
    <h1 class="text-neutral-900 font-semibold text-2xl ">Tahun <?php echo date("Y");?> / <?php echo $DateConv->GregorianToHijri($date,$format); ?> H
  </h1>
</div>    
<br>
<hr>

<!-- Button Kembali -->
<div class="py-5">
<button href="/kelola_konsumsi" type="submit" class="p-2.5 text-sm font-medium text-white bg-slate-200 rounded-lg border border-slate-200 hover:bg-black-800 focus:ring-4 focus:outline-non e focus:ring-blue-300 dark:bg-slate-500 dark:hover:bg-slyte-700 dark:focus:ring-gray-500">
  <h1 class="text-black">Kembali</h1>
</button>
</div>

<!-- Form -->
<!-- Tanggal -->
<h1 class="text-black font-semibold ">Tanggal</h1>
<div>
  <form action="#" method="POST">
    <div>
      <div class="mt-1">
        <textarea id="about" name="about" rows="3" class="mt-1 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800  sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
      </div> 

      <!-- Buka Bersama-->
      <div class="py-5">
        <h1 class="text-black font-semibold ">Nama Donatur Buka Bersama</h1>
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-1 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div>  
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-3 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div> 
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-3 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div>

        <!-- Takjil -->
        <div class="py-5">
        <h1 class="text-black font-semibold ">Nama Donatur Takjil</h1>
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-1 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div>  
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-3 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div> 
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-3 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div>


        <!-- Jabur -->
        <div class="py-5">
        <h1 class="text-black font-semibold ">Nama Donatur Jabur</h1>
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-1 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div>  
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-3 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div> 
        <div class="mt-1">
          <textarea id="about" name="about" rows="3" class="mt-3 block w-full h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
        </div>

        <!-- Keterangan -->
        <div class="py-5">
          <h1 class="text-black font-semibold ">Keterangan</h1>
          <div class="mt-1">
            <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-800 sm:py-1.5 sm:text-sm sm:leading-6 bg-slate-200" placeholder=""></textarea>
          </div>  
      </div>   
    </div>  
    
  </form>

  <!-- Button Tambah -->
<div class="py-5">
  <button href="/kelola_konsumsi" type="submit" class="p-2.5 text-sm font-medium text-white bg-slate-200 rounded-lg border border-slate-200 hover:bg-black-800 focus:ring-4 focus:outline-non e focus:ring-blue-300 dark:bg-slate-500 dark:hover:bg-slyte-700 dark:focus:ring-gray-500">
  <h1 class="text-black">Tambah</h1>
</button>
</div>

</div>









</body>
</html>

@endsection