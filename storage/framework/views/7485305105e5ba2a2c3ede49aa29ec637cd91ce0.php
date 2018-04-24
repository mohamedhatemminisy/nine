<?php $__env->startSection('page_title' , trans('visitorsMessages.reply')); ?>

<?php $__env->startSection('breadcrumb'); ?>

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('visitorsMessages.reply')); ?></h4>
                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




  <div class="col-sm-12">
              <div class="white-box">
                  <h3 class="box-title m-b-0"></h3>
                  <p class="text-muted m-b-30 font-13"> <?php echo e(trans('visitorsMessages.reply')); ?> </p>
                  <div class="row">
                      <div class="col-sm-12 col-xs-12">
                         <section class="m-t-40">
                          <div class="sttabs tabs-style-iconbox">
                              <nav>
                                  <ul>

                                          <li><a href="ar"  ><span> &nbsp;AR</span></a></li>


                                  </ul>
                              </nav>


                                <form action="/visitorsMessages/reply" method="post" class="form-horizontal"  role="form" >
                                  <div class="content-wrap">

                                          <?php echo e(csrf_field()); ?>


                                  <section class="active" id="ar">





                                        <div class="form-group">
                                               <label for=""><?php echo e(trans('visitorsMessages.message')); ?></label>
                                                    <div class="input-group">

                                                     <textarea class="form-control" name="other" id="textarea_description" placeholder="<?php echo e(trans('hospital.other')); ?>">
                                                     </textarea>
                                                      <input name="id" type="hidden" value="<?php echo e($id); ?>">
                                                     </div>
                                         </div>



                                  </section>

                                  </div>
                                  <!-- /content -->




                                 <div class="form-group">
                                       <div class="col-md-12">
                                      <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><?php echo e(trans('backend.add')); ?></button>
                                      

                                  </div>
                                  </div>



                                 </form>



                          </div>
                          <!-- /tabs -->
                      </section>
                      </div>
                  </div>
              </div>
          </div>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>