@extends('layouts.app')

@section('content')
 <h1>Contact</h1> 
 
 {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => "Enter Name"]) }}
        <span style="color: red">@error('name'){{ $message }}@enderror</span>
    </div>

     <div class="form-group">
        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => "Enter Email"]) }}
        <span style="color: red">@error('email'){{ $message }}@enderror</span>
    </div>

     <div class="form-group">
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', '', ['class' => 'form-control', 'placeholder' => "Enter Subject"]) }}
    </div>

     <div class="form-group">
        {{ Form::label('message', 'Message') }}
        {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => "Enter Message"]) }}
    </div>

    <div>
         {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
{!! Form::close() !!}

@endsection
