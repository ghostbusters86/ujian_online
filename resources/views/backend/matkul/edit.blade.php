@extends('backend.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-6">
		<div class="card mt-3 shadow">
			<div class="card-header">
				<h4 class="m-0 text-center">Edit Data User</h4>
			</div>
			<div class="card-body">
				<form action="{{ url('admin/updatematkul') }}" method="POST">
					@csrf
					<div class="form-group">
						<input type="hidden" name="id" value="{{ $course->id }}">
						<input type="text" name="name" class="form-control" value="{{ $course->name }}">
					</div>
					<div class="form-group">
						<input type="text" name="lecture" class="form-control" value="{{ $course->lecture }}">
                    </div>
                    <div class="form-group text-center">
						<a href="{{ url('admin/matkul') }}" class="btn btn-danger btn-sm"><i class="fas fa-times"> </i> Batal</a>
						<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> </i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop
