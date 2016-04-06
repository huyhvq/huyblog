@extends('blog.app')
@section('title','Blog Cài Win Dạo')
@section('container')
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('assets/blog/img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Cài Win Dạo</h1>
                    <hr class="small">
                    <span class="subheading">Đơn giản là tụi tui chỉ biết cài win!</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{!! route('post',$post->slug) !!}">
                        <h2 class="post-title">
                            {{ $post->post_title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! str_limit(strip_tags($post->post_content), 100) !!}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{ $post->author->user_nicename }}</a>
                        on {!! $post->created_at->format('F j, Y') !!}</p>
                </div>
                <hr>
                @endforeach
                        <!-- Pager -->
                <ul class="pager">
                    @if($posts->currentPage() != 1)
                        <li class="previous">
                            <a href="{{ $posts->previousPageUrl() }}">&larr; Earlier post</a>
                        </li>
                    @endif
                    @if($posts->currentPage() != $posts->lastPage())
                        <li class="next">
                            <a href="{{ $posts->nextPageUrl() }}">Older Posts &rarr;</a>
                        </li>
                    @endif
                </ul>
        </div>
    </div>
</div>

<hr>
@endsection