@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a style="color: #1E90FF" href="/home"><i class="nav-icon fas fa-long-arrow-alt-left fa-3x" ></i></a>
            <div class="card">
                <div class="card-header">Ubah Kata sandi</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                
                            <label for="new-password">Kata sandi saat ini</label>

                            
                                <input id="current-password" type="password" class="form-control{{ $errors->has('current-password') ? ' has-error' : '' }}" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                                <br>
                 

                            <label for="new-password" >Kata sandi baru</label>

                         
                                <input id="new-password" type="password" class="form-control{{ $errors->has('new-password') ? ' has-error' : '' }}" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                                <br>
                   

                 
                                <label for="new-password-confirm" >Konfirmasi password baru</label>

                 
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                <br>

                        <div class="form-group ">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Ganti kata sandi
                                </button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection