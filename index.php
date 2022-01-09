<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Title</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
</style>    
</head>
<body>
<table> 
<tr><th>Product Title</th></tr>   
<?php
    $ch = curl_init();  
    $url = "https://7a859ffcc3961df6e1c52d6dc93cf672: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@yourlibaasuae.myshopify.com/admin/api/2021-10/products.json";
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $resp = curl_exec($ch);
    
    if($e = curl_error($ch))
        echo $e;
    else{
        $decoded = json_decode($resp,true);
        $noOfProducts = sizeof($decoded['products']);
        for($every = 0 ; $every < $noOfProducts ; $every++){
            $eachProductTitle = $decoded['products'][$every]['title'];   
            echo '<tr><td>' .$eachProductTitle . '</td></tr>';
        }
    }    
    curl_close($ch);
?>
</table>
</body>
</html>


