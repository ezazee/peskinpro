@extends('about.master.master-app')
@section('content')
    <section class="vs-blog-wrapper blog-list-layout1 space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover"><a href="#"><img
                                    src="https://asset.kompas.com/crops/mYjxtrLJrYGSUXELuF5Qo7N7Xuw=/0x0:1000x667/1200x800/data/photo/2022/05/28/62922b221dd75.jpg"
                                    alt="sdasdsad"></a></div>
                        <div class="blog-content bg-light-theme">
                            <h2 class="blog-title"><a href="#">Title</a></h2>
                            <div class="blog-meta">
                                <i class="fal fa-calendar-alt text-theme"></i> Tanggal
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum voluptate earum provident at enim fugiat, odit non exercitationem cum eveniet a autem. Dignissimos repellendus reprehenderit temporibus fuga dolore quia rem?</p>
                            <div class="blog-footer d-flex justify-content-between align-items-center">
                                <a href="#" class="link-btn"><i class="fal fa-long-arrow-right mr-2 ml-0"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-wrapper pagination-layout1 list-style-none pb-30">
                        <ul class="pagination justify-content-end mb-0">
                            Pagination
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area sticky-top">
                        <div class="widget">
                            <h3 class="widget_title">Popular Post</h3>
                            <div class="vs-widget-recent-post has-border-theme">
                                <div class="recent-post media">
                                    <div class="media-img"><img width="150" height="100"
                                            src="https://asset.kompas.com/crops/mYjxtrLJrYGSUXELuF5Qo7N7Xuw=/0x0:1000x667/1200x800/data/photo/2022/05/28/62922b221dd75.jpg">
                                    </div>
                                    <div class="media-body pl-20">
                                        <h4 class="recent-post-title h6 mb-0"><a href="#">sdsdsd</a></h4><span><i
                                                class="fal fa-calendar-alt text-theme"></i> asdasd</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('about.components.offer')
@endsection
