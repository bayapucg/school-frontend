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
                        <label>Email address</label>
                        <input type="email" id="fp_email" name="fp_email" class="form-control" placeholder="Email">
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
            fp_email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter email'
                    }
                }
            }
            }
        })

    });
</script>