 </div>
 
     <?php    $lang = LaravelLocalization::getCurrentLocale();   ?> 


    
 

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/jquery/dist/jquery.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/bootstrap/dist/js/tether.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/bootstrap/dist/js/bootstrap.min.js')); ?>

 

 	<?php if($lang == "ar"): ?>

    	<?php echo e(Html::script('backend/assets/plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js')); ?>

	<?php else: ?>

    
    	<?php echo e(Html::script('backend/assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')); ?>


	<?php endif; ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/js/jquery.slimscroll.js')); ?>

 
 
    <?php echo e(Html::script('backend/assets/js/waves.js')); ?>

    <!--Counter js -->
 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js')); ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/counterup/jquery.counterup.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/raphael/raphael-min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/morrisjs/morris.js')); ?>

 
    <?php echo e(Html::script('backend/assets/js/custom.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/js/dashboard1.js')); ?>

 
 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')); ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/toast-master/js/jquery.toast.js')); ?>

  


    <!-- jGrid Tables  --> 
 
     <?php echo e(Html::script('backend/assets/plugins/bower_components/jsgrid/dist/jsgrid.min.js')); ?>

     


    <!-- jQuery peity -->
     <?php echo e(Html::script('backend/assets/plugins/bower_components/peity/jquery.peity.min.js')); ?>

     <?php echo e(Html::script('backend/assets/plugins/bower_components/peity/jquery.peity.init.js')); ?>


    <!-- Switchery --> 

  
    <?php echo e(Html::script('backend/assets/plugins/bower_components/switchery/dist/switchery.min.js')); ?>



    <!-- Dropfy -->
    <?php echo e(Html::script('backend/assets/plugins/bower_components/dropify/dist/js/dropify.min.js')); ?>




    <!-- Tiny Mce  --> 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/tinymce/tinymce.min.js')); ?>

  
    <script>
        
        tinymce.init({
          selector: 'textarea',
          height: 400,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help'
          ],
          toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });



      




    </script>



    <!-- Dropzone --> 
  
     <?php echo e(Html::script('backend/assets/plugins/bower_components/dropzone-master/dist/dropzone.js')); ?>


    <!-- Bootstrap select --> 

    <?php echo e(Html::script('backend/assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')); ?>


 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')); ?>



     <!-- jQuery for carousel --> 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/owl.carousel/owl.carousel.min.js')); ?>

    <?php echo e(Html::script('backend/assets/plugins/bower_components/owl.carousel/owl.custom.js')); ?>







     <!-- Sweet-Alert  -->
 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/sweetalert/sweetalert.min.js')); ?>

    <?php echo e(Html::script('backend/assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')); ?>


    <!-- end sweat alert --> 

    <!-- custom selects and plus --> 


      
    <?php echo e(Html::script('backend/assets/plugins/bower_components/custom-select/custom-select.min.js')); ?>

    
    <?php echo e(Html::script('backend/assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')); ?>

    
    <?php echo e(Html::script('backend/assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>

  
    <?php echo e(Html::script('backend/assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')); ?>

 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/multiselect/js/jquery.multi-select.js')); ?>

    
 
    <?php echo e(Html::script('backend/assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')); ?>

   
    <?php echo e(Html::script('backend/assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')); ?>


    <!-- Tabs Stylish -->
    <?php echo e(Html::script('backend/assets/js/cbpFWTabs.js')); ?>


    <script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>

    
    <script>
    $(document).ready(function() {


        

        
        // Basic
        // $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

    
     <!-- If we loved to add another scripts --> 
    <?php echo $__env->yieldContent('scripts'); ?>


</body>

 
</html>
