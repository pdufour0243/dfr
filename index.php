<?php
        //Enter your code here, enjoy!

$array = array("1" => "PHP code tester Sandbox Online",  
              "foo" => "bar", 5 , 5 => 89009, 
              "case" => "Random Stuff: " . rand(100,999),
              "PHP Version" => phpversion()
              );
              
foreach( $array as $key => $value ){
    echo $key."\t=>\t".$value."\n";
    
    
    $value = "Hello World!";
}

?>
<!DOCTYPE HTML>
<html>
<head>

<title>Page test GitHub</title>
<meta charset="utf-8">
</head>

<body>

<h1>Voici.. </h1>

<?php echo $value; ?>
</body>

</html>

