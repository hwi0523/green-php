<?php
    for($i=2; $i<10; $i++)
    {
        if ($i > 2) {print "--------------<br>";}
        for($z=1; $z<10; $z++)
        {
            // print  $i . " * " . $z . " = " . $i*$z ;  
            // print "<br>";    
            
            $result = $i * $z;
            print "$i x $z = $result <br>";
        }
        
    }

    // for($i=1; $i<10; $i++)
    // {
    //     for($z=1; $z<10; $z++)
    //     {
    //         print "i: ${i} - z: ${z} <br>";
    //     }
    //     print "------------<br>";
    // }
?>