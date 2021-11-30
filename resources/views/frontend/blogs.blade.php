@extends('frontend.layouts.app')

@section('meta')
         <title>Our Latest News | Sadhana Group</title>
         <meta name="title" content="Our Latest News">
         <meta name="keyword" content="news sadhana ekapraya amitra berita blogs">
         <meta name="description" content="Our Latest News for our customers and clients">
@endsection

@section('content')
<section id="page-content">
    <div class="container">
        <!-- post content -->
        <!-- Page title -->
        <div class="page-title">
            <h1>Our Latest News</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="active"><a href="{{ route('news') }}">News</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Page title -->
        <!-- Blog -->
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @foreach ($blogs as $blog)
            {{-- <!-- Post item--> --}}
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="{{ route('news-detail', $blog->slug) }}">
                                    <img style="max-height: 350px; max-width: 525px" alt="Blog Thumbnail" src="{{ Storage::url($blog->thumbnail) }}">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-comments"><a href="{{ route('news-detail', $blog->slug) }}"><i class="fa fa-comments-o"></i>{{ $blog->authors->name }}</a></span>
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $blog->created_at->diffForHumans() }}</span>
                                <h2><a href="{{ route('news-detail', $blog->slug) }}">{{ $blog->title }}</a></h2>
                                <p>{!! Str::limit( $blog->description, '150' ) !!}</p>
                                <a href="{{ route('news-detail', $blog->slug) }}" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
            {{-- <!-- end: Post item--> --}}
            @endforeach
        </div>
        <!-- end: Blog -->
        <!-- Pagination -->
        <ul class="pagination">
            {{ $blogs->links() }}
            {{-- <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li> --}}
        </ul>
        <!-- end: Pagination -->
    </div>
    <!-- end: post content -->
</section>
@endsection
