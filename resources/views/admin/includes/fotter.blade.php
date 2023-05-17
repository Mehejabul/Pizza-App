<footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix <span class="d-none d-sm-inline-block"></span>
                  <span class="mx-1">|</span>
                  <br class="d-sm-none" />2022 &copy; <a href="https://themewagon.com/">Themewagon</a>
                </p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.3.0</p>
              </div>
            </div>
          </footer>
     </div>
      </div>
    </main>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->






    <script src="{{asset('contents/admin')}}/vendors/popper/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/anchorjs/anchor.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/is/is.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/fontawesome/all.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/lodash/lodash.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/list.js/list.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/feather-icons/feather.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/dayjs/dayjs.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/phoenix.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/echarts/echarts.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/chart/chart.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/leaflet/leaflet.js"></script>
    <script src="{{asset('contents/admin')}}/vendors/list.js/list.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/ecommerce-dashboard.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/backend_custom.js"></script>

            //tostar notification
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.info("{{ Session::get('message') }}")
                break;
            case 'success':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.success("{{ Session::get('message') }}")
                break;
            case 'warning':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.warning("{{ Session::get('message') }}")
                break;
            case 'error':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.error("{{ Session::get('message') }}")
                break;
        }
    @endif
</script>
@stack('custom-script')

//delete
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.5/sweetalert2.all.min.js"></script>
<script>
    $(document).on("click", "#delete", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1
        }).then(function(t) {
            t.value ? window.location.href = link : t.dismiss === Swal.DismissReason.cancel &&
                Swal.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                })
        })
    });
</script>
//delete script end
  </body>
</html>
