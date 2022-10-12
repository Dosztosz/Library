<?php
    $sql = "SELECT * FROM rentals";
    $results = $conn->query($sql);
    $today = new DateTime(date("Y-m-d"));
    $td =  $today->format('Y-m-d');
    if($results->num_rows>0){
        while($row = $results->fetch_assoc()) {
            $return_date = $row['date_return'];
            $id_rent = $row['id_rent'];
            if ($td > $return_date)
            {
                $sqli = "UPDATE rentals SET status = 'overdue' WHERE `id_rent` = '$id_rent'";
                mysqli_query($conn, $sqli);
            }
            else
            {
            }
        }
    }
?>