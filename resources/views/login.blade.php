@extends('layout')
@section('content')
    <!--Login-Form -->

    <section id="login" class="section-padding">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                        <div class="section-header text-center">
                            <h2>Login</h2>
                            <p>Efetue o login para verificar seus veículos e mensagens</p>
                        </div>
                        <form action="{{route('login_action')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" value="{{env('LOGIN', '')}}" placeholder="Usuário">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" value="{{env('PASSWORD', '')}}" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Logar" class="btn btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div class="section-header text-center">
                            <h2>Registre-se</h2>
                            <p>Registre-se para poder vender veículos</p>
                        </div>
                        <form action="#" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Repita Senha</label>
                                <input type="password" class="form-control" name="password_repeat">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Registrar" class="btn btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
