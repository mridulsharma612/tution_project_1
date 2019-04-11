<?php
interface records{
    public function info($r,$f,$l,$m);
    public function ou();
}
class students implements records{
    private $rollno,$firstname,$lastname,$marks;
    public function info ($r,$f,$l,$m) 
    {
       $this->rollno=$r;
       $this->firstname=$f;
       $this->lastname=$l;
       $this->marks=$m;    
    }
    public function ou()
    {
        echo "Roll No is $this->rollno"."<br/>";
        echo "First Name is $this->firstname"."<br/>";
        echo "Last Name is $this->lastname"."<br/>";
        echo "Marks is $this->marks"."<br/>";
    }
}
$obj=new students();
$obj->info("356","Jimmy","Arthur","78");
$obj->ou();
?>