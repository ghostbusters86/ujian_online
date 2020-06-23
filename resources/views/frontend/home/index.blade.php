@extends('frontend.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card card-rounded shadow-lg mt-5">
            <div class="card-header">
                <h4 class="text-center text-primary bold mb-0"><i class="fad fa-user-lock"></i> Login Form</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fad fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fad fa-lock"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <p>Mengalami Masalah? <a href="#">Klik Disini</a></p>
                    <button class="btn btn-success float-right">Login <i class="fad fa-sign-in-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop