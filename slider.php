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
                    <li class="active">Add Slider</li>
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
                        <strong class="card-title pull-left"><h4>Add Slider</h4></strong><span class="text-info">(upload 1920px width, height 1200px)</span>
						<a href="slider-list.php" class="card-title pull-right btn btn-sm btn-info">Slider List</a>
                    </div>
                    <div class="card-body">
                        <form id="defaultForm" method="post" class="m-b-30" action="slider.php">
						<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Heading 1</label>
			<input type="text" class="form-control" placeholder="Enter Heading1">
			</div>
			<div class="form-group">
				<label>Paragraph</label>
				<textarea class="form-control" rows="4" placeholder="Enter here.."></textarea>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Heading 2</label>
				<input type="text" class="form-control" placeholder="Enter Heading2">
				</div>
				<div class="form-group">
					<label>Paragraph</label>
					<textarea class="form-control" rows="4" placeholder="Enter here.."></textarea>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Heading 3</label>
					<input type="text" class="form-control" placeholder="Enter Heading3">
					</div>
					<div class="form-group">
						<label>Paragraph</label>
						<textarea class="form-control" rows="4" placeholder="Enter here.."></textarea>
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
													Title
												</th>
												<th class="text-center">
													Description
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td>
													<input type="file" class="form-control">
												</td>
												<td>
												<input type="text" name='name0'  placeholder='Enter Title' class="form-control"/>
												</td>
												<td>
												<input type="text" name='name0'  placeholder='Enter Description' class="form-control"/>
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
      $('#addr'+i).html("<td><input name='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Enter Title'  class='form-control input-md'></td></td><td><input  name='mail"+i+"' type='text' placeholder='Enter Description'  class='form-control input-md'></td>");

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
