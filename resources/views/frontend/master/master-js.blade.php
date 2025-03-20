<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('frontend/assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('frontend/assets/js/shop.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/product-detail.js') }}"></script>

{{-- Swiper Slider Hero --}}
<script type="text/javascript">
    var swiper = new Swiper(".swiper-slider-custom", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        speed: 800,
        on: {
            slideChange: function() {
                // Callback untuk mengupdate gambar
                let currentSlide = this.slides[this.activeIndex];
                let imgDesktop = currentSlide.querySelector(".img-desktop");
                let imgMobile = currentSlide.querySelector(".img-mobile");

                if (window.innerWidth < 768) {
                    imgDesktop.style.display = 'none';
                    imgMobile.style.display = 'block';
                } else {
                    imgDesktop.style.display = 'block';
                    imgMobile.style.display = 'none';
                }
            }
        }
    });
</script>

{{-- Text Swiper OnTop --}}
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Swiper for text slider
        var textSwiper = new Swiper('.text-swiper', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 800,
            slidesPerView: 1,
            spaceBetween: 10,
        });
    });

    // list-product
    if (document.querySelector(".swiper-list-product")) {
        var swiperListProduct = new Swiper(".swiper-list-product", {
            navigation: {
                prevEl: ".swiper-button-prev2",
                nextEl: ".swiper-button-next2",
            },
            loop: true,
            slidesPerView: 2,
            spaceBetween: 16,
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    }
</script>

{{-- Modal Promosi Utama --}}
<script>
    // Modal Newsletter
    const modalNewsletter = document.querySelector(".modal-newsletter");
    const modalNewsletterMain = document.querySelector(
        ".modal-newsletter .modal-newsletter-main"
    );
    const closeBtnModalNewsletter = document.querySelector(
        ".modal-newsletter .close-newsletter-btn"
    );

    if (modalNewsletter) {
        setTimeout(() => {
            modalNewsletterMain.classList.add("open");
        }, 1000);

        modalNewsletter.addEventListener("click", () => {
            modalNewsletterMain.classList.remove("open");
        });

        closeBtnModalNewsletter.addEventListener("click", () => {
            modalNewsletterMain.classList.remove("open");
        });

        modalNewsletterMain.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    }
</script>

{{-- Swiper Detail Product --}}
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>

{{-- Quantity Counter --}}
<script>
    const handleQuantity = () => {
        const quantityBlock = document.querySelectorAll(".quantity-block");

        quantityBlock.forEach((item) => {
            const minus = item.querySelector(".ph-minus");
            const plus = item.querySelector(".ph-plus");
            const quantity = item.querySelector(".quantity");

            if (Number(quantity.textContent) < 2) {
                minus.classList.add("disabled");
            }

            minus.addEventListener("click", (e) => {
                e.stopPropagation();
                if (Number(quantity.textContent) > 2) {
                    quantity.innerHTML = Number(quantity.innerHTML) - 1;
                    minus.classList.remove("disabled");
                } else {
                    quantity.innerHTML = "1";
                    minus.classList.add("disabled");
                }
            });

            plus.addEventListener("click", (e) => {
                e.stopPropagation();
                quantity.innerHTML = Number(quantity.innerHTML) + 1;
                if (Number(quantity.textContent) >= 2) {
                    minus.classList.remove("disabled");
                }
            });
        });
    };

    handleQuantity();
</script>


<script>
    // Select elements
    const descTabItem = document.querySelectorAll('.desc-tab .tab-item');
    const descItem = document.querySelectorAll('.desc-tab .desc-item');

    // Function to handle tab switching
    const handleTabClick = (clickedTab) => {
        // Remove active class from all tabs
        descTabItem.forEach(tab => tab.classList.remove('active'));

        // Add active class to the clicked tab
        clickedTab.classList.add('active');

        // Get the data-item associated with the clicked tab
        const dataItem = clickedTab.innerHTML.trim().replace(/\s+/g, '');

        // Show the matching content and hide others
        descItem.forEach(item => {
            if (item.getAttribute('data-item') === dataItem) {
                item.classList.add('open');
            } else {
                item.classList.remove('open');
            }
        });
    };

    // Attach event listeners to each tab
    descTabItem.forEach(tab => {
        tab.addEventListener('click', () => handleTabClick(tab));
    });

    // Initialize: make sure the correct tab is open based on the active class
    document.addEventListener('DOMContentLoaded', () => {
        const initialActiveTab = document.querySelector('.desc-tab .tab-item.active');
        if (initialActiveTab) {
            handleTabClick(initialActiveTab);
        }
    });
</script>


<script>
    // Sidebar
    const filterSidebarBtn = document.querySelector('.filter-sidebar-btn')
    const sidebar = document.querySelector('.sidebar')
    const sidebarMain = document.querySelector('.sidebar .sidebar-main')
    const closeSidebarBtn = document.querySelector('.sidebar .sidebar-main .close-sidebar-btn')

    if (filterSidebarBtn && sidebar) {
        filterSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('open')
        })

        if (sidebarMain) {
            sidebar.addEventListener('click', () => {
                sidebar.classList.remove('open')
            })

            sidebarMain.addEventListener('click', (e) => {
                e.stopPropagation()
            })

            closeSidebarBtn.addEventListener('click', () => {
                sidebar.classList.remove('open')
            })
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const faqLinks = document.querySelectorAll('.faq-link');
        const faqTabs = document.querySelectorAll('.faq-tab');

        // Fungsi untuk mengaktifkan tab dan memperbarui status link
        const activateFaq = (link) => {
            const targetId = link.getAttribute('href').substring(1); // Ambil ID dari link
            const targetTab = document.getElementById(targetId);

            // Reset active states
            faqLinks.forEach(item => item.classList.remove('active'));
            faqTabs.forEach(tab => tab.classList.remove('active'));

            // Aktifkan link yang diklik dan tab terkait
            link.classList.add('active');
            if (targetTab) {
                targetTab.classList.add('active');
            }
        };

        // Menambahkan event listener untuk klik pada link FAQ
        faqLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                // Jika URL tidak mengarah ke halaman lain, tampilkan tab
                if (!link.href.includes('#')) {
                    return;
                }
                e.preventDefault(); // Mencegah halaman untuk melakukan scroll atau update hash
                activateFaq(link); // Aktifkan tab yang sesuai

                // Arahkan ke halaman lain jika ada href
                if (link.getAttribute('href') !== '#') {
                    window.location.href = link.getAttribute(
                        'href'); // Navigasi ke halaman lain
                }
            });
        });

        // Aktifkan tab berdasarkan hash di URL
        const currentHash = window.location.hash;
        if (currentHash) {
            const activeLink = document.querySelector(`.faq-link[href="${currentHash}"]`);
            if (activeLink) activateFaq(activeLink);
        } else {
            activateFaq(faqLinks[0]); // Defaultkan ke tab pertama
        }
    });
