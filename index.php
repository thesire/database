<?php 


$connection = mysqli_connect('localhost', 'root', '', 'nwosu');

if (isset($_POST['submit'])) {
    $state = $_POST['states'];

    $query = "SELECT labour_force, unemployment_rate FROM nwosutable WHERE states = '".$state."'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASSIGNMENT </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
</head>

<body>
    
<h2>Select state in Nigeria: </h2>
<h5>Revenue is in million Naira (₦)</h5>
<form action="index.php" method="post">
<select class="form-control-sm" name="states" id="#select">
    <option value="">Select State</option>
    <option value="Abia">abia<option>
    <option value="Adamawa">adamawa</option>
    <option value="Akwa Ibom">akwa-ibom</option>
    <option value="Anambra">anambra</option>
    <option value="Bauchi">BAUCHI</option>
    <option value="Bayelsa">BAYELSA</option>
    <option value="Benue">BENUE</option>
    <option value="Borno">BORNO</option>
    <option value="Cross River">CROSS RIVER</option>
    <option value="Delta">DELTA</option>
    <option value="Ebonyi">EBONYI</option>
    <option value="Edo">EDO</option>
    <option value="Ekiti">EKITI</option>
    <option value="Enugu">ENUGU</option>
    <option value="Gombe">GOMBE</option>
    <option value="Imo">IMO</option>
    <option value="Jigawa">JIGAWA</option>
    <option value="Kaduna">KADUNA</option>
    <option value="Kano">KANO</option>
    <option value="Katsina">KATSINA</option>
    <option value="Kebbi">KEBBI</option>
    <option value="Kogi">KOGI</option>
    <option value="Kwara">KWARA</option>
    <option value="Lagos">LAGOS</option>
    <option value="Nasarawa">NASARAWA</option>
    <option value="Niger">NIGER</option>
    <option value="Ogun">OGUN</option>
    <option value="Ondo">ONDO</option>
    <option value="Osun">OSUN</option>
    <option value="Oyo">OYO</option>
    <option value="Plateau">PLATEAU</option>
    <option value="Rivers">RIVERS</option>
    <option value="Sokoto">SOKOTO</option>
    <option value="Taraba">TARABA</option>
    <option value="Yobe">YOBE</option>
    <option value="Zamfara">ZAMFARA</option>
    <option value="Abuja">FCT, ABUJA</option>
    
</select>
    <input class="btn btn-primary" type="submit" name="submit" value="CHECK">
</form>


        <br>
    
    
    <h4>
    <?php
        
        if (isset($_POST['submit'])) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo $state ."<br>" ."<hr>";

                echo "Labour Force: "  .$row["labour_force"] ."<br>";
                echo "Unemployment Rate: "  .$row["unemployment_rate"] ."<br>";


            }
        }    
        
        
    ?>

    </h4>
   </div>
</body>
</html>