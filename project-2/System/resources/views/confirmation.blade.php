<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>aranaz</title>
  <link rel="icon" href="{{ url('public') }}/assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/owl.carousel.min.css">
  <!-- nice select CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/nice-select.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/flaticon.css">
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/magnific-popup.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/slick.css">
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/price_rangs.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="{{ url('pubic') }}/css/style.css">
</head>

<body>
  <!--::header part start::-->
  <header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="{{ url('public') }}/assets/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url(' /)}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="{{url('produc_1')}}"> shop category</a>
                                    <a class="dropdown-item" href="{{url('produc_2')}}">product details</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="{{url('login')}}">
                                    <a class="dropdown-item" href="{{url('tracking')}}">tracking</a>
                                    <a class="dropdown-item" href="{{url('checkout')}}">checkout</a>
                                    <a class="dropdown-item" href="{{url('cart')}}">shopping cart</a>
                                    <a class="dropdown-item" href="{{url('confirmation')}}">confirmation</a>
                                    <a class="dropdown-item" href="{{url('elements')}}">elements</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="blog.html"> blog</a>
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact'}}")>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
  <!-- Header part end-->

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Order Confirmation</h2>
              <p>Home <span>-</span> Order Confirmation</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================ confirmation part start =================-->
  <section class="confirmation_part padding_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <span>Thank you. Your order has been received.</span>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>order info</h4>
            <ul>
              <li>
                <p>order number</p><span>: 60235</span>
              </li>
              <li>
                <p>data</p><span>: Oct 03, 2017</span>
              </li>
              <li>
                <p>total</p><span>: USD 2210</span>
              </li>
              <li>
                <p>mayment methord</p><span>: Check payments</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Billing Address</h4>
            <ul>
              <li>
                <p>Street</p><span>: 56/8</span>
              </li>
              <li>
                <p>city</p><span>: Los Angeles</span>
              </li>
              <li>
                <p>country</p><span>: United States</span>
              </li>
              <li>
                <p>postcode</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>shipping Address</h4>
            <ul>
              <li>
                <p>Street</p><span>: 56/8</span>
              </li>
              <li>
                <p>city</p><span>: Los Angeles</span>
              </li>
              <li>
                <p>country</p><span>: United States</span>
              </li>
              <li>
                <p>postcode</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>Order Details</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">Subtotal</th>
                  <th> <span>$2160.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">shipping</th>
                  <th><span>flat rate: $50.00</span></th>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th scope="col" colspan="3">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ confirmation part end =================-->

  <!--::footer_part start::-->
  <footer class="footer_part">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Top Products</h4>
            <ul class="list-unstyled">
              <li><a href="">Managed Website</a></li>
              <li><a href="">Manage Reputation</a></li>
              <li><a href="">Power Tools</a></li>
              <li><a href="">Marketing Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
              <li><a href="">Jobs</a></li>
              <li><a href="">Brand Assets</a></li>
              <li><a href="">Investor Relations</a></li>
              <li><a href="">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Features</h4>
            <ul class="list-unstyled">
              <li><a href="">Jobs</a></li>
              <li><a href="">Brand Assets</a></li>
              <li><a href="">Investor Relations</a></li>
              <li><a href="">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Resources</h4>
            <ul class="list-unstyled">
              <li><a href="">Guides</a></li>
              <li><a href="">Research</a></li>
              <li><a href="">Experts</a></li>
              <li><a href="">Agencies</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="single_footer_part">
            <h4>Newsletter</h4>
            <p>Heaven fruitful doesn't over lesser in days. Appear creeping
            </p>
            <div id="mc_embed_signup">
              <form target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="subscribe_form relative mail_part">
                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                  class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = ' Email Address '">
                <button type="submit" name="submit" id="newsletter-submit"
                  class="email_icon newsletter-submit button-contactForm">subscribe</button>
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="copyright_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="copyright_text">
              <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer_icon social_icon">
              <ul class="list-unstyled">
                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="{{ url('public') }}/assets/js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="{{ url('public') }}/assets/js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{ url('public') }}/assets/js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="{{ url('public') }}/assets/js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="{{ url('public') }}/assets/js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="{{ url('public') }}/assets/js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="{{ url('public') }}/assets/js/owl.carousel.min.js"></script>
  <script src="{{ url('public') }}/assets/js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
  <script src="{{ url('public') }}/assets/js/jquery.counterup.min.js"></script>
  <script src="{{ url('public') }}/assets/js/waypoints.min.js"></script>
  <script src="{{ url('public') }}/assets/js/contact.js"></script>
  <script src="{{ url('public') }}/assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="{{ url('public') }}/assets/js/jquery.form.js"></script>
  <script src="{{ url('public') }}/assets/js/jquery.validate.min.js"></script>
  <script src="{{ url('public') }}/assets/js/mail-script.js"></script>
  <script src="{{ url('public') }}/assets/js/stellar.js"></script>
  <script src="{{ url('public') }}/assets/js/price_rangs.js"></script>
  <!-- custom js -->
  <script src="{{ url('public') }}/assets/js/custom.js"></script>
</body>

</html>

</html>

</html>

</html>

</html>

</html>