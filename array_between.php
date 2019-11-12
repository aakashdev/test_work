<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        $array = array('1' => 'apple','2' => 'bat','c' => 'cup');
        $insert_element = array('2' => 'bangluru');
        $test = array_splice($array,0,1);
        $complete=array_merge($test ,$insert_element,$array);
        print_r($complete);
        
        
        ?>