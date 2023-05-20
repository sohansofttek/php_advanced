<?php
class vehicle {
    public static $color = "green";
    public function drive ()
    {
         echo "Driving highly <br>";
    }
}
vehicle :: $color =" UPDATE COLOR IS RED";
echo vehicle :: $color;

?>