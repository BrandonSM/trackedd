<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Trackedd</title>
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- latest compiled and minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>

    <!-- load font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- application container -->
    <div class="container-fluid">
      <h1>Trackedd</h1>
      <h3>Simple.Time.Tracking</h3>

      <header class="row">

        <div class="col-xs-6">
          <a href="#">Enter Restore Mode</a>
        </div>
        <div class="col-xs-6 text-right">
          Total Time: <a href="#"></a>
        </div>
      </header>

      <div class="row">
        <form id="form-new">
          <div class="col-xs-10">
           <input id="task" name="task" class="form-control" placeholder="What're you up to?">
          </div>
          <div class="col-xs-2">
          <button type="submit" class="btn btn-block btn-success"><?php echo(i('play')); ?></button>
          </div>
        </form>
      </div>

      <hr>

    <?php
      $data = file_get_contents('data.json');

      $array = json_decode($data, true);
    ?>
    <div class="container">
    <?php $data = file_get_contents('data.json');
          $array = json_decode($data, true);

          foreach ($array as $task) { ?>
          <div class="task-name"><h1>TASK NAME</h1><span style="float:left;width:50%;">Start Time</span><span style="float:right;width:50%;">Stop Time</span></div>
          <div class="button"><button class="btn btn-lg btn-primary"><?php echo(i('stop')); ?></button></div>
          <div class="button"><button class="btn btn-lg btn-red"><?php echo(i('times')); ?></button></div>
      <div style="clear:both;"></div>
      <?php } ?>
    </div>
    </div>

    <!-- load jquery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

    <!-- application javascript  -->
    <script src="trackedd.js"></script>
    <!-- latest compiled and minified js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </body>
</html>
