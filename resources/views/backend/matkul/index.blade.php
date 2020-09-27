@extends('backend.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card m-3">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<label for="" class="m-0 align-self-center">Data Mata Kuliah</label>
					</div>
					<div class="col-lg-6">
					<a href="" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#addMatkul"><i class="fas fa-plus-circle"></i>  Tambah Data</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-3 shadow">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table text-center table-bordered DataTables">
						<thead>
							<tr>
								<th>No.</th>
								<th>Mata Kuliah</th>
								<th>Dosen</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no =1; @endphp
							@foreach ($matkuls as $matkul)
							<tr>
								<td>{{ $no++ }}.</td>
								<td>{{ $matkul->name }}</td>
								<td>{{ $matkul->lecture }}</td>
								<td>
									<a href="{{ url('admin/editmatkul/'.$matkul->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
									<button data-redirect="{{ url('admin/deletematkul/'.$matkul->id) }}" type="submit" class="btn btn-danger btn-sm confirm-delete"><i class="fas fa-trash"></i></button>
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
<div class="modal fade" id="addMatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('admin/postmatkul') }}" method="POST">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Mata Kuliah</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="lecture" class="form-control" placeholder="Dosen" required>
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
	$('#addMatkul').on('shown.bs.modal')

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