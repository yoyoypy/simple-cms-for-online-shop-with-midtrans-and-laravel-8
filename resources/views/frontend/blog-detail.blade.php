@extends('frontend.layouts.app')

@section('meta')
         <title>{{ $item->title }} | Sadhana Group</title>
         <meta name="title" content="{{ $item->title }}">
         <meta name="keyword" content="{{ $item->title }} blog sadhana berita news">
         <meta name="description" content="{!! Str::limit($item->descrpition, '75') !!}">
@endsection

@section('content')
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            {{-- content --}}
            <div class="content col-lg-9">
                {{-- Blog --}}
                <div id="blog" class="single-post">
                    {{-- Post single item--}}
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a>
                                    <img alt="" src="{{ Storage::url($item->thumbnail) }}">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2>{{ $item->title }}</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $item->created_at->diffforhumans() }}</span>
                                    {{-- <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span> --}}
                                    <span class="post-meta-category"><a><i class="fa fa-pen"></i>{{ $item->authors->name }}</a></span>
                                    <div class="post-meta-share">
                                        {{-- <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a> --}}
                                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                                {!! $item->description !!}
                            </div>
                            <div class="post-tags">
                                {{ $item->tags }}
                            </div>
                            <div class="post-navigation">
                                @if ($previous != null)
                                    <a href="{{ route('news-detail', $previous->slug) }}" class="post-prev">
                                        <div class="post-prev-title"><span>Previous Post</span>{{ $previous->title }}</div>
                                    </a>
                                @endif
                                    <a href="{{ route('news') }}" class="post-all">
                                        <i class="icon-grid"> </i>
                                    </a>
                                @if ($next != null)
                                    <a href="{{ route('news-detail', $next->slug) }}" class="post-next">
                                        <div class="post-next-title"><span>Next Post</span>{{ $next->title }}</div>
                                    </a>
                                @endif
                            </div>

                        </div>
                    </div>
                    {{-- end: Post single item--}}
                </div>
            </div>
            {{-- end: content --}}
            {{-- Sidebar--}}
            <div class="sidebar sticky-sidebar col-lg-3">
                {{--widget newsletter--}}
                <div class="widget  widget-newsletter">
                    <form id="widget-search-form-sidebar" action="search-results-page.html" method="get">
                <div class="input-group">
                  <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            </form></div>
                {{--end: widget newsletter--}}
                {{--Tabs with Posts--}}
                <div class="widget">
                    <div class="tabs">
                        <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent News</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs-posts-content">
                            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                @foreach ($recents as $recent)
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img alt="news thumbnail" src="{{ Storage::url($recent->thumbnail) }}">
                                            <div class="post-thumbnail-content">
                                                <a href="{{ route('news-detail', $recent->slug) }}">{{ $recent->title }}</a>
                                                <span class="post-date"><i class="icon-clock"></i> {{ $recent->created_at->diffforhumans() }}</span>
                                                {{-- <span class="post-category"><i class="fa fa-tag"></i> Technology</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{--End: Tabs with Posts--}}
                {{-- Twitter widget --}}
                {{-- <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                    <h4 class="widget-title">Recent Tweets</h4>
                </div> --}}
                {{-- end: Twitter widget--}}
            </div>
            {{-- end: Sidebar--}}
        </div>
    </div>
</section>
@endsection
