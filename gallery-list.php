<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Gallery</li>
                    <li>List</li>
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
                        <strong class="card-title pull-left"><h3>Gallery List</h3></strong>
                        <a href="gallary.php" class="card-title pull-right btn-info btn-sm">+Add Gallery</a>
                    </div>
					
                    <div class="card-body">
					
                        <div class="table-responsive">
						<table class="table table-striped table-bordered">
						<thead>
						<tr>
									<th>Banner</th>
                                        <td><img class="img-responsive" src="assets/img/school.jpg" alt="" style="height:50px;width:auto;"></td>
                                       <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="edit-gallery.php">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
									<th>Title</th>
                                        <td width="40%">gallery list</td>
                                       <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="edit-gallery.php">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </thead>
								<tbody>
								</tbody>
								</table>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-responsive" src="assets/img/school.jpg" alt="" style="height:50px;width:auto;"></td>
                                        <td>school</td>
                                        
                                        <td>school</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="edit-gallery.php">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-responsive" src="assets/img/school.jpg" alt="" style="height:50px;width:auto;"></td>
                                        <td>school</td>
                                        
                                        <td>school</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="edit-gallery.php">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                        <tr>
                                        <td><img class="img-responsive" src="assets/img/school.jpg" alt="" style="height:50px;width:auto;"></td>
                                        <td>school</td>
                                        
                                        <td>school</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="edit-gallery.php">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    
                        </div>
							
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<?php include('footer.php'); ?>