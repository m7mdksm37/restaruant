<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=IBM+Plex+Sans+Arabic:wght@100;200&family=Nunito+Sans:ital,opsz,wght@0,6..12,400;1,6..12,600&family=Raleway:ital,wght@1,500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>MENU PAGE</title>
</head>
<style>
    @media only screen and (max-width: 600px) {
        *{
    margin: 0;
    padding: 0;
  }
  body{
    background: rgba(0, 0, 0, 0.7) url(images/ahlen3.avif) center center;
    
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-blend-mode: darken;
}
.back{
    align-items: center;
    text-decoration: none;
    color: blue;
    display: inline-block;
    transition: 3s;
    text-transform: uppercase;

}

.back:hover{
    box-shadow: 0 3px 50px orangered inset,0 3px 50px orangered inset,0 3px 50px orangered inset;

}
.h2{
    color: goldenrod;
    font-size: 10px;
}

.container {
    display: flex;
    flex-direction: column; /* Display items in a column */
    align-items: center ; /* Align items horizontally in the center */
}

.container h1.ai {
    color: goldenrod;
    cursor: pointer;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 35px;
    margin: 0;
    padding: 0;
    text-align: center; /* Add this line to center the text */
}

.container img {
    width: 200px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-top: 10px; /* Add some space between the title and the image */
}

.navbar ul li{
    display: inline-block;
    padding: 30px;
    text-transform: uppercase;

}
.navbar ul li a{
    text-decoration: none;
    color: goldenrod;
    padding-top: 4px;
    transition: 3s;
}
.navbar ul li a:hover{
    box-shadow: 0 3px 50px orangered inset,0 3px 50px orangered inset,0 3px 50px orangered inset;

}
.navbar .reservation{
    padding: 8px;
    background-color: orangered;

}
h2{
    color: goldenrod;
    border-bottom: 5px dotted gold;
    border-top: 5px dotted gold;
    margin-top: 30px;

}
h2 .ad{
    width: 100px;
    height: 100px;
    float: right;
    
    
}



    .card img {
        width: 100%;
        height: 175PX;
        object-fit:fill;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        padding: 15px;
        flex-grow: 1; /* Expand to fill available space */
    }

    .card-title {
    font-family: 'Arial', sans-serif;
    font-size: 10px;
    font-weight: bold;
    color: #fff;
    background-color: #ffd700;
    padding: 10px;
    border-radius: 5px;
    color: #000;
    height: 70px; /* Set a fixed height */
    overflow: hidden;
    text-overflow: ellipsis;
    position: relative;
    align-items: center;
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
    .card-infos {
    font-size: 10px;
    font-weight: bold;
    color: #fff;
    background-color: #ff6347;
    padding: 5px;
    border: 15px solid #ff6347;
    border-radius: 2px;
    position: relative;
}

.card-price {
    font-size: 11px; /* Adjust the font size as needed */
    position: absolute;
    
    height: 25px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
}
.copyright {
    position:static;
    bottom: 0;
    top: auto;
    width: 100%;
    text-align: center;
    color: #888;
    font-size: 14px;
    padding: 10px;
    
}


 



    .card {
    
    float: right;
    border: 3px;
    box-shadow: 1px 1px 8px silver;
    margin-top: 20px;
    margin-left: 5px;
    margin-right: 25px;
    width: 40%; /* Fixed width for all cards */
    display: flex;
    flex-direction: column;
    border: 3px solid goldenrod;
 
    
}

}
@media only screen and (min-width: 601px) {



  *{
    margin: 0;
    padding: 0;
  }
  body{
    background: rgba(0, 0, 0, 0.7) url(images/ahlen3.avif) center center;
    
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-blend-mode: darken;
}
.h2{
    color: goldenrod;
    font-size: 10px;
}

.container {
    display: flex;
    flex-direction: column; /* Display items in a column */
    align-items: center; /* Align items horizontally in the center */
}

.container h1.ai {
    color: goldenrod;
    cursor: pointer;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 35px;
    margin: 0;
    padding: 0;
}

.container img {
    width: 200px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-top: 10px; /* Add some space between the title and the image */
}

.navbar ul li{
    display: inline-block;
    padding: 30px;
    text-transform: uppercase;

}
.navbar ul li a{
    text-decoration: none;
    color: goldenrod;
    padding-top: 4px;
    transition: 3s;
}
.navbar ul li a:hover{
    box-shadow: 0 3px 50px orangered inset,0 3px 50px orangered inset,0 3px 50px orangered inset;

}
.navbar .reservation{
    padding: 8px;
    background-color: orangered;

}
h2{
    color: goldenrod;
    border-bottom: 5px dotted gold;
    border-top: 5px dotted gold;
    margin-top: 30px;

}
h2 .ad{
    width: 100px;
    height: 100px;
    float: right;
    
    
}

.card {
    
        float: right;
        border: 3px;
        box-shadow: 1px 1px 8px silver;
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 38px;
        width: 250px; /* Fixed width for all cards */
        display: flex;
        flex-direction: column;
        border: 3px solid goldenrod;
     
        
    }

    .card img {
        width: 100%;
        height: 175PX;
        object-fit:fill;
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
.back{
    text-decoration: none;
    color: goldenrod;
    display: inline-block;
    transition: 3s;
    text-transform: uppercase;

}

.back:hover{
    box-shadow: 0 3px 50px orangered inset,0 3px 50px orangered inset,0 3px 50px orangered inset;

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
    .card-infos {
    font-size: 10px;
    font-weight: bold;
    color: #fff;
    background-color: #ff6347;
    padding: 5px;
    border: 15px solid #ff6347;
    border-radius: 2px;
    position: relative;
}

.card-price {
    font-size: 14px; /* Adjust the font size as needed */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
}
.copyright {
   
    bottom: 0;
    top: auto;
    width: 100%;
    text-align: center;
    color: #888;
    font-size: 14px;
    padding: 10px;
    
}
}


 



</style>
<style>
        
        .navigation {
    text-align: center; /* Center the content horizontally */
    margin: 20px 0; /* Add some vertical spacing for better readability */
}

/* Styles for the "BACK TO CATEGORY" link */
.navigation a.back {
    padding: 10px;
    margin-bottom: 2px;
    text-decoration: none;
    background-color: #4CAF50; /* Green background color */
    color: white; /* White text color */
    border-radius: 5px; /* Rounded corners */
    margin-right: 10px; /* Add some spacing between "BACK TO CATEGORY" and dropdown */
}

/* Styles for the dropdown container */
.navigation .dropdown-container {
    display: inline-block;
    position: relative;
}

/* Styles for the dropdown button */
.navigation .dropdown-button {
    padding: 10px;
    
    font-size: 16px;
    cursor: pointer;
    width: 150px;
    background-color: goldenrod; /* Green background color */
    color: white; /* White text color */
    border: none; /* No border */
    border-radius: 5px; /* Rounded corners */
}

/* Hover effect for the dropdown button */
.navigation .dropdown-container:hover .dropdown-button {
     /* Darker green on hover */
}

/* Styles for the dropdown list */
.navigation .dropdown-list {
    display: none;
    position: absolute;
    width: 150px;
    background-color: goldenrod;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px; /* Rounded corners for the dropdown list */
}

/* Styles for dropdown list items */
.navigation .dropdown-list a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: black;
    ; /* Smooth transition for background color */
}

/* Hover effect for dropdown list items */
.navigation .dropdown-list a:hover {
    background-color: ; /* Light gray on hover */
}

/* Show the dropdown list when hovering over the container */
.navigation .dropdown-container:hover .dropdown-list {
    display: block;
}
.dropdown-option {
        display: inline-block;
        padding: 10px;
        text-decoration: none;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    
    }

    /* Styles for the first option */
    .option-ll {
        background-color: green; /* Green background color for L.L */
    }

    /* Styles for the second option */
    .option-dollar {
       color: black;
        background-color: white; /* Blue background color for $ */
    }

    /* Hover effect for the options */
    .dropdown-option:hover {
        background-color: /* Darker color on hover */
    }
    .imge{
        border-bottom: 5px dotted gold;
    border-top: 5px dotted gold;
    border-left: 5px dotted gold;
    border-right: 5px dotted gold;  

    }
    .ai{
        border-bottom: 5px dotted gold;
    border-top: 5px dotted gold;
    border-left: 5px dotted gold;
    border-right: 5px dotted gold;  

    }
    </style>
<body>
<div class="container">
        <h1 class="ai" >AL-DIWAN RESTAURANT </h1>
        <img src="images/aldiwan.png" class='imge'>
        
    </div>
    <center><h2>MENU
        
    </h2></center>
    
    
    

    <main>
   


    
    






    <div class="navigation">

    <center><h5><a href="menuess.php" class="back">BACK TO CATEGORY</a></h5></center>
    <br>
    <main>
    <?php
    
    include("config.php");
    $ID=$_GET['id'];
    $result = mysqli_query($con,"SELECT `id`,`name`,`image`,`info`,`category`,FORMAT(CEILING(price*(SELECT rate from rate) / 5000) * 5000,'#,0.00') as price FROM `food` where category = '$ID'");
   $row = mysqli_fetch_array($result);
    echo "
    
        <div class='dropdown-container'>
            <div class='dropdown-button'>Choose price unit</div>
            <div class='dropdown-list'>
            <a href='infoshomenu.php?id=$row[category]' class='dropdown-option option-ll'>L.L</a>
            <a href='infodolor.php?id=$row[category]' class='dropdown-option option-dollar'>$</a>
            
            </div>
        </div>
    ";
    
    
    
    ?>
    </div>
    <?php
    $result = mysqli_query($con,"SELECT `id`,`name`,`image`,`info`,`category`,FORMAT(CEILING(price*(SELECT rate from rate) / 5000) * 5000,'#,0.00') as price FROM `food` where category = '$ID'");
    while ($row = mysqli_fetch_array($result)) {
    
    echo "
    
    
    
<div class='card' width='12rem';>
  <img src='$row[image]' width:100%; class='card-img'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    
    <div class='card-infos'>
    <p class='card-price'>PRICE:$row[price]L.L</p>
</div>

    <p class='card-info'>$row[info]</p>

  </div>
</div>



    
    
    
    
";
    }
    ?>
    
   

    


    </main>


   </body> 

<footer class="copyright">
        --- ©2024 AL-DIWAN RESTAURANT | All Rights Reserved | Designed by MHMD KASEM
</footer>
    

</html>