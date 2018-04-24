 
<!-- Header Shall Comes  Here  --> 


<?php echo $__env->make('backend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Navigation Shall Comes  Here --> 

<?php echo $__env->make('backend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Sidebar Shall Comes Here  --> 
<?php echo $__env->make('backend.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">



                
                <!-- Bread Crumb Start   --> 
                
                <div class="row bg-title">

                    <!-- Yielding Breadcrumb --> 
                    <?php echo $__env->yieldContent('breadcrumb'); ?>



                </div>

                <!-- Bread Crumb End  --> 



                <!-- Messages Shall Comes Here  --> 

                <?php echo $__env->make('backend.partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                <!-- /.row -->
                <div class="row">
                    
 
                            <!-- Yielding main content --> 
                            <?php echo $__env->yieldContent('content'); ?>

 
                </div>
                <!--row -->

 




            </div>
            <!-- /.container-fluid -->







            <footer class="footer text-center"> <?php echo e(trans('backend.footer_copyright')); ?> </footer>
        </div>
        <!-- /#page-wrapper -->



    <!-- Footer Shall Comes Here --> 

    <?php echo $__env->make('backend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


   