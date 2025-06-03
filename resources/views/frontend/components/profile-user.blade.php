<div class="left md:w-1/3 w-full xl:pr-[3.125rem] lg:pr-[28px] md:pr-[16px]">
    <div class="user-infor bg-surface md:px-8 px-5 md:py-10 py-6 md:rounded-[20px] rounded-xl">
        <div class="heading flex flex-col items-center justify-center">
            <div class="avatar">
                @if ($user->images)
                    <img src="{{ asset('storage/' . $user->images) }}" alt="User Image"
                        class="md:w-[140px] w-[120px] md:h-[140px] h-[120px] rounded-full">
                @else
                    <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E="
                        alt="avatar" class="md:w-[140px] w-[120px] md:h-[140px] h-[120px] rounded-full" />
                @endif
            </div>
            <div class="name heading6 mt-4 text-center">{{ $user->name }}</div>
            <div class="mail heading6 font-normal normal-case text-secondary text-center mt-1">
                {{ $user->email }}</div>
        </div>
        <div class="menu-tab list-category w-full max-w-none lg:mt-10 mt-6">
            @if (in_array(auth()->user()->role->name, ['user']))
                <a href="{{ route('profile.index') }}"
                    class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('profile') ? 'active' : '' }}">
                    <span class="ph ph-house-line text-xl"></span>
                    <strong class="heading6">Dashboard</strong>
                </a>
                <a href="{{ route('profile.address') }}"
                    class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5 {{ request()->is('address') ? 'active' : '' }}">
                    <span class="ph ph-tag text-xl"></span>
                    <strong class="heading6">List Alamat</strong>
                </a>

                <a href="{{ route('recent_order') }}"
                    class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5 {{ request()->is('order') ? 'active' : '' }}">
                    <span class="ph ph-receipt text-xl"></span>
                    <strong class="heading6">Riwayat Order</strong>
                </a>
            @endif

            {{-- AFFILIATE SIDE BAR --}}
            @if (in_array(auth()->user()->role->name, ['Affiliate']))
                <a href="{{ route('affiliate.index') }}"
                    class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('dashboard/affiliate') ? 'active' : '' }}">
                    <span class="ph ph-house-line text-xl"></span>
                    <strong class="heading6">Dashboard</strong>
                </a>
            @endif
            @if (in_array(auth()->user()->role->name, ['Affiliate']) && auth()->user()->affiliate_status === 'approve')
                <a href="{{ route('affiliate.product') }}"
                    class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('dashboard/affiliate/list-product') ? 'active' : '' }}">
                    <span class="ph ph-link text-xl"></span>
                    <strong class="heading6">Product Link</strong>
                </a>
            @endif
            @if (in_array(auth()->user()->role->name, ['Affiliate']) && auth()->user()->affiliate_status === 'approve')
                <a href="{{ route('affiliate.settings') }}"
                    class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('dashboard/affiliate/settings') ? 'active' : '' }}">
                    <span class="ph ph-gear text-xl"></span>
                    <strong class="heading6">Settings</strong>
                </a>
            @endif
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>

            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5">
                <span class="ph ph-sign-out text-xl"></span>
                <strong class="heading6">Logout</strong>
            </a>
        </div>

    </div>
</div>
