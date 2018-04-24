 
<!-- Header Shall Comes  Here  --> 


@include('backend.partials.header')


<!-- Navigation Shall Comes  Here --> 

@include('backend.partials.navigation')

<!-- Sidebar Shall Comes Here  --> 
@include('backend.partials.sidebar')




 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">



                
                <!-- Bread Crumb Start   --> 
                
                <div class="row bg-title">

                    <!-- Yielding Breadcrumb --> 
                    @yield('breadcrumb')



                </div>

                <!-- Bread Crumb End  --> 



                <!-- Messages Shall Comes Here  --> 

                @include('backend.partials.messages')


                <!-- /.row -->
                <div class="row">
                    
 
                            <!-- Yielding main content --> 
                            @yield('content')

 
                </div>
                <!--row -->

 




            </div>
            <!-- /.container-fluid -->







            <footer class="footer text-center"> {{ trans('backend.footer_copyright') }} </footer>
        </div>
        <!-- /#page-wrapper -->



    <!-- Footer Shall Comes Here --> 

    @include('backend.partials.footer')


   