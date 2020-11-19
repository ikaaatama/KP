@extends('layouts.login_register')

@section('content')
<br><br><br>
<link rel="stylesheet" type="text/css" href="../../style.css">
<div class="login"> 
                    
                    <h2 style="color: #FFFFFF">Atur Ulang Kata Sandi</h2><br>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                       
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <br>
                     
                                <input id="password" placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <br>

                      
                                <input id="password-confirm" placeholder="Konfirmasi Kata Sandi" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                
                                <br>

                        <button type="submit" class="btn btn-primary btn-block btn-large">Reset Kata Sandi</button><br>
                    </form>
</div>
@endsection
