<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Head</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Head</li>
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
                        <strong class="card-title pull-left"><h4>Head List</h4></strong>
                        <a href="schoolhead.php" class="card-title pull-right btn-info btn-sm">+Add Head</a>
                    </div>
					
                    <div class="card-body">
					
                        <div class="table-responsive">
						<table class="table table-striped table-bordered">
						
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
										<th>Qualification</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-responsive" src="assets/img/school.jpg" alt="" style="height:50px;width:auto;"></td>   
                                        <td>john</td>
                                        <td>Btech</td>
                                        <td>principal</td>
                                        <td>
                                            
                                            <a href="edit-head.php">
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
                                        <td>john</td>
                                        <td>Btech</td>
                                        <td>principal</td>
                                        <td>
                                           
                                            <a href="edit-head.php">
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
                                        <td>john</td>
                                        <td>Btech</td>
                                        <td>principal</td>
                                        <td>
                                           
                                            <a href="edit-head.php">
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