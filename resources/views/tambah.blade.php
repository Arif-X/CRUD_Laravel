<!DOCTYPE html>
<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="Nama">Nama</label>
			<input type="text" class="form-control" name="nama" required="required" placeholder="Nama">
		</div>
		<div class="form-group">
			<label for="Jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" required="required" placeholder="Jabatan">
		</div>
		<div class="form-group">
			<label for="Umur">Umur</label>
			<input type="text" class="form-control" name="umur" required="required" placeholder="Umur">
		</div>
		<div class="form-group">
			<label for="Alamat">Alamat</label>
			<input type="text" class="form-control" name="alamat" required="required" placeholder="Alamat">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>