<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body> 
<?php
$a=1;
$b=2;
function Sum()
{
  global $a,$b;// глобал 
  $b=$a+$b;
}
Sum();
echo $b;
   ?>
</body>

</html>