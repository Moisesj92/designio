@extends('layout')

@section('meta-title')

{{ $post->title }}

@endsection

@section('meta-description')

{{ $post->excerpt }}

@endsection

@section('content')

<article class="post container">

    @if($post->photos->count() === 1)

        <figure><img src="{{ $post->photos->first()->path }}" alt="" class="img-responsive"></figure>

    @elseif($post->photos->count() > 1)

        @include('posts.carousel')

    @endif

    <div class="content-post">
        <header class="container-flex space-between">
            <div class="date">
                <span class="c-gris"> {{ $post->published_at->format('M d') }}</span>
            </div>
            <div class="post-category">
                <span class="category"> {{ $post->category->name }} </span>
            </div>
        </header>
        <h1> {{ $post->title }} </h1>
        <div class="divider"></div>
        <div class="image-w-text">

            {!! $post->body !!}

        </div>

        <footer class="container-flex space-between">
            @include('partials.social-links', ['titulo' => $post->title])

            <div class="tags container-flex">

                @foreach ($post->tags as $tag)

                <span class="tag c-gris">#{{ $tag->name }}</span>

                @endforeach

            </div>
        </footer>
        <div class="comments">
            <div class="divider"></div>
            <div id="disqus_thread"></div>
            @include('partials.disqus-script')
        </div><!-- .comments -->
    </div>
</article>

@endsection

@push('styles')

    <link rel="stylesheet" href="/css/twitter-bootstrap.css">

@endpush

@push('scripts')

<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="/js/twitter-bootstrap.js"></script>

@endpush