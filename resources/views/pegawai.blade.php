@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Pegawai</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

        
  <section class="about section-padding pb-0" id="barang">
      <h2 class="mb-5 text-center" data-aos="fade-up">
        Table Pegawai <br> <strong>Kelompok 5</strong>
      </h2>
      <table class="table table-striped">
        <thead>
          <tr>
          <th scope="col" class="table-dark">No</th>
            <th scope="col" class="table-dark">id Pegawai</th>
            <th scope="col" class="table-dark">Nama Pegawai</th>
            <th scope="col" class="table-dark">Jenis Kelamin</th>
            <th scope="col" class="table-dark">Alamat</th>
          </tr>
        </thead>
      <tbody>
      <?php
        $i=1;     
      ?>
        @foreach($data_pegawai as $item)
          <tr><td><?php
                 echo $i++;
              ?></td>
              <td>{{$item['id_pegawai']}}</td>
              <td>{{$item['nama_pegawai']}}</td>
              <td>{{$item['jenis_kelamin']}}</td>
              <td>{{$item['alamat']}}</td>
          </tr>     
                  
        @endforeach
    </tbody>
  </table>
      </section>
    

</body>
</html>
@endsection
