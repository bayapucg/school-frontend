<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Slider</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Slider</li>
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
                        <strong class="card-title pull-left"><h4>Slider List</h4></strong>
                        <a href="slider.php" class="card-title pull-right btn btn-sm btn-info">+Add Slider</a>
                    </div>
					
                    <div class="card-body">
					
                        <div class="table-responsive">
						<table class="table table-striped table-bordered">
						<thead>
                                    <tr>
									<th>sno</th>
                                        <th width="">Heading</th>
                                        <th >Paragraph</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
                                    <tr>
									<td>1</td>
                                       <td>School</td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </td>
                                         <td>
                                           
                                            <a href="edit-slider.php">
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
										<td>2</td>
                                       <td>School</td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem .</td>
                                         <td>
                                           
                                            <a href="edit-slider.php">
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
										<td>3</td>
                                       <td>School</td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem .</td>
                                         <td>
                                           
                                            <a href="edit-slider.php">
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
                                            
                                            <a href="edit-slider.php">
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
                                            
                                            <a href="edit-slider.php">
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
                                            
                                            <a href="edit-slider.php">
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