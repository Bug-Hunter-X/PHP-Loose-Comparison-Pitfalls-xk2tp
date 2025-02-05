# PHP Loose Comparison Pitfalls

This repository demonstrates a common but subtle bug in PHP related to loose comparisons (==) between strings and integers.  Loose comparison can lead to unexpected behavior and difficult-to-debug errors.  The solution highlights the importance of using strict comparison (===) for reliable type and value checking.

## Bug Description
PHP's loose comparison operator (==) performs type juggling, meaning it attempts to convert operands to compatible types before comparison. This can lead to unexpected results when comparing strings to integers.  For example, "10" == 10 evaluates to true, even though the types are different.  This behavior might not always be what is desired, leading to logical errors in the code.

## How to Reproduce
Clone this repository and run the `bug.php` file.  Observe the unexpected output due to the loose comparison.  Then, run `bugSolution.php` to see how strict comparison solves the issue.

## Solution
Always use strict comparison (===) when checking the equality of variables.  Strict comparison ensures both the value and type of variables are equal before the comparison evaluates to true.