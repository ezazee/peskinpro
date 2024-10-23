<div class="left md:w-1/3 w-full xl:pr-[3.125rem] lg:pr-[28px] md:pr-[16px]">
    <div class="user-infor bg-surface md:px-8 px-5 md:py-10 py-6 md:rounded-[20px] rounded-xl">
        <div class="heading flex flex-col items-center justify-center">
            <div class="avatar">
                <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E="
                    alt="avatar" class="md:w-[140px] w-[120px] md:h-[140px] h-[120px] rounded-full" />
            </div>
            <div class="name heading6 mt-4 text-center">Tony Nguyen</div>
            <div class="mail heading6 font-normal normal-case text-secondary text-center mt-1">
                hi.avitex@gmail.com</div>
        </div>
        <div class="menu-tab list-category w-full max-w-none lg:mt-10 mt-6">
            <a href="/profile"
               class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('profile') ? 'active' : '' }}">
               <span class="ph ph-house-line text-xl"></span>
               <strong class="heading6">Dashboard</strong>
            </a>
            <a href="/address"
               class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5 {{ request()->is('address') ? 'active' : '' }}">
               <span class="ph ph-tag text-xl"></span>
               <strong class="heading6">My Address</strong>
            </a>
            <a href="#"
               class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5>
               <span class="ph ph-sign-out text-xl"></span>
               <strong class="heading6">Logout</strong>
            </a>
        </div>

    </div>
</div>
