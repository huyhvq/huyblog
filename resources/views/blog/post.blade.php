@extends('blog.app')
@section('title',sprintf('%s - Blog Cài Win Dạo',$post->post_title))
@section('container')
<header class="intro-header" style="background-image: url('@if($post->image) {{ $post->image }} @else{{ asset('assets/blog/img/post-bg.jpg') }} @endif')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ $post->post_title }}</h1>
                    <span class="meta">Posted by <a href="#">{{ $post->author->user_nicename }}</a> on {!! $post->created_at->format('F j, Y') !!}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</article>

<hr>
@endsection