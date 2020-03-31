<?php
abstract class CSE{
  abstract protected function prefixName($name);
}
class Student extends CSE{
  public function prefixName($name,$greet="Hello",$dot=".",$prefix=""){
    if($name=="Arik Md. Isthiaque"){
      $prefix="Mr";
    }
    elseif($name=="Pritilata Biswas"){
      $prefix="Miss";
    }
    else{
      $prefix="";
    }
    echo "$greet $prefix$dot $name<br>";
  }
}
$student = new Student();
$student->prefixName("Arik Md. Isthiaque");

$student_1=new Student();
$student_1->prefixName("Pritilata Biswas");
 ?>
