<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title> Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="http://localhost/web/assets/login/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="http://localhost/web/assets/login/css/styles.css" rel="stylesheet">
	</head>
	<body>
  <?php echo validation_errors();?>
  <?php echo form_open('account/login')?>
  <?php echo $this->session->flashdata('notification')?>
	
	</br>
	</br>
	</br>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
         <!--  <form class="form col-md-12 center-block" action="proseslogin.php" method="POST"> -->
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" id="username" name="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" id="password" name="password">
            </div>

            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Login</button>
            </div>
          <!-- </form> -->
      </div>
      <div class="modal-footer">
          
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="http://localhost/web/assets/login/js/jquery-1.11.1.min"></script>
		<script src="http://localhost/web/assets/login/js/bootstrap.min.js"></script>
	</body>
</html>