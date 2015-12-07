<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laboratorium Aplication</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Laboratorium</span> Aplication</a>
			</div>				
		</div><!-- /.container-fluid -->
	</nav>
	<div class="col-sm-12  col-lg-12 main">			
		<?php if ($_GET[act]=='register'){
			include 'content/register.php';
			}elseif ($_GET[act]=='umum'){
			include 'content/umum/umum.php';
			}elseif ($_GET[act]=='jkn'){
			include 'content/jkn.php';
			}elseif ($_GET[act]=='jamkesmas'){
			include 'content/jkn-jamkesmas/jamkesmas.php';
			}elseif ($_GET[act]=='mandiri'){
			include 'content/jkn-mandiri/mandiri.php';
			}else{?> 
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Dashboard</h1>
				</div>
			</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<a href="register.html">
						<div class="col-sm-12 col-lg-12 widget-left">
							<div ><b>PENDAFTARAN PASIEN</b></div>
							<div class="text-muted">Untuk Pendaftaran Pasien</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-lg-4">
				<div class="panel panel-orange panel-widget ">
					<div class="row no-padding">
						<a href="cekup.html">
						<div class="col-sm-12 col-lg-12 widget-left">
							<div><strong>LABORATORIUM CHECK-UP</strong></div>
							<div class="text-muted">Untuk Pemeriksaan</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-lg-4">
				<div class="panel panel-teal panel-widget ">
					<div class="row no-padding">
						<a href="">
						<div class="col-sm-12 col-lg-12 widget-left">
							<div><strong>LAPORAN</strong></div>
							<div class="text-muted">Untuk Pelaporan</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-lg-4">
				<div class="panel panel-ungu panel-widget ">
					<div class="row no-padding">
						<a href="">
						<div class="col-sm-12 col-lg-12 widget-left">
							<div ><b>BACKUP and RESTORE</b></div>
							<div class="text-muted">Backup/Restore Database</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-lg-4">
				<div class="panel panel-hijau panel-widget ">
					<div class="row no-padding">
						<a href="">
						<div class="col-sm-12 col-lg-12 widget-left">
							<div><strong>ABOUT</strong></div>
							<div class="text-muted">Tentang Program</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-lg-4">
				<div class="panel panel-red panel-widget ">
					<div class="row no-padding">
						<a href="index.html">
						<div class="col-sm-12 col-lg-12 widget-left">
							<div><strong>KELUAR</strong></div>
							<div class="text-muted">Untuk Keluar Dari Program</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		</div><!--/.container-->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php }?>
		<nav class="navbar navbar-fixed-bottom" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<h5>Laboratorium Meddical Aplication Puskesmas Sidayu</h5>
					<h5>&copy; 2015 Copyright - Eltech Soft</h5>
				</div>			
			</div><!-- /.container-fluid -->
		</nav>
	</div><!--/.container-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	
</body>
</html>
