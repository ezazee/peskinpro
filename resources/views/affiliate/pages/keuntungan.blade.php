@extends('affiliate.master.master-app')

@section('content')
    <section class="homepage_tab position-relative">
        <div class="section container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-4">
                    <div class="section-title text-center">
                        <h1>Keuntungan dari PE Skinpro ID</h1>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('asset-affiliate/images/Komisi-Hingga-10-%-270-x-270.png') }}"
                                alt="PE Skinpro" class="img-fluid">
                        </div>

                        <p class="text-center">Bagikan link produk atau toko favorit Anda, dan setiap kali ada orang yang
                            belanja melalui link tersebut, Anda langsung mendapat komisi sebesar 10%.</p>
                        <p class="text-center">Dapatkan komisi jika ada yang belanja dari link produk atau toko yang kamu
                            bagikan. Semakin banyak yang belanja, semakin besar penghasilan Anda. Jadi, jangan ragu untuk
                            membagikan linknya ke teman-teman, keluarga, atau siapa saja yang mungkin tertarik.</p>
                        <div class="content mt-5">
                            <h2 class="mb-0">Syarat & Ketentuan</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="valid-commission">
                                        <h4> <span class="icon"><i class="fas fa-check-circle text-success"></i></span>
                                            Komisi yang sah</h4>
                                        <p>Komisi dari link yang disebar di:</p>
                                        <ul>
                                            <li>Sosial media umum (Instagram, YouTube, Facebook, Twitter, & TikTok)</li>
                                            <li>Sosial media pribadi (grup chat arisan, RT/RW, komunitas lokal, dll)</li>
                                            <li>Blog dan website</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invalid-commission">
                                        <h4> <span class="icon"><i class="fas fa-times-circle text-danger"></i></span>
                                            Komisi yang tidak sah</h4>
                                        <ul>
                                            <li>Komisi dari transaksi yang dimanipulasi</li>
                                            <li>Saling tukar link dengan rekan demi komisi</li>
                                            <li>Transaksi dengan pola dan nominal yang tidak wajar</li>
                                            <li>Transaksi B2B (dropship, transaksi dalam jumlah besar, reseller, dan
                                                berbagai jenis transaksi antar bisnis lainnya)</li>
                                            <li>Transaksi tidak sah yang dilakukan berkali-kali menyebabkan penahanan saldo
                                                dan penghapusan akun PE Skinpro.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
                <svg class="shape shape-right text-light" width="474" height="511" viewBox="0 0 474 511" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M601.776 325.899C579.043 348.894 552.727 371.275 520.74 375.956C478.826 382.079 438.015 355.5 412.619 321.6C387.211 287.707 373.264 246.852 354.93 208.66C336.584 170.473 311.566 132.682 273.247 114.593C220.12 89.5159 155.704 108.4 99.7772 90.3769C53.1531 75.3464 16.3392 33.2759 7.65012 -14.947"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M585.78 298.192C564.28 319.945 539.378 341.122 509.124 345.548C469.472 351.341 430.868 326.199 406.845 294.131C382.805 262.059 369.62 223.419 352.278 187.293C334.936 151.168 311.254 115.417 275.009 98.311C224.74 74.582 163.815 92.4554 110.913 75.3971C66.8087 61.1784 31.979 21.3767 23.7639 -24.2362"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M569.783 270.486C549.5 290.99 526.04 310.962 497.501 315.13C460.111 320.592 423.715 296.887 401.059 266.641C378.392 236.402 365.963 199.965 349.596 165.901C333.24 131.832 310.911 98.1265 276.74 82.0034C229.347 59.6271 171.895 76.4848 122.013 60.4086C80.419 47.0077 47.5905 9.47947 39.8431 -33.5342"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M553.787 242.779C534.737 262.041 512.691 280.809 485.884 284.722C450.757 289.853 416.568 267.586 395.286 239.173C373.993 210.766 362.308 176.538 346.945 144.535C331.581 112.533 310.605 80.8723 278.502 65.7217C233.984 44.6979 180.006 60.54 133.149 45.4289C94.0746 32.8398 63.2303 -2.41965 55.9568 -42.8233"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M537.791 215.073C519.964 233.098 499.336 250.645 474.269 254.315C441.41 259.126 409.422 238.286 389.513 211.704C369.594 185.13 358.665 153.106 344.294 123.17C329.923 93.2337 310.293 63.6078 280.258 49.4296C238.605 29.7646 188.105 44.5741 144.268 30.4451C107.714 18.6677 78.8538 -14.3229 72.0543 -52.1165"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-5 pb-2">
                        <h1>Hal Yang Sering Ditanyakan</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion shadow rounded py-5 px-0 px-lg-4 bg-white position-relative" id="accordionFAQ">
                        <div class="accordion-item p-1 mb-2">
                            <h2 class="accordion-header accordion-button h5 border-0 active"
                                id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                                aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Apa Itu PE Skinpro
                                Affiliate
                            </h2>
                            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                                class="accordion-collapse collapse border-0 show"
                                aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Adipisci repellendus mollitia ipsa, accusantium accusamus quidem saepe impedit
                                    aut, debitis sit reiciendis sequi aliquam dolore fugiat ullam hic doloremque quo illum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h2 class="accordion-header accordion-button h5 border-0 "
                                id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
                                aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">Berapa Komisi Dari PE
                                Skinpro Affiliate Program ?
                            </h2>
                            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Repellat repudiandae magnam odio earum suscipit itaque autem, rerum
                                    iure impedit, eum porro eos magni facilis praesentium facere soluta odit nulla
                                    laboriosam.</div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h2 class="accordion-header accordion-button h5 border-0 "
                                id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
                                aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">Bagaimana Cara Mendaftar
                                Menjadi Affiliate ?
                            </h2>
                            <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Quas debitis esse eius necessitatibus quidem quasi, voluptates consequatur eveniet
                                    aspernatur quia, a cupiditate at saepe eos natus cum ipsum rerum ipsam.</div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h2 class="accordion-header accordion-button h5 border-0 "
                                id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
                                aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">Apa Saja Syarat Mengikuti
                                Program PE Skinpro Affiliate ?
                            </h2>
                            <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Blanditiis voluptatum quod deleniti natus, minus alias sunt, dolor a porro aliquam
                                    debitis minima obcaecati ut et aliquid hic! Distinctio, atque accusamus!</div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h2 class="accordion-header accordion-button h5 border-0 "
                                id="heading-0c2f829793a1f0562fea97120357dd2d43319164" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-0c2f829793a1f0562fea97120357dd2d43319164" aria-expanded="false"
                                aria-controls="collapse-0c2f829793a1f0562fea97120357dd2d43319164">Kapan saya akan menerima
                                komisi?
                            </h2>
                            <div id="collapse-0c2f829793a1f0562fea97120357dd2d43319164"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-0c2f829793a1f0562fea97120357dd2d43319164"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Molestiae unde possimus odio id dolorem, cumque facere beatae eligendi error, eum
                                    et vero maiores! Fugit dolorem reprehenderit possimus expedita similique neque.</div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h2 class="accordion-header accordion-button h5 border-0 "
                                id="heading-8fe6730e26db16f15763887c30a614caa075f518" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-8fe6730e26db16f15763887c30a614caa075f518" aria-expanded="false"
                                aria-controls="collapse-8fe6730e26db16f15763887c30a614caa075f518">Apakah komisi yang saya
                                terima dapat ditarik ke rekening pribadi?
                            </h2>
                            <div id="collapse-8fe6730e26db16f15763887c30a614caa075f518"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-8fe6730e26db16f15763887c30a614caa075f518"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Aspernatur at, optio incidunt corrupti culpa ad ipsa laborum ullam nemo recusandae
                                    repellendus est harum ipsum dolor suscipit rem aliquam nostrum soluta.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="shadow rounded py-5 px-4 ms-0 ms-lg-4 bg-white position-relative">
                        <div class="block mx-0 mx-lg-3 mt-0">
                            <h4 class="h5">Masih Ada yang ada yang ditanyakan?</h4>
                            <div class="content">Kami Akan Senang Jika Anda Meminta Bantuan pada Kami
                                <br> <a
                                    href="https://wa.me/6282123167895?text=Saya%20Butuh%20Bantuan%20Admin%20Nich">0821-2316-7895</a>
                                <br> <a
                                    href="https://mail.google.com/mail/?view=cm&fs=1&to=adm.peskinproid@gmail.com">adm.peskinproid@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
