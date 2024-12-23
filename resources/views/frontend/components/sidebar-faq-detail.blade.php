<aside class="faq-sidebar w-1/4 p-5 rounded-lg">
    <nav class="faq-navigation">
        <ul class="flex flex-col gap-5">
            @foreach ($categories as $item)
            <li>
                <a href="/faq#{{$item->slug}}" class="faq-link block p-3 rounded-lg bg-white shadow faq-link-general">
                    {{$item->nama_kategori}}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>
