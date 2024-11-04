// Swiper
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


document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById('customGantiAlamat');
    const backdrop = document.getElementById('backdrop-ganti-alamat');
    const openModalButton = document.getElementById('gantiAlamatButton'); // Pastikan ini ada di HTML Anda
    const closeModalButtons = document.querySelectorAll('.modal-ganti-alamat-close');

    if (openModalButton) {
        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
            backdrop.classList.remove('hidden');
        });
    }

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




  // Set the date we're counting down to (replace with your own date/time)
  const countdownDate = new Date("Nov 30, 2024 23:59:59").getTime();

  // Update the countdown every 1 second
  const countdownFunction = setInterval(() => {
      const now = new Date().getTime();
      const timeRemaining = countdownDate - now;

      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

      // Display the result in the countdown elements
      document.querySelector(".countdown-day").textContent = days;
      document.querySelector(".countdown-hour").textContent = hours;
      document.querySelector(".countdown-minute").textContent = minutes;
      document.querySelector(".countdown-second").textContent = seconds;

      // If the countdown is finished, stop it
      if (timeRemaining < 0) {
          clearInterval(countdownFunction);
          document.querySelector(".countdown-time").textContent = "Flash Sale Ended";
      }
  }, 1000);




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
    Document.execCommand("copy");

    // Optionally, display a copied message
    alert("Card Number copied to clipboard!");
}
