The solution is simple: always use the strict comparison operator (===) instead of the loose comparison operator (==) when comparing variables in PHP.  Strict comparison checks both the value and the type of the variables, preventing unexpected results from type juggling.

Here's the corrected code:

```php
$value = "10";
if ($value === 10) {
  echo "Values are equal";
} else {
  echo "Values are not equal";
}
```
This version uses the strict comparison operator (===). Now, the code will correctly output "Values are not equal", as the type of \$value is string and the type of 10 is integer.
Another example of using === instead of ==
```php
$str = "abc";
if($str === 10){
    echo "true";
}else{
    echo "false";
}
```
This will echo false.