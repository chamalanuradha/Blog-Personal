@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Post title</label>
                              <input type="text" name='title' class="form-control" placeholder="Enter post title" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Post description</label>
                                <textarea class="form-control" name="description" rows='10' required placeholder="Enter post descripton"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail">
                            </div>
                        <br>
                            <button type="submit" class="btn btn-primary">Post</button>
                          </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
