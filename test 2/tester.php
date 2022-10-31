<?php
include ("genderdao.php");
echo ("testing ");
echo ("<br><br>");
   $gender= GenderDao::getById(1);

   echo (json_encode($gender));


echo ("<br><br>");
$genders=GenderDao::getAll();


echo (json_encode($genders))




?>
