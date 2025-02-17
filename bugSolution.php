The solution is straightforward: use strict comparison (`===`) instead of loose comparison (`==`) when checking the result of `strpos()`.  This prevents type juggling from interfering with the comparison, ensuring that the code only returns true when the needle is found at the beginning of the haystack.
```php
<?php
$haystack = "This is a test string";
$needle = "test";

if (strpos($haystack, $needle) === 0) {
    echo "Needle found at the beginning!";
} else {
    echo "Needle not found at the beginning.";
}
?>
```