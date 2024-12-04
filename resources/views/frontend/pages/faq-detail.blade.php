@extends('frontend.master.master-app')
@section('content')
    <div class="faq-container py-10">
        <div class="container flex flex-wrap justify-center gap-6">
            <!-- FAQ Sidebar -->
            @include('frontend.components.sidebar-faq-detail')
            <!-- FAQ Content -->
            <section class="faq-content lg:w-3/4 w-4/6">
                <h2 class="faq-heading heading4">{{ $faq->title }}</h2>
                <div class="content md:mt-8 mt-5">
                    {!! $faq->description !!}
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
        /* Tampilan Mobile */
@media (max-width: 768px) {
    .container {
        width: 100%;
        padding: 0;
    }

    .faq-sidebar {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
    }

    .faq-content {
        width: 100%;
        padding: 10px;
    }

    .faq-tab {
        margin-bottom: 20px;
    }

    .faq-link {
        font-size: 16px;
    }

}
</style>
