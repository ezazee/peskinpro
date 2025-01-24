          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
              <!-- Sidebar Logo -->
              <div class="logo-box">
                  <a href="/dashboard" class="logo-dark">
                      <img src="{{ asset('backend/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                      <img src="{{ asset('backend/assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark"
                          style="width: 30%; height: 50%">
                  </a>

                  <a href="/dashboard" class="logo-light">
                      <img src="{{ asset('backend/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                      <img src="{{ asset('backend/assets/images/peskin.png') }}" class="logo-lg" alt="logo light"
                          style="width: 30%; height: 50%">
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

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarProducts">
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
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('category.index') }}">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Category </span>
                              </a>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Admin']))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('orders.pos') }}">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:delivery-bold"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Point Of Sale </span>
                              </a>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Admin']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarInventory">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Inventory Management </span>
                              </a>
                              <div class="collapse" id="sidebarInventory">
                                  <ul class="nav sub-navbar-nav">
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('listStock.index') }}">List Stock</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('expProduct.index') }}">Expired / OOS
                                              Product</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('addCategory.index') }}">Add Category
                                              Stock</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('transactionHistory.index') }}">Transaction History</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('detailSupplier.index') }}">Detail
                                              Supplier</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Finance', 'Admin', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Orders </span>
                              </a>
                              <div class="collapse" id="sidebarOrders">
                                  <ul class="nav sub-navbar-nav">
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.list') }}">List All</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.pendingreview') }}">Pending
                                              Review
                                              <span
                                                  class="badge bg-danger text-end m-1">{{ $pendingReviewCount }}</span>
                                          </a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.proceslist') }}">Processing
                                              List
                                              <span class="badge bg-danger text-end m-1">{{ $processinglist }}</span>
                                          </a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.shippinglist') }}">Shipping
                                              List
                                              <span class="badge bg-danger text-end m-1">{{ $shippinglist }}</span>
                                          </a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link"
                                              href="{{ route('orders.completedlist') }}">Completed List
                                          </a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.canceledlist') }}">Canceled
                                              List
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Admin', 'Finance', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarOrdersreturn" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarOrdersreturn">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:reorder-linear"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Return And Refund </span>
                              </a>
                              <div class="collapse" id="sidebarOrdersreturn">
                                  <ul class="nav sub-navbar-nav">
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.returnrefundlist') }}">List
                                              All</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.returnlist') }}">List
                                              Return</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('orders.refundlist') }}">List
                                              Refund</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Management', 'Admin', 'Finance']))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('invoice.index') }}">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Invoices </span>
                              </a>
                          </li>
                      @endif

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Finance']))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('bank.index') }}">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:banknote-2-bold"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Bank </span>
                              </a>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator']))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('settings.index') }}">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Settings </span>
                              </a>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Admin', 'Finance', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('report.index') }}">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:notebook-square-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Report </span>
                              </a>
                          </li>
                      @endif

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Management']))
                          <li class="menu-title mt-2">Users</li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Users </span>
                              </a>
                              <div class="collapse" id="sidebarCustomers">
                                  <ul class="nav sub-navbar-nav">
                                      @if (in_array(auth()->user()->role->name, ['Administrator']))
                                          <li class="sub-nav-item">
                                              <a class="sub-nav-link"
                                                  href="{{ route('users.index') }}">Administrator</a>
                                          </li>
                                      @endif
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('customers.index') }}">List
                                              Customers</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Admin', 'Management']))
                          <li class="menu-title mt-2">Other</li>
                      @endif

                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Writter']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarArticle" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarArticle">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:documents-outline"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Article </span>
                              </a>
                              <div class="collapse" id="sidebarArticle">
                                  <ul class="nav sub-navbar-nav">
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('article.list') }}">List</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('article.create') }}">Create</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator', 'Admin', 'Management']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sidebarCoupons">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> Coupons </span>
                              </a>
                              <div class="collapse" id="sidebarCoupons">
                                  <ul class="nav sub-navbar-nav">
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('coupons.index') }}">List</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('coupons.create') }}">Create</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif
                      @if (in_array(auth()->user()->role->name, ['Administrator']))
                          <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sideBarFaq" data-bs-toggle="collapse"
                                  role="button" aria-expanded="false" aria-controls="sideBarFaq">
                                  <span class="nav-icon">
                                      <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                                  </span>
                                  <span class="nav-text"> FAQ </span>
                              </a>
                              <div class="collapse" id="sideBarFaq">
                                  <ul class="nav sub-navbar-nav">
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('faq.index') }}">List</a>
                                      </li>
                                      <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('faq.create') }}">Create</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
          <!-- ========== App Menu End ========== -->
