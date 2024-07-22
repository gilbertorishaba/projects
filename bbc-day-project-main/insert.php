<?php
require_once 'connect.php';//import conn codes

// include 'connect.php'

//  store values
$firstName =  $_POST['firstname'];//pushing data to our db
$lastName =  $_POST['lastname'];
$regNumber =  $_POST['regNumber'];
$yearOfStudy =  $_POST['yearOfStudy'];

$insert = "INSERT INTO students(`first_name`,`last_name`,`reg_number`,`year_of_study`)VALUES( '$firstName','$lastName','$regNumber','$yearOfStudy ' )";//exceptions/SINGLE BSE OF""
// insert sql stat
$insertData =$connect->query($insert);//sql stat of pushing data to database//associating function with a query


if ($connect==true) {
    echo "data inserted to database";
   
}
else {

    echo "data insertion failed";
}
?>