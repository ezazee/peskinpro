@extends('frontend.master.master-app')

@section('content')

<div class="blog blog-detail detail2 md:mt-[74px] mt-[56px] border-t border-line">
    <div class="container lg:pt-20 md:pt-14 pt-10">
        <div class="blog-content flex justify-between max-lg:flex-col gap-y-10">
            <div class="main xl:w-3/4 lg:w-2/3 lg:pr-[15px]">
                <div class="heading3 blog-title mt-3">{{ $articles->tittle }}</div>
                    <div class="flex items-center gap-2 mt-2">
                        <div class="blog-date caption1 text-secondary">{{ $articles->created_at->format('M d, Y') }}
                        </div>
                    </div>
                <div class="bg-img md:py-10 py-6">
                    <img src="{{ asset('storage/' . $articles->images) }}" alt="img" class="blog-img w-full object-cover rounded-3xl" />
                </div>
                <div class="content md:mt-8 mt-5">
                    {!! nl2br(str_replace(['[caption]', '[/caption]'], '', $articles->content)) !!}
                </div>
                <div class="action flex items-center justify-between flex-wrap gap-5 md:mt-8 mt-5">
                    <div class="left flex items-center gap-3 flex-wrap">
                        <p>Tag:</p>
                        <div class="list flex items-center gap-3 flex-wrap">
                            @foreach ($articles->tag as $t)
                            <div class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase duration-300 hover:bg-black hover:text-white"> {{ $t->nama_tags }} </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="right flex items-center gap-3 flex-wrap">
                        <p>Share:</p>
                        <div class="list flex items-center gap-3 flex-wrap">
                            <a href="https://www.facebook.com/" target="_blank" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <div class="icon-facebook duration-100"></div>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <div class="icon-instagram duration-100"></div>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <div class="icon-twitter duration-100"></div>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <div class="icon-youtube duration-100"></div>
                            </a>
                            <a href="https://www.pinterest.com/" target="_blank" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <div class="icon-pinterest duration-100"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right xl:w-1/4 lg:w-1/3 lg:pl-[45px]">
                <div class="recent">
                    <div class="heading6">Artikel Terpopuler</div>
                    <div class="list-recent pt-1">
                        @foreach ($popularArticles as $popular)
                        <a href="{{ route('articlebyTittle', $popular->slug) }}">
                        <div class="blog-item flex gap-4 mt-5 cursor-pointer" data-item="13">
                            <img src="{{ asset('storage/' . $popular->images) }}"
                                alt="img" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" />
                            <div>
                                @foreach ($popular->tag as $t)
                                    <div class="blog-tag whitespace-nowrap bg-primary text-white py-0.5 px-2 rounded-full text-button-uppercase text-xs inline-block">
                                    {{ $t->nama_tags }}</div>
                                @endforeach
                                <div class="text-title mt-1">{{ $popular->tittle }}</div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="filter-tags md:mt-10 mt-6">
                    <div class="heading6">Tags Cloud</div>
                    <div class="list-tags menu-tab flex items-center flex-wrap gap-3 mt-4">
                        @foreach ($tags as $t)
                        <div class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                            {{ $t->nama_tags }}
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="md:pb-20 pb-10">
        <div class="news-block md:pt-20 pt-10">
            <div class="container">
                <div class="heading3 text-center">Topik Terkait</div>
                <div class="list grid lg:grid-cols-3 sm:grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6">
                    @foreach ($relatedArticles as $item)
                    <a href="{{ route('articlebyTittle', $item->slug) }}">
                    <div class="blog-item style-one h-full cursor-pointer" data-item="16">
                        <div class="blog-main h-full block">
                            <div class="blog-thumb rounded-[20px] overflow-hidden">
                                <img src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->tittle }}" class="w-full duration-500" />
                            </div>
                            <div class="blog-infor mt-7">
                                @foreach ($item->tag as $t)   
                                <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">
                                    {{ $t->nama_tags }}</div>
                                @endforeach
                                <div class="heading6 blog-title mt-3 duration-300">{{ $item->tittle }}</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="blog-date caption1 text-secondary">{{ $item->created_at->format('M d, Y') }}4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
