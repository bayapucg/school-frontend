<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="col-xl-4 col-lg-6">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-users text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Teachers</div>
                        <div class="stat-digit text-white">18</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-lg-6">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-book text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Courses</div>
                        <div class="stat-digit text-white">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-graduation-cap text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Registered Students</div>
                        <div class="stat-digit text-white">961</div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
	
</div> <!-- .content -->
<div class="content mt-3">
    <div class="container">
 <div class="row">
 <div class="col-lg-12">
 <div id="chartContainer" style="height: 300px; width: 100%;"></div>
 </div>
 </div>
 </div>	
</div> <!-- .content -->
<?php include('footer.php'); ?>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {

      title:{
        text: ""              
      },
      data: [//array of dataSeries              
        { //dataSeries object

         type: "column",
         dataPoints: [
         { label: "Teachers", y: 180 },
         { label: "Courses", y: 300},
         { label: "Students", y: 961 },                                    
         
         
         ]
       }
       ]
     });

    chart.render();
  }
  </script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>