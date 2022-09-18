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
    <script src="{{asset('contents/admin')}}/vendors//popper/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//anchorjs/anchor.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//is/is.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//fontawesome/all.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//lodash/lodash.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//list.js/list.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//feather-icons/feather.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//dayjs/dayjs.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/phoenix.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//echarts/echarts.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//chart/chart.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//list.js/list.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//leaflet/leaflet.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="{{asset('contents/admin')}}/vendors//leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/ecommerce-dashboard.js"></script>
  </body>
</html>
