<!DOCTYPE html>
<html lang="en-us">

<head>
  @include('front.include.header_asset')

  @stack('style')

  <style>
    /* this style are dynamic with theme  */
   .theme-background
   {
      background: {{ $shop_info->theme_color }} !important;
   }
   .theme-color
   {
     color : {{ $shop_info->theme_color }} !important;
   }
   .theme-hover-bg : hover {

    background: {{ $shop_info->theme_color }} !important;
   }
   .theme-hover-color : hover {
    color : {{ $shop_info->theme_color }} !important;
   }
   .initially_selected .parent_a
   {
     color : {{ $shop_info->theme_color }} ;
   }
   .active_color  > a
   {
     color : {{ $shop_info->theme_color }} ;
   }

   .my-radio
    {
        display: none;
    }



  </style>

  <!-- google analytics  -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5ZM3GTN6JF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5ZM3GTN6JF');
</script>
</head>

<body id="app_body" >

      <div id="front-wrapper">
    <header class="header theme-background">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-1 col-sm-1">
                    <div class="left-menu-toggle">
                        <a id="sidebarCollapse" href="#" class="toggle-nav btn-nav nav-toggle-btn">
                            <i class="lni-menu"></i>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-sm-2 ">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ url('images/logo/'.$shop_info->logo_header) }}" alt="logo" class="img-fluid"></a>
                    </div>
                </div>
              <!-- for mobile  -->
                <div class="d-sm-none d-md-none d-lg-none col col-lg-3 col-sm-3 text-center">
                    <div class="user-menu">
                        <a href="#">
                            <i class="lni lni-user" style="font-size: 20px"></i>
                        </a>
                        <ul class="dropdown-menu1">
                            @auth
                            <li><a href="{{ route('user.profile') }}"><span>Profile</span></a></li>
                            <li><a href=""><span>My Orders</span></a></li>
                            <li><a href="{{ route('user.logout') }}"><span>Logout</span></a></li>
                            @endauth
                            @guest
                            <li><a href="{{ route('login') }}"><span>Sign in</span></a></li>
                            <!-- <li><a href="{{ route('register') }}"><span>Sign up</span></a></li>                             -->
                            @endguest
                            <li><a href="">Track Order</a></li>
                        </ul>
                    </div>
            </div>
            <!-- end mobile profile  -->
            <div class="col-12 col-lg-6 col-sm-6">
              <search-box></search-box>
            </div>
            <div class="d-none d-sm-block col-3 col-lg-3 col-sm-3 text-center">
                    <div class="user-menu">
                        <a href="#">
                            <i class="lni lni-user" style="font-size: 20px"></i>
                        </a>
                        <ul class="dropdown-menu1">
                            @auth
                            <li><a href="{{ route('user.profile') }}"><span>Profile</span></a></li>
                            <li><a href="{{ route('user.logout') }}"><span>Logout</span></a></li>
                            @endauth
                            @guest
                            <li><a href="{{ route('login') }}"><span>Sign in</span></a></li>
                            <li><a href="{{ route('register') }}"><span>Sign up</span></a></li>
                            @endguest
                            <li><a href="">Track Order</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</header>
    @yield('content')
</div>

<!-- End Back To Top Button -->
    <script>
        var base_url = "{{ url('/') }}"+'/';
    </script>
<!--jquery js-->
<script src="{{ asset('assets/js/jquery-3.4.1.js') }}"></script>
<!--boostrap js-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--popper js-->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<!--swiper js-->
<script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
<!--magnific js-->
<script src="{{ asset('assets/js/magnific.js') }}"></script>
<!--main js-->
<script src="{{ asset('assets/js/main.js') }}"></script>


@stack('script')



</script>

<!-- Messenger Plugin de discussion Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106991728462120");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

<script type="text/javascript">
    // Initialize the service worker
    // if ('serviceWorker' in navigator) {
    //     navigator.serviceWorker.register('/serviceworker.js', {
    //         scope: '.'
    //     }).then(function (registration) {
    //         // Registration was successful
    //         // console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
    //     }, function (err) {
    //         // registration failed :(
    //         // console.log('Laravel PWA: ServiceWorker registration failed: ', err);
    //     });
    // }
</script>
</body>

</html>
