<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Logo</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Logo</li>
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
                        <strong class="card-title">Logo</strong>
                    </div>
                    <div class="card-body">
                        <form method="" action="nav.php" id="add_schedule">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload Favicon</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload Logo</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title">
                                    </div>
                                </div>
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" placeholder="Enter Description">
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

