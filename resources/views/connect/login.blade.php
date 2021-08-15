@extends('connect.master')


{{-- Instalar html colective para mejorar los FRM
    https://laravelcollective.com/docs/6.x/html
    composer require laravelcollective/html
--}}
@section('content')
            <div class="box">
                {!! Form::open(['url' => '/login'])!!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                {!! Form::close()  !!}
            </div>
@endsection
