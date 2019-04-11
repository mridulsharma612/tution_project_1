<?php
class student
{
    private $rno, $name, $marks;

    public function __construct($r,$n,$m)
    {
        $this->rno=$r;
        $this->name=$n;
        $this->marks=$m;
    }
    public function getdata()
    {
        echo "Roll Number is $this->rno<br/>";
        echo "Name is $this->name<br/>";
        echo "Marks is $this->marks<br/>";
    }
}
$obj=new student(601,"Jimmy",67);
$obj->getdata();
?>