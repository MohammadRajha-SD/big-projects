@extends('layouts.master')

@section('content')
    <div class="row mt-4">
        @foreach ($posts as $post)
            <x-post.index :post="$post">
                <x-slot name="title">
                    {{ $post->title }}
                </x-slot>
            </x-post.index>
        @endforeach
    </div>
@endsection
