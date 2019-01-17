function solution($A) {
    // write your code in PHP7.0
    sort($A);
    $length=sizeof($A);
    for($i=0; $i<count($A)+1; $i++) {
        if($i == $length-1) {
            if($A[$i]+1 > 0) {
                return $A[$i]+1;
            }else{
                return 1;
            }
            
        }
        elseif($A[$i] == $A[$i+1]) {
            continue;
        }elseif($A[$i+1] != $A[$i]+1 && $A[$i]+1 > 0) {
            return $A[$i]+1;
        }elseif($A[$i+1] != $A[$i]+1 && $A[$i]+1 < 0) {
            continue;
        }
    }
}