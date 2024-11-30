@extends('frontend.master.master-app')

@section('content')
<div class="my-account-block md:py-20 py-10">
    <div class="container">
        <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
            <div class="left md:w-1/3 w-full xl:pr-[3.125rem] lg:pr-[28px] md:pr-[16px]">
                @include('frontend.components.sidebar-faq')
            </div>
            <div class="right list-filter md:w-2/3 w-full pl-2.5">
                <div class="filter-item text-content w-full active" data-item="dashboard">
                    <div class="overview grid sm:grid-cols-3 gap-5">
                        <div class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Awaiting Pickup</span>
                                <h5 class="heading5 mt-1">4</h5>
                            </div>
                            <span class="ph ph-hourglass-medium text-4xl"></span>
                        </div>
                        <div class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Cancelled Orders</span>
                                <h5 class="heading5 mt-1">12</h5>
                            </div>
                            <span class="ph ph-receipt-x text-4xl"></span>
                        </div>
                        <div class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Total Number of Orders</span>
                                <h5 class="heading5 mt-1">200</h5>
                            </div>
                            <span class="ph ph-package text-4xl"></span>
                        </div>
                    </div>
                    <div class="recent_order pt-5 px-5 pb-2 mt-7 border border-line rounded-xl">
                        <h6 class="heading6">Recent Orders</h6>
                        <div class="list overflow-x-auto w-full mt-5">
                            <table class="w-full max-[1400px]:w-[700px] max-md:w-[700px]">
                                <thead class="border-b border-line">
                                    <tr>
                                        <th scope="col" class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Order</th>
                                        <th scope="col" class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Products</th>
                                        <th scope="col" class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Pricing</th>
                                        <th scope="col" class="pb-3 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="item duration-300 border-b border-line">
                                        <th scope="row" class="py-3 text-left">
                                            <strong class="text-title">54312452</strong>
                                        </th>
                                        <td class="py-3">
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="assets/images/product/fashion/1-1.png" alt="Contrasting sweatshirt" class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong class="product_name text-button">Contrasting sweatshirt</strong>
                                                    <span class="product_tag caption1 text-secondary">Women, Clothing</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">$45.00</td>
                                        <td class="py-3 text-right">
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Pending</span>
                                        </td>
                                    </tr>
                                    <tr class="item duration-300 border-b border-line">
                                        <th scope="row" class="py-3 text-left">
                                            <strong class="text-title">54312452</strong>
                                        </th>
                                        <td class="py-3">
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="assets/images/product/fashion/2-1.png" alt="Faux-leather trousers" class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong class="product_name text-button">Faux-leather trousers</strong>
                                                    <span class="product_tag caption1 text-secondary">Women, Clothing</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">$45.00</td>
                                        <td class="py-3 text-right">
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-purple text-purple caption1 font-semibold">Delivery</span>
                                        </td>
                                    </tr>
                                    <tr class="item duration-300 border-b border-line">
                                        <th scope="row" class="py-3 text-left">
                                            <strong class="text-title">54312452</strong>
                                        </th>
                                        <td class="py-3">
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="assets/images/product/fashion/3-1.png" alt="V-neck knitted top" class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong class="product_name text-button">V-neck knitted top</strong>
                                                    <span class="product_tag caption1 text-secondary">Women, Clothing</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">$45.00</td>
                                        <td class="py-3 text-right">
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="item duration-300 border-b border-line">
                                        <th scope="row" class="py-3 text-left">
                                            <strong class="text-title">54312452</strong>
                                        </th>
                                        <td class="py-3">
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="assets/images/product/fashion/4-1.png" alt="Contrasting sweatshirt" class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong class="product_name text-button">Contrasting sweatshirt</strong>
                                                    <span class="product_tag caption1 text-secondary">Women, Clothing</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">$45.00</td>
                                        <td class="py-3 text-right">
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Pending</span>
                                        </td>
                                    </tr>
                                    <tr class="item duration-300 border-b border-line">
                                        <th scope="row" class="py-3 text-left">
                                            <strong class="text-title">54312452</strong>
                                        </th>
                                        <td class="py-3">
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="assets/images/product/fashion/5-1.png" alt="Faux-leather trousers" class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong class="product_name text-button">Faux-leather trousers</strong>
                                                    <span class="product_tag caption1 text-secondary">Women, Clothing</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">$45.00</td>
                                        <td class="py-3 text-right">
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-purple text-purple caption1 font-semibold">Delivery</span>
                                        </td>
                                    </tr>
                                    <tr class="item duration-300">
                                        <th scope="row" class="py-3 text-left">
                                            <strong class="text-title">54312452</strong>
                                        </th>
                                        <td class="py-3">
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="assets/images/product/fashion/6-1.png" alt="V-neck knitted top" class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong class="product_name text-button">V-neck knitted top</strong>
                                                    <span class="product_tag caption1 text-secondary">Women, Clothing</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">$45.00</td>
                                        <td class="py-3 text-right">
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-red text-red caption1 font-semibold">Canceled</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="filter-item tab_order text-content overflow-hidden w-full p-7 border border-line rounded-xl" data-item="orders">
                    <h6 class="heading6">Your Orders</h6>
                    <div class="w-full overflow-x-auto">
                        <div class="menu-tab relative grid grid-cols-5 max-lg:w-[500px] max-md:max-w-max border-b border-line mt-3">
                            <div class="indicator absolute bottom-0 w-1/5 h-0.5 bg-black duration-500"></div>
                            <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black active">all</button>
                            <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">pending</button>
                            <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">delivery</button>
                            <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">completed</button>
                            <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">canceled</button>
                        </div>
                    </div>
                    <div class="list_order">
                        <div class="order_item mt-5 border border-line rounded-lg box-shadow-xs">
                            <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line">
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order Number:</strong>
                                    <strong class="order_number text-button uppercase">s184989823</strong>
                                </div>
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order status:</strong>
                                    <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-purple text-purple caption1 font-semibold">Delivery</span>
                                </div>
                            </div>
                            <div class="list_prd px-5">
                                <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                    <a href="product-default.html" class="flex items-center gap-5">
                                        <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/product/fashion/1-1.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                        </div>
                                        <div>
                                            <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                            <div class="caption1 text-secondary mt-2">
                                                <span class="prd_size uppercase">XL</span>
                                                <span>/</span>
                                                <span class="prd_color capitalize">Yellow</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="text-title">
                                        <span class="prd_quantity">1</span>
                                        <span> X </span>
                                        <span class="prd_price">$45.00</span>
                                    </div>
                                </div>
                                <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                    <a href="product-default.html" class="flex items-center gap-5">
                                        <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/product/fashion/2-1.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                        </div>
                                        <div>
                                            <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                            <div class="caption1 text-secondary mt-2">
                                                <span class="prd_size uppercase">XL</span>
                                                <span>/</span>
                                                <span class="prd_color capitalize">White</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="text-title">
                                        <span class="prd_quantity">2</span>
                                        <span> X </span>
                                        <span class="prd_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-4 p-5">
                                <button class="button-main btn_order_detail">Order Details</button>
                                <button class="button-main bg-surface border border-line hover:bg-black text-black hover:text-white">Cancel Order</button>
                            </div>
                        </div>
                        <div class="order_item mt-5 border border-line rounded-lg box-shadow-xs">
                            <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line">
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order Number:</strong>
                                    <strong class="order_number text-button uppercase">s184989824</strong>
                                </div>
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order status:</strong>
                                    <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Pending</span>
                                </div>
                            </div>
                            <div class="list_prd px-5">
                                <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                    <a href="product-default.html" class="flex items-center gap-5">
                                        <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/product/fashion/3-1.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                        </div>
                                        <div>
                                            <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                            <div class="caption1 text-secondary mt-2">
                                                <span class="prd_size uppercase">L</span>
                                                <span>/</span>
                                                <span class="prd_color capitalize">Pink</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="text-title">
                                        <span class="prd_quantity">1</span>
                                        <span> X </span>
                                        <span class="prd_price">$69.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-4 p-5">
                                <button class="button-main btn_order_detail">Order Details</button>
                                <button class="button-main bg-surface border border-line hover:bg-black text-black hover:text-white">Cancel Order</button>
                            </div>
                        </div>
                        <div class="order_item mt-5 border border-line rounded-lg box-shadow-xs">
                            <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line">
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order Number:</strong>
                                    <strong class="order_number text-button uppercase">s184989824</strong>
                                </div>
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order status:</strong>
                                    <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                                </div>
                            </div>
                            <div class="list_prd px-5">
                                <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                    <a href="product-default.html" class="flex items-center gap-5">
                                        <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/product/fashion/4-1.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                        </div>
                                        <div>
                                            <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                            <div class="caption1 text-secondary mt-2">
                                                <span class="prd_size uppercase">L</span>
                                                <span>/</span>
                                                <span class="prd_color capitalize">White</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="text-title">
                                        <span class="prd_quantity">1</span>
                                        <span> X </span>
                                        <span class="prd_price">$32.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-4 p-5">
                                <button class="button-main btn_order_detail">Order Details</button>
                                <button class="button-main bg-surface border border-line hover:bg-black text-black hover:text-white">Cancel Order</button>
                            </div>
                        </div>
                        <div class="order_item mt-5 border border-line rounded-lg box-shadow-xs">
                            <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line">
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order Number:</strong>
                                    <strong class="order_number text-button uppercase">s184989824</strong>
                                </div>
                                <div class="flex items-center gap-2">
                                    <strong class="text-title">Order status:</strong>
                                    <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-red text-red caption1 font-semibold">Canceled</span>
                                </div>
                            </div>
                            <div class="list_prd px-5">
                                <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                    <a href="product-default.html" class="flex items-center gap-5">
                                        <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/product/fashion/5-1.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                        </div>
                                        <div>
                                            <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                            <div class="caption1 text-secondary mt-2">
                                                <span class="prd_size uppercase">M</span>
                                                <span>/</span>
                                                <span class="prd_color capitalize">Black</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="text-title">
                                        <span class="prd_quantity">1</span>
                                        <span> X </span>
                                        <span class="prd_price">$49.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-4 p-5">
                                <button class="button-main btn_order_detail">Order Details</button>
                                <button class="button-main bg-surface border border-line hover:bg-black text-black hover:text-white">Cancel Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-item tab_address text-content w-full p-7 border border-line rounded-xl" data-item="address">
                    <form>
                        <button type="button" class="tab_btn flex items-center justify-between w-full pb-1.5 border-b border-line active" data-item="billing">
                            <strong class="heading6">Billing address</strong>
                            <span class="ph ph-caret-down text-2xl ic_down duration-300"></span>
                        </button>
                        <div class="form_address active" data-item="billing">
                            <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                <div class="first-name">
                                    <label for="billingFirstName" class="caption1 capitalize">First Name <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingFirstName" type="text" required />
                                </div>
                                <div class="last-name">
                                    <label for="billingLastName" class="caption1 capitalize">Last Name <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingLastName" type="text" required />
                                </div>
                                <div class="company">
                                    <label for="billingCompany" class="caption1 capitalize">Company name (optional)</label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCompany" type="text" required />
                                </div>
                                <div class="country">
                                    <label for="billingCountry" class="caption1 capitalize">Country / Region <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCountry" type="text" required />
                                </div>
                                <div class="street">
                                    <label for="billingStreet" class="caption1 capitalize">street address <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingStreet" type="text" required />
                                </div>
                                <div class="city">
                                    <label for="billingCity" class="caption1 capitalize">Town / city <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCity" type="text" required />
                                </div>
                                <div class="state">
                                    <label for="billingState" class="caption1 capitalize">state <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingState" type="text" required />
                                </div>
                                <div class="zip">
                                    <label for="billingZip" class="caption1 capitalize">ZIP <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingZip" type="text" required />
                                </div>
                                <div class="phone">
                                    <label for="billingPhone" class="caption1 capitalize">Phone <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingPhone" type="text" required />
                                </div>
                                <div class="email">
                                    <label for="billingEmail" class="caption1 capitalize">Email <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingEmail" type="email" required />
                                </div>
                            </div>
                        </div>
                        <button type="button" class="tab_btn flex items-center justify-between w-full mt-10 pb-1.5 border-b border-line" data-item="shipping">
                            <strong class="heading6">Shipping address</strong>
                            <span class="ph ph-caret-down text-2xl ic_down duration-300"></span>
                        </button>
                        <div class="form_address" data-item="shipping">
                            <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                <div class="first-name">
                                    <label for="shippingFirstName" class="caption1 capitalize">First Name <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingFirstName" type="text" required />
                                </div>
                                <div class="last-name">
                                    <label for="shippingLastName" class="caption1 capitalize">Last Name <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingLastName" type="text" required />
                                </div>
                                <div class="company">
                                    <label for="shippingCompany" class="caption1 capitalize">Company name (optional)</label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingCompany" type="text" required />
                                </div>
                                <div class="country">
                                    <label for="shippingCountry" class="caption1 capitalize">Country / Region <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingCountry" type="text" required />
                                </div>
                                <div class="street">
                                    <label for="shippingStreet" class="caption1 capitalize">street address <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingStreet" type="text" required />
                                </div>
                                <div class="city">
                                    <label for="shippingCity" class="caption1 capitalize">Town / city <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingCity" type="text" required />
                                </div>
                                <div class="state">
                                    <label for="shippingState" class="caption1 capitalize">state <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingState" type="text" required />
                                </div>
                                <div class="zip">
                                    <label for="shippingZip" class="caption1 capitalize">ZIP <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingZip" type="text" required />
                                </div>
                                <div class="phone">
                                    <label for="shippingPhone" class="caption1 capitalize">Phone <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingPhone" type="text" required />
                                </div>
                                <div class="email">
                                    <label for="shippingEmail" class="caption1 capitalize">Email <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="shippingEmail" type="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="block-button lg:mt-10 mt-6">
                            <button type="submit" class="button-main bg-black">Update Address</button>
                        </div>
                    </form>
                </div>
                <div class="filter-item text-content w-full p-7 border border-line rounded-xl" data-item="setting">
                    <form>
                        <div class="heading5 pb-4">Information</div>
                        <div class="upload_image col-span-full">
                            <label for="uploadImage">Upload Avatar: <span class="text-red">*</span></label>
                            <div class="flex flex-wrap items-center gap-5 mt-3">
                                <div class="bg_img flex-shrink-0 relative w-[7.5rem] h-[7.5rem] rounded-lg overflow-hidden bg-surface">
                                    <span class="ph ph-image text-5xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary"></span>
                                    <img src="assets/images/avatar/1.png" alt="avatar" class="upload_img relative z-[1] w-full h-full object-cover" />
                                </div>
                                <div>
                                    <strong class="text-button">Upload File:</strong>
                                    <p class="caption1 text-secondary mt-1">JPG 120x120px</p>
                                    <div class="upload_file flex items-center gap-3 w-[220px] mt-3 px-3 py-2 border border-line rounded">
                                        <label for="uploadImage" class="caption2 py-1 px-3 rounded bg-line whitespace-nowrap cursor-pointer">Choose File</label>
                                        <input type="file" name="uploadImage" id="uploadImage" accept="image/*" class="caption2 cursor-pointer" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                            <div class="first-name">
                                <label for="firstName" class="caption1 capitalize">First Name <span class="text-red">*</span></label>
                                <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="firstName" type="text" value="Tony" placeholder="First name" required />
                            </div>
                            <div class="last-name">
                                <label for="lastName" class="caption1 capitalize">Last Name <span class="text-red">*</span></label>
                                <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="lastName" type="text" value="Nguyen" placeholder="Last name" required />
                            </div>
                            <div class="phone-number">
                                <label for="phoneNumber" class="caption1 capitalize">Phone Number <span class="text-red">*</span></label>
                                <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="phoneNumber" type="text" value="(+12) 345 678 910" placeholder="Phone number" required />
                            </div>
                            <div class="email">
                                <label for="email" class="caption1 capitalize">Email Address <span class="text-red">*</span></label>
                                <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="email" type="email" value="hi.avitex@gmail.com" placeholder="Email address" required />
                            </div>
                            <div class="gender">
                                <label for="gender" class="caption1 capitalize">Gender <span class="text-red">*</span></label>
                                <div class="select-block mt-2">
                                    <select class="border border-line px-4 py-3 w-full rounded-lg" id="gender" name="gender" value="default">
                                        <option value="default" disabled>Choose Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="ph ph-caret-down arrow-down text-lg"></span>
                                </div>
                            </div>
                            <div class="birth">
                                <label for="birth" class="caption1">Day of Birth <span class="text-red">*</span></label>
                                <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="birth" type="date" placeholder="Day of Birth" required />
                            </div>
                        </div>
                        <div class="heading5 pb-4 lg:mt-10 mt-6">Change Password</div>
                        <div class="pass">
                            <label for="password" class="caption1">Current password <span class="text-red">*</span></label>
                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="password" type="password" placeholder="Password *" required />
                        </div>
                        <div class="new-pass mt-5">
                            <label for="newPassword" class="caption1">New password <span class="text-red">*</span></label>
                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="newPassword" type="password" placeholder="New Password *" required />
                        </div>
                        <div class="confirm-pass mt-5">
                            <label for="confirmPassword" class="caption1">Confirm new password <span class="text-red">*</span></label>
                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="confirmPassword" type="password" placeholder="Confirm Password *" required />
                        </div>
                        <div class="block-button lg:mt-10 mt-6">
                            <button class="button-main">Save Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
