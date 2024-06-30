<?php
$connect = new PDO("mysql:host=localhost;dbname=rojgar bharat", "root", "");
$table = "employees";


if(!isset($_GET["param"]) || !isset($_GET["value"])){
    $query = "SELECT * FROM $table";
}
else{
    $param = $_GET['param'];
    $value = $_GET['value'];
    $query = "SELECT * FROM $table where $param = \"$value\"";
    //echo $query;
}

$statement = $connect->prepare($query);


$statement->execute();
$res = $statement->fetchAll();

//print_r($res);

$plumber_img = "plum.jpg";
$electrician_img = "elec.jpg";
$labourer_img = "lab.png";
$carpenter_img = "car.jpg";

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
#search-bar{
    width: 56%;
    margin-left: 22%;
    height: 60px;
    border-radius: 30px 30px 30px 30px; 
    padding-left: 35px;
    padding-right: 35px;
    font-size: 30px;
    box-shadow:2px 4px  6px #888888,2px 4px  6px  #888888;
    -moz-box-shadow:2px 4px  6px #888888,2px 4px  6px  #888888;
    -webkit-box-shadow:2px 4px  6px #888888,2px 4px  6px  #888888;
    -o-box-shadow:2px 4px  6px #888888,2px 4px  6px  #888888;
    z-index: 2;
    margin-top: 125px;

}

#search-bar:focus{
    border-radius: 30px 30px 30px 30px; 
    border: 1px solid #1fb4ff;
    outline: none;

}

.rb{
    width: 100%;
    height : 280px;
    background-image: url("rb.png");
    border-bottom: 1px solid black;
}

.card{
    margin-left : 9%;
    margin-top : 60px;
}

#filter{
    height: 30px;
    width: 8%;
    margin-left: 2%;
}
</style>

<script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>
<body>
    <div class="rb">
        <input type="text" id="search-bar" placeholder="Search...">
        <div class="search-recommendation"></div>
    </div>
    <br>
    <select name="filter" id="filter">
        <option value="Name">Names</option>
        <option value="Specialization">Occupation</option>
        <option value="City">City</option>
    </select>
    <br>
    <div class="row">
        <?php

        foreach($res as $val){
            if($val["Specialization"] == "Electrician"){
                echo "<div class='card' style='width: 18rem;'><img class='card-img-top' src='elec.jpg' alt='Card image cap'><div class='card-body'><h5 class='card-title'>".$val["Name"]."</h5><p class='card-text'>Electrician</p></div><ul class='list-group list-group-flush'><li class='list-group-item'>".$val["City"].", ".$val["State"]."</li><li class='list-group-item'>".$val["phone"]."</li><li class='list-group-item'>Rs ".$val["Expected_salary"]."</li></ul></div>";
            }
            if($val["Specialization"] == "Plumber"){
                echo "<div class='card' style='width: 18rem;'><img class='card-img-top' src='plum.jpg' alt='Card image cap'><div class='card-body'><h5 class='card-title'>".$val["Name"]."</h5><p class='card-text'>Plumber</p></div><ul class='list-group list-group-flush'><li class='list-group-item'>".$val["City"].", ".$val["State"]."</li><li class='list-group-item'>".$val["phone"]."</li><li class='list-group-item'>Rs ".$val["Expected_salary"]."</li></ul></div>";
            }
            if($val["Specialization"] == "Carpenter"){
                echo "<div class='card' style='width: 18rem;'><img class='card-img-top' src='car.jpg' alt='Card image cap'><div class='card-body'><h5 class='card-title'>".$val["Name"]."</h5><p class='card-text'>Carpenter</p></div><ul class='list-group list-group-flush'><li class='list-group-item'>".$val["City"].", ".$val["State"]."</li><li class='list-group-item'>".$val["phone"]."</li><li class='list-group-item'>Rs ".$val["Expected_salary"]."</li></ul></div>";
            }
            if($val["Specialization"] == "Labourer"){
                echo "<div class='card' style='width: 18rem;'><img class='card-img-top' src='lab.png' alt='Card image cap'><div class='card-body'><h5 class='card-title'>".$val["Name"]."</h5><p class='card-text'>Labourer</p></div><ul class='list-group list-group-flush'><li class='list-group-item'>".$val["City"].", ".$val["State"]."</li><li class='list-group-item'>".$val["phone"]."</li><li class='list-group-item'>Rs ".$val["Expected_salary"]."</li></ul></div>";
            }
        }

        ?>
    </div>
<script>
textBox = document.getElementById("search-bar");
textBox.addEventListener("keyup", function (event) { 
  if (event.keyCode == 13) { 
    window.location.href = "search.php?param="+document.getElementById("filter").value+"&value="+textBox.value;
  } 
}); 
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>