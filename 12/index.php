<?php
require_once 'Student.php';

$student = new Student('Коля');

echo $student->getCourse() . ' ' . $student->getName();
echo '<br>';
$student->transferToNextCourse();
echo $student->getCourse() . ' ' . $student->getName();