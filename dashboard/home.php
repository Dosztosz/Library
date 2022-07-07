<?php
    include ('functions/session.php');
    require_once ('includes/config.php');
    $site_title = "Dashboard";
    $conn = new mysqli($servername, $username, $password, $db_name);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("connection_failed: " . $conn->connect_error);
    }
    include ('functions/check_overdue.php');
    $sql = "SELECT * FROM rentals";
    $sql_next = "SELECT * FROM rentals WHERE `status` = 'overdue'";
    $results = $conn->query($sql);

    if ($result = mysqli_query($conn, $sql)) {
        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($conn, $sql_next)) {
        $rowoverdue = mysqli_num_rows($result);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('includes/head.php') ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>

<body>
    <?php include('includes/header.php') ?>
    <div class="content">
        <?php include('includes/navbar-top.php') ?>
        <h1 class="rental-box-h2">Rental Products</h1>
        <div class="widgets">
            <a href="rent.php">
                <div class="widgets-block">
                <h2>Rent a product</h2>
                </div>
            </a>
            <a href="overdue.php">
            <div class="widgets-block">
                <h2>Overdue Rentals</h2>
                <p><?php echo $rowoverdue; ?> Rentals</p>
            </div>
            </a>
            <a href="list.php">
            <div class="widgets-block">
                <h2>All available costumes</h2>
                <p><?php echo $rowoverdue; ?> Costumes</p>
            </div>
            </a>
        </div>
        <div class="dash-row">
            <div class="dash-column">
                <h2 class="rental-box-h2">Upcoming Rentals</h2>
                <div class="rental-box-dash">
                    <div class="rent-box-dash">
                        <div class="rent-box-info">
                            <p class="info-stroj">Indianin 104</p>
                            <p class="info-imie">Tomasz Pekasz</p>
                            <p>Zapłacone</p>
                            <p>09.06.2022</p>
                            <button class="button">Confirm</button>
                        </div>
                    </div>
                    <div class="rent-box-dash">
                        <div class="rent-box-info">
                        <p>Indianin 104</p>
                        <p>Tomasz Pekasz</p>
                        <p>Zapłacone</p>
                        <p>09.05.2022</p>
                        <button class="button">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dash-column">
                <div id="myfirstchart" style="height: 250px;"></div>
            </div>
        </div>
    </div>
    <script>
        new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 30 },
    { year: '2009', value: 20 },
    { year: '2010', value: 4 },
    { year: '2011', value: 2 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
</body>
</html>