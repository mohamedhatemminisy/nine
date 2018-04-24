<?php $__env->startSection('page_title' , trans('advert.advert_type')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('advert.create_advert_type')); ?></h4> 
                    </div>


<?php $__env->stopSection(); ?>  


<?php  
    
    $lang = LaravelLocalization::getCurrentLocale(); 

    $laguage = \App\Language::where(['label'=>$lang])->first(); 


    $language_id = $laguage->id ; 

  
 ?> 

<?php $__env->startSection('content'); ?>


  <div class="col-sm-12">
              <div class="white-box">
                  <h3 class="box-title m-b-0"></h3>
                  <p class="text-muted m-b-30 font-13"> <?php echo e(trans('advert.create_advert_type')); ?> </p>
                  <div class="row">
                      <div class="col-sm-12 col-xs-12">
                         <section class="m-t-40">
                          <div class="sttabs tabs-style-iconbox">
 




                      <?php echo Form::open(['route'=>['advType.store'],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_option']); ?>

                                  

                                  

                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('advert.type_name_ar')); ?></label> 
                                          <div class="input-group">

                                              <input type="text" class="form-control" name="type_name_ar"
                                                     placeholder="<?php echo e(trans('advert.type_name_ar')); ?>">
     
                                          </div>
                                      </div>


                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('advert.type_name_en')); ?></label>  
                                          <div class="input-group">

                                              <input type="text" class="form-control" name="type_name_en"
                                                     placeholder="<?php echo e(trans('advert.type_name_en')); ?>">
     
                                          </div>
                               </div>




                                 <div class="form-group">
                                       <div class="col-md-12">
                                      <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><?php echo e(trans('backend.add')); ?></button>
                                      <button type="reset" class="btn btn-inverse waves-effect waves-light"><?php echo e(trans('backend.reset')); ?></button>

                                  </div>
                                  </div>



                                  <?php echo Form::close(); ?>

                     

                          </div>
                          <!-- /tabs -->
                      </section>
                      </div>
                  </div>
              </div>
          </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>