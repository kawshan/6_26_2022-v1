<?php
include ("genderdao.php");
echo ("testing ");
echo ("<br><br>");
   $gender= GenderDao::getById(1);
    echo ("[{'id':'".$gender->getId()."','name':'".$gender->getName()."'}]");

echo ("<br><br>");
$genders=GenderDao::getAll();


$json="[";
foreach ($genders as $key=>$gender){
$json.="{'id':'".$gender->getId()."','name':'".$gender->getName()."'},";
}
$json=rtrim($json,",");
$json .="]";
echo ($json)














?>
