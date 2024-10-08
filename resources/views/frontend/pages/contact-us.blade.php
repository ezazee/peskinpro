@extends('frontend.master.master-app')

@section('content')

<div class="contact-us md:py-20 py-10">
    <div class="container">
        <div class="flex justify-between max-lg:flex-col gap-y-10">
            <div class="left lg:w-2/3 lg:pr-4">
                <div class="heading3">Beri Kami Saran Anda</div>
                <div class="body1 text-secondary2 mt-3">Isi Kolom dibawah untuk berinteraksi dengan team kami</div>
                <form class="md:mt-6 mt-4">
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 gap-y-5">
                        <div class="name">
                            <input class="border-line px-4 py-3 w-full rounded-lg" id="username" type="text" placeholder="Nama" required />
                        </div>
                        <div class="email">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="email" type="email" placeholder="Email" required />
                        </div>
                        <div class="message sm:col-span-2">
                            <textarea class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="message" rows="3" placeholder="Pesanmu..." required></textarea>
                        </div>
                    </div>
                    <div class="block-button md:mt-6 mt-4">
                        <button class="button-main">Kirim Pesan</button>
                    </div>
                </form>
            </div>
            <div class="right lg:w-1/4 lg:pl-4">
                <div class="item">
                    <div class="heading4">Toko Kami</div>
                    <a href="https://www.google.com/maps/place/Ps.+Minggu,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta/@-6.2758611,106.8208611,15z/data=!4m16!1m9!3m8!1s0x2e69f20d0da8dec1:0x2ed1af546a9b32d3!2sPs.+Minggu,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta!3b1!8m2!3d-6.2896105!4d106.8399623!10e5!16zL20vMGc5d3d4!3m5!1s0x2e69f20d0da8dec1:0x2ed1af546a9b32d3!8m2!3d-6.2896105!4d106.8399623!16zL20vMGc5d3d4?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D">                    <p class="mt-3">Pasar Minggu (Kalibata), Jakarta Selatan, DKI Jakarta</p>
                    </a>
                    <a href="https://wa.me/6282123167895"><p class="mt-3">No HP/Whatsapp: <span class="whitespace-nowrap">0821-2316-7895</span></p></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adm.peskinproid@gmail.com"><p class="mt-1">Email: <span class="whitespace-nowrap">adm.peskinproid@gmail.com</span></p></a>
                </div>
                <div class="item mt-10">
                    <div class="heading4">Buka Dari Jam</div>
                    <p class="mt-3">Senin - Jumat: <span class="whitespace-nowrap">7:30am - 8:00pm</span></p>
                    <p class="mt-3">Sabtu: <span class="whitespace-nowrap">8:00am - 6:00pm</span></p>
                    <p class="mt-3">Minggu: <span class="whitespace-nowrap">9:00am - 5:00pm</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map xl:h-[600px] sm:h-[500px] h-[450px] overflow-hidden">
    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.630931099866!2d106.8208611234929!3d-6.275861104982358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f20d0da8dec1%3A0x2ed1af546a9b32d3!2sPs.%20Minggu%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1728276558749!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection
