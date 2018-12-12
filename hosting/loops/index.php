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
        $counter=0;
        while($counter <= 10){
            echo $counter;
            $counter++;
        }
        print "<br>";
        //$counter =0;
        for ($counetr=0; $counter < 10; $counter++) {
            print $counetr."<br>";
        }
        $masivs = array(10,10,12,12,31);
        foreach ($masivs as $key => $value) {
            print $value. " ".$key. "<br>";
        }
        $name = array("firstname" => "Rolands", "lastname"=> "Struta");
        foreach ($name as $key => $value) {
            print $value." ".$key."<br>";

        }
    ?>
</body>
</html>