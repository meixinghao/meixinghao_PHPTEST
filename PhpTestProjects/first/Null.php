<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 16:39
 */

   class test {
       private  static $load;

       function test1 () {
           echo self::$load;

           if(null === self::$load){
               echo "yes";
           }

       }
   }

    $test = new test();
    $test->test1();
?>