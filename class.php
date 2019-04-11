<?php    
class student
{
    var $rno,$name,$marks;

    function setdata($r,$n,$m)
    {
        $this->rno=$r;
        $this->name=$n;
        $this->marks=$m;   
    }
    function getdata()
    {
        echo "Roll No is $this->rno<br/>";
        echo "Name is $this->name<br/>";
        echo "Marks is $this->marks<br/>";
    }
}
?>
