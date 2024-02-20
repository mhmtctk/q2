<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Sayı: <input type="text" name="sayi">
       
        <input type="submit" value="Asal mı?">
    </form>

    <?php
    if($_GET){
        $sayi=$_GET['sayi'];
        
        AsalSayi($sayi);

        
    }
    function AsalSayi($sayi){
            $asal=true;
            for($i=2;$i<$sayi;$i++){
                if($sayi%$i==0){
                    $asal=false;
                    break;
                }
                    
            }
            if($asal)
                echo $sayi." asal sayıdır";
            else
                echo $sayi ."asal değildir";
        }
        
    ?>
</body>
</html>
