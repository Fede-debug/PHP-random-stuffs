<?php
function myHandler(int $errNo, string $errMsg, string $file, int $line) {
echo "Error #[$errNo] occurred in [$file] at line [$line]: [$errMsg]";
}
set_error_handler('myHandler');
try {
// This does not throw an Error
5 / 0;
} catch ( Error $e ) {
echo 'Caught error : ' . $e->getMessage();
}