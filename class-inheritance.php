<?php
class book
{
    public $title = "English For Today";
    public $price = 250;
    public function read()
    {
        echo "Reading Book <br>";
    }
}

class novel extends book
{
    public $Author = "Sohanur Rahman";
}
$nove_1 = new novel();
echo $nove_1 ->read()."<br>";
?>