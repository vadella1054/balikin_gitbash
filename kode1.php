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
<h2>Latihan 1</h2>
<h6>27-08-2021 17:08:32</h6>
<xmp>
      <canvas id="myCanvas" width="1000" height="500"></canvas>
      <script> 
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d'); 
      var c=document.getElementById("myCanvas");
      var ctx=c.getContext("2d");

      // Create gradient
      var grd=ctx.createRadialGradient(75,50,5,200,300,500);
      grd.addColorStop(0,"blue");
      grd.addColorStop(1,"white");

      // Fill with gradient
      ctx.fillStyle = grd;
      ctx.fillRect(445,175,300,80);

      
      context.font = '35pt Calibri';
      context.fillStyle = '#ffcc00';
      context.fillText('⋆   ⋆   ⋆   ⋆   ⋆   ⋆   ⋆   ⋆   ⋆   ⋆   ⋆   ⋆', 300, 75);

      context.font = '125pt Calibri';
      context.fillStyle = 'white';
      context.fillText('☁  ☁  ☁', 375, 190);

      context.font = '35pt quicksand';
      context.fillStyle = 'black';
      context.fillText('Rumah Della', 450, 225);
      
      context.font = '150pt Calibri';
      context.fillText('🌲', 700, 360);

      context.font = '27pt Calibri';
      context.fillStyle = 'green';
      context.fillText('✲ﾟ｡⋆✲ﾟ｡⋆✲ﾟ｡⋆✲ﾟ｡⋆✲ﾟ｡⋆✲ﾟ｡⋆', 425, 400);

      context.font = '25pt Calibri';
      context.fillStyle = '#ff7581';
      context.fillText('✿     ✿     ✿     ✿     ✿     ✿     ✿     ✿', 425, 375);

      context.beginPath();
      context.rect(120, 200, 300, 200);
      context.fillStyle = 'white';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#d0e1ff';
      context.stroke();

      context.beginPath();
      context.moveTo(120, 200);
      context.lineTo(270, 50);
      context.lineTo(420, 200);
      context.closePath();
      context.lineWidth = 10;
      context.strokeStyle = '#ff9f21';
      context.stroke();
      context.fillStyle = '#ffb95e';
      context.fill();

      context.beginPath();
      context.rect(150, 250, 100, 150);
      context.fillStyle = '#bf6000';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#994d00';
      context.stroke();

      context.beginPath();
      context.rect(290, 250, 100, 100);
      context.fillStyle = '#d0e1ff';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#994d00';
      context.stroke();

      context.lineWidth = 5;
      context.strokeStyle = '#994d00';
      context.beginPath();
      context.moveTo(340, 350);
      context.lineTo(340, 250);
      context.stroke();

      context.lineWidth = 5;
      context.strokeStyle = '#994d00';
      context.beginPath();
      context.moveTo(290, 300);
      context.lineTo(390, 300);
      context.stroke();</xmp>
      <br>



    </script>
    </div> 
</div>

</body>
    <br>
		<br>
		<div class="p-2 bg-dark text-white" align=center>Copyrights Vadella 2021</div>



</html>