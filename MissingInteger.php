/*
MissingInteger

Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].
*/
<pre>
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
        }elseif($A[$i] == $A[$i+1]) {
            continue;
        }elseif($A[$i+1] != $A[$i]+1 && $A[$i]+1 > 0) {
            return $A[$i]+1;
        }elseif($A[$i+1] != $A[$i]+1 && $A[$i]+1 < 0) {
            continue;
        }
    }
}
</pre>
