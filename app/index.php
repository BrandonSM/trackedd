<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Trackedd</title>

    <!-- latest compiled and minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- load font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- application container -->
    <div class="container-flud">
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
           <input id="task" class="form-control" placeholder="What're you up to?">
          </div>
          <div class="col-xs-2">
          <button type="submit" class="btn btn-block btn-success"><?php echo(i('play')); ?></button>
          </div>
        </form>
      </div>

      <hr>
    <table class="table table-bordered">

      <tbody>
        <tr>
          <td><h1>TASK NAME</h1><span style="float:left;width:50%;">Start Time</span><span style="float:right;width:50%;">Stop Time</span><div style="clear:both;"></div></td>
          <td>Data</td>
          <td>Data</td>
          <td><button class="btn btn-primary"><?php echo(i('stop')); ?></button></td>
          <td><button class="btn btn-red"><?php echo(i('times')); ?></button></td>
        </tr>
      </tbody>

    </table>
    </div>

    <!-- load jquery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

    <!-- application javascript  -->
    <script src="trackedd.js"></script>
    <!-- latest compiled and minified js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </body>
</html>
