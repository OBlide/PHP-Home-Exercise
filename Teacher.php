<?php

class Teacher
{
    private $fname;
    private $lname;
    private $yearofbirth;
    private $subjects=array();

    public function getFname(){
        return $this->fname;
    
    }
    public function setFname($param){
        $this->fname = $fname;
    
    }
    public function getLname(){
        return $this->lname;
    
    }

    public function setLname($param){
    $this->lname = $lname;

    }

    public function getYearOfBirth()
    {
          return $this->yearofbirth;

    }

      public function setYearOfBirth($param)
    {
            $this->yearofbirth = $param;

    }

    public function getTeachingSubjects(){
        return $this->subjects;
    
    }
    public function setTeachingSubjects($param){
        array_push($this->subjects,$param);
    
    }


}

?>