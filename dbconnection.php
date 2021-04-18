<?php
$conn = mysqli_connect("localhost","root","ss");
if(!$conn)
{
    echo "Database is not connected";
}
mysqli_select_db($conn,"alumnitracking");
?>