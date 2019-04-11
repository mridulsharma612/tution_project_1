<?php
class person
{
  var $name, $address;
  
  public function sdata($a,$ad)
  {
      $this->name=$a;
      $this->address=$ad;
  }
  public function gdata()
  {
      echo "Name is $this->name"."<br/>";
      echo "Address is $this->address"."<br/>";
  }
}
class student extends person
{
    var $rno,$marks;

    public function sdata1($r,$m)
    {
        $this->rno=$r;
        $this->marks=$m;
    }
    public function gdata1()
    {
        echo "Roll Number is $this->rno"."<br/>";
        echo "Marks is $this->marks"."<br/>";
    }
}
$obj=new student();
$obj->sdata("Ajay","Chd");
$obj->gdata();
$obj->sdata1(1001,400);
$obj->gdata1();
?>