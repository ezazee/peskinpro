@extends('about.master.master-app')
@section('content')
    <section class="vs-blog-wrapper blog-list-layout1 space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($articles as $item)
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover"><a href="{{ route('about.newsDetail', $item->slug) }}"><img
                            src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->tittle }}"></a></div>
                        <div class="blog-content bg-light-theme">
                            <h2 class="blog-title"><a href="{{ route('about.newsDetail', $item->slug) }}">{{ $item->tittle }}</a></h2>
                            <div class="blog-meta">
                                <i class="fal fa-calendar-alt text-theme"></i> {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                            </div>
                            <p>{!! Str::limit(strip_tags($item->content),200) !!}</p>
                            <div class="blog-footer d-flex justify-content-between align-items-center">
                                <a href="{{ route('about.newsDetail', $item->slug) }}" class="link-btn"><i class="fal fa-long-arrow-right mr-2 ml-0"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="pagination-wrapper pagination-layout1 list-style-none pb-30">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $articles->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area sticky-top">
                        <div class="widget">
                            <h3 class="widget_title">Popular Post</h3>
                            <div class="vs-widget-recent-post has-border-theme">
                                @foreach ($popularArticles as $popular)
                                <div class="recent-post media">
                                    <div class="media-img"><img width="150" height="100" src="{{ asset('storage/' . $popular->images) }}" alt="{{ $popular->tittle }}"></div>
                                    <div class="media-body pl-20">
                                        <h4 class="recent-post-title h6 mb-0"><a href="{{ route('about.newsDetail', $popular->slug) }}">{{ $popular->tittle }}</a></h4><span><i
                                                class="fal fa-calendar-alt text-theme"></i> {{ \Carbon\Carbon::parse($popular->created_at)->translatedFormat('d F Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                @foreach ($tags as $t)
                                <a href="{{ route('about.newsTag', $t->slug) }}">{{ $t->nama_tags }}</a>
                                @endforeach
                            </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('about.components.offer')
@endsection
