<?php
$agree = $_GET['agree'];
 
        switch ($agree)
        {
 
                case "Company":
                header("Location: http://localhost/internmn/create-company-profile/");
                break;
 
                case "Student":
                header("Location: http://localhost/internmn/create-student-profile/");
                break;
 
        }
 
?>