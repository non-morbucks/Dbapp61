<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>แสดงข้อมูลสินค้า</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    include("../include/connect_db.php");
    $result=mysqli_query($con,"SELECT  product_id,product_title,product_sprice FROM products");
    echo "<table bordgit init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/tanakornpa58/Dbapp61.git
git push -u origin masterer=1>";
    echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคาสินค้า</th></tr>";
    while(list($product_id,$product_title,$product_sprice)=mysqli_fetch_row($result)){

        echo "<tr><td>$product_id</td><td>$product_title</td><td>$product_sprice</td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($con);


?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>