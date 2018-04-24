    <div class="top">
        <div class="container">
            <div class="row">
                <div class=" search ui-widget">  
                   <?php if(Auth::check()): ?>
                    
                      <a class="login" href="<?php echo e(url('/dashboard')); ?>" style="font-size: 25px;">Dashboaerd </a>
                      		
                    
                    <?php else: ?>
     <div class="modal-content" style="margin-top: 100px; margin-left: 400px;">
      <div class="modal-header">

      </div>
      <div class="modal-body">
       <?php echo Form::open( array('url' => array('authenticate' ), 'id'=> 'login_form','method'=>'POST')); ?>

                
               
               <div class="form-group">
                     <label  for="email" style="margin-bottom: -13px;"> Please Enter Your Email Address  <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" style="margin-right: 20;" id="txt_user_check" placeholder="Please Enter Your Email Address" name="txt_user_check" >
                 </div>

                     </div>
                 </div>
             
              <div class="form-group">
                     <label  for="text" style="margin-bottom: -13px;"> Password<span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="password" style="margin-right: 20;" class="form-control" id="password" placeholder="Please Enter Your Password" name="password" >
                      </div> 

                      
   

                 <div class="col-xs-10 " id="login_result">  
                           
                      </div>
                </div>
                 </div>

             
              <button type="submit" style="margin-top: 20px;" class="btn btn-form">Login </button> 
             
             
          <?php echo Form::close(); ?>

        
      </div>
      <div class="modal-footer">
      </div>
    </div>
                    
                    <?php endif; ?>
                      
                    </div>
            </div>
        </div>
    </div>







<?php $__env->startSection('content'); ?>

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>