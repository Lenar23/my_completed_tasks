<?php
class Student 
 {
	 private $name;
	 private $course;
	 
	 public function __construct($var) {
		 $this->name = $var;
		 $this->course = 1;
	 }
	 
	 public function getCourse() {
		 return $this->course;
	 }
	 
	 public function getName() {
		 return $this->name;
	 }
	 
	 public function setName($name) {
		 $this->name = $name;
	 }
	 
	 public function transferToNextCourse() {
		 if ($this->isCourseCorrect())
			 $this->course++;
	 }
	 
     private function isCourseCorrect() {
          return $this->course < 5;
	 }		 
 }
 
 ?>