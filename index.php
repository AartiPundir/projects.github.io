
<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type= "text/css" href ="style.css">
    

    
</head>

<body>
    
    <br><br>
    <div class="row">
  <div class="col-sm-6">
    
      
      
       <h1>
    USD To INR exchange rate<br> </h1>
      <h2>
      <?php 
        $d= date('d/m/Y (D)');
        echo $d;
        ?> :: <?php 
        $curl=curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.exchangerate-api.com/v4/latest/USD");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$error = curl_error($curl);

$object = json_decode($response);

echo $object->rates->INR
        ?>
        
        
   </h2> 
      
     </div>
    
  <div class="col-sm-6">
    
          <div id = "container"><br><br><br>
            <h2>Do you want to <br>learn more ?....</h2>
    <button type="submit" class="btn btn-primary" onclick="location='login.php'">Login Here</button><br><h2>If Not Registered</h2>
        <button type="submit" class="btn btn-primary" onclick="location='signup.php'">Register Here</button>
    </div>
    
        
        
        </div>
      

  
</div>
    
        
    
    
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</html>