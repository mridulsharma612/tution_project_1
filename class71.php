<?php
class employee{
     private $id,$name,$bsal,$net;

     public function setdata($i,$n,$b)
     {
         $this->id=$i;
         $this->name=$n;
         $this->bsal=$b;

         $this->net=$this->bsal + ($this->bsal);
     }
     public function getdata()
     {
         echo "ID is $this->id<br/>";
         echo "Name is $this->name<br/>";
         echo "Basic Salary is $this->bsal<br/>";
         echo "Net is $this->net<br/>";
     }
}
$obj=new employee();
$obj->setdata("4001","Jimmy","90000");
$obj->getdata();
?>