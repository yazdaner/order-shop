
<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

<!-- All vendor & plugins & active js include here -->
<!--All Vendor Js -->
<!--<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>-->
<!--<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>-->
<!--<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>-->
<script src="{{asset('assets/js/vendor.js')}}"></script>
<!-- Active Js -->
<script src="{{asset('assets/js/active.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@include('Common::layouts.feedbacks')
@yield('script')
