@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

            <!-- <div class="card mt-3">
                 <div class="card-content">
                     <div class="row row-group m-0">
                         <div class="col-12 col-lg-6 col-xl-3 border-light">
                             <div class="card-body">
                                 <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                                 <div class="progress my-3" style="height:3px;">
                                     <div class="progress-bar" style="width:55%"></div>
                                 </div>
                                 <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                             </div>
                         </div>
                         <div class="col-12 col-lg-6 col-xl-3 border-light">
                             <div class="card-body">
                                 <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                                 <div class="progress my-3" style="height:3px;">
                                     <div class="progress-bar" style="width:55%"></div>
                                 </div>
                                 <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                             </div>
                         </div>
                         <div class="col-12 col-lg-6 col-xl-3 border-light">
                             <div class="card-body">
                                 <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                                 <div class="progress my-3" style="height:3px;">
                                     <div class="progress-bar" style="width:55%"></div>
                                 </div>
                                 <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                             </div>
                         </div>
                         <div class="col-12 col-lg-6 col-xl-3 border-light">
                             <div class="card-body">
                                 <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                                 <div class="progress my-3" style="height:3px;">
                                     <div class="progress-bar" style="width:55%"></div>
                                 </div>
                                 <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>-->

             <div class="row">
                 <div class="col-12 col-lg-3 col-xl-3">
                     <div class="card">
                         <div class="card-header"><h5>Total Restaurants</h5>

                         </div>
                         <div class="card-body">
                             <div class="chart-container-2">
                                 <h3>100</h3>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="col-12 col-lg-3 col-xl-3">
                     <div class="card">
                         <div class="card-header"><h5>Total Menus</h5>

                         </div>
                         <div class="card-body">
                             <div class="chart-container-2">
                                 <h3>200</h3>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="col-12 col-lg-3 col-xl-3">
                     <div class="card">
                         <div class="card-header"><h5>Total Brands</h5>

                         </div>
                         <div class="card-body">
                             <div class="chart-container-2">
                                 <h3>50</h3>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="col-12 col-lg-3 col-xl-3">
                     <div class="card">
                         <div class="card-header"><h5>Total Categories</h5>

                         </div>
                         <div class="card-body">
                             <div class="chart-container-2">
                                 <h3>50</h3>
                             </div>
                         </div>

                     </div>
                 </div>
             </div><!--End Row-->

            <div class="row" style="height: 500px;">


                <img src="{{ asset('assets/images/logo-icon.png')}}" class="" width="350px;" style="margin:auto;" height="280px;" alt="logo icon">



            </div>

           <!--End Dashboard Content-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
@endsection
