          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
              <!-- Sidebar Logo -->
              <div class="logo-box">
                  <a href="/dashboard" class="logo-dark">
                      <img src="{{ asset('backend/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                      <img src="{{ asset('backend/assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
                  </a>

                  <a href="/dashboard" class="logo-light">
                      <img src="{{ asset('backend/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                      <img src="{{ asset('backend/assets/images/peskin.png') }}" class="logo-lg" alt="logo light">
                  </a>
              </div>

              <!-- Menu Toggle Button (sm-hover) -->
              <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                  <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon">
                  </iconify-icon>
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
                          <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                              aria-expanded="false" aria-controls="sidebarProducts">
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
                          <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                              aria-expanded="false" aria-controls="sidebarOrders">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Orders </span>
                          </a>
                          <div class="collapse" id="sidebarOrders">
                              <ul class="nav sub-navbar-nav">

                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="{{ route('orders.list') }}">List</a>
                                  </li>
                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="#">Cart</a>
                                  </li>
                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="#">Check Out</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('invoice.index') }}">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Invoices </span>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('settings.index') }}">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Settings </span>
                          </a>
                      </li>

                      <li class="menu-title mt-2">Users</li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('users.index') }}">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Users </span>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse"
                              role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Customers </span>
                          </a>
                          <div class="collapse" id="sidebarCustomers">
                              <ul class="nav sub-navbar-nav">

                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="{{ route('customers.index') }}">List</a>
                                  </li>
                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="#">Affiliate</a>
                                  </li>
                                  <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#">Sellers</a>
                                </li>
                              </ul>
                          </div>
                      </li>

                      <li class="menu-title mt-2">Other</li>

                      <li class="nav-item">
                          <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                              aria-expanded="false" aria-controls="sidebarCoupons">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Coupons </span>
                          </a>
                          <div class="collapse" id="sidebarCoupons">
                              <ul class="nav sub-navbar-nav">
                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="#">List</a>
                                  </li>
                                  <li class="sub-nav-item">
                                      <a class="sub-nav-link" href="#">Add</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                      <li class="menu-title mt-2">Other Apps</li>

                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <span class="nav-icon">
                                  <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Chat </span>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="#">
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
