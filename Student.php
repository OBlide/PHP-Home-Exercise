<?php

class Student
{
    private $fname;
    private $lname;
    private $age;
    private $credits;
    private $courses=array();
      public function getFname()
      {
          return $this->fname;
      }
      public function setFname($param)
      {
          $this->fname = $param;
      }
      public function getLname()
      {
          return $this->lname;
      }
      public function setLname($param)
      {
          $this->lname = $param;
      }
      public function getAge()
      {
          return $this->age;
      }
      public function setAge($param)
      {
            $this->age = $param;
      }
      public function getCreditPoints()
      {
          return $this->credits;
      }
      public function setCreditPoints($param)
      {
        $this->credits = $param;
      }
      public function getCourses()
      {
          return $this->courses;
      }
      public function setCourses($param)
      {
          array_push($this->courses,$param);
      }
    
    
    
}


?>