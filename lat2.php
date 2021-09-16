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
<h2>Praktikum 2 - Uji Coba</h2>
<h6>03-09-2021 10:08:40</h6>
<br> 
<h5>Kurva 1</h5> 
<body data-rsssl=1>
    <canvas id="myCanvas" width="578" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(188, 130);
      context.bezierCurveTo(140, 10, 388, 10, 388, 170);
      context.lineWidth = 5;

      // line color
      context.strokeStyle = 'red';
      context.stroke();
    </script>
  </body>


<br> 
<h5>Kurva 2</h5>
<body data-rsssl=1>
    <canvas id="myCanvas2" width="578" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas2');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(188, 150);
      context.quadraticCurveTo(288, 0, 388, 150);
      context.lineWidth = 5;

      // line color
      context.strokeStyle = 'yellow';
      context.stroke();

    </script>
  </body>

<br> 
<h5>Kurva 3</h5>
<body data-rsssl=1>
    <canvas id="myCanvas3" width="578" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas3');
      var context = canvas.getContext('2d');
      var x = canvas.width / 2;
      var y = canvas.height / 2;
      var radius = 75;
      var startAngle = 1.1 * Math.PI;
      var endAngle = 1.9 * Math.PI;
      var counterClockwise = false;

      context.beginPath();
      context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
      context.lineWidth = 5;

      // line color
      context.strokeStyle = 'green';
      context.stroke();
      </script>
        </body>

<br> 
<h5>Lingkaran</h5>
<body data-rsssl=1>
    <canvas id="myCanvas4" width="578" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas4');
      var context = canvas.getContext('2d');
      var x = canvas.width / 2;
      var y = canvas.height / 2;
      var radius = 75;
      var startAngle = 0.1 * Math.PI;
      var endAngle = 3.14 * Math.PI;
      var counterClockwise = false;

      context.beginPath();
      context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
      context.lineWidth = 5;

      // line color
      context.strokeStyle = 'blue';
      context.stroke();
      </script>
        </body>

<br> 

    </div> 
</div>

</body>
    <br>
		<br>
		<div class="p-2 bg-dark text-white" align=center>Copyrights Vadella 2021</div>



</html>