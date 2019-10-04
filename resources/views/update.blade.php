<!DOCTYPE html>
<html>

<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<h1>Edit Pegawai</h1>

	<a href="/pegawai"> Kembali</a>

	<br />

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
		<div class="form-group">
			<label for="Nama">Nama</label>
			<input type="text" class="form-control" name="nama" required="required" value="{{ $p->pegawai_nama }}">
		</div>
		<div class="form-group">
			<label for="Jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
		</div>
		<div class="form-group">
			<label for="Umur">Umur</label>
			<input type="text" class="form-control" name="umur" required="required" value="{{ $p->pegawai_umur }}">
		</div>
		<div class="form-group">
			<label for="Alamat">Alamat</label>
			<input type="text" class="form-control" name="alamat" required="required" value="{{ $p->pegawai_alamat }}">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	@endforeach
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>