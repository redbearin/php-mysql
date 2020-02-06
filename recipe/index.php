<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>The Recipe Center</title>
    <link href="mystyle.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div id="header">
      <?php 
        include('header.inc.php');
      ?>
    </div>
    <div id="content">

    </div>
    <div id="nav">
      <?php 
        include('nav.inc.php');
      ?>
    </div>
    <div id="main">
      <?php 
        if(!isset($_REQUEST['content'])) include("main.inc.php");
        else {
          $content = $_REQUEST['content'];
          $nextpage = $content . "inc.php";
          include($nextpage);
        }
      ?>
    </div>
    <div id="news">
      <?php 
        include('new.inc.php');
      ?>
    </div>
    <div id="footer">
      <?php 
        include('footer.inc.php');
      ?>
    </div>

  </body>
</html>
