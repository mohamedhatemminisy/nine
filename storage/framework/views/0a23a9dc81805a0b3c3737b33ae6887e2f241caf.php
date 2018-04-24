<?php $__env->startSection('page_title' , trans('Eployees attendance')); ?>

<?php $__env->startSection('breadcrumb'); ?>


          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('Eployees attendance')); ?></h4>
                    </div>

                  



<?php $__env->stopSection(); ?>  

    <style>
      #map {
        height: 100%;
      }
    </style>


<?php $__env->startSection('content'); ?>
          
    <div class="col-sm-12">
    <div class="white-box">
    
    <div class="table-responsive">
        <table class="table   table-hover color-table table-bordered primary-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(trans('Employee')); ?></th>

                    <th><?php echo e(trans('comeing time')); ?></th>
                  
                    <th><?php echo e(trans('leaving time')); ?></th>
                    <th><?php echo e(trans('location')); ?></th>
                     <th class="text-nowrap"><?php echo e(trans('action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

              <?php if($attendance->count()): ?>
                  
                <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($attend->user->Fname); ?>

                            </td>
                             

                             <td>
                               <?php echo e($attend->in); ?>

                            </td>

                            <td>
                               <?php echo e($attend->out); ?>

                            </td>

                            <td>
                              <div id="map"></div>
                                <script>
                                  var map;
                                  function initMap() {
                                    map = new google.maps.Map(document.getElementById('map'), {
                                      center: {lat: <?php echo e($attend->latitude); ?>, lng: <?php echo e($attend->longitude); ?> },
                                      zoom: 8
                                    });
                                  }
                                </script>
                                 <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq5Gd0155-1knCljt8tJFY6LbikeQ7kLA&callback=initMap">
                                 </script>
                            </td>

                            
                         <td class="text-nowrap">


                            <a onclick="$('.main_cat_<?php echo e($attend->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>

                            <?php echo Form::open(['url'=>["deleteAttend/$attend->id" ] , 'class'=>"main_cat_$attend->id" ]); ?>


                            <?php echo method_field('DELETE'); ?>

                            <?php echo Form::close(); ?>

                            
                        </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
            
            <tr>
              <td colspan="7" class="text-center"><?php echo e(trans('no messages')); ?></td>
            </tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>