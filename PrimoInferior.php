<?php 
function PrimoInferior($num){  

        for($i=$num; $i > 0; $i--)
        {          $primo = 0;
 
            for($j = 2; $j <= $i/2; $j++)
            {           
                if( $i % $j == 0)
                {
                    $primo++;                
                }                
            }
            if($primo == 0){
                    return($i);
                }           
        }           
        
    }
    echo PrimoInferior(30);
?>
