          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                 <a href="index.html" class="logo-dark">
                      <img src="{{ asset('backend/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                      <img src="{{ asset('backend/assets/images/logo-dark.png')}}" class="logo-lg" alt="logo dark">
                 </a>

                 <a href="index.html" class="logo-light">
                      <img src="{{ asset('backend/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                      <img src="{{ asset('backend/assets/images/logo-light.png')}}" class="logo-lg" alt="logo light">
                 </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                 <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                 <ul class="navbar-nav" id="navbar-nav">

                      <li class="menu-title">General</li>

                      <li class="nav-item">
                           <a class="nav-link" href="{{ route('dashboard.index') }}">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Dashboard </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Products </span>
                           </a>
                           <div class="collapse" id="sidebarProducts">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('product.list') }}">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('product.index') }}">Create</a>
                                     </li>
                                </ul>
                           </div>
                      </li>

                      <li class="nav-item">
                         <a class="nav-link" href="{{ route('category.index') }}">
                              <span class="nav-icon">
                                   <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Category </span>
                         </a>
                    </li>


                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Orders </span>
                           </a>
                           <div class="collapse" id="sidebarOrders">
                                <ul class="nav sub-navbar-nav">

                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="orders-list.html">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="order-detail.html">Details</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="order-cart.html">Cart</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="order-checkout.html">Check Out</a>
                                     </li>
                                </ul>
                           </div>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPurchases">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Purchases </span>
                           </a>
                           <div class="collapse" id="sidebarPurchases">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="purchase-list.html">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="purchase-order.html">Order</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="purchase-returns.html">Return</a>
                                     </li>
                                </ul>
                           </div>
                      </li>
                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Invoices </span>
                           </a>
                           <div class="collapse" id="sidebarInvoice">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="invoice-list.html">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="invoice-details.html">Details</a>
                                     </li>                            
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="invoice-add.html">Create</a>
                                     </li>
                                </ul>
                           </div>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="settings.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Settings </span>
                           </a>
                      </li>

                      <li class="menu-title mt-2">Users</li>

                      <li class="nav-item">
                           <a class="nav-link" href="pages-profile.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Profile </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Users </span>
                           </a>
                           <div class="collapse" id="sidebarRoles">
                                <ul class="nav sub-navbar-nav">
                                     <ul class="nav sub-navbar-nav">
                                          <li class="sub-nav-item">
                                               <a class="sub-nav-link" href="role-list.html">List</a>
                                          </li>
                                          <li class="sub-nav-item">
                                               <a class="sub-nav-link" href="role-edit.html">Edit</a>
                                          </li>
                                          <li class="sub-nav-item">
                                               <a class="sub-nav-link" href="role-add.html">Create</a>
                                          </li>
                                     </ul>
                                </ul>
                           </div>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Customers </span>
                           </a>
                           <div class="collapse" id="sidebarCustomers">
                                <ul class="nav sub-navbar-nav">

                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="customer-list.html">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="customer-detail.html">Details</a>
                                     </li>
                                </ul>
                           </div>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Sellers </span>
                           </a>
                           <div class="collapse" id="sidebarSellers">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="seller-list.html">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="seller-details.html">Details</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="seller-edit.html">Edit</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="seller-add.html">Create</a>
                                     </li>
                                </ul>
                           </div>
                      </li>

                      <li class="menu-title mt-2">Other</li>

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCoupons">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Coupons </span>
                           </a>
                           <div class="collapse" id="sidebarCoupons">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="coupons-list.html">List</a>
                                     </li>
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="coupons-add.html">Add</a>
                                     </li>
                                </ul>
                           </div>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="pages-review.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Reviews </span>
                           </a>
                      </li>

                      <li class="menu-title mt-2">Other Apps</li>

                      <li class="nav-item">
                           <a class="nav-link" href="apps-chat.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Chat </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="apps-email.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Email </span>
                           </a>
                      </li>
                 </ul>
            </div>
       </div>
       <!-- ========== App Menu End ========== -->

