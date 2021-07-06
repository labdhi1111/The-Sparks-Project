<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="main.html" class="w3-bar-item w3-button"><b>The Global</b><b> Bank</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      
      <a href="createuser.php" class="w3-bar-item w3-button">Create User</a>
      <a href="#transfer" class="w3-bar-item w3-button">Transfer Money</a>
      
    </div>
  </div>
</div>

	<div class="container">
        
       <br>
       <br> 
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-10">
  <p>Made by Labdhi Shah</a></p>
</footer>

</body>
</html>
