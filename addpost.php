<?php

$pk = $_GET['pk'];

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

<title>bootstrap-wysihtml5</title>

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css"></link>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->

    
</head>

<body>
<div class="container">
<form class="form-horizontal" id="form1" method="post" action="addpost_process.php?pk=<?php echo $pk; ?>">
  <fieldset>
    <legend>撰寫文章</legend>
    <div class="control-group">
      <label class="control-label" for="textfield"></label>
      <div class="controls">
        <div class="btn-group" data-toggle="buttons-radio" data-toggle-name="nuke4">
          <button type="button" class="btn active" value="0">非針對核四</button>
          <input type="hidden" name="nuke4" value="0" />
          <button type="button" class="btn" value="1">針對核四</button>
        </div>
      </div>
      <br />
      <div class="controls">
        <div class="btn-group" data-toggle="buttons-radio" data-toggle-name="type">
          <button type="button" class="btn active" value="0">連結</button>
          <input type="hidden" name="type" value="0" />
          <button type="button" class="btn" value="1">文章</button>
        </div>
      </div>
      <br />
      <label class="control-label" for="textfield2">標題</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield" name="STITLE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <br />

      <label id="article_label" class="control-label" for="resizable">文章內容</label>
      <div id="article" class="controls">
        <textarea class="textarea" placeholder="撰寫文章 ..." style="width: 750px; height: 200px" name="SCONTENT"></textarea>
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>

      <label id="link_label" class="control-label" for="textfield3">連結</label>
      <div id="link" class="controls">
        <input type="text" class="input-xlarge" id="textfield2" name="SCONTENT" />
      </div>      

      <br />
      <div class="controls pull-right">
        <div class="submit-group" submit-name="DRAFT">
          <button type="submit" class="btn btn-primary">發佈</button>
        </div>
      </div>

    </div>
  </fieldset>
</form>
</div>

<script src="lib/js/wysihtml5-0.3.0.js"></script>
<script src="lib/js/jquery-1.7.2.min.js"></script>
<script src="lib/js/prettify.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="src/bootstrap-wysihtml5.js"></script>
<script src="assets/js/form.js"></script>

<script type="text/javascript">
  $('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
  $(prettyPrint);
</script>

</body>
</html>
