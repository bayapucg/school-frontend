<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Lecturer</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Lecturer</li>
                    <li class="active">Add Lecturer</li>
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
                        <strong class="card-title pull-left"><h4>Add Lecturer</h4></strong><span class="valid"></span>
						<a href="lecturer-list.php" class="card-title pull-right btn btn-sm btn-info">Lecturer List</a>
                    </div>
                    <div class="card-body">
                        <form id="defaultForm" method="post" class="m-b-30" action="lecturer.php">
						<div class="row">
	
		
			<div class="col-md-6">
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" placeholder="Enter Title">
				</div>
				
			</div>
			</div>
				
								<div class="row"> 
								<div class="col-md-12"> 
								
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Image
												</th>
												<th class="text-center">
													Name
												</th>
												<th class="text-center">
													Designation
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td>
													<input type="file" class="form-control">
												</td>
												<td>
												<input type="text" name='name0'  placeholder='Enter Name' class="form-control"/>
												</td>
												<td>
												<input type="text" name='name0'  placeholder='Enter Designation' class="form-control"/>
												</td>
												
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									<a id="add_row" class="btn btn-info pull-left">Add Row</a>
									<a id='delete_row' class="pull-right btn btn-info">Delete Row</a>
									
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
	$(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td></td><td><input  name='mail"+i+"' type='text' placeholder='Enter Designation'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
