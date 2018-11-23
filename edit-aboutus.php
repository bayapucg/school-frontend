<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                    <li class="active">Edit</li>
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
                        <strong class="card-title pull-left"><h4>Edit Aboutus</h4></strong><span class="text-info">(upload px width,px height )</span>
                    </div>
                    <div class="card-body">
                        <form id="defaultForm" method="post" class="m-b-30" action="aboutus.php">
						<div class="row">
	
		<div class="col-md-6">
			<div class="form-group">
				<label>Image</label>
				<input type="file" class="form-control" >
				</div>
				
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" value="school" placeholder="Enter Title">
				</div>
				
			</div>
			</div>
				<div class="row">
	
		<div class="col-md-12">
			<div class="form-group">
				<label>Paragraph</label>
				<textarea  class="form-control" rows="4" placeholder="Enter here..">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
				</div>
				
			</div>
			
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
    
</script>
