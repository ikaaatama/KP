@extends('layouts.login_register')

@section('content')
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="login">
                    
                    <h2>Harap Konfirmasi Kata Sandi</h2><br>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                     
                                <input id="password" placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         

                        
                                <button type="submit" class="btn btn-primary btn-block btn-large">Konfirmasi Kata Sandi</button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                   
                    </form>
</div>
@endsection
