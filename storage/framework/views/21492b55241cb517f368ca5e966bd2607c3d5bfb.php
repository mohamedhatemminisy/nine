<?php $__env->startSection('page_title' , trans('backend.dashboard_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.dashboard_module')); ?></h4> 
                         <button type="button" class="btn btn-primary"> <a href="<?php echo e(url('/')); ?>" style="color:#FFF" >  <?php echo e(trans('backend.home')); ?> </a> </button>
                          <button type="button" class="btn btn-info">   <a href="<?php echo e(route('about')); ?>" style="color:#FFF" >   <?php echo e(trans('about.about_sidebar')); ?> </a> </button>
                    </div>

                  



<?php $__env->stopSection(); ?>  
 <?php 

    $lang = LaravelLocalization::getCurrentLocale();

    $laguage = \App\Language::where(['label'=>$lang])->first();


    $language_id = $laguage->id ;




 ?>


<?php $__env->startSection('content'); ?>



<!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

          <h1 class="mt-5">

            <?php if($lang == "en"): ?>

           Welcome To Dashboard =>  [ <?php echo e(Auth::user()->Name); ?> ] 

           <?php elseif($lang == "ar"): ?>

           مرحبا بك في لوحه التحكم  [ <?php echo e(Auth::user()->Name); ?> ] 


           <?php endif; ?> 

         </h1>
         


    <button type="button" class="btn btn-primary"> <a href="<?php echo e(route('user.create')); ?>" style="color:#FFF" >  <?php echo e(trans('backend.create_user')); ?> </a> </button>


    <button type="button" class="btn btn-success"> <a href="<?php echo e(route('catogrie.create')); ?>" style="color:#FFF" >   <?php echo e(trans('backend.create_cat')); ?> </a></button>

    <button type="button" class="btn btn-info">   <a href="<?php echo e(route('product.create')); ?>" style="color:#FFF" >   <?php echo e(trans('backend.create_product')); ?> </a> </button>

    <button type="button" class="btn btn-warning"> <a href="<?php echo e(route('news.create')); ?>" style="color:#FFF" >   <?php echo e(trans('backend.create_news')); ?> </a> </button>

    <button type="button" class="btn btn-danger">  <a href="<?php echo e(route('careers.create')); ?>" style="color:#FFF" >   <?php echo e(trans('backend.create_careers')); ?> </a> </button>

    <button type="button" class="btn">   <a href="<?php echo e(route('partners.create')); ?>" style="color:black" >  <?php echo e(trans('backend.create_partners')); ?> </a> </button>

    <button type="button" class="btn btn-default"> <a href="<?php echo e(route('testimonials.create')); ?>" style="color:black" >   <?php echo e(trans('backend.create_testimonials')); ?> </a> </button>

                 
           
        </div>
      </div>
    </div>
					
					 

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>