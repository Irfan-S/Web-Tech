<!--
    Arrays in PHP. Created with array().
    Foreach in PHP

    Arrays can be:
    - Indexed
    - Associative
    - MultiDimensional

    array_keys(<array>) - Gives the keys of an array.
    array_values(<array>)-Gives the values of an array.
    array_rand(<array>)-  Randomly picks a key out of the array.

    Implode function
    Explode function

    Sorts in array:
    - sort() - normal sort.
    - rsort() - reverse order sort
    - asort() - according to value,ascending order
    - ksort() - according to key, ascending order
    - arsort() - according to value, reverse order
    - krsort() - according to key, reverse order.
-->

<?php

            header("Content-Type:text/plain")
            $favourites = array(
                array(
                    "name"=>"Dave"
                    "mob"=>"394892348939"
                    "email"=>"dave@gmail.com"
                ),
                array(
                    "name"=>"Smith"
                    //....
                )
              );
            // To print 2d array things
            echo $favourites[0]["name"],"\n";

            $age = array("Joe"=>"45","Today"=>"56")
            $name_one = array("A","Z","B","C","D");
            echo "Accessing elements<br>";
            echo $name_one[2]."<br>";
            echo $name_one[0]."<br>";
            echo $name_one[1]."<br>";

            //Implode function - delimiter,array
            echo implode("/",$name_one)."<br>";

            //Explode function - delimiter,string(Converts a string to an array)
            $str = "h.e.l.l.o";
            //Output will be a string
            echo $str."<br>";
            //Output will be an array
            print_r(explode(".",$str));
            

            foreach($age as $key=>$value){
                echo $key." => ".$value;
            }
            
            echo "Loop de loop <br>";
            foreach ($name_one as $name){
                echo $val."<br>";
            }

            //Prints the entire array
            print_r($age);
            
            //Count is a function in PHP to get the length.
            
            ?>