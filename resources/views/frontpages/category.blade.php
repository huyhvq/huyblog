@inject('carbon', 'Carbon\Carbon')
@extends('frontpages.app')
@section('body-class')
    archive category category-featured category-12 upper
@stop
@section('content')
    <div id="content" class="eightcol first">
        <div class="blogger imgsmall-two">
            @foreach($posts as $post)
                <div class="item normal tranz p-border hentry post">
                <div class="entryhead">
                    <div class="icon-rating tranz">
                    </div>
                    <div class="imgwrap">
                        <p class="meta cat tranz ribbon ">
                            @if(!empty($post->terms['category']))
                                {{--*/ $postCates = $post->terms['category'] /*--}}
                                {{--*/ $last = end($postCates) /*--}}
                                @foreach($postCates as $slug => $cateName)
                                    <a href="{!! route('category', $slug) !!}" rel="category tag">{{ $cateName }}</a>
                                    @if($cateName != $last) • @endif
                                @endforeach
                            @endif
                        </p>
                        <a href="{!! route('post', $post->slug) !!}">
                            <img width="442px" height="320px"
                                 src="{{ $post->image }}"
                                 class="tranz standard grayscale grayscale-fade" alt="{{ $post->post_title }}" style="width: 442px; height: 320px">
                        </a>
                    </div>
                </div>

                <div class="item_inn tranz p-border ghost">
                    <p class="meta date tranz post-date ">
                        February 24, 2016 </p>
                    <h2 class="posttitle">
                        <a class="link link--forsure" href="{!! route('post', $post->slug) !!}">
                            {{ $post->post_title }}
                        </a>
                    </h2>
                    <p class="teaser">
                        {!! str_limit(strip_tags($post->post_content), 100) !!}
                    </p>
                    <p class="meta_more">
                        <a class="p-border"
                           href="{!! route('post', $post->slug) !!}">Read More <i class="fa fa-angle-right"></i>
                        </a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
@stop