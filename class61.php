<?php
class student
{
    private $rno,$name,$marks;
    
    public function setdata($r,$n,$m)
    {
        $this->rno=$r;
        $this->name=$n;
        $this->marks=$m;
    }
    public function display()
    {
        echo "Roll no is $this->rno<br/>";
        echo "Name is $this->name<br/>";
        echo "Marks is $this->marks<br/>";
    }
}
$obj=new student();
$obj->setdata(101,"Anil",400);
$obj->display();

$obj1=new student();
$obj1->setdata(300,"Jack",600);
$obj1->display();
?>