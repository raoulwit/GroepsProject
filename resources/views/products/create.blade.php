@extends('layouts.app')
@section('content')
<div class="container">
        {!! Form::open(['action' => ['ProductsController@store'], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name of the product')}}

            {{ Form::text('name', '' , ['Class' => 'form-control', 'placeholder' => 'Product name']) }}

        </div>

        <div class="form-group">
            {{Form::label('description', 'Description of the product')}}

            {{ Form::text('description', '' , ['Class' => 'form-control', 'placeholder' => 'Description']) }}

        </div>

        <div class="form-group float-left">
            {{Form::label('price', 'Price of the product')}}

            {{ Form::number('price', '' , ['Class' => 'form-control', 'placeholder' => 'Price']) }}

        </div>

        <div class="form-group float-right">
            {{Form::label('stock', 'Amount in stock of the product')}}

            {{ Form::number('stock', '' , ['Class' => 'form-control', 'placeholder' => 'Stock']) }}

        </div>
        <br>
        <br>
        <br>
        <br>
        {{-- TODO: GET catagoties from database... --}}
        <div class="form-group">
            {{Form::label('category', 'Category')}}

            {{ Form::select('category', ['0' => 'Cat 1', '1' => 'Cat 2'] , ['Class' => 'form-control']) }}

        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}

        </div>
        


        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
</div>
@endsection