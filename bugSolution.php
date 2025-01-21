function fooCorrected(array $arr) {
  $indicesToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      $indicesToRemove[] = $key;
    }
  }

  foreach ($indicesToRemove as $index) {
    unset($arr[$index]);
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = fooCorrected($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//Alternative solution using array_filter for better readability and efficiency
function fooAlternative(array $arr) {
    return array_filter($arr, function($value){ return $value !== 'a';});
}
$arr = ['a', 'b', 'a', 'c'];
$result = fooAlternative($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )