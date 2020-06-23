@extends('backend.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-6">
		<div class="card mt-3 shadow">
			<div class="card-header">
				<h4 class="m-0 text-center">Edit Data User</h4>
			</div>
			<div class="card-body">
				<form action="{{ url('admin/updateuser') }}" method="POST">
					@csrf
					<div class="form-group">
						<input type="hidden" name="id" value="{{ $user->id }}">
						<input type="text" name="name" class="form-control" value="{{ $user->name }}">
					</div>
					<div class="form-group">
						<input type="text" name="nim" class="form-control" value="{{ $user->nim }}">
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control" value="{{ $user->username }}">
					</div>
					<div class="form-group">
						<input type="text" name="password" class="form-control" value="{{ $user->password_nohash }}">
					</div>
					<div class="form-group">
						<select name="kelas" id="" class="form-control">
							<option value="" hidden>Kelas</option>
							@foreach ($classroom as $class)
							<option value="{{ $class->id }}" {{ $user->classroom_id == $class->id ? 'selected' : '' }}>{{ $class->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select name="level" id="" class="form-control">
							<option value="" hidden>Level</option>
							<option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>Admin</option>
							<option value="mahasiswa" {{ $user->level == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
						</select>
					</div>
					<div class="form-group text-center">
						<a href="{{ url('admin/user') }}" class="btn btn-danger btn-sm"><i class="fas fa-times"> </i> Batal</a>
						<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> </i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop
