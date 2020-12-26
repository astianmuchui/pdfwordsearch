<?php



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $filename = substr( "./index.pdf",2);
$file = fopen("./index.pdf","r");

$contents = file_get_contents("./index.pdf");
if(strpos($contents,$name)!==false){
    echo $name ." "."exists in $filename";
}else{
    echo $name." "."does not exist in $filename";
}
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search words in pdf</title>
</head>
<body>        
    <center>
           
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <h1>search</h1> <br>
            <label>Enter word</label> <br> <br>
            <input type="text" name="name" placeholder="" required> <br> <br>

            <!-- <label for="price">Document</label> <br>
            <input type="file" name="product_image" > <br>
            <br>
         -->
            <input type="submit" value="search" name="submit">
            <br>
        </form>
        </center>
        
<style>
            *{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            form{
    position: relative;
    margin-top: 80px;
    background: rgba(0, 0, 0, 0.116);
    width: 60%;
    padding: 40px;
    height: 370px;
}
input{
    padding: 10px;
    width: 50vw;
    height: 40px;
}
label{
    font-size: 30px;
    font-family: Arial,Helvetica,sans-serif;
}
        </style>

</body>
</html>