@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block md:py-20 py-10">
        <div class="container">
            <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
                {{-- Bagian Kiri --}}
                <div class="left md:w-1/3 w-full xl:pr-[3.125rem] lg:pr-[28px] md:pr-[16px]">
                    <div class="user-infor bg-surface md:px-8 px-5 md:py-10 py-6 md:rounded-[20px] rounded-xl">
                        <div class="heading flex flex-col items-center justify-center">
                            <div class="avatar">
                                    <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E="
                                        alt="avatar" class="md:w-[140px] w-[120px] md:h-[140px] h-[120px] rounded-full" />
                            </div>
                            <div class="name heading6 mt-4 text-center">sdsdsdsd</div>
                            <div class="mail heading6 font-normal normal-case text-secondary text-center mt-1">
                                sdsdsddsd</div>
                        </div>
                        <div class="menu-tab list-category w-full max-w-none lg:mt-10 mt-6">
                            <a href="{{ route('profile.index') }}"
                                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('profile') ? 'active' : '' }}">
                                <span class="ph ph-house-line text-xl"></span>
                                <strong class="heading6">Dashboard</strong>
                            </a>
                            <a href="{{ route('profile.address') }}"
                                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5 {{ request()->is('address') ? 'active' : '' }}">
                                <span class="ph ph-tag text-xl"></span>
                                <strong class="heading6">My Address</strong>
                            </a>

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

                {{-- Bagian Kanan --}}
                <div class="right list-filter md:w-2/3 w-full pl-2.5">
                    <div class="filter-item text-content w-full active">
                        <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                            <form>
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 flex-wrap">
                                    <!-- Nama Penerima -->
                                    <div>
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="namaPenerima" type="text"
                                            placeholder="Nama Penerima" value="sdsdsd" required />
                                    </div>

                                    <!-- Label Alamat -->
                                    <div>
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="lastName" type="text"
                                            placeholder="Label Alamat" value="Rumah" required />
                                    </div>

                                    <!-- Alamat and Kode Pos fields -->
                                    <div class="grid grid-cols-3 gap-4 col-span-full">
                                        <!-- Alamat field (2/3 width) -->
                                        <div class="col-span-2">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="apartment" type="text"
                                                placeholder="Alamat" required />
                                        </div>

                                        <!-- Kode Pos field (1/3 width) -->
                                        <div class="col-span-1">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="postal" type="text"
                                                placeholder="Kode Pos" required />
                                        </div>
                                    </div>

                                    <!-- No WhatsApp -->
                                    <div class="col-span-full">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="whatsapp" type="number"
                                            placeholder="No WhatsApp" value="0834937849729742" required />
                                    </div>

                                </div>

                                <!-- Submit Button -->
                                <div class="block-button md:mt-10 mt-6">
                                    <button class="button-main w-full">Simpan Alamat</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
