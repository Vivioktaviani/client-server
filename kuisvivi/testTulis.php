<?php
include_once(__DIR__."/lib/Employees.php");
include_once(__DIR__."/lib/format_data.php");
header("Access-Control-Allow-Origin:*");

$employees = new Employees();
$employees->setValue('1707051039','Margareta','Oktaviani','vivi.oktavianivivi@gmail.com','089655922655','1998-10-13','MNJ12','8000000','4000000','LIO98','ACSDR4');
// echo $employees->npm;
$result=$employees->create();
$format= new format_data();
// print_r($result);
echo $format->as_JSON($result);
// $data=$employees->getAll();