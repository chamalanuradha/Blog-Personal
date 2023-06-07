@extends('layouts.frontend')
@section('content')

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">Web development</h1>
          <p class="lead my-3">Web development is a fast-paced and dynamic field that involves creating websites and web applications. It combines design, coding, and problem-solving skills to build user-friendly and visually appealing online experiences. As technology continues to advance, web developers play a vital role in shaping the digital landscape by implementing the latest trends and technologies. </p>
        </div>
      </div>
      <div class="row mb-2">

        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow">
              <div class="card-body d-flex flex-column align-items-start">
                  <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" class="img-thumbnail" alt="Thumbnail">
                <h3 class="mb-0 mt-2">
                  <a class="text-dark" href="#">{{ $post->title }}</a>
                </h3>
                <div class="mb-1 text-muted">{{ $post->user->name }} {{ date('Y-m-d', strtotime($post->created_at)) }}</div>
                <p class="card-text mb-auto">{{ $post->description }}</p>
                <a href="{{ route('posts.show', $post->id) }}">Read more...</a>
              </div>
            </div>
          </div>
        @endforeach


    </div>

@endsection
