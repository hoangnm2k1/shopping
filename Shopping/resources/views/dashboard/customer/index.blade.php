<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .card img {
            width: 200px;
            height: 240px;
            padding-top: 20px;
        }
        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ads img {
            width: 380px;
            height: 100%;
            padding-top: 11px;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
              @include('layout.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="content row">
                    <div class="col-3 ads">
                        <img src="https://vcdn1-dulich.vnecdn.net/2020/04/16/anh-dat-giai-Sony-1-1587009848.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=O7hu1g2gFA3caVMjCv_kxQ" alt="">
                    </div>
                    <div class="col-9 d-flex flex-wrap">
                        @foreach ($products as $product)
                            <div class="w-25 p-2">
                                <form class="card" action="{{ route('cart.addToCartProduct') }}" method="get">
                                 @csrf
                                    <div class="img-container">
                                        <img class="card-img-top" src="{{asset('uploads/'.$product->img_url)}}" alt="Card image cap">
                                    </div>
                                    <input type="hidden" name="hidden_id" value="{{ $product->id }}">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$product->name }}</h5>
                                      <p class="card-text">{{$product->price}}</p>
                                      <button class="btn btn-primary">Add to cart</button>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layout.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('dashboard/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ URL::asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ URL::asset('dashboard/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
