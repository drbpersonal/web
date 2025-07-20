<?php

// 3.11.1 function_exists()
function hello() {
    echo "Function exists works<br>";
}
if(function_exists("hello")) {
    hello();
}

// 3.11.2 call_user_func_array()
function add($a, $b) {
    return $a + $b;
}
echo call_user_func_array("add", [5, 10]) . "<br>";

// 3.11.3 call_user_func()
function greet() {
    return "Hi from call_user_func<br>";
}
echo call_user_func("greet");

// 3.11.4 func_get_arg()
function showFirstArg() {
    echo func_get_arg(0) . "<br>";
}
showFirstArg("First Arg");

// 3.11.5 func_get_args()
function showAllArgs() {
    $args = func_get_args();
    foreach($args as $arg) {
        echo $arg . " ";
    }
    echo "<br>";
}
showAllArgs(1, 2, 3, 4);

// 3.11.6 func_num_args()
function countArgs() {
    echo func_num_args() . "<br>";
}
countArgs(100, 200, 300);

// 3.11.7 get_defined_functions()
$functions = get_defined_functions();
print_r($functions['user']);

?>
