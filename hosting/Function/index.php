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
    $name="Rolands";
    $number =0;
    function calc(){
        print 45 +55;
    }
    function br(){
        print"<br>";
    }
    function summa($a,$b){
    print $a + $b;}

    function greeting($name){
    print "Sveiks ".$name;
}
    function inc($skaitlis){
        $summa = $skaitlis + 1;
       return $summa;
    }


    $nummber = inc($number);
    $nummber = inc($number);
    $nummber = inc($number);
    $nummber = inc($number);
    $nummber = inc($number);
    print $number;
    br();
    greeting($name);
    br();
    calc();
    br();
    calc();
    br();
    summa(20,30)

    ?>
</body>
</html>