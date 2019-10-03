<?php
include_once(__DIR__."/../lib/Employees.php");
include_once(__DIR__."/../lib/format_data.php");
header('Access-Control-Allow-Origin:*');

$employees = new Employees();

if(isset($_GET['kode'])){
    $data=$employees->ambilDataEmployees($_GET['kode']);
} else {
    $data=$employees->getAll();
}
$format=new format_data();

error_reporting(E_ALL ^ E_NOTICE);
if($_GET['view']=='xml'){
    header('Content-Type: application/xml; charset=utf-8');
    echo $format->as_XML($data,'Employees');
} else if ($_GET['view']=='json'){
    header('Content-Type: application/json');
    echo $format->as_JSON($data);
} else {
    echo $format->as_HTML($data);
}