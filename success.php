<?php 
    // include("connection.php");
        if (isset($_POST['submit'])) {
            $data = $_POST['fname', 'lname', 'dob', 'gender'];

            mysqli_query($db, "INSERT INTO table_name (fname, lname, dob, gender) VALUES ('$data')");
            header('location: index.html');
        }
?>