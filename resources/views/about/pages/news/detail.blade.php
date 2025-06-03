@extends('about.master.master-app')
@section('content')
    <section class="blog-list-layout1 blog-details-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="vs-blog">
                        <div class="blog-content">
                            <div class="mb-30 mt-30">
                                <img src="{{ asset('storage/' . $articles->images) }}" alt="Blog Image" />
                            </div>
                            <h2 class="blog-title">
                                {{ $articles->tittle }}
                            </h2>
                            <div class="blog-meta">
                                {{ $articles->created_at->format('M d, Y') }}
                            </div>
                            <p>{!! nl2br(str_replace(['[caption]', '[/caption]'], '', $articles->content)) !!}</p>
                            <div class="share-links clearfix">
                                <div class="row align-items-xl-center">
                                    <div class="col-md-6">
                                        <h4 class="h5">Tags</h4>
                                        <div class="tagcloud">
                                            @foreach ($articles->tag as $t)
                                            <a href="{{ route('about.newsTag', $t->slug) }}">{{ $t->nama_tags }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-20 mt-md-0 text-left text-md-right">
                                        <h4 class="h5">Share</h4>
                                        <ul class="social-links">
                                            <li>
                                                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if ($relatedArticles->isNotEmpty())
                            <div class="related-post-layout1 pb-20 pt-20">
                                <h4>Related Post</h4>
                                <div class="row">
                                    @foreach ($relatedArticles as $item)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="vs-related-post bg-white mb-30">
                                            <div class="related-post-img">
                                                <img src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->tittle }}" class="w-100" />
                                            </div>
                                            <div class="related-post-content">
                                                <div class="post-meta mb-1">
                                                    <a href="{{ route('about.newsDetail', $item->slug) }}" class="text-theme"><i
                                                            class="fal fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</a>
                                                </div>
                                                <h4 class="post-title mb-2">
                                                    <a href="{{ route('about.newsDetail', $item->slug) }}">{{ $item->tittle }}"</a>
                                                </h4>
                                                <p class="post-text mb-0">{!! Str::limit(strip_tags($item->content),200) !!}
                                                </p>
                                                <a href="{{ route('about.newsDetail', $item->slug) }}" class="link-btn">Read More<i
                                                        class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