</script>



{{-- Backdrop Modal New Address --}}
<script>
    // JavaScript untuk menampilkan/menyembunyikan modal
    const modal = document.getElementById('customModal');
    const backdrop = document.getElementById('backdrop');
    const openModalButton = document.getElementById('addAddressButton');
    const closeModalButtons = document.querySelectorAll('.modal-addres-close');

    openModalButton.addEventListener('click', function() {
        modal.classList.remove('hidden');
        backdrop.classList.remove('hidden');
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', function() {
            modal.classList.add('hidden');
            backdrop.classList.add('hidden');
        });
    });

    backdrop.addEventListener('click', function() {
        modal.classList.add('hidden');
        backdrop.classList.add('hidden');
    });
</script>


{{-- Backdrop Modal Voucher Promo --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('customModalVoucher');
        const backdrop = document.getElementById('backdrop-voucher');
        const openModalButton = document.getElementById('addVoucherButton');
        const closeModalButtons = document.querySelectorAll('.modal-voucher-close');

        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
            backdrop.classList.remove('hidden');
        });

        closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                modal.classList.add('hidden');
                backdrop.classList.add('hidden');
            });
        });

        backdrop.addEventListener('click', function() {
            modal.classList.add('hidden');
            backdrop.classList.add('hidden');
        });
    });
</script>


<script>
    function applyCoupon(event, couponCode, discountAmount) {
        const button = event.target;
        const couponId = button.getAttribute('data-coupon-id');

        button.disabled = true;
        button.innerText = "Sedang Digunakan...";

        const discountElement = document.getElementById('discount-chekout');
        if (discountElement) {
            discountElement.innerText = `Rp.${discountAmount}`;
        }

        const cartTotalElement = document.getElementById('cart-total');
        if (cartTotalElement) {
            const cartTotal = parseInt(cartTotalElement.innerText.replace('Rp.', '').replace(',', '')) || 0;
            const updatedCartTotal = cartTotal - discountAmount;
            cartTotalElement.innerText = `Rp.${updatedCartTotal.toLocaleString()}`;
        }

        const couponCodeInput = document.getElementById('coupon_code');
        if (couponCodeInput) {
            couponCodeInput.value = couponCode;
        }

        const allCouponButtons = document.querySelectorAll('.coupon-button');
        allCouponButtons.forEach(btn => {
            if (btn !== button) {
                btn.disabled = false;
                btn.innerText = "Gunakan";
            }
        });

        button.innerText = "Dipakai";
        button.classList.add('disabled');
        button.setAttribute('disabled', 'true');

        const jsonDisplayElement = document.getElementById('json-display');
        if (jsonDisplayElement) {
            jsonDisplayElement.innerText = JSON.stringify({
                coupon_id: couponId,
                coupon_code: couponCode,
                discount_amount: discountAmount
            }, null, 2);
        }
    }
