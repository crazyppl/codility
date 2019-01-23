/*
An array A consisting of N integers is given. A triplet (P, Q, R) is triangular if 0 ≤ P < Q < R < N and:

A[P] + A[Q] > A[R],
A[Q] + A[R] > A[P],
A[R] + A[P] > A[Q].
For example, consider array A such that:

  A[0] = 10    A[1] = 2    A[2] = 5
  A[3] = 1     A[4] = 8    A[5] = 20
Triplet (0, 2, 4) is triangular.

Write a function:

function solution($A);

that, given an array A consisting of N integers, returns 1 if there exists a triangular triplet for this array and returns 0 otherwise.

For example, given array A such that:

  A[0] = 10    A[1] = 2    A[2] = 5
  A[3] = 1     A[4] = 8    A[5] = 20
the function should return 1, as explained above. Given array A such that:

  A[0] = 10    A[1] = 50    A[2] = 5
  A[3] = 1
the function should return 0.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [0..100,000];
each element of array A is an integer within the range [−2,147,483,648..2,147,483,647].

Task Score
75%
Correctness
100%
Performance
33%
*/
function solution($A) {
    // write your code in PHP7.0
    $length=sizeof($A);
    for($i=0; $i<$length; $i++)
    {
        for($j=0; $j<$length; $j++)
        {
            for($k=0; $k<$length; $k++) 
            {
                if($k == $i || $k == $j || $i == $j) {
                    continue;
                }elseif($A[$i] + $A[$j] > $A[$k] && $A[$j] + $A[$k] > $A[$i] && $A[$i] + $A[$k] > $A[$j]) {
                    return 1;
                }
            }
               
        }
    }
    return 0;
}