@extends('frontend.master.master-app')

@section('content')
    <div class="blog list md:py-20 py-10">
        <div class="container">
            <div class="flex justify-between max-md:flex-col gap-y-12">
                <div class="left xl:w-3/4 md:w-2/3 pr-2">
                    <div class="list-blog flex flex-col md:gap-10 gap-8">
                        <!-- Blog Items -->
                        <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6">
                            <div class="blog-item style-list h-full cursor-pointer">
                                <div
                                    class="blog-main h-full flex items-center max-md:flex-col md:items-center gap-8 gap-y-5">
                                    <div class="blog-thumb md:w-1/2 w-full rounded-[20px] overflow-hidden flex-shrink-0">
                                        <img src="https://cdn1.productnation.co/stg/sites/5/62b91dae2c04e.jpeg"
                                            alt="blog-img" class="w-full duration-500 flex-shrink-0">
                                    </div>
                                    <div class="blog-infor">
                                        <div
                                            class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">
                                            Jean, glasses</div>
                                        <div class="heading6 blog-title mt-3 duration-300">Fashion Trends to Watch Out for
                                            in Summer 2023</div>
                                        <div class="flex items-center gap-2 mt-2">
                                            <div class="blog-date caption1 text-secondary">Dec 20, 2023</div>
                                        </div>
                                        <div class="body1 text-secondary mt-4">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Temporibus sapiente dicta sint voluptatum voluptate enim,
                                            aliquid nisi ullam possimus voluptas, culpa repellat porro corrupti impedit
                                            blanditiis non dolore, provident iste?</div>
                                        <div class="text-button underline mt-4">Selengkapnya</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6">
                            <div class="blog-item style-list h-full cursor-pointer">
                                <div
                                    class="blog-main h-full flex items-center max-md:flex-col md:items-center gap-8 gap-y-5">
                                    <div class="blog-thumb md:w-1/2 w-full rounded-[20px] overflow-hidden flex-shrink-0">
                                        <img src="https://cdn1.productnation.co/stg/sites/5/62b91dae2c04e.jpeg"
                                            alt="blog-img" class="w-full duration-500 flex-shrink-0">
                                    </div>
                                    <div class="blog-infor">
                                        <div
                                            class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">
                                            Jean, glasses</div>
                                        <div class="heading6 blog-title mt-3 duration-300">Fashion Trends to Watch Out for
                                            in Summer 2023</div>
                                        <div class="flex items-center gap-2 mt-2">
                                            <div class="blog-date caption1 text-secondary">Dec 20, 2023</div>
                                        </div>
                                        <div class="body1 text-secondary mt-4">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Temporibus sapiente dicta sint voluptatum voluptate enim,
                                            aliquid nisi ullam possimus voluptas, culpa repellat porro corrupti impedit
                                            blanditiis non dolore, provident iste?</div>
                                        <div class="text-button underline mt-4">Selengkapnya</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6">
                            <div class="blog-item style-list h-full cursor-pointer">
                                <div
                                    class="blog-main h-full flex items-center max-md:flex-col md:items-center gap-8 gap-y-5">
                                    <div class="blog-thumb md:w-1/2 w-full rounded-[20px] overflow-hidden flex-shrink-0">
                                        <img src="https://cdn1.productnation.co/stg/sites/5/62b91dae2c04e.jpeg"
                                            alt="blog-img" class="w-full duration-500 flex-shrink-0">
                                    </div>
                                    <div class="blog-infor">
                                        <div
                                            class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">
                                            Jean, glasses</div>
                                        <div class="heading6 blog-title mt-3 duration-300">Fashion Trends to Watch Out for
                                            in Summer 2023</div>
                                        <div class="flex items-center gap-2 mt-2">
                                            <div class="blog-date caption1 text-secondary">Dec 20, 2023</div>
                                        </div>
                                        <div class="body1 text-secondary mt-4">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Temporibus sapiente dicta sint voluptatum voluptate enim,
                                            aliquid nisi ullam possimus voluptas, culpa repellat porro corrupti impedit
                                            blanditiis non dolore, provident iste?</div>
                                        <div class="text-button underline mt-4">Selengkapnya</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6"><button
                            class="active">1</button><button>2</button><button>3</button><button>4</button><button>5</button><button>6</button>
                    </div>
                </div>

                <div class="right xl:w-1/4 md:w-1/3 xl:pl-[52px] md:pl-8">
                    <div class="recent md:mt-10 mt-6 pb-8 border-b border-line">
                        <div class="heading6">Recent Posts</div>
                        <div class="list-recent pt-1">
                            <div class="blog-item flex gap-4 mt-5 cursor-pointer" data-item="13">
                                <img src="https://www.marketeers.com/_next/image/?url=https%3A%2F%2Fimagedelivery.net%2F2MtOYVTKaiU0CCt-BLmtWw%2F70f9de2a-6a2d-4fca-d540-3d509161d100%2Fw%3D2508&w=1920&q=75"
                                    alt="img" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" />
                                <div>
                                    <div
                                        class="blog-tag whitespace-nowrap bg-primary text-white py-0.5 px-2 rounded-full text-button-uppercase text-xs inline-block">
                                        Jean</div>
                                    <div class="text-title mt-1">Fashion Trends in Summer 2024</div>
                                </div>
                            </div>
                            <div class="blog-item flex gap-4 mt-5 cursor-pointer" data-item="16">
                                <img src="https://blog-admin.avoskinbeauty.com/wp-content/uploads/2023/04/1m-scaled-e1681442155615.jpg"
                                    alt="img" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" />
                                <div>
                                    <div
                                        class="blog-tag whitespace-nowrap bg-primary text-white py-0.5 px-2 rounded-full text-button-uppercase text-xs inline-block">
                                        fruits</div>
                                    <div class="text-title mt-1">Organic Good for Health trending in winter 2024</div>
                                </div>
                            </div>
                            <div class="blog-item flex gap-4 mt-5 cursor-pointer" data-item="15">
                                <img src="https://blog-admin.avoskinbeauty.com/wp-content/uploads/2021/07/beautiful-asian-lady-applying-eye-serum-and-smilin-2021-07-07-21-48-08-utc.jpg"
                                    alt="img" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" />
                                <div>
                                    <div
                                        class="blog-tag whitespace-nowrap bg-primary text-white py-0.5 px-2 rounded-full text-button-uppercase text-xs inline-block">
                                        Yoga</div>
                                    <div class="text-title mt-1">Trending Excercise in Summer 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-tags md:mt-10 mt-6">
                        <div class="heading6">Tags Cloud</div>
                        <div class="list-tags menu-tab flex items-center flex-wrap gap-3 mt-4">
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Style</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Makeup</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                wear</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Men</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Women</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Beauty</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Trends</div>
                            <div
                                class="tags tab-item bg-white border border-line py-1.5 px-4 rounded-full text-button-uppercase text-secondary cursor-pointer duration-300 hover:bg-primary hover:text-white">
                                Beachwear</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
