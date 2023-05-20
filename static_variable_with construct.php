<?php
class vahicle {
    public static $color ="Green";
    public function _construct($color)
    {
        self :: $color = $color;
    }
    public function getColor()

    {
        echo self :: $color ."<br>";
    }
}
$vahicle_1 = new vahicle ("YELLOW");
    $vahicle_1 -> getColor();

$vahicle_2 = new vahicle ("RED");
    $vahicle_2 -> getColor();

//extra declear variable

vahicle :: $color = "WHITE";
    $vahicle_1 -> getColor ();
    $vahicle_2 -> getColor ();
?>