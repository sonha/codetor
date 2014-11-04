<?php 
@echo 1 / 0;
// generates "Parse error: syntax error, unexpected T_ECHO" since 
// echo is not an expression

echo @(1 / 0);
// suppressed "Warning: Division by zero"

@$i / 0;
// suppressed "Notice: Undefined variable: i"
// displayed "Warning: Division by zero"

@($i / 0);
// suppressed "Notice: Undefined variable: i"
// suppressed "Warning: Division by zero"

$c = @$_POST["a"] + @$_POST["b"];
// suppressed "Notice: Undefined index: a"
// suppressed "Notice: Undefined index: b"

$c = @foobar();
echo "Script was not terminated";
// suppressed "Fatal error: Call to undefined function foobar()"
// however, PHP did not "ignore" the error and terminated the
// script because the error was "fatal"
?>