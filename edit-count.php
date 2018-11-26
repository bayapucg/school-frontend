<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Our Count</li>
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
                        <strong class="card-title"><h4>Edit Count</h4></strong>
						
                    </div>
                    <div class="card-body">
                        <form method="" action="count.php" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Teachers</label>
                                        <input type="text"  placeholder="Enter Teachers count" class="form-control" value="23">
                                    </div>
                                </div>
								</div>
								<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Courses</label>
                                        <input type="text"  placeholder="Enter Courses count" class="form-control" value="23">
                                    </div>
                                </div>
                                
                            </div>
							<div class="row">
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Students</label>
                                        <input type="text"  placeholder="Enter Students Count" class="form-control" value="900">
                                    </div>
                                </div>
								</div>
							<div class="text-center">
                            <button type="submit" class="btn btn-md btn-info">Submit</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<?php include('footer.php'); ?>

