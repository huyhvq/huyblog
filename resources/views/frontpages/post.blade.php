@inject('carbon', 'Carbon\Carbon')
@extends('frontpages.app')
@section('body-class')
    single single-post postid-1375 single-format-standard upper
@stop
@section('content')
    <div id="content" class="eightcol first blogger">


        <div class="item normal tranz ghost p-border post-1375 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-activity tag-post-style tag-typography">

            <h1 class="entry-title" itemprop="headline"><span itemprop="name">{{ $post->post_title }}</span></h1>

            <div class="entryhead" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                @if($post->image)
                    <img width="895" height="530" src="{{ $post->image }}"
                         class="standard grayscale grayscale-fade wp-post-image" alt="{{ $post->post_title }}">
                @endif
            </div>

            <div class="clearfix"></div>

            <div class="item_inn tranz p-border">

                <div class="meta-single p-border ">
                    @if(!empty($post->terms['category']))
                        @foreach($post->terms['category'] as $key => $categoryName)
                            <p class="meta cat tranz ribbon ">
                                <a href="../../../../category/lifestyle/index.html"
                                   rel="category tag">{{ $categoryName }}</a>
                            </p>
                        @endforeach
                    @endif
                    <p class="meta author tranz ">
                    <span>Written by:
                        <a href="../../../../author/dankos/index.html" title="Posts by Dannci"
                           rel="author">{{ $post->author->user_nicename }}</a>
                    </span>
                    </p>
                    <p class="meta date tranz post-date ">{{ $carbon->parse($post->post_date)->format('F j, Y') }}</p>
                    {{--<p class="meta counter ">--}}
                    {{--<span class="views">Views: 587</span>--}}
                    {{--</p>--}}

                </div>

                <div class="clearfix"></div>

                <div class="entry" itemprop="text">
                    {!! $post->content !!}
                </div>
                <!-- end .entry -->


                {{--<script type="text/javascript">(function () {--}}
                {{--if (!window.mc4wp) {--}}
                {{--window.mc4wp = {--}}
                {{--listeners: [],--}}
                {{--forms: {--}}
                {{--on: function (event, callback) {--}}
                {{--window.mc4wp.listeners.push({--}}
                {{--event: event,--}}
                {{--callback: callback--}}
                {{--});--}}
                {{--}--}}
                {{--}--}}
                {{--}--}}
                {{--}--}}
                {{--})();--}}
                {{--</script>--}}
                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-7" method="post" data-id="7" data-name="">
                    <div class="mc4wp-form-fields"><h2>Sign up to our Newsletter</h2>
                        <p>
                            <label>
                                <small>Don't worry! We don't spam.</small>
                            </label>
                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                        </p>
                        <p>
                            <input type="submit" value="Sign up">
                        </p>
                        <div style="display: none;">
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                        </div>
                    </div>
                    <div class="mc4wp-response"></div>
                </form>
                <div class="postinfo p-border">
                    <p class="meta taggs">
                        @if(!empty($post->terms['tag']))
                            @foreach($post->terms['tag'] as $slug => $tagName)
                                <a href="../../../../tag/activity/index.html" rel="tag">{{ $tagName }}</a>
                            @endforeach
                        @endif
                    </p>
                    <p class="modified small cntr meta" itemprop="dateModified">Last
                        modified: {!! $carbon->parse($post->post_modified)->format('F j, Y') !!}</p>
                    {{--<div id="post-nav">--}}
                    {{--<div class="post-previous tranz">--}}
                    {{--<a class="post-nav-image"--}}
                    {{--href="../../../01/03/though-thousands-of-miles-from-oregon-typography/index.html">--}}
                    {{--<img width="150" height="150"--}}
                    {{--src="../../../../wp-content/uploads/2016/02/grapes-690230_1280-150x150.jpg"--}}
                    {{--class="grayscale grayscale-fade wp-post-image" alt="grapes-690230_1280"--}}
                    {{--srcset="http://capethemes.com/demo/litera/wp-content/uploads/2016/02/grapes-690230_1280-150x150.jpg 150w, http://capethemes.com/demo/litera/wp-content/uploads/2016/02/grapes-690230_1280-50x50.jpg 50w"--}}
                    {{--sizes="(max-width: 150px) 100vw, 150px"><span class="arrow"><i--}}
                    {{--class="fa fa-chevron-left"></i>--}}
                    {{--</span></a>--}}
                    {{--<a class="post-nav-text ghost boxshadow"--}}
                    {{--href="../../../01/03/though-thousands-of-miles-from-oregon-typography/index.html">Previous--}}
                    {{--Story:<br> <strong>Though thousands of miles from Oregon (Typography)</strong></a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="clearfix"></div>
                    <h3 class="additional">You might also like</h3>
                    <ul class="related">
                        @foreach($similarPost as $post)
                            <li class="item">
                                <a href="{!! route('post', $post->slug) !!}"
                                   title="{{ $post->post_title }}">
                                    <img width="50" height="50"
                                         src="{{ $post->image }}"
                                         class="grayscale grayscale-fade wp-post-image" alt="{{ $post->post_title }}">
                                </a>
                                <h4>
                                    <a href="{!! route('post', $post->slug) !!}" title="{{ $post->post_title }}">
                                        {{ $post->post_title }}
                                    </a>
                                </h4>
                            </li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>

                <div id="comments">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply
                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small>
                        </h3>
                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                            Required fields are marked <span class="required">*</span></p></p>
                    </div><!-- #respond -->
                </div><!-- #comments -->
            </div><!-- end .item_inn -->
        </div>
    </div>
@stop