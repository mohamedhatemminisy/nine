
    <div class="top">
        <div class="container">
            <div class="row">
                <div class=" search ui-widget">  
                   <?php if(Auth::check()): ?>
                    
                      <a class="login" href="<?php echo e(url('/dashboard')); ?>" style="font-size: 25px;">Dashboaerd </a>
                      		
                    
                    <?php else: ?>



<style type="text/css">
    
.header ,
.nav ,
.footer,
.sticky{
    display: none;
}

</style>


<style type="text/css">
    
    .login{
            background: url(<?php echo e(asset("uploads/04.png")); ?>);
            background-size:cover

    }
    .overlay::before{
             background: rgba(0, 0, 0, 0.15);
    }


/* -------------------------------------------------------
                    Login
-------------------------------------------------------- */
.login {
  padding-top: 100px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    
}
.login .login-form .logo {
  width: 150px;
  margin: auto;
}
.login .login-form input {
  display: block;
  margin: auto;
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
          box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
  width: 300px;
  font-weight: 400;
  padding: 8px 20px;
  border: none;
  border-radius: 30px;
}
.login .login-form .button {
  background-color: #fff;
  border-radius: 30px;
  color: #000;
  font-weight: 400;
}

/* -------------------------------------------------------
                    Classes To Extend
-------------------------------------------------------- */
.login {
  background-size: cover;
  background-repeat: no-repeat;
}

/*# sourceMappingURL=style.css.map */

</style>

 <!-- ====== login ======  -->
    <section class="login overlay">
      <div class="container">
        <div class="row">

          <div class="login-form text-center v-middle">
            <div class="info">
                <h1> <span style="font-family: 'Coda', cursive;color:rgba(70, 70, 70, 0.70);font-size: 45px">  </span>
                <br><br> </h1>
              </div>
            <div class="logo mb-30">

              
            </div>
            <div>
       <?php echo Form::open( array('url' => array('authenticate' ), 'id'=> 'login_form','method'=>'POST')); ?>

                
               
               <div class="form-group">
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="txt_user_check" placeholder="Please Enter Your Email Address" name="txt_user_check" >
                 </div>
            
                     </div>
                 </div><br>
             
              <div class="form-group">
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="password" class="form-control" id="password" placeholder="Please Enter Your Password" name="password" >
                      </div> 

                      
           

                 <div class="col-xs-10 " id="login_result">  
                           
                      </div>
                </div>
                 </div>
 <br>
             
              <button type="submit" class="btn btn-form" style="margin-left: 650px;
">Login </button> 
             
             
          <?php echo Form::close(); ?>

        </div>
      </div>
    </section>
    <!-- ====== ./ login ======  -->
                    <?php endif; ?>
                      
                    </div>
            </div>
        </div>
    </div>


