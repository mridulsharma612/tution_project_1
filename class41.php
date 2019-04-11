<?php
class circle{
    var $area;
    public function sdata ($area)
    {
        $this->area=$area;
    }
    public function gdata ()
    {
       $ou=3.14 * $this->area * $this->area;
        echo "Area of a circle is $ou<br/>";
    }
}
?>