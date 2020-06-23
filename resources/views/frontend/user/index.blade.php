@extends('frontend.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card my-5">
            <div class="card-header">
                <h5 class="mb-0">Daftar Ujian</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center datatables-responsive">
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
                                <td width="20%">{{ date('d F Y', $question->upload_at) }}</td>
                                <td>{{ $question->course->name }}</td>
                                <td width="5%"><a href="{{ asset('file/question/' . $question->file) }}" target="blank" class="btn btn-primary"><i class="fad fa-download"></i></a></td>
                                <td width="5%"><button class="btn btn-success get-question" data-id="{{ $question->id }}" data-toggle="modal" data-target="#uploadModal"><i class="fad fa-upload"></i></button></td>
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
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Informasi Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <small>Nama</small>
                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                </div>
                <div class="form-group">
                    <small>NIM</small>
                    <input type="text" class="form-control" value="{{ auth()->user()->nim }}" readonly>
                </div>
                <div class="form-group">
                    <small>Kelas</small>
                    <input type="text" class="form-control" value="{{ auth()->user()->classroom->name }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@section('custom-script')
<script>
    $('.get-question').click(function() {
        let id = $(this).data('id')

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: 'user/getQuestion',
            type: 'post',
            data: {
                id: id
            },
            dataType: 'html',
            success: function(result) {
                console.log(result);
            }
        })
    })
</script>
@stop

@stop