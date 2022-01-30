<?php


namespace App\classes;


class Example
{
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index(){

//        Veriable
//        $this->firstName = 'Rahim';
//        $this->lastName = 'Khan' ;
//        echo "Full Name is ". "$this->firstName"." ". " $this->lastName";


//        $this->y = 20;
//        $this->z = 30;

//        if($this->x > 200){
//            echo "200";
//        }
//        elseif($this->x < 200){
//            echo $this->x;
//        }

//        for ($this->x = 99 ; $this->x >= 76 ; $this->x --){
//            echo $this->x;
//            echo ' ';
//        }
//        $this->x = 1;
//        do{
//            echo $this->x.' ';
//            $this->x++;
//        } while($this->x <= 10);

//        while ($this->x <= 110){
//            echo 'Hello World <br/>';
//            $this->x++;
//        }

        $this->data = [10,20,30,'BITM',100.200,true];
//        for ($this->y = 0 ; $this->y<6; $this->y++){
//            echo $this->data[$this->y];
//            echo '<br/>';
//        }

        foreach ($this->data as $item){
            echo $item;
        }




//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        echo $this->x > $this->y;

//        echo $this->x += $this->y; // $this->x = $this->x + $this->y //30
//        echo '<br/';
//        echo $this->x -= $this->y; //10
//        echo '<br/';
//        echo $this->x *= $this->y; // 200
//        echo '<br/';
//        echo $this->x /= $this->y; // 10
//        echo '<br/';
//        echo $this->x %= $this->y; // 10
//        echo '<br/';
//        echo $this->x .= $this->y; // 1020
//        echo '<br/';
//        echo ++$this->x;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo -$this->x;
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;






    }
}