@extends('layouts.master')

@section('content')
    <main class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Trashed Posts</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        {{-- <a class="btn btn-success mx-1" href="{{ route('posts.create') }}">Create</a> --}}
                        <a class="btn btn-warning mx-1" href="{{ route('posts.index') }}">All</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped border-dark table-bordered">
                    <thead style="background: #f2f2f2">
                      <tr>
                        <th scope="col" >#</th>
                        <th scope="col" style="width:10%;">Image</th>
                        <th scope="col" style="width:20%;">Title</th>
                        <th scope="col" style="width:30%;">Description</th>
                        <th scope="col" style="width:10%;">Category</th>
                        <th scope="col" style="width:10%;">Publish Date</th>
                        <th scope="col" style="width:20%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</td>
                                <td>
                                    {{-- https://picsum.photos/200 --}}
                                    <img src="{{ asset($post->image) }}" alt="" width="80" />
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-sm btn-success mx-2" href="{{ route('posts.restore', $post->id) }}">Restore</a>
                                        <form action="{{ route('posts.force_delete', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </main>
@endsection
