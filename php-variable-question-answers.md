## PHP variable question and answers 
What is the value of $x after the following code is executed? \
$x = 3; \
$x += '3apples'; \
a) 6 \
b) 3apples \
c) NaN \
d) None of the above

What is the value of $y after the following code is executed? \
$x = '3'; \
$y = &$x; \
$x = 4; \
a) 3 \
b) 4 \
c) null
d) &$x

Which of the following is NOT a valid PHP variable name? \
a) _myVar \
b) $myVar \
c) my-var \
d) $MyVar

What is the result of the following expression? \
$x = 3; \
$y = $x++; \
echo $y; \
a) 3
b) 4
c) null
d) Syntax error

What is the value of $z after the following code is executed? \
$x = 3; \
$y = &$x; \
unset($x); \
$z = $y; \
a) 3 \
b) null \
c) Reference error \
d) Undefined variable

What is the value of $y after the following code is executed? \
$x = 'Hello'; \
$y = $$x; \
Hello = 'World'; \
a) Hello \
b) World \
c) null \
d) Syntax error

Which of the following is NOT a valid PHP data type? \
a) integer \
b) float \
c) boolean \
d) character

What is the value of $x after the following code is executed? \
$x = 3; \
$x *= 3 + 2; \
a) 15 \
b) 25 \
c) 6 \
d) Syntax error

What is the value of $y after the following code is executed? \
$x = [1, 2, 3]; \
$y = &$x[1]; \
$x[1] = 4; \
a) [1, 2, 3] \
b) [1, 4, 3] \
c) [4, 2, 3] \
d) 4

What is the value of $x after the following code is executed? \
$x = 'Hello'; \
unset($x); \
$x = 'World'; \
a) Hello \
b) World \
c) null \
d) Undefined variable

What is the result of the following expression? \
$x = '3' . '4'; \
$y = $x + 5; \

a) 8 \
b) 9 \
c) 34 \
d) Syntax error

Which of the following is the correct way to check if a variable is set and is not null? \
a) isset($x) \
b) !empty($x) \
c) ($x !== null) \
d) All of the above

What is the value of $y after the following code is executed? \
$x = 3; \
$y = (string) $x; \
$x = '4'; \
a) 3 \
b) 4 \
c) '3' \
d) '4'

What is the value of $z after the following code is executed? \
$x = 3; \
$y = &$x; \
$y += 2; \
$z = $x; \
a) 3 \
b) 5 \
c) null
d) &$x

What is the result of the following expression? \
$x = '3'; \
$y = $x + 2; \
a) 5 \
b) '32' \
c) Syntax error \
d) Null

What is the value of $y after the following code is executed? \
$x = 3; \
$y = $x; \ 
$x = 4; \
a) 3 \
b) 4 \
c) Null \
d) Syntax error

What is the value of $z after the following code is executed? \
$x = 3; \
$y = &$x; \
$x = 4; \
$z = &$x; \
a) 3 \
b) 4 \
c) &$x \
d) Syntax error

Which of the following is the correct way to check if a variable is an array? \
a) is_array($x) \
b) gettype($x) == 'array' \
c) ($x instanceof Array) \
d) All of the above

What is the value of $y after the following code is executed? \
$x = '3'; \
$y = &$x; \
$x = '4'; \
a) 3 \
b) 4 \
c) '3' \
d) '4'

What is the result of the following expression? \
$x = true; \
$y = !$x; \
$a = $x && $y; \
$b = $x || $y; \
a) $a = false, $b = true \
b) $a = true, $b = false \
c) $a = false, $b = false \
d) Syntax error