</script>



{{-- Backdrop Modal Ganti Alamat Checkout --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('customGantiAlamat');
        const backdrop = document.getElementById('backdrop-ganti-alamat');
        const openModalButton = document.getElementById('gantiAlamatButton');
        const closeModalButtons = document.querySelectorAll('.modal-ganti-alamat-close');

        // Cek jika modal dan backdrop ada sebelum melanjutkan
        if (modal && backdrop) {
            if (openModalButton) {
                openModalButton.addEventListener('click', function() {
                    modal.classList.remove('hidden');
                    backdrop.classList.remove('hidden');
                });
            }

            // Cek jika ada tombol untuk menutup modal
            if (closeModalButtons.length > 0) {
                closeModalButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        modal.classList.add('hidden');
                        backdrop.classList.add('hidden');
                    });
                });
            }

            // Cek jika backdrop ada sebelum menambahkan event listener
            backdrop.addEventListener('click', function() {
                modal.classList.add('hidden');
                backdrop.classList.add('hidden');
            });
        } else {}
    });
</script>

{{-- Backdrop Modal Order History --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // JavaScript for showing/hiding modal
        const modal = document.getElementById('customModalOrder');
        const backdrop = document.getElementById('modal-order-backdrop');
        const openModalButtons = document.querySelectorAll('.historyOrderButton');
        const closeModalButtons = document.querySelectorAll('.modal-order-close');

        // Tambahkan event listener untuk setiap tombol dengan kelas .historyOrderButton
        openModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                modal.classList.remove('hidden');
                backdrop.classList.remove('hidden');
            });
        });

        closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                modal.classList.add('hidden');
                backdrop.classList.add('hidden');
            });
        });

        backdrop.addEventListener('click', function() {
            modal.classList.add('hidden');
            backdrop.classList.add('hidden');
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const countdownElement = document.querySelector(".countdown-time");
        const timerFlashsale = countdownElement.getAttribute("data-timer");

        if (!timerFlashsale || isNaN(new Date(timerFlashsale).getTime())) {
            document.querySelector(".countdown-day").textContent = "0";
            document.querySelector(".countdown-hour").textContent = "00";
            document.querySelector(".countdown-minute").textContent = "00";
            document.querySelector(".countdown-second").textContent = "00";
            countdownElement.innerHTML = "<div class='heading6 text-white'>Flash Sale Ended</div>";
            return;
        }

        const countdownDate = new Date(timerFlashsale).getTime();

        const countdownFunction = setInterval(() => {
            const now = new Date().getTime();
            const timeRemaining = countdownDate - now;

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.querySelector(".countdown-day").textContent = days;
            document.querySelector(".countdown-hour").textContent = hours.toString().padStart(2, '0');
            document.querySelector(".countdown-minute").textContent = minutes.toString().padStart(2,
                '0');
            document.querySelector(".countdown-second").textContent = seconds.toString().padStart(2,
                '0');

            if (timeRemaining < 0) {
                clearInterval(countdownFunction);
                countdownElement.innerHTML = "<div class='heading6 text-white'>Flash Sale Ended</div>";
            }
        }, 1000);
    });
</script>


