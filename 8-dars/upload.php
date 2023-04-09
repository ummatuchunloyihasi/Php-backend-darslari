<pre>
<?php

if(isset($_FILES['photos'])){

    $photos = $_FILES['photos'];

    print_r($photos);

    $extension = pathinfo($photos['name'])['extension'];

    $name  = rand(10000,99999).".". $extension;

    $temp_name = $photos['tmp_name'];

    move_uploaded_file($temp_name,"file/".$name);

}

?>
</pre>