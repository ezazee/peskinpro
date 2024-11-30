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
