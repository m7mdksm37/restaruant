<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=IBM+Plex+Sans+Arabic:wght@100;200&family=Nunito+Sans:ital,opsz,wght@0,6..12,400;1,6..12,600&family=Raleway:ital,wght@1,500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS |المنتجات</title>
</head>
<style>
 body {
        background-color: gold;
        background-image: shoplogo.png.png;
        background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Cairo', sans-serif;
        margin: 0;
    }

    .update,
    .delete {
        border: none;
        padding: 10px;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        margin-bottom: 15px;
        color: white;
        text-decoration: none;
    }

    .update {
        width: 50%;
        background-color: #1AC15C;
    }

    .delete {
        width: 30%;
        background-color: red;
    }

    h3 {
        font-weight: bold;
        text-align: center;
    }

    .card {
        float: right;
        border: 3px;
        box-shadow: 1px 1px 8px silver;
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 30px;
        width: 250px; /* Fixed width for all cards */
        display: flex;
        flex-direction: column; /* Align children vertically */
    }

    .card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        padding: 15px;
        flex-grow: 1; /* Expand to fill available space */
    }

    .card-title {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #ffd700;
    padding: 10px;
    border-radius: 5px;
    color: #000;
    height: 50px; /* Set a fixed height */
    overflow: hidden;
    text-overflow: ellipsis;
    position: relative;
    text-transform: uppercase;
}

    .card-text {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        background-color: #f8f8f8;
        padding: 10px;
        border-radius: 5px;
        flex-grow: 1;
    }

    .navbar {
        color: white;
        box-shadow: 1px 1px 10px silver;
        width: 100%;
        margin-top: 5px;
        padding: 10px;
        background-color: black;
        text-decoration: none;
        font-size: 25px;
        display: flex;
        justify-content: space-between; /* Align items horizontally */
    }

    .navbar .a {
        text-decoration: none;
    }

    .upd,
    .del {
        display: inline-block;
        margin-right: 10px;
        text-align: center;
        background-color: #28a745;
        color: #fff;
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 5px;
    }

    .del {
        background-color: #dc3545;
    }
</style>
<body>
<div class='navbar'>
            <a href='menufood.php'>BACK</a>
            
            <p>جميع المنتجات المتوفرة</p>
            <a href='contact.php'></a>
            </div>

    <?php
    
    include("config.php");
    
    $cat=$_GET['cat'];
    $result = mysqli_query($con,"SELECT * FROM food where category='$cat';");
    while ($row = mysqli_fetch_array($result)) {
    
    echo "
    
    <center>
    <main>
<div class='card' width='12rem';>
  <div class='card-body'>
  <img src='$row[image]' ; class='img'>
  
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>PRICE:$row[price]:السعر</p>  
    
    
    <br>

    <a href='upss.php ? id=$row[id]' class='upd'>UPDATE  /      تعديل</a>
    <br>
    <a href='dil.php ? id=$row[id]' class='del'>DELETE  /      حذف</a>

  </div>
</div>
<center>

</main>
     
";
    }
  
    ?>
    
   

    





    

    
    
</body>
</html>