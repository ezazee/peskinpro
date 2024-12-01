@extends('frontend.master.master-app')
@section('content')
    <div class="faq-container py-10">
        <div class="container flex flex-wrap justify-center gap-6">
            <!-- FAQ Sidebar -->
            @include('frontend.components.sidebar-faq')
            <!-- FAQ Content -->
            <section class="faq-content w-3/4">
                <h2 class="faq-heading heading4">What is your return policy?</h2>
                <div class="content md:mt-8 mt-5">
                    <div class="blog-description body1">The poblano yogurt is a key component here, but I totally understand
                        if you want to skip out on it because of time, lack of poblanos, or you're anti-chile. No problem,
                        just about any flavor-forward yogurt slather will do in its place. You could simply crush a clove of
                        garlic into some paste with a pinch of salt, and stir that in your favorite plain yogurt - also
                        delicious. Or, whisk a tablespoon of harissa paste into your yogurt.</div>
                    <div class="heading4 md:mt-8 mt-5">How did SKIMS start?</div>
                    <div class="body1 mt-4">This is such a hard question! Honestly, every time we drop a new collection I get
                        obsessed with it. The pieces that have been my go-tos though are some of our simplest styles that we
                        launched with. I wear our Fits Everybody Thong every single day – it is the only underwear I have
                        now, it’s so comfortable and stretchy and light enough that you can wear anything over it.</div>
                    <div class="list-img grid sm:grid-cols-2 gap-[30px] md:mt-8 mt-5">
                        <div>
                            <img src="./assets/images/blog/1.png" alt="img" class="w-full rounded-3xl">
                        </div>
                        <div>
                            <img src="./assets/images/blog/2.png" alt="img" class="w-full rounded-3xl">
                        </div>
                    </div>
                    <div class="body1 mt-4">For bras, I love our Cotton Jersey Scoop Bralette – it's lined with this amazing
                        power mesh so you get great support and is so comfy I can sleep in it. I also love our Seamless
                        Sculpt Bodysuit – it's the perfect all in one sculpting, shaping and smoothing shapewear piece with
                        different levels of support woven throughout.</div>
                    <div class="heading4 md:mt-8 mt-5">How did SKIMS start?</div>
                    <div class="body1 mt-4">This is such a hard question! Honestly, every time we drop a new collection I
                        get obsessed with it. The pieces that have been my go-tos though are some of our simplest styles
                        that we launched with. I wear our Fits Everybody Thong every single day – it is the only underwear I
                        have now, it's so comfortable and stretchy and light enough that you can wear anything over it.
                    </div>
                    <div
                        class="quote-block md:mt-8 mt-5 py-6 md:px-10 px-6 border border-line md:rounded-[20px] rounded-2xl flex items-center md:gap-10 gap-6">
                        <i class="ph-fill ph-quotes text-green text-3xl rotate-180 flex-shrink-0"></i>
                        <div>
                            <div class="heading6">"For bras, I love our Cotton Jersey Scoop Bralette – it's lined with this
                                amazing power mesh so you get great support and is so comfy I can sleep in it."</div>
                            <div class="text-button-uppercase text-secondary mt-4">- Anthony Bourdain</div>
                        </div>
                    </div>
                    <div class="body1 md:mt-8 mt-5">For bras, I love our Cotton Jersey Scoop Bralette – it's lined with this
                        amazing power mesh so you get great support and is so comfy I can sleep in it. I also love our
                        Seamless Sculpt Bodysuit – it's the perfect all in one sculpting, shaping and smoothing shapewear
                        piece with different levels of support woven throughout.</div>
                    <div class="body1 mt-4">For bras, I love our Cotton Jersey Scoop Bralette – it’s lined with this amazing
                        power mesh so you get great support and is so comfy I can sleep in it. I also love our Seamless
                        Sculpt Bodysuit – it’s the perfect all in one sculpting, shaping and smoothing shapewear piece with
                        different levels of support woven throughout.</div>
                </div>
                <!-- Quote Block -->
                <div
                    class="quote-block md:mt-6 mt-4 py-4 md:px-6 px-4 border bg-light-primary border-line md:rounded-lg rounded-lg flex items-start md:gap-6 gap-4">
                    <i class="ph-fill ph-lightbulb-filament text-primary text-2xl flex-shrink-0"></i>
                    <div>
                        <div class="heading4 text-sm">Jika ada pertanyaan lain, bisa langsung <a
                                class="font-bold text-primary underline" target="_blank"
                                href="https://wa.me/6282123167895?text=Saya%20Butuh%20Bantuan%20Admin%20Nich">Hubungi
                                Admin</a></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection


<style>
    /* FAQ Container */
    .faq-container {
        padding: 1.5rem;
        border-radius: 0.75rem;
    }

    /* FAQ Headings */
    .faq-heading {
        font-weight: bold;
        color: #2d3748;
        margin-bottom: 1rem;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 0.5rem;
    }

    /* FAQ Links */
    .faq-list {
        margin-top: 1rem;
        list-style: none;
        padding-left: 0;
    }

    .faq-link {
        color: var(--black);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s, text-decoration 0.3s;
        display: block;
        padding: 0.75rem;
        border-radius: 0.5rem;
        background-color: #ffffff;
    }

    .faq-link:hover {
        color: var(--primary);
        background-color: var(--light-primary);
        text-decoration: underline;
    }

    .faq-link.active {
        background-color: var(--light-primary);
        font-weight: bold;
        color: var(--primary);
    }

    /* FAQ Answer */
    .faq-answer {
        background-color: #edf2f7;
        padding: 1rem;
        border-radius: 0.5rem;
        margin-top: 0.5rem;
        display: none;
    }

    .faq-answer.active {
        display: block;
    }

    /* FAQ Tabs */
    .faq-tab {
        display: none;
    }

    .faq-tab.active {
        display: block;
    }
</style>
