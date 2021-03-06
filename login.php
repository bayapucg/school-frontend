<?php include('header.php'); ?>

<body class="" style="background-image:url('assets/img/school-bg.png');background-size:cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="login-content mx-auto mt-5 pt-5">
            <div class="login-logo" style="">
                <img class="align-content" src="assets/img/logo.png" alt="Prachatech" >
            </div>
            <div class="login-form">
                <form method="" action="" id="login_form">
					 <div class="form-group">
						<label class="control-label" >
						Email ADDRESS
					  </label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
							<input type="email" id="lf_email" name="lf_email" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" >
						PASSWORD
					  </label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-key" aria-hidden="true"></i>
							</div>
							<input type="password" id="lf_password" name="lf_password" class="form-control" placeholder="Password">
						</div>
					</div>                   
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a href="forgot_password.php">Forgot Password?</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include('footer.php'); ?>

<script>
	$(document).ready(function() {
    $('#login_form').bootstrapValidator({
        
        fields: {
            lf_email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter email'
                    }
                }
            },
            lf_password: {
                validators: {
                    notEmpty: {
                        message: 'Please enter password'
                    }
                }
            }
            }
        })
     
    });
</script>
