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
 <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
          </div>
          
      
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	"/>
            </g>
			 <g id="Layer_3">
              <polygon opacity="0.5" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,90	"/>
            </g>
          </g>
        </defs>
      </svg>
<?php include('footer.php'); ?>
<script>
  var button = document.createElement('button');
  var textNode = document.createTextNode('Click Me!');
  button.appendChild(textNode);
  button.className = 'mdl-button mdl-js-button mdl-js-ripple-effect';
  componentHandler.upgradeElement(button);
  document.getElementById('container').appendChild(button);
</script>