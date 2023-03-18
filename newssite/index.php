<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News site</title>
</head>
<body>
    
    <h1 align="center"> Yangilik sayti</h1>

    <main style="display: flex; justify-content: center;">

    <?php  
        require_once "./data.php";
        
        foreach($data as $new):
            if($new['status']==true):
    ?>

       <div style="background-color: yellowgreen; width: 30%; padding: 20px; margin: 10px">
            <img src="<?=$new['img']?>" style="width:100%">
            <h3><?=$new['title']?></h3>
            <p><?=$new['date']?></p>
            <p><?=$new['content']?></p>
       </div>

       <?php endif; endforeach; ?>
      

    </main>

</body>
</html>