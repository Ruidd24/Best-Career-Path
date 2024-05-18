<?php
$page = 'index.php'; // Set the current page
include 'inc/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCPT- Best Career Path Test</title>

    <link rel="stylesheet" href="assets/css/index.css">
    <style>
        #sidebar {
            margin-top: 70px; /* Adjust the margin as needed */
        }
        #content {
            margin-top: 70px; /* Adjust the margin as needed */
        }
    </style>
</head>

<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'sidebar.php'; ?>

        <!-- Page Content  -->
        <div id="content">


                <!-- Navbar  -->
                <?php include 'navbar.php'; ?>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                    <center>
            <img src="img/career.png" alt="" style="border-radius:50% ;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            height:40%;width:40%">
            </center>
                        <h2 style="font-family: cursive">Welcome to Best Career Path Test</h2>
                        <p>Discover Your Ideal Career Trajectory with Our Best Career Path Test for Computer Engineers! Unlock your potential, explore diverse opportunities, and chart your course to success in the ever-evolving world of computer engineering. Take the first step towards a fulfilling and rewarding career today!</p>
                    </div>
                </div>
            </div>

            <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                              <div class="card-body text-center">
                                  <h5 class="card-title" style="font-family: cursive">Complete the Test</h5>
                                  <p class="card-text">Discover your best career path by taking our comprehensive assessment test.</p>
                                  <i class="fas fa-tasks fa-5x"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                              <div class="card-body text-center">
                                  <h5 class="card-title" style="font-family: cursive">View Detailed Results</h5>
                                  <p class="card-text">Get detailed insights into your test results and explore career options.</p>
                                  <i class="fas fa-chart-bar fa-5x"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                              <div class="card-body text-center">
                                  <h5 class="card-title" style="font-family: cursive">Unlock Your Best Career</h5>
                                  <p class="card-text">Unlock access to personalized career recommendations based on your test results.</p>
                                  <i class="fas fa-unlock-alt fa-5x"></i>
                              </div>
                          </div>
                      </div>
                  </div>

                  <br>
                  <center><a href="test.php"><button class="btn btn-success">Start Taking Test</button></a></center>

                </div>
            </div>
        </div>
    </div>

   <?php include 'inc/footer.php'?>

<script>
    $(document).ready(function () {
      $('#sidebar').removeClass('inactive');

      $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
      });


    });
</script>
</body>
</html>
