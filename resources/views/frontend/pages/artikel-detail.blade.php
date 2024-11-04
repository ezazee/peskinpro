@extends('frontend.master.master-app')

@section('content')

<div class="blog blog-detail detail2 md:mt-[74px] mt-[56px] border-t border-line">
    <div class="container lg:pt-20 md:pt-14 pt-10">
        <div class="blog-content flex justify-between max-lg:flex-col gap-y-10">
            <div class="main xl:w-3/4 lg:w-2/3 lg:pr-[15px]">
                <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">Skincare</div>
                <div class="heading3 blog-title mt-3">Fashion Trends to Watch Out for
                    in Summer 2023</div>
                    <div class="flex items-center gap-2 mt-2">
                        <div class="blog-date caption1 text-secondary">Dec 20, 2023</div>
                    </div>
                <div class="bg-img md:py-10 py-6">
                    <img src="https://cdn1.productnation.co/stg/sites/5/62b91dae2c04e.jpeg" alt="img" class="blog-img w-full object-cover rounded-3xl" />
                </div>
                <div class="content md:mt-8 mt-5">
                    <div class="heading4 md:mt-8 mt-5">How did SKIMS start?</div>
                    <div class="body1 mt-4">This is such a hard question! Honestly, every time we drop a new collection I get obsessed with it. The pieces that have been my go-tos though are some of our simplest styles that we launched with. I wear our Fits Everybody Thong every single day – it is the only underwear I have now, it’s so comfortable and stretchy and light enough that you can wear anything over it.</div>
                    <div class="list-img grid sm:grid-cols-2 gap-[30px] md:mt-8 mt-5"></div>
                    <div class="body1 mt-4">For bras, I love our Cotton Jersey Scoop Bralette – it's lined with this amazing power mesh so you get great support and is so comfy I can sleep in it. I also love our Seamless Sculpt Bodysuit – it's the perfect all in one sculpting, shaping and smoothing shapewear piece with different levels of support woven throughout.</div>
                    <div class="heading4 md:mt-8 mt-5">How did SKIMS start?</div>
                    <div class="body1 mt-4">This is such a hard question! Honestly, every time we drop a new collection I get obsessed with it. The pieces that have been my go-tos though are some of our simplest styles that we launched with. I wear our Fits Everybody Thong every single day – it is the only underwear I have now, it's so comfortable and stretchy and light enough that you can wear anything over it.</div>
                    <div class="quote-block md:mt-8 mt-5 py-6 md:px-10 px-6 border border-line md:rounded-[20px] rounded-2xl flex items-center md:gap-10 gap-6">
                        <i class="ph-fill ph-quotes text-green text-3xl rotate-180 flex-shrink-0"></i>
                        <div>
                            <div class="heading6">"For bras, I love our Cotton Jersey Scoop Bralette – it's lined with this amazing power mesh so you get great support and is so comfy I can sleep in it."</div>
                            <div class="text-button-uppercase text-secondary mt-4">- Anthony Bourdain</div>
                        </div>
                    </div>
                    <div class="body1 md:mt-8 mt-5">For bras, I love our Cotton Jersey Scoop Bralette – it's lined with this amazing power mesh so you get great support and is so comfy I can sleep in it. I also love our Seamless Sculpt Bodysuit – it's the perfect all in one sculpting, shaping and smoothing shapewear piece with different levels of support woven throughout.</div>
                    <div class="body1 mt-4">For bras, I love our Cotton Jersey Scoop Bralette – it’s lined with this amazing power mesh so you get great support and is so comfy I can sleep in it. I also love our Seamless Sculpt Bodysuit – it’s the perfect all in one sculpting, shaping and smoothing shapewear piece with different levels of support woven throughout.</div>
                </div>
                <div class="action flex items-center justify-between flex-wrap gap-5 md:mt-8 mt-5">
                    <div class="left flex items-center gap-3 flex-wrap">
                        <p>Tag:</p>
                        <div class="list flex items-center gap-3 flex-wrap">
                            <a href="blog-default.html" class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase cursor-pointer duration-300 hover:bg-black hover:text-white"> fashion </a>
                            <a href="blog-default.html" class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase cursor-pointer duration-300 hover:bg-black hover:text-white"> yoga </a>
                            <a href="blog-default.html" class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase cursor-pointer duration-300 hover:bg-black hover:text-white"> organic </a>
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

    <div class="md:pb-20 pb-10">
        <div class="news-block md:pt-20 pt-10">
            <div class="container">
                <div class="heading3 text-center">Topik Terkait</div>
                <div class="list grid lg:grid-cols-3 sm:grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6">
                    <div class="blog-item style-one h-full cursor-pointer" data-item="16">
                        <div class="blog-main h-full block">
                            <div class="blog-thumb rounded-[20px] overflow-hidden">
                                <img src="https://www.marketeers.com/_next/image/?url=https%3A%2F%2Froom.marketeers.com%2Fwp-content%2Fuploads%2F2024%2F10%2F171941809_l_normal_none.jpg&w=1920&q=75" alt="blog-img" class="w-full duration-500" />
                            </div>
                            <div class="blog-infor mt-7">
                                <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, glasses</div>
                                <div class="heading6 blog-title mt-3 duration-300">Fashion Trends to Watch Out for in Summer 2024</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="blog-date caption1 text-secondary">Dec 20, 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item style-one h-full cursor-pointer" data-item="8">
                        <div class="blog-main h-full block">
                            <div class="blog-thumb rounded-[20px] overflow-hidden">
                                <img src="https://www.marketeers.com/_next/image/?url=https%3A%2F%2Froom.marketeers.com%2Fwp-content%2Fuploads%2F2023%2F03%2FMAMJ23-GUE-Mina-Shoot-Production-5-scaled.jpg&w=1920&q=75" alt="blog-img" class="w-full duration-500" />
                            </div>
                            <div class="blog-infor mt-7">
                                <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, shoes</div>
                                <div class="heading6 blog-title mt-3 duration-300">How to Build a Sustainable and Stylish Wardrobe 2024</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="blog-date caption1 text-secondary">Dec 12, 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item style-one h-full cursor-pointer max-lg:hidden max-sm:block" data-item="14">
                        <div class="blog-main h-full block">
                            <div class="blog-thumb rounded-[20px] overflow-hidden">
                                <img src="https://cdn1.katadata.co.id/media/images/temp/2021/07/30/Ilustrasi_penggunaan_cuka_apel_untuk_wajah-2021_07_30-08_54_55_22263f2d27931e3b1a72930dd6495a75.jpg" alt="blog-img" class="w-full duration-500" />
                            </div>
                            <div class="blog-infor mt-7">
                                <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, skirt</div>
                                <div class="heading6 blog-title mt-3 duration-300">Fashion and Beauty Tips for Busy Professionals 2024</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="blog-date caption1 text-secondary">Dec 10, 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
