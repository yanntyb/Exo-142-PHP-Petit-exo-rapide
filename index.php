<?php

echo "text <br>";

$var = "text <br>";
echo $var;

$tab = ["dodo","dada","dudu","didi"];

echo $tab[1];

foreach($tab as $item){
    echo $item . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul>
<?php

    foreach($tab as $item){
        echo "<li>" . $item . "</li>";
    }
?>
</ul>
</body>
</html>