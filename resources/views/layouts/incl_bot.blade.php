<!-- jQuery -->
<script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>

<!-- gauge.js -->
<script src="{{asset('assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>



<!-- Custom Theme Scripts -->
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script>
  $(".delete").on("submit",function(){
    return confirm("Anda Yakin Ingin Menghapus Data ?")
  })
</script>