<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lagos Grocery Store | Affordable foodstuff Shopping at Pricepally</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel='stylesheet' href="{{asset('assets/fonts/material_fonts.css')}}">
    <link rel='stylesheet' href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fonts/font-awesome.min.css')}}" rel="stylesheet" media="all">

</head>

<body>
<main>

    @include('includes.sections.header_section')

    @include('includes.sections.hero_section')



    @include('includes.sections.categories_section')
    @yield('content')




    @include('includes.sections.footer_section')
    @include('includes.modals.pre_order_modal')
   @include('includes.modals.filter_modal')
   @include('includes.loaders.mobile_loader')
    <!------ MOBILE-FOOTER-CSS-START ------>
    <footer class="d-block d-lg-none mobile-footer">
        <div class="container">
            <div class="d-flex text-center justify-content-center">
                <div class="mobile-icon">
                    <a class="nav-link active" href="index.html">
                        <p class="mb-0"><i class="material-icons-outlined">home</i></p>
                        <p class="mb-0">Home</p>
                    </a>
                </div>
                <div class="mobile-icon">
                    <a class="nav-link" href="my_account_profile.html">
                        <p class="mb-0"><span class="material-icons">
                                    people_outline
                                </span></p>
                        <p class="mb-0">Users</p>
                    </a>
                </div>
                <div class="mobile-icon">
                    <a class="nav-link" href="cart.html">
                        <p class="mb-0"><span class="material-icons-outlined">
                                    shopping_cart
                                </span></p>
                        <p class="mb-0">Cart</p>
                    </a>
                </div>
                <div class="mobile-icon">
                    <a class="nav-link" href="orders.html">
                        <p class="mb-0"><span class="material-icons-outlined">
                                    shopping_bag
                                </span></p>
                        <p class="mb-0">Orders</p>
                    </a>
                </div>
                <div class="mobile-icon">
                    <a href="more.html" class="nav-link">

                        <p class="mb-0 more_ic"><span class="material-icons">
                                    more_horiz
                                </span></p>
                        <p class="mb-0">More </p>
                        <span class="yellow_cir float-right">2</span>
                    </a>
                </div>
            </div>

            <!------ MORE-MODAL-START ------>
            <div id="moreModal-wrapper">
                <div class="container">
                    <div class="moremodal-bg">
                        <div class="moremodal-header">
                            <div class="container">
                                <div class="d-flex">
                                    <div class="w-50 justify-content-start">
                                        <div class="p-1  ">
                                            <h5 class="mb-0 morehead">₦GN 24,500</h5>
                                            <p class="mb-0 more-phr">Wallet Balance</p>
                                        </div>
                                        <hr class="more-border">
                                        <div class="p-1">
                                            <h6 class="mb-0 morehead">₦GN 1,000</h6>
                                            <p class="mb-0 more-phr">Pending Balance</p>
                                        </div>

                                    </div>
                                    <div class="ml-auto justify-content-end align-self-center">
                                        <a href="#">
                                            <button class="yellow-bg text-uppercase">Go to wallet</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <ul class="list-unstyled ">
                                <li class="more-outline mb-3">
                                    <a href="make_list.html">
                                    <span class="material-icons-round align-middle">
                                        format_list_bulleted
                                    </span>
                                        <span class="morelist-text pl-2">Make a List</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="my_account_profile.html">
                                    <span class="material-icons-outlined align-middle">
                                        account_circle
                                    </span>
                                        <span class="morelist-text pl-2">Profile</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="refer_earn.html">
                                    <span class="material-icons align-middle">
                                        share
                                    </span>
                                        <span class="morelist-text pl-2">Refer and Earn</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="saved-products.html">
                                    <span class="material-icons align-middle">
                                        favorite_border
                                    </span>
                                        <span class="morelist-text pl-2">Saved Products</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="notification.html">
                                    <span class="material-icons  align-middle">
                                        notifications_none
                                    </span>
                                        <span class="morelist-text pl-2">Notifications</span>
                                        <span class="yellow_cir float-right">2</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="#">
                                    <span class="material-icons align-middle">
                                        settings_cell</span>
                                        </span class="morelist-text pl-2">Contact Admin</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="Freq-Quest.html">
                                    <span class="material-icons  align-middle">
                                        error_outline</span>
                                        <span class="morelist-text pl-2">Frequently Asked Questions</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="#">
                                    <span class="material-icons-outlined align-middle rotate-ic">
                                        repeat
                                    </span>
                                        <span class="morelist-text pl-2">Return Policy</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="#">
                                    <span class="material-icons-outlined align-middle">
                                        privacy_tip
                                    </span>
                                        <span class="morelist-text pl-2">Privacy Policy</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="#">
                                    <span class="material-icons-outlined align-middle  rotate-ic">
                                        note
                                    </span>
                                        <span class="morelist-text pl-2">Terms & Conditions</span>
                                    </a>
                                </li>
                                <li class="more-outline mb-3">
                                    <a href="#">
                                    <span class="material-icons-outlined  align-middle">
                                        login
                                    </span>
                                        <span class="morelist-text pl-2">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
            <!------ MORE-MODAL-END ------>
            <!------ MOBILE-FOOTER-CSS-END ------>
            <!------ MOBILE-SEARCH-BAR-MODAL-START ------>
            <div class="modal modal-full fade search-modal-bg show" id="search-modal" tabindex="-1" role="dialog"
                 aria-labelledby="search-modal" aria-modal="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="search-header Mobheader-fixed">
                            <div class="d-flex">
                                <div class="justfiy-content-start search-outer-wrap">
                                    <a href="#">
                                    <span>
                                   <i class="material-icons align-top" data-dismiss="modal">west</i>
                                        <input type="text" placeholder="Search" class="search-tabs align-top">
                                    </span>
                                        <button class="yellow-bg">SEARCH</button>
                                    </a>
                                </div>
                                <div class="ml-auto justify-content-end">
                                    <ul class="list-unstyled mb-0">

                                        <!-- <li class="d-inline-block align-top">
                                                <p class="mb-0"> <span class="material-icons  align-middle  pr-2">
                                                        filter_list
                                                    </span>Filter</p>
                                            </li> -->
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav nav-tabs delivery-tabs" id="deliveryTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" id="" data-toggle="tab" href="#Mobfood-tab" role="tab"
                                       aria-controls="Mobfood-tab" aria-selected="true">Food Items</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Mobuser-tab" data-toggle="tab" href="#users" role="tab"
                                       aria-controls="payment" aria-selected="false">Users</a>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-body p-0">
                            <div class="tab-content" id="deliveryTabContent">
                                <div class="tab-pane fade show active Mobfood-tab mobile-search-food" id="Mobfood-tab"
                                     role="tabpanel" aria-labelledby="Mobfood-tab-tab">
                                    <h6 class="result-found-wrap">2 Results</h6>
                                    <div class="d-flex mb-3">
                                        <div class="justify-content-start pr-2">
                                            <img class="search-img" src="assets/images/search-img1.jpg"
                                                 alt="search-img1">

                                        </div>
                                        <div class="justify-content-end">
                                            <h6 class="">Tuwo Rice (50kg)</h6>
                                            <!-- <h6>₦75,000</h6> -->
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="justify-content-start pr-2">
                                            <img class="search-img" src="assets/images/search-img2.jpg"
                                                 alt="search-img1">

                                        </div>
                                        <div class="justify-content-end">
                                            <h6 class="">Titus 20kg (Full Carton)
                                            </h6>
                                            <!-- <h6>₦75,000</h6> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade payment-bg" id="users" role="tabpanel"
                                     aria-labelledby="Mobuser-tab">
                                    <h6 class="mb-2">3 Results</h6>
                                    <div class="d-flex align-content-between flex-wrap myfollowers mb-4">
                                        <div class="p-2"><img class="follow-img" src="assets/images/followers1.jpg"
                                                              alt="follwers-img1"></div>
                                        <div class="p-2 align-self-center">
                                            <h6>Florence Jackson</h6>
                                        </div>
                                        <div class="ml-auto p-2 align-self-center"><a href="#"
                                                                                      class="follow-btn text-uppercase">Follow
                                            </a></div>
                                    </div>
                                    <div class="d-flex align-content-between flex-wrap myfollowers mb-4">
                                        <div class="p-2"><img class="follow-img" src="assets/images/followers1.jpg"
                                                              alt="follwers-img1"></div>
                                        <div class="p-2 align-self-center">
                                            <h6>Florence Jackson</h6>
                                        </div>
                                        <div class="ml-auto p-2 align-self-center"><a href="#"
                                                                                      class="follow-btn text-uppercase">Follow
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ MOBILE-SEARCH-BAR-MODAL-END ------>
        </div>
    </footer>
</main>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/multislider.js')}}"></script>
<script src="{{asset('assets/js/multislider.min.js')}}"></script>

<script>

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2.5
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

</script>

</body>

</html>
