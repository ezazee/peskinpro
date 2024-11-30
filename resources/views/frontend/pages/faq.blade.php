@extends('frontend.master.master-app')

@section('content')
<div class="faq-container py-10">
    <div class="container flex gap-6">
        <!-- FAQ Sidebar -->
        <aside class="faq-sidebar w-1/4 bg-gray-100 p-5 rounded-lg">
            <nav class="faq-navigation">
                <ul class="space-y-3">
                    <li>
                        <a href="#general" class="faq-link block p-3 rounded-lg bg-white shadow {{ request()->is('faq#general') ? 'active' : '' }}">
                            General Questions
                        </a>
                    </li>
                    <li>
                        <a href="#orders" class="faq-link block p-3 rounded-lg bg-white shadow {{ request()->is('faq#orders') ? 'active' : '' }}">
                            Order Questions
                        </a>
                    </li>
                    <li>
                        <a href="#payment" class="faq-link block p-3 rounded-lg bg-white shadow {{ request()->is('faq#payment') ? 'active' : '' }}">
                            Payment Questions
                        </a>
                    </li>
                    <li>
                        <a href="#shipping" class="faq-link block p-3 rounded-lg bg-white shadow {{ request()->is('faq#shipping') ? 'active' : '' }}">
                            Shipping Questions
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- FAQ Content -->
        <section class="faq-content w-3/4">
            <div id="general" class="faq-tab {{ request()->is('faq#general') ? 'active' : 'hidden' }}">
                <h2 class="text-xl font-bold">General Questions</h2>
                <ul class="faq-list space-y-2 mt-4">
                    <li><a href="#general1" class="text-blue-600 hover:underline">What is your return policy?</a></li>
                    <li><a href="#general2" class="text-blue-600 hover:underline">How can I contact support?</a></li>
                    <li><a href="#general3" class="text-blue-600 hover:underline">What are your hours of operation?</a></li>
                </ul>
                <div id="general1" class="faq-answer hidden mt-3">
                    <p>Our return policy allows for returns within 30 days...</p>
                </div>
                <div id="general2" class="faq-answer hidden mt-3">
                    <p>You can contact support via our email or chat...</p>
                </div>
                <div id="general3" class="faq-answer hidden mt-3">
                    <p>Our business hours are Monday to Friday, 9 AM - 5 PM...</p>
                </div>
            </div>

            <div id="orders" class="faq-tab {{ request()->is('faq#orders') ? 'active' : 'hidden' }}">
                <h2 class="text-xl font-bold">Order Questions</h2>
                <ul class="faq-list space-y-2 mt-4">
                    <li><a href="#orders1" class="text-blue-600 hover:underline">How do I track my order?</a></li>
                    <li><a href="#orders2" class="text-blue-600 hover:underline">Can I change my order?</a></li>
                </ul>
                <div id="orders1" class="faq-answer hidden mt-3">
                    <p>You can track your order using the tracking number provided in the confirmation email...</p>
                </div>
                <div id="orders2" class="faq-answer hidden mt-3">
                    <p>Once an order is placed, changes cannot be made. However, you can cancel and reorder...</p>
                </div>
            </div>

            <div id="payment" class="faq-tab {{ request()->is('faq#payment') ? 'active' : 'hidden' }}">
                <h2 class="text-xl font-bold">Payment Questions</h2>
                <ul class="faq-list space-y-2 mt-4">
                    <li><a href="#payment1" class="text-blue-600 hover:underline">What payment methods do you accept?</a></li>
                    <li><a href="#payment2" class="text-blue-600 hover:underline">How do I get a refund?</a></li>
                </ul>
                <div id="payment1" class="faq-answer hidden mt-3">
                    <p>We accept credit/debit cards, PayPal, and other major payment methods...</p>
                </div>
                <div id="payment2" class="faq-answer hidden mt-3">
                    <p>Refunds are processed to the original payment method...</p>
                </div>
            </div>

            <div id="shipping" class="faq-tab {{ request()->is('faq#shipping') ? 'active' : 'hidden' }}">
                <h2 class="text-xl font-bold">Shipping Questions</h2>
                <ul class="faq-list space-y-2 mt-4">
                    <li><a href="#shipping1" class="text-blue-600 hover:underline">Do you ship internationally?</a></li>
                    <li><a href="#shipping2" class="text-blue-600 hover:underline">How long does shipping take?</a></li>
                </ul>
                <div id="shipping1" class="faq-answer hidden mt-3">
                    <p>Yes, we offer international shipping to many countries...</p>
                </div>
                <div id="shipping2" class="faq-answer hidden mt-3">
                    <p>Shipping typically takes 5-7 business days for domestic orders...</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
<style>
    /* Custom Styling */
    .faq-tab {
        display: none;
    }
    .faq-tab.active {
        display: block;
    }
    .faq-link.active {
        background-color: #f9f9f9;
        font-weight: bold;
    }
    .faq-link:hover {
        background-color: #eaeaea;
    }

    .faq-list {
        margin-top: 10px;
    }

    .faq-answer {
        margin-top: 10px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const faqLinks = document.querySelectorAll('.faq-navigation .faq-link');
        const faqTabs = document.querySelectorAll('.faq-tab');
        const faqAnswers = document.querySelectorAll('.faq-answer');

        function activateFaq(link) {
            const targetId = link.getAttribute('href').substring(1);
            const targetTab = document.getElementById(targetId);

            // Reset active states
            faqLinks.forEach(item => item.classList.remove('active'));
            faqTabs.forEach(tab => tab.classList.remove('active'));
            faqAnswers.forEach(answer => answer.classList.add('hidden'));

            // Activate clicked link and corresponding tab
            link.classList.add('active');
            targetTab.classList.add('active');

            // Show corresponding FAQ answer
            const answers = targetTab.querySelectorAll('.faq-answer');
            answers.forEach(answer => answer.classList.remove('hidden'));
        }

        // Add click event listeners to the links
        faqLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                activateFaq(link);
                // Update the URL hash for browser navigation
                window.location.hash = link.getAttribute('href').substring(1);
            });
        });

        // Automatically activate the tab based on the URL hash
        const currentHash = window.location.hash;
        if (currentHash) {
            const activeLink = document.querySelector(`.faq-navigation a[href="${currentHash}"]`);
            if (activeLink) {
                activateFaq(activeLink);
            }
        } else {
            // Default to the first tab if there's no hash
            activateFaq(faqLinks[0]);
        }
    });
</script>
