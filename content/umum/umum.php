<?php 
include "config/koneksi.php";
$aksi="content/umum/aksi_umum.php";
$syarat=$_GET['id'];
date_default_timezone_set('Asia/Jakarta');
$tanggal=mktime(date("m"),date("d"),date("Y"));
$tglsekarang=date("Y-m-d",$tanggal);
if ($_GET[aksi]=='tambah'){?>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><a href="home.html">Dashboard</a></li>
				<li class="active"><a href="register.html">Pendaftaran</a></li>
				<li class="active">Daftar Pasien Umum</li>
			</ol>
		</div><!--/.row-->

		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pendaftaran Pasien Umum </h1>
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
<?php }elseif ($_GET[aksi]=='edit' AND $_GET[id]){
$data	= "SELECT * FROM sn_pasien WHERE id_pasien=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><a href="home.html">Dashboard</a></li>
				<li class="active"><a href="register.html">Pendaftaran</a></li>
				<li class="active">Edit Pasien Umum</li>
			</ol>
		</div><!--/.row-->

		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Pasien Umum </h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Edit</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method='POST' action="<?php echo $aksi;?>?module=pasienbaru&act=input">
								<div class="form-group">
									<label>ID Pasien</label>
									<input  type="text" name="id_pasien" class="form-control" disabled value="<?php echo $row[id_pasien];?>">
									<input  type="hidden" name="id_pasien" class="form-control"  value="<?php echo $row[id_pasien];?>">
									<input  type="hidden" name="tgl_pasien" class="form-control" placeholder="Tanggal" value="<?php echo $tglsekarang;?>">
									<input  type="hidden" name="jenis_pasien" class="form-control" placeholder="Tanggal" value="Umum">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama_pasien" class="form-control" value="<?php echo $row[nama_pasien];?>">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat_pasien" class="form-control" value="<?php echo $row[alamat_pasien];?>" >
								</div>
								<div class="form-group">
									<label>Reg</label>
									<input type="text"  name="reg_pasien" class="form-control" value="<?php echo $row[reg_pasien];?>">
								</div>
								<div class="form-group">
									<label>Umur</label>
									<input type="text" name="umur_pasien" class="form-control" value="<?php echo $row[umur_pasien];?>">
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
				<li class="active">Daftar Pasien Umum</li>
			</ol>
		</div><!--/.row-->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Pasien Umum <a  href="tambah-umum.html" class="btn btn-primary">Tambah Pasien</a></h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
						        <th>ID</th>
						        <th>Tanggal</th>
						        <th>Nama</th>
						        <th>Alamat</th>
						        <th>Reg</th>
						        <th>Umur</th>
						        <th>Aksi</th>
						    </tr>
						    </thead>
							<?php 
							$tampil=mysql_query("SELECT id_pasien,
												nama_pasien,
												alamat_pasien,
												reg_pasien,
												umur_pasien,
												jenis_pasien,
												DATE_FORMAT(tanggal, '%d-%m-%Y') as tanggal
												FROM sn_pasien
												WHERE jenis_pasien='Umum'
												ORDER BY id_pasien ASC");
							$noUrut = 1;
							while($row=mysql_fetch_array($tampil)){
							?>
							<tr>
						        <td><?php echo $row[id_pasien]; ?></td>
						        <td><?php echo $row[tanggal]; ?></td>
						        <td><?php echo $row[nama_pasien]; ?></td>
						        <td><?php echo $row[alamat_pasien]; ?></td>
						        <td><?php echo $row[reg_pasien]; ?></td>
						        <td><?php echo $row[umur_pasien]; ?></td>
						        <td>
								<a href='edit-umum-<?php echo $row[id_pasien]; ?>.html' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
								<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
						    </tr>
							<?php 
							$noUrut++;
							} ?>
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