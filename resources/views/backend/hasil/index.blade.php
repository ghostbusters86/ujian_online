@extends('backend.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card m-3">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<label for="" class="m-0 align-self-center">Data Jawaban Mahasiswa</label>
					</div>
					<div class="col-lg-6">
						<a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-plus-circle"></i>  Tambah Data</a>
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
								<th>Nama</th>
								<th>Nim</th>
								<th>Mata Kuliah</th>
								<th>Kelas</th>
								<th>File</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no =1; @endphp
							@foreach ($answers as $answer)
							<tr>
								<td>{{ $no++ }}.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
									<button href="" class="btn btn-danger btn-sm confirm-delete"><i class="fas fa-trash"></i></button>
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

@stop