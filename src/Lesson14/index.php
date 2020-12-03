<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($K, $M, $A) {
    $min=max($A);
    $max=array_sum($A);
    
    $minmax=0;
    
    while($min<=$max){
        $mid=intval(($max+$min)/2);
        $foundblocks=findblocks($A, $mid);
        //echo $mid.' -> found blocks:'.$foundblocks.'; ';
        if($foundblocks<=$K){
            $max=$mid-1;
            //if($foundblocks==$K){
                $minmax=$mid;
                //echo" found minma=$minmax ; ";
            //}
        }
        else{
            $min=$mid+1;
        }
        
    }
    //if($minmax==0) echo $
    return $minmax;
}

function findblocks($A, $mid){
    $sum=0;
    $blocks=1;
    
    foreach($A as $cnum){
        if($sum+$cnum<=$mid){
            $sum+=$cnum;
        }
        else{
            $sum=$cnum;
            $blocks++;
        }
/*        echo"
i=$i; sum=$sum; blocks=$blocks;
";*/
    }
    
    return $blocks;
}

?>
