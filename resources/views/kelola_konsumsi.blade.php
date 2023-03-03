@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Konsumsi</title>
</head>
<body>

<?php
   require_once 'E:\ramadhanku\public\lib\Hijri_GregorianConvert.class'; 
   $DateConv = new Hijri_GregorianConvert;
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

<?php 
    $format = "YYYY";
    date_default_timezone_set("Asia/Jakarta");
    $date = date("Y");   
?>
<div class = ""></div>
<h1 class="text-neutral-900 font-semibold text-3xl text-center ">Kegiatan Kelola Konsumsi</h1>
    <h1 class="text-neutral-900 font-semibold text-2xl text-center  ">Manajemen Ramadhan Tahun <select id="" name="kategori" onchange="" class="font-semibold bg-slate-100">
        <option value="tahun" class="font-semibold ">2023 / 1444 H</option>
        <option value="tahun"  class="font-semibold">2022 / 1443 H</option>
        <option value="tahun"  class="font-semibold">2021 / 1442 H</option>
        <option value="tahun"  class="font-semibold">2020 / 1441 H</option>
    </select>
</h1>
<br>
<hr>

<!-- search dan button -->
<div>
        <form class="flex items-center pt-5 ">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-slate-200 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-full pl-10 p-2.5  dark:bg-slate-800 dark:border-slate-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-200 dark:focus:border-gray-500" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-slate-200 rounded-lg border border-slate-200 hover:bg-black-800 focus:ring-4 focus:outline-non e focus:ring-blue-300 dark:bg-slate-300 dark:hover:bg-slyte-700 dark:focus:ring-gray-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="pl-20">
                <button class="btn bg-gray-800">
                   <a href="tambah/tambah_data_kelola_konsumsi" class="font-medium text-white">Tambah Data</a> 
                </button>
            </div>
        </form>
        
<!-- Tabel -->
<div class="overflow-x-auto text-white ">
  <table class="table w-full">
    <!-- head -->
    <div class="py-3 ">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Job</th>
                <th>Favorite Color</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <tbody>
            <!-- row 1 -->
            <tr>
                <th>1</th>
                <td>Cy Ganderton</td>
                <td>Quality Control Specialist</td>
                <td>Blue</td>
                <td><a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <!-- row 2 -->
            <tr class="active">
                <th>2</th>
                <td>Hart Hagerty</td>
                <td>Desktop Support Technician</td>
                <td>Purple</td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <!-- row 3 -->
            <tr>
                <th>3</th>
                <td>Brice Swyre</td>
                <td>Tax Accountant</td>
                <td>Red</td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    
<!-- end of table -->
        
</div>
</body>
</html>
@endsection