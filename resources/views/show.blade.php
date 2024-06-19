@extends('layouts.master')

@section('content')
    <main class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Show Post</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="{{ route('posts.create') }}">Create</a>
                        <a class="btn btn-warning mx-1" href="">Trashed</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped border-dark table-bordered">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img src="{{ asset($post->image) }}" alt="" width="80" /></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $post->description }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $post->category_id }}</td>
                        </tr>
                        <tr>
                            <td>Publish Date</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </main>
@endsection
