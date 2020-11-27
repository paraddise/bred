@extends('main')
@section('title', 'Posts')
@section('head')
    <link rel="stylesheet" href="/css/posts.css">
@endsection
@section('content')
    <div class="posts">
        @foreach($posts as $post)
            <div class="post-item">
                <h3 class="post-title">{{$post->title}}</h3>
                <p class="post-body">{{$post->body}}</p>
                <div class="post-footer">
                    <p class="post-author">{{$post->author->name}}</p>
                    <p class="post-sentence_count">{{$post->sentence_count}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
