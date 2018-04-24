<?php $__env->startSection('page_title' , trans('backend.messages')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.messages')); ?></h4>
                    </div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

      <div class="col-md-12">



                         <div class="white-box">


                             <!-- row -->
                             <div class="row">
                             
                                   <button type="button" class="btn btn-info "  aria-expanded="false"><?php echo e(trans('backend.send_message')); ?></button>

                                   <br>
                                   <br>


                              




                                 <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 mail_listing" style="border: 0px">
                                     <div class="inbox-center">
                                         <table class="table table-hover color-table primary-table">

                                             <tbody>
                                                 <?php if($messages->count()>0): ?>
                                                 <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <tr class=<?php  echo $message->is_read =='not_read' ?"unread":" ";?>>

                                                    <td class="hidden-xs">

                                                    <img src="<?php echo e(Request::root()); ?>/uploads/users/<?php echo e($message->sender->profileImage); ?>"  style="height:40px ;width:40px;border:1px solid #03a9f3 " class="img-circle" >

                                                     </td>
                                                     <td class="hidden-xs"><?php echo e($message->sender->propertyName); ?></td>
                                                     <td class="max-texts"> <a href="<?php echo e(route('messages.show',$message->id)); ?>" />

                                                       <?php if($message->sender->userType =="user"): ?>
                                                      <span class="label label-info m-r-6"><?php echo e(trans('backend.user')); ?></span>

                                                       <?php elseif($message->sender->userType =="doctor"): ?>
                                                       <span class="label label-purple m-r-10"><?php echo e(trans('backend.doctor')); ?></span>
                                                       <?php elseif($message->sender->userType =="pharmacy"): ?>
                                                       <span class="label label-brown m-r-10"><?php echo e(trans('backend.pharmacy')); ?></span>
                                                       <?php elseif($message->sender->userType =="hospital"): ?>
                                                       <span class="label label-lightBlue m-r-10"><?php echo e(trans('backend.hospital')); ?></span>
                                                       <?php elseif($message->sender->userType =="medicalSupplies"): ?>
                                                       <span class="label label-dark m-r-10"><?php echo e(trans('backend.medical_supply')); ?></span>
                                                        <?php elseif($message->sender->userType =="pharmaCompany"): ?>
                                                        <span class="label label-success m-r-10"><?php echo e(trans('backend.pharma_company')); ?></span>
                                                        <?php elseif($message->sender->userType =="adminstrator"): ?>
                                                        <span class="label label-yellow m-r-6"><?php echo e(trans('backend.adminstrator')); ?></span>


                                                       <?php endif; ?>

                                                     </td>
                                                     <td>
                                                     <?php echo e($message->message); ?>

                                                     </td>

                                                     <td class="text-right"><?php echo e(date('l, F jS Y' , strtotime($message->created_at))); ?></td>


                                                 </tr>

                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                              <?php else: ?>
                                                <tr>

                                                <td class="text-center">there is no messages</td>
                                                </tr>



                                              <?php endif; ?>


                                             </tbody>
                                         </table>
                                     </div>


                                 </div>
                             </div>
                             <!-- /.row -->

                         </div>
                     </div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>