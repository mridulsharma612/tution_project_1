<?php
class ab{
    var $price,$quantity;
    public function bc($price,$quantity)
    {
        $this->price=$price;
        $this->quantity=$quantity;
    }
    public function cd()
    {
        $total=$this->price * $this->quantity;
        echo "Total is $total";
    }
}
?>