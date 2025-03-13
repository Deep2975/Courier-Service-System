<?php
    // if(isset($_POST["sub"]))
    // {
        
        $ser = $_POST["ser"];
        if($ser == " "){
            echo "no";
        }
    
    // $connection = mysqli_connect("localhost","root","","project_cms");
    include "dbcon.php";

    $query = "select pnumber,status from parcel where pnumber=$ser";
    
    if($result = mysqli_query($connection,$query))
    {
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) == 1)
        {
            switch($row['status'])
            {
                case 1:echo "<img src='Accepted By Courier.png' width='350px'>";
                break;
                case 2:echo "<img src='Shipped.png' width='350px'>";
                break;
                case 3:echo "<img src='Out for delivery.png' width='350px'>";
                break;
                case 4:echo "<img src='Ready to pickup.png' width='350px'>";
                break;
                case 5:echo "<img src='Delivered.png' width='350px'>";
                break;
                case 6:echo "<img src='Picked up.png' width='350px'>";
                break;
                case 7:echo "<img src='Not delivered.png' width='350px'>";
                break;
            }
            // echo "Parcel status: " . $row['status'] . "<br>";
        }
        else{
            echo "Enter Valid Parcel Number";
        }
    }

    mysqli_close($connection);
    
?>