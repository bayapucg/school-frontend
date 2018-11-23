<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>ContactUs</li>
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
                        <strong class="card-title pull-left"><h4>ContactUs</h4></strong>
						<a href="edit-contact.php" class="card-title pull-right btn btn-sm btn-warning"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                    <div class="card-body">
                        <form method="" action="contactus.php" >
						<div class="form-group">
						<h4 class="text-info">Contact Us from Mail</h4>
						</div>
						<div class="row">	
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
							
                            </div>
							<div class="form-group">
						<h4 class="text-info">Contact Us</h4>
						</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload Banner</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter PhoneNumber">
                                    </div>
                                </div>
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="4" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
							
                            </div>
							<div class="form-group">
						<h4 class="text-info">Map</h4>
						</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" placeholder="Enter Location Link">
                                    </div>
                                </div>
							
                            </div>
                             
							<div class="form-group">
						<h4 class="text-info">Social Connect</h4>
						</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" placeholder="Enter Facebook Link">
                                    </div>
                                </div>
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" placeholder="Enter Twitter Link">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control" placeholder="Enter LinkedIn Link">
                                    </div>
                                </div>
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Google+</label>
                                        <input type="text" class="form-control" placeholder="Enter Google+">
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
