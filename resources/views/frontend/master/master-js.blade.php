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

{{-- Cart Modal --}}
{{-- <script>
    // Modal Cart
    const cartIcon = document.querySelector(".cart-icon");
    const modalCart = document.querySelector(".modal-cart-block");
    const modalCartMain = document.querySelector(
        ".modal-cart-block .modal-cart-main"
    );
    const closeCartIcon = document.querySelector(".modal-cart-main .close-btn");
    const continueCartIcon = document.querySelector(".modal-cart-main .continue");
    const addCartBtns = document.querySelectorAll(".add-cart-btn");

    const openModalCart = () => {
        modalCartMain.classList.add("open");
    };

    const closeModalCart = () => {
        modalCartMain.classList.remove("open");
    };

    addCartBtns.forEach((item) => {
        item.addEventListener("click", () => {
            openModalCart();
        });
    });

    cartIcon.addEventListener("click", openModalCart);
    modalCart.addEventListener("click", closeModalCart);
    closeCartIcon.addEventListener("click", closeModalCart);
    continueCartIcon.addEventListener("click", closeModalCart);

    modalCartMain.addEventListener("click", (e) => {
        e.stopPropagation();
    });

    // Set cart length
    const handleItemModalCart = () => {
        cartStore = localStorage.getItem("cartStore");
        cartStore = cartStore ? JSON.parse(cartStore) : [];

        if (cartStore) {
            cartIcon.querySelector("span").innerHTML = cartStore.length;
        }

        // Set cart item
        const listItemCart = document.querySelector(
            ".modal-cart-block .list-product"
        );

        listItemCart.innerHTML = "";

        if (cartStore.length === 0) {
            listItemCart.innerHTML = `<p class='mt-1'>No product in cart</p>`;
        } else {
            // Initial money to freeship in cart
            let moneyForFreeship = 150;
            let totalCart = 0;

            cartStore.forEach((item) => {
                totalCart = Number(totalCart) + Number(item.price)

                // Create prd
                const prdItem = document.createElement("div");
                prdItem.setAttribute("data-item", item.id);
                prdItem.classList.add(
                    "item",
                    "py-5",
                    "flex",
                    "items-center",
                    "justify-between",
                    "gap-3",
                    "border-b",
                    "border-line"
                );
                prdItem.innerHTML = `
                <div class="infor flex items-center gap-3 w-full">
                    <div class="bg-img w-[100px] aspect-square flex-shrink-0 rounded-lg overflow-hidden">
                        <img src=${item.thumbImage[0]} alt='product'
                            class='w-full h-full' />
                    </div>
                    <div class='w-full'>
                        <div class="flex items-center justify-between w-full">
                            <div class="name text-button">${item.name}</div>
                            <div
                                class="remove-cart-btn remove-btn caption1 font-semibold text-red underline cursor-pointer">
                                Remove
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-2 mt-3 w-full">
                            <div class="flex items-center text-secondary2 capitalize">
                                ${item.sizes[0]}/${item.variation[0].color}
                            </div>
                            <div class="product-price text-title">$${item.price}.00</div>
                        </div>
                    </div>
                </div>
            `;

                listItemCart.appendChild(prdItem);
            });

            // Set money to freeship in cart
            modalCart.querySelector('.more-price').innerHTML = moneyForFreeship - totalCart
            modalCart.querySelector('.tow-bar-block .progress-line').style.width = (totalCart / moneyForFreeship *
                100) + '%'
            modalCart.querySelector('.total-cart').innerHTML = '$' + totalCart + '.00'
            if (moneyForFreeship - totalCart <= 0) {
                modalCart.querySelector('.more-price').innerHTML = 0
                modalCart.querySelector('.tow-bar-block .progress-line').style.width = '100%'
            }
        }

        const prdItems = listItemCart.querySelectorAll(".item");
        prdItems.forEach((prd) => {
            const removeCartBtn = prd.querySelector(".remove-cart-btn");
            removeCartBtn.addEventListener("click", () => {
                const prdId = removeCartBtn.closest(".item").getAttribute("data-item");
                // cartStore
                const newArray = cartStore.filter((item) => item.id !== prdId);
                localStorage.setItem("cartStore", JSON.stringify(newArray));
                handleItemModalCart();

                if (cartStore.length === 0) {
                    modalCart.querySelector('.more-price').innerHTML = 0
                    modalCart.querySelector('.tow-bar-block .progress-line').style.width = '0'
                    modalCart.querySelector('.total-cart').innerHTML = '$0.00'
                }
            });
        });
    };

    handleItemModalCart();
</script> --}}

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

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-inshop', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    });
</script> --}}

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

