<?php
class prime{
    public function ab($pn)
    {
        $ac=true;
        for($i=2;$i<$pn;$i++)
        {
            if($pn % $i == 0)
            {
                $ac = false;
                break;
            }
         }   
            if ($ac)
              echo 'The number is prime';
              else
              echo 'The number is not prime'; 
    }
}
?>