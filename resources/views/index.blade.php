<!DOCTYPE html>
<html>

<head>
	<title>View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.table {
			margin: auto;
			width: 50% !important;
		}
	</style>
</head>

<body>
	<h1 class="text-center">Worker Data - CRUD Learning in Laravel</h1>
	<br />
	<table class="table table-bordered text-center ">
		<thead class="thead-dark">
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Age</th>
				<th>Address</th>
				<th>Option</th>
			</tr>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td>
					<a class="btn btn-primary" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
					|
					<a class="btn btn-primary" href="/pegawai/hapus/{{ $p->pegawai_id }}">Drop</a>
				</td>
			</tr>
			@endforeach
	</table>
	<br />
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<a class="btn btn-primary float-none" href="/pegawai/tambah" role="button"><strong>+ Add Worker</strong></a>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>