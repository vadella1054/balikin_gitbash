<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Grafika Komputer Vadella</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>

	<header class="py-5 bg-danger">
        <br>
        <br>
        <center><h1>Grafika Komputer</h1></center>
        <center><h3>Ilmu Komputer - Universitas Lampung</h3></center>
        <br>
        <br>
    </header>

	<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <center>Vadella Nikita Ayumi - 1917051054</center>
    </ol>
    </nav>
<body>
<div class="container p-3 my-3 border">
<div class="bg-danger text-black">
<h2>Praktikum 1 - Uji Coba</h2>
<h6>27-08-2021 16:04:21</h6>
<br> 
<h5>Garis</h5> 
<canvas id="myCanvas" width="500" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(100, 150);
      context.lineTo(450, 150);
      context.stroke();
    </script>

<br> 
<h5>Persegi panjang</h5>
<canvas id="myCanvas2" width="500" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas2');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.rect(188, 50, 200, 100);
      context.fillStyle = 'white';
      context.fill();
      context.lineWidth = 7;
      context.strokeStyle = 'black';
      context.stroke();

    </script>
<br> 
<h5>Teks</h5>
<canvas id="myCanvas3" width="800" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas3');
      var context = canvas.getContext('2d');
      context.fillStyle = 'black';
      context.font = 'bold 40pt Vladimir Script';
      context.fillText('~Vadella Nikita Ayumi~', 150, 100);

    </script>


    </div> 
</div>

</body>
    <br>
		<br>
		<div class="p-2 bg-dark text-white" align=center>Copyrights Vadella 2021</div>



</html>