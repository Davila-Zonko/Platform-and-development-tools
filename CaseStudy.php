<?php

require_once "Composite.php";
require_once "Observer.php";

// Composite Example
$module = new Module("PHP Basics");
$module->add(new Lesson("Variables"));
$module->add(new Lesson("Arrays"));
$module->add(new Lesson("Functions"));

// Observer Example
$course = new CourseSubject();
$student1 = new Student("Asane");
$student2 = new Student("Derick");

$course->attach($student1);
$course->attach($student2);

// Outputs
$compositeOutput = $module->show();
$observerOutput  = $course->notify("A new lesson has been added!");

return [
    "composite" => $compositeOutput,
    "observer"  => $observerOutput
];

?>