{{-- Ongkir Dropdown --}}
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('main-select-options');
        dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    }

    function selectMainOption(region) {
        const mainSelectDisplay = document.getElementById('main-select-display');
        const nestedOptionsContainer = document.getElementById('nested-options-container');
        const nestedSelect = document.getElementById('nested-select');

        // Set display text and close dropdown
        if (region === 'JNE') {
            mainSelectDisplay.innerHTML = 'JNE<br><small>Estimasi 2-3 Hari : Rp20,000</small>';
        } else if (region === 'TIKI') {
            mainSelectDisplay.innerHTML = 'TIKI<br><small>Estimasi 2-3 Hari : Rp25,000</small>';
        } else if (region === 'POS') {
            mainSelectDisplay.innerHTML = 'POS<br><small>Estimasi 2-3 Hari : Rp30,000</small>';
        }

        document.getElementById('main-select-options').style.display = 'none';

        // Populate nested select based on the region
        nestedSelect.innerHTML = '<option value="default" disabled selected>Pilih Layanan</option>';
        let options = [];

        if (region === 'JNE') {
            options = [{
                    value: 'ctc',
                    text: 'JNE - CTC (City Courier) : Estimasi tiba - 4 - 7 Nov'
                },
                {
                    value: 'jtr',
                    text: 'JNE - JTR (Tracking) : Estimasi tiba 3 - 6 Nov'
                },
                {
                    value: 'ctcyes',
                    text: 'JNE - CTCYES (City Courier) : Estimasi Tiba 7 - 10 Nov'
                }
            ];
        } else if (region === 'TIKI') {
            options = [{
                    value: 'anteraja',
                    text: 'AnterAja - Estimasi tiba 4 - 8 Nov'
                },
                {
                    value: 'kurir_rekomendasi',
                    text: 'Kurir Rekomendasi - Estimasi tiba 5 - 9 Nov'
                }
            ];
        } else if (region === 'POS') {
            options = [{
                    value: 'anteraja',
                    text: 'AnterAja - Estimasi tiba 6 - 10 Nov'
                },
                {
                    value: 'jne',
                    text: 'JNE - Estimasi tiba 7 - 11 Nov'
                }
            ];
        }

        // Add new options to nested select
        options.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.value;
            newOption.textContent = option.text;
            nestedSelect.appendChild(newOption);
        });

        // Show the nested options container
        nestedOptionsContainer.style.display = 'block';
    }
</script>


{{-- Payment Page --}}
<script>
    // Show, hide payment type in checkout
    const listPayment = document.querySelector(".payment-block .list-payment");
    const paymentCheckbox = document.querySelectorAll(
        ".payment-block .list-payment .type>input"
    );

    if (paymentCheckbox) {
        paymentCheckbox.forEach((item) => {
            item.addEventListener("click", () => {
                if (listPayment.querySelector(".open")) {
                    listPayment.querySelector(".open").classList.remove("open");
                }

                let parentType = item.parentElement;
                if (item.checked) {
                    parentType.classList.add("open");
                }
            });
        });
    }

    // Copy to clipboard function
    function copyToClipboard() {
        const inputField = document.getElementById("cardNumberCredit");
        inputField.select();
        document.execCommand("copy");

        // Optionally, display a copied message
        alert("Card Number copied to clipboard!");
    }
</script>

