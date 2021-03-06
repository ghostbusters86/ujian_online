@extends('backend.master')

@section('content')
<div class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card m-3">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<label for="" class="m-0 align-self-center">Data classroom</label>
					</div>
					<div class="col-lg-6">
						<a href="" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#addclassroom"><i class="fas fa-plus-circle"></i>  Tambah Data</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-3 shadow">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table text-center DataTables table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no =1; @endphp
							@foreach ($classrooms as $classroom)
							<tr>
								<td>{{ $no++ }}.</td>
								<td>{{ $classroom->name }}</td>
								<td>
									<a href="{{ url('admin/editclassroom/'.$classroom->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
									<button data-redirect="{{ url('admin/deleteclassroom/'.$classroom->id) }}" type="submit" class="btn btn-danger btn-sm confirm-delete"><i class="fas fa-trash"></i></button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="addclassroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('admin/postclassroom') }}" method="POST">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data classroom</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" name="nim" class="form-control" placeholder="Nim">
					</div>
					<div class="form-group">
						<input type="text" name="classroomname" class="form-control" placeholder="classroomname">
					</div>
					<div class="form-group">
						<input type="text" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<select name="kelas" id="" class="form-control">
							<option value="" hidden>Kelas</option>
							@foreach ($classrooms as $class)
							<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select name="level" id="" class="form-control">
							<option value="" hidden>Level</option>
							<option value="admin">Admin</option>
							<option value="mahasiswa">Mahasiswa</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop

@section('customScript')
<script>
	$('#addclassroom').on('shown.bs.modal')

	$('.confirm-delete').click(function(){
		let redirect = $(this).data('redirect')
		$.confirm({
			title: 'Hapus Data',
			content: 'Apakah Anda Yakin Ingin Menghapus Data Ini?',
			buttons: {
				confirm: function () {
					window.location.href = redirect;
				},
				cancel: function () {
				},
			}
		});
	});
</script>
@stop