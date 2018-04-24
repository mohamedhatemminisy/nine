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

 
    <!-- The Most Stupid Select i have ever seen  --> 

    <script>
      

         var user_type = 'hospital' ; 
     


        $('#specialization').on('change' , function(){
    
            if($(this).val() == "hospital"){
                
               user_type = 'hospital' ; 
            

            }else if($(this).val() == "medicalSupplies"){
               user_type = 'medicalSupplies' ; 
             
            }else if($(this).val() == "pharmacy"){
               user_type = 'pharmacy' ;
           
            }else if($(this).val() == "pharmaCompany"){
               user_type = 'pharmaCompany' ;
               
            }else{
               user_type = 'doctor' ;
               
            }
            
        });


    </script>

    <!-- Other Types Registration --> 
     <script>

         $('#register_form').on('submit', function(e){



              e.preventDefault();

              var token = $('input[name=_token]').val(); 

              var formData = {

                user_type:user_type,

                propertyName:$('#propertyName').val() , 

                mobileNumber:$('#mobileNumber').val(), 

                email:$('#email').val(), 

                website:$('#website').val(), 

                branchName:$('#branchName').val(), 

                password:$('#password').val(), 

                businessRecordNumber:$('#businessRecordNumber').val(), 

                headPersonName:$('#headPersonName').val() , 


                longitude:$('#longitude').val() , 

                latitude:$('#latitude').val() , 

                

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

                

                
                  if(data.status == 'success'){

                      // $('#selector').delay(5000).fadeOut('slow');

                     $('#register_result').html("<p class='text-center alert alert-success'><?php echo e(trans('frontend.registration_success')); ?></p>").delay(3000).fadeOut('slow');

                     // $('#register_form').reset(); 

                     $('#register_form').each(function(){
                          this.reset();
                      });

                      

                      setTimeout(function(){ 

                          window.location.href = "<?php echo e(url('dashboard')); ?>"; 

                      }, 3000);

                          


               

                     

                  }
                 

                 

               



              } , 

               



              }); 

              return false; 

             



          }); 
     </script>

    <!-- Doctor Registration --> 
      <script>
 
       



         $('#doctor_register_form').submit( function(e){



              e.preventDefault();

              var token = $('input[name=_token]').val(); 

              var formData = {

                user_type:user_type , 

                doctorName:$('#doctorName').val() , 

                doctorMobileNumber:$('#doctorMobileNumber').val(), 

                doctorEmail:$('#doctorEmail').val(), 

                doctorWebsite:$('#doctorWebsite').val(), 

                proffestionPracticeNumber:$('#proffestionPracticeNumber').val(), 

                doctorHospitalRelatedTo:$('#doctorHospitalRelatedTo').val(), 

                doctorSpecialization:$('#doctorSpecialization').val(), 

                docPassword:$('#doctorPassword').val(),

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

                

                
                  if(data.status == 'success'){

                      // $('#selector').delay(5000).fadeOut('slow');

                     $('#register_result_doctor').html("<p class='text-center alert alert-success'><?php echo e(trans('frontend.registration_success')); ?></p>").delay(3000).fadeOut('slow');

                     // $('#register_form').reset(); 

                     $('#doctor_register_form').each(function(){
                          this.reset();
                      });

                      

                      setTimeout(function(){ 

                          window.location.href = "<?php echo e(url('dashboard')); ?>"; 

                      }, 3000);

                          


               

                     

                  }
                 

                 

               



              } , 

               



              }); 

              return false; 

             



          });

        </script>

    
    </body>
</html>