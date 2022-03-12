<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $fistName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data=[];

    public function index(){
//        $this->fistName ="Rohim";
//       $this->lastName='Khan';
//       echo"Full name is ". $this->fistName." ".$this->lastName;
        /*
         *
         */
        $this->data =[10, 20, 30,'BITM', 100.200,true];
//        echo $this->data[9];
        foreach ($this ->data as $item)

        {
            echo $item;
        }


//        do{
//            echo 'Hello World <br/>';
//            $this->x++;
//        }
//        while($this ->x  <= 110);

//        while ($this ->x < 110)
//        {
//            echo 'Hello World<br/>';
//            $this ->x++;
//        }
//        for ($this->y =10; $this->y <=15; $this->y++)
//        {
//            echo 'Hello world<br/>';
//        }
//        switch ($this ->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello BITM';
//        }
//        if ($this->x >20){
//            echo '20';
//        }
//        elseif ($this ->x <20)
//        {
//            echo $this->x;
//        }
//       if($this ->x > 20)
//        {
//            echo $this->x;
//        }
//       else {
//           echo'Hello world';
//       }



//        echo( $this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo( $this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo( $this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo( $this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';




//        echo $this ->x +=$this->y;
//        echo '<br/>';
//
//        echo $this ->x -=$this->y;
//        echo '<br/>';
//        echo $this ->x *=$this->y;
//        echo '<br/>';
//        echo $this ->x /=$this->y;
//        echo '<br/>';
//        echo $this ->x %=$this->y;
//        echo '<br/>';
//        echo $this ->x .=$this->y;
//        echo '<br/>';
//        echo $this->x +$this->y;
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