<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Quote</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Quote</li>
                    <li class="active">Add Quote</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title pull-left"><h4>Add Quote</h4></strong><span class="valid"></span>
						<a href="quote-list.php" class="card-title pull-right btn btn-sm btn-info">Quote List</a>
                    </div>
                    <div class="card-body">
                        <form id="defaultForm" method="post" class="m-b-30" action="quote.php">
						<div class="row">
	
		<div class="col-md-6">
			<div class="form-group">
				<label>Banner</label>
				<input type="file" class="form-control">
				</div>
				
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Quote</label>
				<input type="text" class="form-control" placeholder="Enter quote">
				</div>
				
			</div>
			</div>
				<div class="row">
	
		
			
			</div>				
							
								
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-info" name="signup" value="Sign up">Upload</button>
																	</div>
							</form>
						
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->




<?php include('footer.php'); ?>
<script>
    $(document).ready(function() {
        $('#add_schedule').bootstrapValidator({

            fields: {
                as_type: {
                    validators: {
                        notEmpty: {
                            message: 'Type is required'
                        }
                    }
                },
                as_sms_day: {
                    validators: {
                        notEmpty: {
                            message: 'SMS/day is required'
                        }
                    }
                },
                as_time: {
                    validators: {
                        notEmpty: {
                            message: 'Time is required'
                        }
                    }
                },
                as_sdate: {
                    validators: {
                        notEmpty: {
                            message: 'Start date is required'
                        }
                    }
                },
                as_edate: {
                    validators: {
                        notEmpty: {
                            message: 'End date is required'
                        }
                    }
                },
            }
        })

    });
	
</script>
