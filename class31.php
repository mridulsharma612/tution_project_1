<?php
class av{
    var $marks1, $marks2, $marks3, $marks4, $marks5;
    public function info ($marks1,$marks2,$marks3,$marks4,$marks5)
    {
        $this->marks1=$marks1;
        $this->marks2=$marks2;
        $this->marks3=$marks3;
        $this->marks4=$marks4;
        $this->marks5=$marks5;
    }
    public function add()
    {
       $total=$this->marks1+$this->marks2+$this->marks3+$this->marks4+$this->marks5;
       $total=$total/5;
       echo "Total marks of average is $total<br/>";
    }
}
?>