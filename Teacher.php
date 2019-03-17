<?php

class Teacher
{
    private $fname;
    private $lname;
    private $age;
    private $department;
    private $subjects=array();

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
    public function getDepartment()
      {
          return $this->department;
      }
      public function setDepartment($param)
      {
        $this->department = $param;
      }

    public function getTeachingSubjects(){
        return $this->subjects;
    
    }
    public function setTeachingSubjects($param){
        array_push($this->subjects,$param);
    
    }


}

?>