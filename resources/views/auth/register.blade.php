@extends('layouts.login')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')

    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3 center">
                <div class="login-box">
                    <a href="index.html" class="logo-name text-lg text-center">Modern</a>
                    <p class="text-center m-t-md">Create a Modern's account</p>
                    <form class="m-t-md" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input name="name" type="text" class="form-control" placeholder="Nome" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input name="password" type="password" class="form-control" placeholder="Senha" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required>
                        </div>
                        <label>
                            <input type="checkbox"> Termos e condições aplicaveis.
                        </label>
                        <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                        <p class="text-center m-t-xs text-sm">Ja possui uma conta?</p>
                        <a href="{{route('login')}}" class="btn btn-default btn-block m-t-xs">Login</a>
                    </form>
                    <p class="text-center m-t-xs text-sm">2018 &copy; Medical by MazasDaUEM.</p>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
@endsection
<!--Fim do Conteudo Local-->

<!--Javascript Local-->
@section('scripts')

@endsection
<!-- fim Javascript Local-->