{{-- <script>
    // faqs
    const menuTab = document.querySelector(".menu-tab");
    const listQuestion = document.querySelector(".list-question");
    const tabQuestions = document.querySelectorAll(".tab-question");
    const questionItems = document.querySelectorAll(".question-item");

    if (tabItems) {
        tabItems.forEach((tabItem) => {
            tabQuestions.forEach((tabQuestion) => {
                let activeMenuTab = menuTab.querySelector(".active");

                if (
                    activeMenuTab.getAttribute("data-item") ===
                    tabQuestion.getAttribute("data-item")
                ) {
                    tabQuestion.classList.add("active");
                }

                tabItem.addEventListener("click", () => {
                    if (
                        tabItem.getAttribute("data-item") ===
                        tabQuestion.getAttribute("data-item")
                    ) {
                        listQuestion
                            .querySelector(".active")
                            .classList.remove("active");
                        tabQuestion.classList.add("active");
                    }
                });
            });
        });
    }

    if (questionItems) {
        questionItems.forEach((item, index) => {
            item.addEventListener("click", () => {
                item.classList.toggle("open");

                removeOpen(index);
            });
        });
    }

    function removeOpen(index1) {
        questionItems.forEach((item2, index2) => {
            if (index1 != index2) {
                item2.classList.remove("open");
            }
        });
    }
</script> --}}


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.item-faq');

        items.forEach(item => {
            item.querySelector('.title').addEventListener('click', () => {
                // Toggle the open class
                item.classList.toggle('open');

                // Optionally: Close other items when one is opened
                items.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('open');
                    }
                });
            });
        });
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
        // JavaScript for showing/hiding modal
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

{{-- Backdrop Modal Ganti Alamat Checkout --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('customModalOrder');
        const backdrop = document.getElementById('backdrop-order-alamat');
        const openModalButton = document.getElementById('historyOrderButton');
        const closeModalButtons = document.querySelectorAll('.modal-order-close');

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
        } else {
            console.warn("Elemen modal atau backdrop tidak ditemukan di halaman.");
        }
    });
</script>

{{-- Backdrop Modal Order History --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    // JavaScript for showing/hiding modal
    const modal = document.getElementById('customModalOrder');
    const backdrop = document.getElementById('modal-order-backdrop');
    const openModalButtons = document.querySelectorAll('.historyOrderButton');
    const closeModalButtons = document.querySelectorAll('.modal-order-close');

    // Tambahkan event listener untuk setiap tombol dengan kelas .historyOrderButton
    openModalButtons.forEach(button => {
        button.addEventListener('click', function () {
            modal.classList.remove('hidden');
            backdrop.classList.remove('hidden');
        });
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', function () {
            modal.classList.add('hidden');
            backdrop.classList.add('hidden');
        });
    });

    backdrop.addEventListener('click', function () {
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
        document.querySelector(".countdown-minute").textContent = minutes.toString().padStart(2, '0');
        document.querySelector(".countdown-second").textContent = seconds.toString().padStart(2, '0');

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
    document.addEventListener("DOMContentLoaded", function () {
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
                if (section.offsetTop <= scrollPos && (section.offsetTop + section.offsetHeight) > scrollPos) {
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
