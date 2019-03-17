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
$aStudent->setAge('2019');
$aStudent->setCourses('PHP programming');
$aStudent->setCourses('Javasqript programming');
$aStudent->setCourses('Swedish language');
$aStudent->setCourses('Software production');
$coursesOfMagnus=$aStudent->getCourses();
$aStudent->setCreditPoints('60 points');
echo 'Student <br> Firstname: '.$aStudent->getFname().'<br>Lastname: '.$aStudent->getLname().'<br>Year of birth: '.$aStudent->getAge(); 
echo"<br>Courses: "; 
echo implode(", ", $coursesOfMagnus);
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
$aTeacher->setAge('1957');
$aTeacher->setTeachingSubjects('PHP programming');
$aTeacher->setTeachingSubjects('Javasqript programming');
$aTeacher->setTeachingSubjects('Swedish language');
$TeachingSubjectsOfGunhild=$aTeacher->getTeachingSubjects();
$aTeacher->setDepartment('School of Computer Science');
echo 'Teacher <br> Firstname: '.$aTeacher->getFname().'<br>Lastname: '.$aTeacher->getLname().'<br>Year of birth: '.$aTeacher->getAge(); 
echo"<br>Teaching Subjects: "; 
echo implode(", ", $TeachingSubjectsOfGunhild);
echo '<br> Department: '.$aTeacher->getDepartment();


/*
Information about the staff.
firstName
lastName
yearOfBirth
vacancy

*/
echo '<h2>Staff</h2>';

$aStaff = new Staff();
$aStaff->setFname('Johan');
$aStaff->setLname('Karlsson');
$aStaff->setAge('1963');
$aStaff->setVacancy('Teacher');
echo 'Staff <br> Firstname: '.$aStaff->getFname().'<br>Lastname: '.$aStaff->getLname().'<br>Year of birth: '.$aStaff->getAge().'<br>Vacancy: '.$aStaff->getVacancy(); 

?>