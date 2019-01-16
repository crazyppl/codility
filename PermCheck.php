function solution($A) {
    // write your code in PHP7.0
    sort($A);
    $length=sizeof($A);
    $perm=true;
    if($A[0] != 1) {
        return 0;
    }
    for($i=0; $i<$length-1; $i++) {
        if($A[$i+1] != $A[$i]+1) {
            $perm=false;
        }
    }
    if($perm) {
        return 1;
    }else {
        return 0;
    }
}