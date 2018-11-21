<?php include('header.php'); ?>


<body class="" style="background-image:url('assets/img/school-bg.png');background-size:cover;">
    <div class="container">
        <div class="login-content mx-auto mt-5 pt-5">
            <div class="login-logo">
                <a href="#">
                    <img class="align-content" src="assets/img/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form action="login.php" method="" id="forgot_pass">
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
                    <button type="submit" class="btn btn-info btn-flat m-b-30 m-t-30">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>


<?php include('footer.php'); ?>

<script>
	$(document).ready(function() {
    $('#forgot_pass').bootstrapValidator({
        
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