<?php

$ASEAN = [ ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"],
           ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filiphina", "Myanmar"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN </title>
</head>
<body>
    <h2><font size="4"><strong>Daftar Negara ASEAN Lama :</Strong></font></h2>
 <h4><ul>
    <?php foreach($ASEAN as $ASN) ; ?>
       
        <li> <?php echo $ASN[0]; ?> </li>
        <li> <?php echo $ASN[1]; ?> </li>
        <li> <?php echo $ASN[2]; ?> </li>
        <li> <?php echo $ASN[3]; ?> </li>
        <li> <?php echo $ASN[4]; ?> </li>
       
    </h4> </ul>
  
        
<h2><font size="4"><strong>Daftar Negara ASEAN Baru :</Strong></font></h2>

<h4>
    <ul><?php foreach($ASN as $ASEAN){
    echo '<li>'.$ASEAN ;
} ?>

</h4></ul>

</body>
</html>