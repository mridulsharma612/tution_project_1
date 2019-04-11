<?php
class reg{
    private $em,$user,$pwd;
    public function a ($e,$u,$p)
    {
        $this->em=$e;
        $this->user=$u;
        $this->pwd=$p;
    }
    public function b ()
    {
        echo "Email is $this->em"."<br/>";
        echo "Username is $this->user"."<br/>";
        echo "Password is $this->pwd"."<br/>";
    }
 }    
    class pd extends reg{
        private $fn,$ln,$dob;
        public function f ($f,$l,$d)
        {
             $this->fn=$f;
             $this->ln=$l;
             $this->dob=$d;
        }
        public function g()
        {
            echo "First Name is $this->fn"."<br/>";
            echo "Last Name is $this->ln"."<br/>";
            echo "Dob is $this->dob"."<br/>";
        }
    }
    class dc extends reg{
        private $empid,$empn,$des;
        public function e ($em,$emp,$de)
        {
            $this->empid=$em;
            $this->empn=$emp;
            $this->des=$de;
        }
        public function h ()
        {
            echo "Employee ID is $this->empid"."<br/>";
            echo "Employee Name is $this->empn"."<br/>";
            echo "Designation is $this->des"."<br/>";
        }
    }
$ob=new reg();
$ob1=new pd();
$ob2=new dc();

$ob->a("jimmy@email.com","jimmy","abc2");
$ob->b();

$ob1->f("Jimmy","Arthur","1/1/1990");
$ob1->g();

$ob2->e("3884","Jimmy","Developer");
$ob2->h();
?>