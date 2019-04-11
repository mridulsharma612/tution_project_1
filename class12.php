<?php
class rad{
   var $radius;
   function ci($radius)
   {
       $this->radius=$radius;
       
    }
   function ou()
   {
       
     $area=3.14 * $this->radius * $this->radius;
     echo "Area of circle is $area";
   }
}
?>