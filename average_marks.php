<?php
class tp
{
  var $marks1,$marks2,$marks3,$marks4,$marks5;
  function m($m1,$m2,$m3,$m4,$m5)
  {
         $this->marks1=$m1;
         $this->marks2=$m2;
         $this->marks3=$m3;
         $this->marks4=$m4;
         $this->marks5=$m5;
  }

function add()
 {
  $total=$this->marks1+$this->marks2+$this->marks3+$this->marks4+$this->marks5;
  $total=$total/5;
  echo "Total marks of average is $total<br/>"; 
 }
}

$obj=new tp();
$obj->m(78,87,65,58,46);
$obj->add();

$obj12=new tp();
$obj12->m(56,89,45,34,59);
$obj12->add();
?>