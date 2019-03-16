<?php

class Teacher
{
    private $fname;
    private $lname;
    private $courses=array();

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
    public function getCourses(){
        return $this->courses;
    
    }
    public function setCourses($param){
        array_push($this->courses,$param);
    
    }


}

?>