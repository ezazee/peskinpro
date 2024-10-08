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

{{-- Modal Scroll To Top Sticky -> Whatsapp --}}
<script>
    // Scroll to top
    const scrollTopBtn = document.querySelector(".scroll-to-top-btn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 600) {
            scrollTopBtn.classList.add("active");
        } else {
            scrollTopBtn.classList.remove("active");
        }
    });
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

<script>
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
</script>
