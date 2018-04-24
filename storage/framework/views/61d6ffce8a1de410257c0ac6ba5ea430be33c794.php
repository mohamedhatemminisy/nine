

    <script src="<?php echo e(asset('frontend/assets/js/jquery-1.12.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/wow.min.js')); ?>"></script>    
      
           <script> new WOW().init();</script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-arabic.min.js')); ?>"></script>
            
    <script type="<?php echo e(asset('frontend/assets/js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-select.min.js')); ?>"></script>
    
     <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?> " type="text/javascript"></script>
        
        
     
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo e(asset('frontend/assets/js/app.min.js')); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo e(asset('frontend/assets/js/components-date-time-pickers.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('frontend/assets/js/file.js')); ?>"></script>

        <input type="hidden" id="after_login" value="<?php echo e(url('dashboard')); ?>">

    <!-- Login Form --> 
    <script>
 



         $('#login_form').on('submit', function(e){



              e.preventDefault();

            var token = $('input[name=_token]').val(); 


              var formData = {

                txt_user_check : $('#txt_user_check').val() , 

                password : $('#password').val() ,

                token:token 

              }; 

            

              $.ajax({

             headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

              url: $(this).attr('action'),

              type: 'POST',

              data: formData,

              dataType:'json', 

              beforeSend: function(){

                 

              },

              success: function (data) { 

  

                 

                if(data.status == 'work'){

                    console.log('hahahaha');

                        $('#Modal-login').modal('hide');
                        window.location.href ="<?php echo e(url('dashboard')); ?>"; 

                         
                }

                if(data.status == 'empty_txt_user_check'){
 
                    $('#login_result').html("<p class='text-center alert alert-danger'><?php echo e(trans('frontend.enter_email_or_phone')); ?></p>");

                }

                if(data.status == 'empty_password'){
 
                    $('#login_result').html("<p class='text-center alert alert-danger'><?php echo e(trans('frontend.enter_password')); ?></p>");

                }


                if(data.status == 'account_not_active'){
 
                    $('#login_result').html("<p class='text-center alert alert-danger'><?php echo e(trans('frontend.account_not_active')); ?></p>");

                }

                if(data.status == 'not_found'){

                    $('#login_result').html("<p class='alert alert-danger text-center'><?php echo trans('frontend.not_found') ;  ?><p>");

                }



              } , 

               



              }); 

              return false; 



          });

    </script>



      

    
    </body>
</html>