<?php
function foo() {
    yield 1;
    yield 2;
    return 42;
}

$bar = foo();
foreach ($bar as $element) {
    echo $element, "\n";
}

var_dump($bar->getReturn());

// 1
// 2
// int(42)
?>