{{-- Navbar Link --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fungsi untuk mengatur kelas active pada link yang sesuai
        function setActiveLink() {
            const hash = window.location.hash.substring(1); // Ambil hash tanpa tanda #
            const links = document.querySelectorAll('.menu-main a');

            links.forEach(link => {
                // Menghapus kelas active dari semua link
                link.classList.remove('active');
                // Menambahkan kelas active pada link yang sesuai dengan hash
                if (link.dataset.hash === hash) {
                    link.classList.add('active');
                }
            });
        }

        // Memeriksa jika berada di halaman "shop"
        if (window.location.pathname.includes('/shop')) {
            // Panggil fungsi saat halaman dimuat
            setActiveLink();

            // Tambahkan event listener untuk mengatur active link saat hash berubah
            window.addEventListener('hashchange', setActiveLink);

            // Tambahkan event listener untuk scroll agar aktif berdasarkan section
            const sections = document.querySelectorAll('section[id]');
            window.addEventListener('scroll', () => {
                let scrollPos = document.documentElement.scrollTop || document.body.scrollTop;
                sections.forEach(section => {
                    if (section.offsetTop <= scrollPos && (section.offsetTop + section
                            .offsetHeight) > scrollPos) {
                        const currentId = section.getAttribute('id');
                        links.forEach(link => {
                            link.classList.remove('active');
                            if (link.dataset.hash === currentId) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            });
        }
    });
</script>


<script>
    // Mendapatkan elemen input password dan tombol untuk toggle
    const passwordField = document.getElementById("password");
    const togglePasswordButton = document.getElementById("togglePasswordVisibility");

    // Menambahkan event listener untuk tombol toggle
    togglePasswordButton.addEventListener("click", function() {
        // Menukar tipe input password antara 'password' dan 'text'
        const type = passwordField.type === "password" ? "text" : "password";
        passwordField.type = type;
        // Menentukan ikon berdasarkan visibilitas password
        const icon = type === "password" ? "ph ph-eye" :
            "ph ph-eye-slash"; // Jika password terlihat, tampilkan ikon mata tertutup
        this.innerHTML = `<i class="${icon}"></i>`; // Memperbarui ikon dalam tombol
    });
</script>


<script>
    // Mendapatkan elemen input dan tombol toggle untuk register password
    const registerPasswordField = document.getElementById("register-password");
    const toggleRegisterPasswordButton = document.getElementById("toggleRegisterPassword");

    // Mendapatkan elemen input dan tombol toggle untuk confirm password
    const confirmPasswordField = document.getElementById("confirm-password");
    const toggleConfirmPasswordButton = document.getElementById("toggleConfirmPassword");

    // Fungsi untuk toggle visibilitas password
    function togglePasswordVisibility(field, button) {
        const type = field.type === "password" ? "text" : "password";
        field.type = type;

        // Ganti ikon berdasarkan tipe input
        const icon = type === "password" ? "ph ph-eye" : "ph ph-eye-slash";
        button.innerHTML = `<i class="${icon}"></i>`;
    }

    // Event listener untuk tombol register password
    toggleRegisterPasswordButton.addEventListener("click", function() {
        togglePasswordVisibility(registerPasswordField, toggleRegisterPasswordButton);
    });

    // Event listener untuk tombol confirm password
    toggleConfirmPasswordButton.addEventListener("click", function() {
        togglePasswordVisibility(confirmPasswordField, toggleConfirmPasswordButton);
    });
</script>



{{-- Backdrop Modal Ganti Alamat Checkout --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('customPKS');
        const backdrop = document.getElementById('modal-pks-backdrop');
        const openModalButton = document.getElementById('customPKSButton');
        const closeModalButtons = document.querySelectorAll('.modal-pks-close');
        const agreeButton = document.getElementById('agreeButton');
        const disagreeButton = document.getElementById('disagreeButton');
        const form = document.getElementById('registerForm');
        const checkbox = document.getElementById('checkPKS'); // Ambil checkbox

        // Ambil semua input biasa (kecuali sosial media)
        const inputs = document.querySelectorAll(
            '#registerForm input:not([type="hidden"]):not(.social-media):not([type="checkbox"]), #registerForm select, #registerForm textarea'
        );

        // Ambil semua input sosial media (pakai class khusus)
        const socialMediaInputs = document.querySelectorAll('.social-media');

        // Fungsi untuk mengecek apakah semua input biasa sudah diisi
        function isFormFilled() {
            for (let input of inputs) {
                if (input.value.trim() === "") {
                    console.log(`Input kosong: ${input.name}`); // Debugging
                    return false;
                }
            }
            return true;
        }

        // Fungsi untuk mengecek apakah minimal 1 sosial media diisi
        function isSocialMediaFilled() {
            for (let input of socialMediaInputs) {
                if (input.value.trim() !== "") {
                    return true; // Jika ada 1 yang diisi, valid
                }
            }
            return false; // Jika semua kosong, tidak valid
        }

        // Fungsi untuk mengecek apakah checkbox dicentang
        function isCheckboxChecked() {
            return checkbox.checked;
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            console.log("Modal ditutup");
            modal.classList.add('hidden');
            backdrop.classList.add('hidden');
        }

        // Fungsi untuk membuka modal jika form lengkap
        function openModal(event) {
            event.preventDefault(); // Mencegah form langsung submit
            console.log("Cek apakah form sudah lengkap...");

            if (isFormFilled() && isSocialMediaFilled() && isCheckboxChecked()) {
                console.log("Form lengkap, buka modal.");
                modal.classList.remove('hidden');
                backdrop.classList.remove('hidden');
            } else {
                console.log("Form belum lengkap.");
                alert(
                    "Harap isi semua kolom sebelum melanjutkan! Pastikan minimal 1 sosial media diisi dan checkbox dicentang."
                    );
            }
        }

        // Event listener untuk tombol Register
        if (openModalButton) {
            openModalButton.addEventListener('click', openModal);
        }

        // Tambahkan event listener ke semua tombol yang menutup modal
        closeModalButtons.forEach(button => {
            button.addEventListener('click', closeModal);
        });

        // Tambahkan event listener ke backdrop agar modal tertutup jika diklik
        if (backdrop) {
            backdrop.addEventListener('click', closeModal);
        }

        // Jika "Setuju" ditekan, submit form
        if (agreeButton) {
            agreeButton.addEventListener('click', function() {
                console.log("Form disubmit.");
                form.submit(); // Kirim form setelah menyetujui perjanjian
                closeModal();
            });
        }

        // Jika "Tidak Setuju" ditekan, hanya tutup modal
        if (disagreeButton) {
            disagreeButton.addEventListener('click', closeModal);
        }
    });
</script>
