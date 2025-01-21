function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

// The problem is that modifying the array during the foreach loop can lead to unexpected results. 
//  When an element is unset, the array's internal pointer is adjusted, but the loop continues iterating
// based on the original index structure. This can cause elements to be skipped or missed entirely.

//Correct solution:
function fooCorrected(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
       $indexToRemove = $key;
    }
  }
    unset($arr[$indexToRemove]);
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = fooCorrected($arr);
print_r($result); //Output: Array ( [0] => b [1] => a [2] => c )