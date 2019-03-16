<?php

include "Student.php";
include "Teacher.php";
include "Staff.php";

echo '<h2>Student</h2>';


$aStudent = new Student();
$aStudent->setFname('Magnus');
$aStudent->setLname('Samuelsson');
$aStudent->setCourses('PHP programming');
$aStudent->setCourses('Javasqript programming');
$aStudent->setCourses('Swedish language');
$aStudent->setCourses('PHP programming');
$coursesOfMagnus=$aStudent->getCourses();
echo 'Student '.$aStudent->getFname().' '.$aStudent->getLname();
print_r($coursesOfMagnus);


echo '<h2>Students</h2>';

?>