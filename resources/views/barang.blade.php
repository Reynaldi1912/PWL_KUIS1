@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend - Blog Detail</title>
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
        Table Barang <br> <strong>Kelompok 5</strong>
      </h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" class="table-dark">id</th>
            <th scope="col" class="table-dark">Nama Barang</th>
            <th scope="col" class="table-dark">Jenis Barang</th>
            <th scope="col" class="table-dark">jumlah</th>
          </tr>
        </thead>
      <tbody>
        @foreach($data_barang as $item)
          <tr>
              <td>{{$item['id_barang']}}</td>
              <td>{{$item['nama_barang']}}</td>
              <td>{{$item['jenis_barang']}}</td>
              <td>{{$item['jumlah']}}</td>
          </tr>               
        @endforeach
    </tbody>
  </table>
      </section>
    

</body>
</html>
@endsection
