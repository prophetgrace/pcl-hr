<?php 
error_reporting(0); 
require '../processors/sessionLogger.php' ;
require '../dbConfig.php' ;

if (isset($_GET['view'])) {
    $rep_id = $_GET['view'];
    $update = true;

    $record = mysqli_query($connect, "SELECT * FROM rep_data  WHERE rep_id = $rep_id ");

    if (count($record) == 1) {
        //This code populates the input with input data
        $n = mysqli_fetch_array($record);
        $rep_name = $n['rep_name'];
        $rep_phone_number = $n['rep_phone_number'];
        $rep_branch = $n['rep_branch'];
        $rep_email = $n['rep_email'];
        $rep_payroll_code = $n['rep_payroll_code'];
        $rep_bank = $n['rep_bank'];
        $rep_account_number = $n['rep_account_number'];
        $rep_nssf_number = $n['rep_nssf_number'];
        $rep_nin = $n['rep_nin'];
        $rep_tin_number = $n['rep_tin_number'];
        $rep_doa = $n['rep_doa'];
        $added_by = $n['added_by'];
    }
   
}

?>
<html>
<head>
    <title>Pcl Reps Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="../css/edit-info.css">
    
  </head>
  <body>
  <div class = "form-design">
  <div class="container">
  <div class="card card-margin" style="width: 35rem;">
  <div class="card-body">
  <h5 class="card=title">VIEW REP</h5>
  <div class="form-group">
  <label for="exampleInputText1">REP NAME : </label>
  <input type="hidden" class="form-control" name="rep_id" value="<?php echo $rep_id ?>">
  <?php echo $rep_name ?>
  </br>
  <label for="exampleInputEmail1">PHONE NUMBER : </label>
  <?php echo $rep_phone_number ?>
  </br>
  <label for="exampleInputText1">BRANCH : </label>
  <?php echo $rep_branch ?>
  </br>
  <label for="exampleInputEmail1">EMAIL ADDRESS : </label>
  <?php echo $rep_email ?>
  </br>
  <label for="exampleInputText1">PayRoll Code : </label>
  <?php echo $rep_payroll_code ?>
  </br>
  <label for="exampleInputText1">Rep Bank : </label>
  <?php echo $rep_bank ?>
  </br>
  <label for="exampleInputText1">Rep Account Number : </label>
  <?php echo $rep_account_number ?>
  </br>
  <label for="exampleInputText1">Rep TIN Number : </label>
  <?php echo $rep_tin_number ?>
  </br>
  <label for="exampleInputText1">Rep NSSF Number : </label>
  <?php echo $rep_nssf_number ?>
  </br>
  <label for="exampleInputText1">Rep NIN : </label>
  <?php echo $rep_nin ?>
  </br>
  <label for="exampleInputText1">Date Of Appointment : </label>
  <?php echo $rep_doa ?>
  </br>
  <label for="exampleInputText1">ADDED BY : </label>
  <?php echo $added_by ?>
  </div>
  <a href="../reps.php"><button  class="btn btn-primary">BACK</button></a>
  </div>
  </div>
  </div>
  </div>
  </body>
</html>