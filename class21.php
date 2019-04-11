<?php
class salary{
   var $totalsal; 
   public function sd($totalsal)
    {
        $this->totalsal=$totalsal;
    }
   public function gd()
    {
      $hra=($this->totalsal * 10)/100;
      $ta=($this->totalsal * 11)/100;
      $da=($this->totalsal * 9)/100;
      $epf=($this->totalsal * 9)/100;

      $totalsal=$this->totalsal+$hra+$ta+$da-$epf;
      echo "Total salary is $totalsal";
    }
}
?>