String
Single Quoted
Double Quoted
Heredoc Syntax
Nowdoc Syntax
Single Quoted
Literal
var_dump('l');           //=> string(1) "l"
var_dump('lorem ipsum'); //=> string(11) "lorem ipsum"
String Multiline
var_dump('lorem
ipsum');
//=>
// string(11) "lorem
// ipsum"
Escape Sequences
$variable = 'lorem\' ipsum';
var_dump($variable); //=> string(12) "lorem' ipsum"
$variable = 'lorem \\\' ipsum';
var_dump($variable); //=> string(14) "lorem \' ipsum"
$variable = 'lorem \n ipsum';
var_dump($variable); //=> string(14) "lorem \n ipsum"
echo $variable;      //=> lorem \n ipsum
Double Quoted
Literal
var_dump("lorem ipsum"); //=> string(11) "lorem ipsum"
Escape Sequences
var_dump("lorem\nipsum");
//=>
// string(13) "lorem
// ipsum"
Variable parsing
$name = 'Alice';
var_dump('Hello $name'); //=> string(11) "Hello $name"
$name = 'Alice';
var_dump("Hello $name"); //=> string(11) "Hello Alice"
$name = 'Alice';
var_dump("Hello {$name}!"); //=> string(12) "Hello Alice!"
$name = ['name' => 'Alice'];
var_dump("Hello {$name['name']}"); //=> string(11) "Hello Alice"
$number = 10;
var_dump("result: {$number+1}"); //=> Parse error: syntax error, unexpected '+', expecting :: (T_PAAMAYIM_NEKUDOTAYIM)
Heredoc Syntax
Literal
$variable = <<<EOD
lorem
ipsum
EOD;

var_dump($variable);
//=>
// string(11) "lorem
// ipsum"
Escape Sequences
$variable = "lorem
\tipsum";

var_dump($variable);
//=>
// string(12) "lorem
// 	ipsum"
$name = 'Alice';

$variable = <<<EOD
Hello $name
EOD;
//=> PHP Parse error:  syntax error, unexpected '<<' (T_SL) in php
Nowdoc Syntax
Literal

$variable = <<<'EOD'
Hello world!
EOD;

var_dump($variable); //=> string(12) "Hello world!"
Escape Sequences
$name = 'Alice';

$variable = <<<'EOD'
Hello $name
EOD;
//=> Parse error: syntax error, unexpected '<<' (T_SL) in php
