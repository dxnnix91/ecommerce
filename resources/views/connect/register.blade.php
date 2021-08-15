@extends('connect.master')


{{-- Instalar html colective para mejorar los FRM
    https://laravelcollective.com/docs/6.x/html
    composer require laravelcollective/html
--}}
@section('content')
            <div class="box box_register shadow">
                <div class="header">
                    <a href="{{ url('/')}}">
                        <img src="{{ url('/static/images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="inside">
                {!! Form::open(['url' => '/login'])!!}
                <label for="nameUser">Nombre:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-user"></i></div>
                   </div>
                    {!! Form::text('nameUser', null, ['class' => 'form-control']) !!}
                </div>
                <label for="surNamme">Apellido:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-user"></i></div>
                   </div>
                    {!! Form::text('surName', null, ['class' => 'form-control']) !!}
                </div>
                <label for="email">Correo:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-mail-bulk"></i></div>
                   </div>
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <label for="password">Contraseña:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-key"></i></div>
                   </div>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <label for="repeatpassword">Confirme la Contraseña:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-key"></i></div>
                   </div>
                    {!! Form::password('repeatpassword', ['class' => 'form-control']) !!}
                </div>
                {!!   Form::submit('Ingresar', ['class' => 'btn btn-primary mbottom16' ])  !!}
                {!! Form::close()  !!}

                <a href="{{ url('/login')}}" class="footer">
                   Ya tengo una cuenta, Ingresar
                </a>

                <a href="{{ url('/recover')}}" class="footer">
                    Recuperar contraseña
                 </a>
            </div>
        </div>
@endsection
