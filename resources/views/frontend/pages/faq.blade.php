@extends('frontend.master.master-app')

@section('content')
    <div class="faqs-block md:py-20 py-10">
        <div class="container">
            <div class="flex max-md:flex-wrap justify-between gap-y-8">
                <div class="left md:w-1/4">
                    <div class="menu-tab flex flex-col gap-5">
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300 active" data-item="how to buy">How to Buy</div>
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300" data-item="payment methods">Payment Methods</div>
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300" data-item="delivery">Delivery</div>
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300" data-item="exchanges & returns">Exchanges & Returns</div>
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300" data-item="registration">Registration</div>
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300" data-item="look after your garments">Look After Your Garments</div>
                        <div class="tab-item inline-block w-fit heading6 has-line-before text-secondary2 hover:text-black duration-300" data-item="contacts">Contacts</div>
                    </div>
                </div>

                <div class="right list-question md:w-2/3">
                    <div class="tab-question flex flex-col gap-5" data-item="how to buy">
                        <div class="question-item px-7 py-5 rounded-[20px] overflow-hidden border border-line cursor-pointer">
                            <div class="heading flex items-center justify-between gap-6">
                                <div class="heading6">How does COVID-19 affect my online orders and store purchases?</div>
                                <i class="ph ph-caret-right text-2xl"></i>
                            </div>
                            <div class="content body1 text-secondary hidden">The courier companies have adapted their procedures to guarantee the safety of our employees and our community. We thank you for your patience, as there may be some delays to deliveries. We remind you that you can still find us at Mango.com</div>
                        </div>
                        <div class="question-item px-7 py-5 rounded-[20px] overflow-hidden border border-line cursor-pointer">
                            <div class="heading flex items-center justify-between gap-6">
                                <div class="heading6">NEW! Plus sizes for Women</div>
                                <i class="ph ph-caret-right text-2xl"></i>
                            </div>
                            <div class="content body1 text-secondary hidden">
                                The courier companies have adapted their procedures to guarantee the safety of our employees and our community. We thank you for your patience, as there may be some delays to deliveries. We remind you that you can still find us at Mango.com and on all our online channels.
                            </div>
                        </div>
                    </div>

                    <div class="tab-question flex flex-col gap-5 hidden" data-item="payment methods">
                        <div class="question-item px-7 py-5 rounded-[20px] overflow-hidden border border-line cursor-pointer">
                            <div class="heading flex items-center justify-between gap-6">
                                <div class="heading6">How does COVID-19 affect my online orders and store purchases?</div>
                                <i class="ph ph-caret-right text-2xl"></i>
                            </div>
                            <div class="content body1 text-secondary hidden">The courier companies have adapted their procedures to guarantee the safety of our employees and our community. We thank you for your patience, as there may be some delays to deliveries. We remind you that you can still find us at Mango.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', () => {
    // Menangani klik pada kategori tab
    const tabItems = document.querySelectorAll('.tab-item');

    tabItems.forEach(item => {
        item.addEventListener('click', () => {
            const targetItem = item.getAttribute('data-item');
            const tabQuestions = document.querySelectorAll('.tab-question');

            // Menyembunyikan semua tab yang tidak aktif
            tabQuestions.forEach(tab => {
                if (tab.getAttribute('data-item') !== targetItem) {
                    tab.classList.add('hidden');
                } else {
                    tab.classList.remove('hidden');
                }
            });

            // Menambahkan kelas active pada tab yang diklik
            tabItems.forEach(tab => tab.classList.remove('active'));
            item.classList.add('active');
        });
    });

    // Menangani klik pada item pertanyaan FAQ untuk accordion
    const questionItems = document.querySelectorAll('.question-item');

    questionItems.forEach(item => {
        item.addEventListener('click', () => {
            const content = item.querySelector('.content');
            const icon = item.querySelector('i');

            // Toggle tampilan konten FAQ
            content.classList.toggle('hidden');
            icon.classList.toggle('ph-caret-down');
            icon.classList.toggle('ph-caret-right');
        });
    });
});

</script>
