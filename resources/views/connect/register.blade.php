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
                {!! Form::open(['url' => '/user/register'])!!}
                <label for="name">Nombre:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-user"></i></div>
                   </div>
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <label for="lastname">Apellido:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-user"></i></div>
                   </div>
                    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                </div>
                <label for="phone">Telefono:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-user"></i></div>
                   </div>
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
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
                <label for="repeat-password">Confirme la Contraseña:</label>
                <div class="input-group mtop16 mbottom16">
                   <div class="input-gropup-prepend">
                       <div class="input-group-text"><i class="fas fa-key"></i></div>
                   </div>
                    {!! Form::password('repeat-password', ['class' => 'form-control']) !!}
                </div>
                {!!   Form::submit('Crear cuenta', ['class' => 'btn btn-primary mbottom16' ])  !!}
                {!! Form::close()  !!}


                    @if(Session::has('message'))
                            <div class="container box_register">
                                <div class="alert alert-{{ Session::get('typealert')}}" style="display:none;">
                                    {{ Session::get('message')}}
                                    @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <script>
                                        $('.alert').slideDown();
                                        setTimeout(function(){ $('.alert').slideUp(); }, 10000);
                                    </script>
                                </div>
                            </div>
                    @endif

                <a href="{{ url('/login')}}" class="footer">
                   Ya tengo una cuenta, Ingresar
                </a>

                <a href="{{ url('/recover')}}" class="footer">
                    Recuperar contraseña
                </a>
            </div>
        </div>
@endsection
