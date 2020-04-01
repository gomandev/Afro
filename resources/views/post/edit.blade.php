@extends('layouts.app')


@section('content')

<section class="ftco-section hero-wrap bg-home js-fullheight">
 <div class="overlay"></div>
    <div class="container">
     <div class="col-md-12 d-flex justify-content-center align-items-center flex-column">
      <h1 class="display-4">You Are Editing {{ $post->title }}</h1>
     </div>
    </div>
 </section>

 
 {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group mt-5">
     {{Form::label('title', 'Title')}}
     {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
     {{Form::label('discription', 'Description')}}
     {{Form::textarea('discription', $post->discription, ['class' => 'form-control', 'placeholder' => 'Description'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
 {!! Form::close() !!}
@endsection  