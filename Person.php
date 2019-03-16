<?php

/*
Links to other files.
*/
include "Student.php";
include "Teacher.php";
include "Staff.php";

/*
Information about the student.
•	firstName
•	lastName
•	yearOfBirth
•	selectedCourses (array)
•	greditPoints (just one value)

*/
echo '<h2>Student</h2>';

$aStudent = new Student();
$aStudent->setFname('Magnus');
$aStudent->setLname('Samuelsson');
$aStudent->setYearOfBirth('1983');
$aStudent->setCourses('PHP programming');
$aStudent->setCourses('Javasqript programming');
$aStudent->setCourses('Swedish language');
$aStudent->setCourses('PHP programming');
$coursesOfMagnus=$aStudent->getCourses();
$aStudent->setCreditPoints('60 points');
echo 'Student <br> Firstname: '.$aStudent->getFname().'<br>Lastname: '.$aStudent->getLname().'<br>Year of birth: '.$aStudent->getYearOfBirth(); 
echo"<br>Courses: "; 
print_r($coursesOfMagnus);
echo '<br> Total credits points from courses: '.$aStudent->getCreditPoints();

/*
Information about the teacher.
•	firstName
•	lastName
•	yearOfBirth
•	teachingSubjects (array)
•	department

*/
echo '<h2>Teacher</h2>';

$aTeacher = new Teacher();
$aTeacher->setFname('Gunhild');
$aTeacher->setLname('Thorisdottir');
$aTeacher->setYearOfBirth('1957');
$aTeacher->setTeachingSubjects('PHP programming');
$aTeacher->setTeachingSubjects('Javasqript programming');
$aTeacher->setTeachingSubjects('Swedish language');
$TeachingSubjectsCoursesOfGunhild=$aStudent->getCourses();
echo 'Teacher <br> Firstname: '.$aTeacher->getFname().'<br>Lastname: '.$aTeacher->getLname().'<br>Year of birth: '.$aTeacher->getYearOfBirth(); 
echo"<br>Teaching Subjects: "; 
print_r($TeachingSubjectsCoursesOfGunhild);
echo '<br> Total credits points from courses: '.$aTeacher->getDepartment();

/*
Information about the student.
•	firstName
•	lastName
•	yearOfBirth
•	vacancy

*/
echo '<h2>Staff</h2>';

?>