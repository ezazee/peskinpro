@extends('frontend.master.master-app')

@section('content')
<div class="section py-10">
    <div class="container mx-auto max-w-4xl">
        <!-- Page Header -->
        <div class="page-wrap bg-white shadow-lg rounded-lg p-8">
            <header class="page-header text-center mb-8">
                <h1 class="text-primary font-bold mb-2 heading2">Refund & Return Policy</h1>
                <p class="text-lg text-gray-600">Clear guidelines for your returns and refunds</p>
            </header>

            <!-- Page Content -->
            <div class="page-content">
                <!-- Overview Section -->
                <h3 class="text-2xl font-semibold text-blue-600 mb-6">Overview</h3>
                <ul class="ul-list-refund">
                    <li>If you are not satisfied with your purchase (e.g., damaged during shipment, wrong item/type/shade), please inform Customer Service before returning the item. Otherwise, the request will not be processed.</li>
                    <li>Return requests must be made within 7 working days from the date of receipt.</li>
                    <li>Damaged items must be returned with their original box and receipt.</li>
                    <li>Items bought during promotional events are not eligible for return and exchange.</li>
                    <li>Inform Customer Service before returning the item, otherwise, the request will not be processed.</li>
                    <li>Provide the return parcel tracking number for all items.</li>
                    <li>Goods sold are non-refundable. Only wrong or damaged items are eligible for exchange.</li>
                </ul>

                <!-- Return Process Section -->
                <h3 class="text-2xl font-semibold text-blue-600 mt-8 mb-6">Return Process</h3>
                <p class="text-gray-700 mb-8">
                    For inquiries about return postage rates and packaging, email us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adm.peskinproid@gmail.com" class="underline text-primary">adm.peskinproid@gmail.com</a> with the subject "Return Item Inquiries", or contact us directly via WhatsApp.
                </p>
            </div>

            <!-- Page Footer -->
            <footer class="text-center mt-12">
                <p class="text-sm text-gray-500">Last updated: October 2024</p>
            </footer>
        </div>
    </div>
</div>
@endsection
