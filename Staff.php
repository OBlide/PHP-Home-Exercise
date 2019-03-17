<?php

class Staff
{
    private $fname;
    private $lname;
    private $yearofbirth;
    private $vacancy;
    
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
      public function getVacancy()
      {
          return $this->vacancy;
      }
      public function setVacancy($param)
      {
        $this->vacancy = $param;
      }
    
    
    
}

?>