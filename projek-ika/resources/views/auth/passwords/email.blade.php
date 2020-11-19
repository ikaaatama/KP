@extends('layouts.login_register')

@section('content')
<link rel="stylesheet" type="text/css" href="../style.css">

<div class="login">
                <center>
                <h2 style="color: #FFFFFF">Reset Kata Sandi</h2><br>
                </center> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

        
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  

                     <button type="submit" class="btn btn-primary btn-block btn-large">Kirim Tautan</button><br>
                    </form>
</div>
@endsection
