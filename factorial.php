<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body> <?php


            function fact($n)
            {
                $f = 1;
                for ($i = 1; $i <= $n; $i++) {
                    $f = $f * $i;
                }
                return $f;
            }
            echo fact($n);
            echo "<br>";
            echo fact(0);
            echo "<br>";
            echo fact(1);
            echo "<br>";
            echo fact(2);
            echo "<br>";
            echo fact(5);

            ?> -// -->
   
</body>

</html>