@extends('frontend.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="mb-0">Daftar Ujian</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Mata Kuliah</th>
                                <th>Download</th>
                                <th>Upload</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($questions as $question)
                            <tr>
                                <td width="1%">{{ $i++ }}</td>
                                <td>{{ date('d F Y', $question->upload_at) }}</td>
                                <td>{{ $question->course->name }}</td>
                                <td><a href="#" class="btn btn-primary"><i class="fad fa-download"></i></a></td>
                                <td><a href="#" class="btn btn-success"><i class="fad fa-upload"></i></a></td>
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