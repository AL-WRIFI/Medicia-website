<!-- BEGIN: Vendor JS-->

@vite([
  // 'resources/assets/vendor/libs/jquery/jquery.js',
  // 'resources/assets/vendor/libs/popper/popper.js',
  // 'resources/assets/vendor/js/bootstrap.js',
  // 'resources/assets/vendor/libs/node-waves/node-waves.js',
  // 'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
  // 'resources/assets/vendor/libs/hammer/hammer.js',
  // 'resources/assets/vendor/libs/typeahead-js/typeahead.js',
  // 'resources/assets/vendor/js/menu.js'

  'resources/assets/vendor/home/js/jquery-3.4.1.min.js',
  'resources/assets/vendor/home/js/jquery-ui.js',
  'resources/assets/vendor/home/js/popper.min.js',
  'resources/assets/vendor/home/js/bootstrap.min.js',
  'resources/assets/vendor/home/js/magnific-popup.min.js',
  'resources/assets/vendor/home/js/owl.carousel.min.js',
  'resources/assets/vendor/home/js/owl.carousel2.thumbs.min.js',
  'resources/assets/vendor/home/js/isotope.pkgd.min.js',
  'resources/assets/vendor/home/js/masonry.pkgd.min.js',
  'resources/assets/vendor/home/js/imagesloaded.pkgd.min.js',
  'resources/assets/vendor/home/js/countdown.js',
  'resources/assets/vendor/home/js/gmaps.min.js',
  'resources/assets/vendor/home/js/mCustomScrollbar.js',
  'resources/assets/vendor/home/js/custom.js',
])

@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
@vite(['resources/assets/js/main.js'])

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
