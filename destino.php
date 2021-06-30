<?php
$n =  $_POST["n"];
$k =  $_POST["k"];

$array = [];
$i = 0;
$total = 0;

while($i < $k)
{
    
    $total = $n * $i;
    $array[$i] = $total;
    $i++;

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>
                valor de n 
            </th>
            <th>
                multiplicador
            </th>
            <th>
                resultado
            </th>
        </tr>
        <?php
        foreach(array_keys($array) as $key):
        ?>
        <tr>
            <th>
                <?php echo $n ?> 
            </th>
            <th>
            <?php echo $key ?> 
            </th>
            <th>
            <?php echo $array[$key] ?> 
            </th>
        </tr>
        <?php
        endforeach;
        ?>
    </table>
    
</body>
</html>