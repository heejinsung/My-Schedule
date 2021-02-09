<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Schedule Dashboard</title>

  <!-- CSS Style Link -->
  <link rel="stylesheet" href="/myschedule/css/reset.css" />
  <link rel="stylesheet" href="/myschedule/css/style.css" />
  <link rel="stylesheet" href="/myschedule/css/media.css" />

  <!-- Awesome Font Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  
</head>

<body>
  <!-- All Contents are wrapped inside wrap class -->
  <div class="wrap">
    <!-- header -->
    <header>
      <div class="center headerWrap">
        <span class="hollow"></span>
        <h1>Schedule Dashboard</h1>
        <div class="mIcon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

    <!-- Container -->
    <div class="center">
      <div class="container">
        <div class="item">
          <section class="graph-circle">
            <div class="circle-graph-container">
              <div class="circle-graph easyPieChart" data-percent="60">
                <p>60%</p>
                <!-- <canvas width="269" height="269" style="width: 150px; height: 150px;"></canvas> -->
              </div>
            </div>
            <p class="totalTit">Total Process Rates</p>
          </section>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-database"></i>
          </div>
          <div class="pfContents">
            <h3>Database Project</h3>
            <p>Progress Rate : <b class="rateNum">90</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class=pfBar></span>
            </div>
          </div>
        </div>
        
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-thermometer-half"></i>
          </div>
          <div class="pfContents">
            <h3>API Project</h3>
            <p>Progress Rate : <b class="rateNum">70</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class=pfBar></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-clone"></i>
          </div>
          <div class="pfContents">
            <h3>Renewal Project</h3>
            <p>Progress Rate : <b class="rateNum">30</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class=pfBar></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="pfContents">
            <h3>WEB Planning Project</h3>
            <p>Progress Rate : <b class="rateNum">10</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class=pfBar></span>
            </div>
          </div>
        </div>
        <div class="item"></div>
      </div>
    </div>

    <footer></footer>
  </div>

  <!-- script files load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src="/myschedule/js/piechart.js"></script>
  <script src="/myschedule/js/custom.js"></script>
</body>

</html>