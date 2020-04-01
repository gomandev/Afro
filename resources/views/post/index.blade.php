@extends('layouts.app')


@section('content')

 <section class="ftco-section trending-section mt-5">
  <div class="container">
  
   <div class="row">
    <div class="col-lg-12"> 
     @if(count($posts) > 0) 
      @foreach($posts as $post)
        <div class="card card-body shadow mb-5">
        <h1 class="heading"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h1>
        <small>{{ $post->created_at }}</small>
        <p class="lead">
        {{ $post->discription }}
        </p>
      </div>
      @endforeach
      {{$posts->links()}}
     @else
      <p class="lead">Sorry No Posts Found</p>
     @endif
    </div>
   
  </div>
 </section>
 

@endsection 