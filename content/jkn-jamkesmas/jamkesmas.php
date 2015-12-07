<?php 
date_default_timezone_set('Asia/Jakarta');
$tanggal=mktime(date("m"),date("d"),date("Y"));
$tglsekarang=date("Y-m-d",$tanggal);
$aksi="content/jkn-jamkesmas/aksi_jamkesmas.php";
$syarat=$_GET['id'];
if ($_GET[aksi]=='tambah'){?>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><a href="home.html">Dashboard</a></li>
				<li class="active"><a href="register.html">Pendaftaran</a></li>
				<li class="active"><a href="jkn-jamkesmas.html">JKN</a></li>
				<li class="active">Daftar Pasien JKN Jamkesmas</li>
			</ol>
		</div><!--/.row-->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pendaftaran Pasien JKN Jamkesmas </h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Pendaftaran</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method='POST' action="<?php echo $aksi;?>?module=pasienbaru&act=input">
								<div class="form-group">
									<input  type="hidden" name="tgl_pasien" class="form-control" placeholder="Tanggal" value="<?php echo $tglsekarang;?>">
									<input  type="hidden" name="jenis_pasien" class="form-control" placeholder="Tanggal" value="Umum">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama_pasien" class="form-control" placeholder="Nama Lengkap">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat_pasien" class="form-control" placeholder="Alamat">
								</div>
								<div class="form-group">
									<label>Reg</label>
									<input type="text"  name="reg_pasien" class="form-control" placeholder="Reg">
								</div>
								<div class="form-group">
									<label>Umur</label>
									<input type="text" name="umur_pasien" class="form-control" placeholder="Umur">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		</div><!--/.Container-->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
<?php }else{?>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><a href="home.html">Dashboard</a></li>
				<li class="active"><a href="register.html">Pendaftaran</a></li>
				<li class="active"><a href="jkn.html">JKN</a></li>
				<li class="active">Daftar Pasien JKN Jamkesmas</li>
			</ol>
		</div><!--/.row-->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Pasien JKN Jamkesmas <a  href="tambah-jkn-jamkesmas.html" class="btn btn-primary">Tambah Pasien</a></h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data2.json" >
						    <thead>
						    <tr>
						        <th data-field="id" data-align="right">ID</th>
						        <th data-field="name">Tanggal</th>
						        <th data-field="price">Nama</th>
						        <th data-field="price">Alamat</th>
						        <th data-field="price">Reg</th>
						        <th data-field="price">Umur</th>
						    </tr>
						    </thead>
						</table>
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