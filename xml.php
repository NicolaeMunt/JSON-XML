<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    $myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
    <note>
    <to>Ana</to>
    <from>Max</from>
    <heading>Message</heading>
    <body>Hello World</body>
    </note>";

    $xml = simplexml_load_string($myXMLData) or 
    die("Error:Cannot create object");
    print_r($xml);
    ?>
    
</body>
</html>