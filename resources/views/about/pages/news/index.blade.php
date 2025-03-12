@extends('about.master.master-app')
@section('content')
    <section class="vs-blog-wrapper blog-list-layout1 space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover"><a href="#"><img
                                    src="{{ asset('asset-about/img/blog/blog-img-1-4.jpg') }}" alt="Blog Image"></a></div>
                        <div class="blog-content bg-light-theme">
                            <div class="blog-category"><a href="#">Business</a></div>
                            <h2 class="blog-title"><a href="#">Lorem ipsum dolor sit amet, consecte
                                    cing elit, sed do eiusmod tempor.</a></h2>
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-calendar-alt text-theme"></i>22 June, 2023</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                            <div class="blog-footer d-flex justify-content-between align-items-center">
                                <a href="#" class="link-btn"><i class="fal fa-long-arrow-right mr-2 ml-0"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper pagination-layout1 list-style-none pb-30">
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area sticky-top">
                        <div class="widget">
                            <h3 class="widget_title">Popular Post</h3>
                            <div class="vs-widget-recent-post has-border-theme">
                                <div class="recent-post media">
                                    <div class="media-img"><img width="150" height="100" src="{{ asset('asset-about/img/blog/blog-img-1-4.jpg') }}"
                                            alt="Recent Post Image"></div>
                                    <div class="media-body pl-20">
                                        <h4 class="recent-post-title h6 mb-0"><a href="#">Managing Partner
                                                along with Senior Counsels.</a></h4><span><i
                                                class="fal fa-calendar-alt text-theme"></i> 05 June, 2023.</span>
                                    </div>
                                </div>
                                <div class="recent-post media">
                                    <div class="media-img"><img width="150" height="100" src="{{ asset('asset-about/img/blog/blog-img-2-1.jpg') }}"
                                            alt="Recent Post Image"></div>
                                    <div class="media-body pl-20">
                                        <h4 class="recent-post-title h6 mb-0"><a href="#">Managing Partner
                                                along with Senior Counsels.</a></h4><span><i
                                                class="fal fa-calendar-alt text-theme"></i> 05 June, 2023.</span>
                                    </div>
                                </div>
                                <div class="recent-post media">
                                    <div class="media-img"><img width="150" height="100" src="{{ asset('asset-about/img/blog/blog-img-1-1.jpg') }}"
                                            alt="Recent Post Image"></div>
                                    <div class="media-body pl-20">
                                        <h4 class="recent-post-title h6 mb-0"><a href="#">Managing Partner
                                                along with Senior Counsels.</a></h4><span><i
                                                class="fal fa-calendar-alt text-theme"></i> 05 June, 2023.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud"><a href="#">Popular</a> <a href="#">desgin</a> <a
                                    href="#">ux</a> <a href="#">usability</a> <a href="#">develop</a>
                                <a href="#">icon</a> <a href="#">business</a> <a href="#">consult</a>
                                <a href="#">keyboard</a> <a href="#">mouse</a>
                                <div href="#">tech</a>
                                </div>
                            </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('about.components.offer')
@endsection
