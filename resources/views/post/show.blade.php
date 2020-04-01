@extends('layouts.app')


@section('content')

<section class="ftco-section hero-wrap bg-home js-fullheight">
 <div class="overlay"></div>
    <div class="container">
     <div class="col-md-12 d-flex justify-content-center align-items-center flex-column">
      <h1 class="display-4">{{ $post->title }}</h1>
      <div class="d-flex"><small><em>Posted On {{ $post->created_at }}</em></small></div>
     </div>
    </div>
 </section>

 <section class="ftco-section trending-section">
  <div class="container">
   <a href="/posts" class="btn btn-primary">Go Back</a>


      <div class="blog-right">
         <div class="word-wrap">
            <p class="lead">
               {{ $post->discription }}
            </p>
      </div>

      
      <div class="blog-left d-flex">
         <a href="/posts/{{$post->id}}/edit " class="btn btn-success"> Edit</a>
         {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'methos' => 'POST', 'class' => 'ml-auto']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
         {!!Form::close()!!}
      </div>
   </div>

  

 </section>
 

@endsection 