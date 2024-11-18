@extends('frontend.master.master-app')

@section('content')
<div class="blog list md:py-20 py-10">
    <div class="container">
        <div class="flex justify-between max-md:flex-col gap-y-12">
            <div class="left xl:w-3/4 md:w-2/3 pr-2">
                <div class="list-blog flex flex-col md:gap-10 gap-8">
                    <!-- Blog Items -->
                    @foreach ($articles as $item)
                    <a href="{{ route('articlebyTittle', $item->slug) }}">
                    <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6">
                        <div class="blog-item style-list h-full cursor-pointer">
                            <div
                                class="blog-main h-full flex items-center max-md:flex-col md:items-center gap-8 gap-y-5">
                                <div class="blog-thumb md:w-1/2 w-full rounded-[20px] overflow-hidden flex-shrink-0">
                                    <img src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->tittle }}"
                                        class="w-full duration-500 flex-shrink-0">
                                </div>
                                <div class="blog-infor">
                                    @foreach ($item->tag as $t)   
                                    <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">
                                        {{ $t->nama_tags }}</div>
                                    @endforeach
                                    <div class="heading6 blog-title mt-3 duration-300">{{ $item->tittle }}</div>
                                    <div class="flex items-center gap-2 mt-2">
                                        <div class="blog-date caption1 text-secondary">{{ $item->created_at->format('M d, Y') }}
                                        </div>
                                    </div>
                                    <div class="body1 text-secondary mt-4">{!! Str::limit(strip_tags($item->content),
                                        200) !!}</div>
                                    <div class="text-button underline mt-4">Selengkapnya</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
                <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $articles->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="right xl:w-1/4 md:w-1/3 xl:pl-[52px] md:pl-8">
                <div class="recent md:mt-10 mt-6 pb-8 border-b border-line">
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
</div>
@endsection
