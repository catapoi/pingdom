<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="10" > 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="img/fontawesome/on-server/css/fonawesome.css">
    <script src="js/Chart.js"></script>
    <title>MetroSystems!</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-sm">
      <!--h1>Metro Systems</h1-->
      <img class="" src="img/logo.png" alt="Generic placeholder image">
        </div>
        <div class="col-sm">
          <h2>
            <?php
              date_default_timezone_set('Europe/Bucharest');

              $timestamp = time();
              $date_time = date("d-m-Y (D) H:i:s", $timestamp);
              echo "Current date and local time on this server is $date_time";
            ?>
          </h2>
        </div>
      </div>
    </div>
    
<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>30.01.2018</th>
      <th>31.01.2018</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>www.makro.be</td>
      <td><i class="fab fa-github-square"></i></td>
      <td><i class="fab fa-github-circle"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


  <div class="container">
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="img/fontawesome/on-server/fontawesome.js"></script>
 </body>
</html>