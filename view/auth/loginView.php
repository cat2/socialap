 <!-- page content -->
      <div class="offset3 span6">
        <div class="well">

        	<?php
        	if ( $_POST && false == $auth["return"] ) {

        	}


        	?>


        	<p>
        		Authentication failed!

        	</p>
      <form class="form-signin" action="index.php?q=auth&a=process" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>

        <input type="text" name="username" class="input-block-level" placeholder="Username">
        <input type="password" name="password" class="input-block-level" placeholder="Password">


        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
 </form>
        </div><!--/well-->

      </div><!--/span-->
      <!-- End page content -->