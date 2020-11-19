@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<br>
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <a style="color: #1E90FF" href="/home"><i class="nav-icon fas fa-long-arrow-alt-left fa-3x" ></i></a>
            <div class="card">
                <div class="card-header">
                    Memperbaharui profil
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('patch')
                        @csrf

                        <label>Nama</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('username', $user->name) }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>

                        <label>No Hp</label>
                        <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('username', $user->no_hp) }}" required autocomplete="no_hp" autofocus>

                        @error('no_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>

                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('username', $user->email) }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
              

                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Memperbaharui profil
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