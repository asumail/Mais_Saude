@extends('layouts.login')

@section('content')
<main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Medical</a>
                                <p class="text-center m-t-md">Por favor faça login da sua conta.</p>
                                <form class="m-t-md" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <button href="{{ route('login') }} type="submit" class="btn btn-success btn-block">Login</button>
                                    <a  href="{{ route('password.request') }}"  class="display-block text-center m-t-md text-sm">Esqueceu a senha?</a>
                                    <p class="text-center m-t-xs text-sm">Não possui uma conta?</p>
                                    <a href="{{ route('register') }}" class="btn btn-default btn-block m-t-md">Crie uma conta</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2018 &copy; Medical by MazasDaUEM.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
@endsection
