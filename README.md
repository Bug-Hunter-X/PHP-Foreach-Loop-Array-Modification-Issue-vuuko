# PHP Foreach Loop with Array Modification
This example demonstrates an uncommon error in PHP related to modifying an array during a foreach loop. The bug arises from unsetting array elements within the loop while the loop iterates through the original index structure. This leads to elements being skipped or missed entirely. The solution showcases a better way to deal with this by storing the index of the element to remove and then unsetting it outside the loop.

## How to Reproduce
1. Create a file named `bug.php` containing the buggy code.
2. Run `php bug.php`
3. Observe the unexpected output compared to the corrected version.

## Solution
The `bugSolution.php` file contains the correct code, which prevents unexpected behavior by keeping track of indices to remove outside the foreach loop. This provides a reliable method for modifying arrays during iteration, without skipping any elements.