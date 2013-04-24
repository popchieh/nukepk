<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

<title>Nukepk</title>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>

<body>

<hr>

    <div class="container">

      <div class="row-fluid">
        <div class="span6">
            <p><a class="btn" href="addpost.php?pk=0">張貼挺核文 &raquo;</a></p>
        </div><!--/span-->
        <div class="span6">
            <p><a class="btn" href="addpost.php?pk=1">張貼反核文 &raquo;</a></p>
        </div><!--/span-->
      </div><!--/row-->

      <div class="row-fluid">
        <div class="span6">
          <div class="well">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span6">
          <div class="well">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->

      <div class="row-fluid">
        <div class="span6">
          <div class="well">
            <?php // include_once("url_fetch.php"); ?>
            <p>
<?php 

// $url = 'http://www.inside.com.tw/2013/03/14/google-is-gonna-shut-down-google-reader-on-1st-july';

// $options = array(
//   'return_info' => true,
//   'method'    => 'post'
// );

// $contents = load($url, $options);
// print_r($contents);
?>
            </p>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span6">
          <div class="well">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->
      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-min.js"></script>

<!-- Google Anlytics -->

  </body>
</html>