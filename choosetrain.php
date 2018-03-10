<body>
<?php include ('function.php'); ?>

<?php
error_reporting(0); 
    if(isset($_POST["sbmt"]))
    {
   $con = makeconnection();

   $query1 = "SELECT `train_no`,`train_name`,`source`,`destination`,`arrival_time`,`departure_time` FROM `list` WHERE source LIKE '".$_POST["selsrc"]."' AND destination LIKE '".$_POST["seldest"]."'";
    
    
    $result = mysqli_query($cn,$query1);
    }
    ?>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <form method="post" enctype="multipart/form-data">
        
        
            <div class="form-group">
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="selsrc" type="text" placeholder="Enter source" style="width:200px">
  </div>
    
         <div class="form-group">
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="seldest" type="text" placeholder="Enter destination" style="width:200px">
  </div>
        <input type="submit" value="submit" name="sbmt">
    </form>
    
<br>
<br>    

    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Train No</th>
      <th scope="col">Train Name</th>
      <th scope="col">Source</th>
        <th scope="col">Destination</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Departure time</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
      
    while($row = mysqli_fetch_array($result)){
    echo      
    "<tr>
      <td>{$row['train_no']}</td>
      <td>{$row['train_name']}</td>
      <td>{$row['source']}</td>
      <td>{$row['destination']}</td>
      <td>{$row['arrival_time']}</td>
      <td>{$row['departure_time']}</td>
      <td><span><a href=\"train_form.php\"><button>Book Now</button></a></span></td>
    </tr>";
      }
      ?>
  </tbody>
</table>

    </body>