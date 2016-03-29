@extends('frontpages.app')
@section('body-class')
    page page-id-4832 page-child parent-pageid-892 page-template page-template-1big page-template-1big-php upper
@stop
@section('content')
    <div id="content" class="eightcol first">
        <div class="blogger imglarge">
            <!-- end post -->
            @foreach($posts as $post)
                <div class="item normal tranz ghost p-border post-4797 post type-post status-publish format-standard has-post-thumbnail hentry category-staff-picks">


                    <div class="entryhead">

                        <h2 class="posttitle">
                            <a class="link link--forsure" href="{{ route('post',$post->slug) }}">{{ $post->post_title }}</a>
                        </h2>


                        <div class="icon-rating tranz"></div>

                        <div class="imgwrap">
                            <a href="../../2016/02/24/runs-towards-the-maybury-hill-embeds-test/index.html">
                                <img width="895" height="530"
                                     src="@if(is_null($post->image)) ../../../../wp-content/uploads/2015/09/woman-portrait-1148942_1280-895x530.jpg @else {{ $post->image }} @endif"
                                     class="standard grayscale grayscale-fade wp-post-image"
                                     alt="taxi-238478_1280"/>
                            </a>
                        </div>

                    </div><!-- end .entryhead -->


                    <div class="item_inn tranz">

                        @if(!empty($post->terms['category']))
                            @foreach($post->terms['category'] as $key => $categoryName)
                                <p class="meta cat tranz ribbon ">
                                    <a href="../../category/news/staff-picks/index.html"
                                       rel="category tag">{{ $categoryName }}</a>
                                </p>
                            @endforeach
                        @endif

                        <div class="entry clearfix">

                            {!! str_limit($post->post_content,350) !!}
                            <a href="../../2016/02/24/runs-towards-the-maybury-hill-embeds-test/index.html#more-4797"
                               class="more-link">Continue Reading</a></p>

                        </div>

                        <div class="meta-general">
                            <p class="meta author tranz ">
                                <img alt=''
                                     src='http://1.gravatar.com/avatar/aacc823ac139f84d0825de27e8a9258a?s=37&d=mm&r=g'
                                     srcset='http://1.gravatar.com/avatar/aacc823ac139f84d0825de27e8a9258a?s=74&amp;d=mm&amp;r=g 2x'
                                     class='avatar avatar-37 photo' height='37' width='37'/><span>Written by: <a
                                            href="../../author/dankos/index.html" title="Posts by Dannci"
                                            rel="author">{{ $post->author->user_nicename }}</a></span></p>


                            <p class="meta date tranz post-date ">
                                February 24, 2016 </p>

                            <p class="meta counter ">
                                <span class="views">Views: 413</span>
                            </p>
                        </div>


                        <p class="meta_more">
                            <a class="p-border"
                               href="../../2016/02/24/runs-towards-the-maybury-hill-embeds-test/index.html">Read
                                More <i class="fa fa-angle-right"></i></a>
                        </p>

                        <div class="clearfix"></div>


                    </div><!-- end .item_inn -->

                </div>
            @endforeach

        </div><!-- end latest posts section-->

        <div class="clearfix"></div>

        <script type="text/javascript">(function () {
                if (!window.mc4wp) {
                    window.mc4wp = {
                        listeners: [],
                        forms: {
                            on: function (event, callback) {
                                window.mc4wp.listeners.push({
                                    event: event,
                                    callback: callback
                                });
                            }
                        }
                    }
                }
            })();
        </script><!-- MailChimp for WordPress v3.1.5 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-7" method="post" data-id="7" data-name="">
            <div class="mc4wp-form-fields"><h2>Sign up to our Newsletter</h2>
                <p>
                    <label>
                        <small>Don't worry! We don't spam.</small>
                    </label>
                    <input type="email" name="EMAIL" placeholder="Your email address" required/>
                </p>

                <p>
                    <input type="submit" value="Sign up"/>
                </p>
                <div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                                                   autocomplete="off"/></div>
                <input type="hidden" name="_mc4wp_timestamp" value="1458923215"/><input type="hidden"
                                                                                        name="_mc4wp_form_id"
                                                                                        value="7"/><input
                        type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"/></div>
            <div class="mc4wp-response"></div>
        </form><!-- / MailChimp for WordPress Plugin -->

        <div class="pagination">
            <nav class="loop-pagination">
                @include('frontpages.pagination.simple-index-pages', ['paginator' => $posts])
            </nav>
        </div>


    </div>
@stop