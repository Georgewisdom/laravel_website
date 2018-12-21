@extends('layouts.app')

       @section('content')
              <h1>Contact</h1>
              {!! Form::open(['url' => 'contact/submit']) !!}
                     <div class="form-group">
                            {Form::label('name', 'Name')}
                            {Form::text('name', 'Name')}
                     </div>

                     <div class="form-group">
                            {Form::label('email', 'E-Mail Address')}
                            {Form::text('email', 'example@gmail.com')}
                     </div>
              {!! Form::close() !!}
       @endsection

