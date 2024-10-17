<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $num = $_POST['num'];
    // echo $num;
    if (isset($_POST["num"])) {
        $num = $_POST["num"];
        $pendingVAlue ;
        for ($i = 1; $i <= 10; $i++) {
            if ($i == 5){
                $pendingVAlue = $i;
                continue;
            }

            if ($i == 8){
            $pendingLastVAlue = $i;
                break;
            }
            echo $i . " * " . $num . " = " . $i * $num . "<br>";

        }
        // pending value
        echo "<br><br><br>Pending Values are <br>";
        echo $pendingVAlue ." * ". $num . " = ". $i * $pendingVAlue . "<br>";

        for ($i=$pendingLastVAlue; $i <=10 ; $i++) { 
            # code...
            echo $i . " * " . $num . " = " . $i * $num . "<br>";
        }
    } else {
        echo "Plz enter the num";
        echo "<a href='index.php'>Go Back</a>";
    }
    ?>
</body>

</html>