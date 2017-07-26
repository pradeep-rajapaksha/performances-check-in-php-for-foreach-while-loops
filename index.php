<?php
    // performances check in php for-foreach-while loops

    $elements = array();
    ////
    // An array of 10,000 elements with random string values
    ////
    for($i = 0; $i < 100000; $i++) {
        $elements[] = (string)rand(10000000, 99999999);
    }

    ////
    // for loop test
    ////
    $time_start = microtime(true);
    $numb = count($elements);
    for($i = 0; $i < $numb; $i++) { }
    $time_end = microtime(true);
    $for_time = $time_end - $time_start;

    ////
    // for loop with count() func inside loop test
    ////
    $time_start = microtime(true);
    for($i = 0; $i < count($elements); $i++) { }
    $time_end = microtime(true);
    $for_count_time = $time_end - $time_start;

    ////
    // foreach test
    ////
    $time_start = microtime(true);
    foreach($elements as $element) { }
    $time_end = microtime(true);
    $foreach_time = $time_end - $time_start;

    ////
    // while loop test
    ////
    $time_start = microtime(true);
    $a=0; while($a++ < sizeof($element));  
    $time_end = microtime(true);
    $while_time = $time_end - $time_start;
    
    ////
    // do while loop test
    ////
    $time_start = microtime(true);
    $a=0; do { } while($a++ < sizeof($element));  
    $time_end = microtime(true);
    $do_while_time = $time_end - $time_start;

    echo "For took: " . number_format($for_time * 1000, 3) . "<br/>";
    echo "For with count() took: " . number_format($for_count_time * 1000, 3) . "<br/>";
    echo "Foreach took: " . number_format($foreach_time * 1000, 3) . "<br/>";
    echo "While took: " . number_format($while_time * 1000, 3) . "<br/>";
    echo "Do while took: " . number_format($do_while_time * 1000, 3) . "<br/>";
?>