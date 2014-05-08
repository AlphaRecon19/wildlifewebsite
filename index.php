<?php
//======================================================================
//   Copyright 2014 @AlphaRecon19
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//
//======================================================================

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); //Include the main configuration file
if(!isset($_GET['page'])) //if the ?page= is not set
	{
		$page = "home"; //set the page to get requested to the homepage
	}
else
	{
		$page = $_GET['page']; //set the page to get requested to the ?page= variable
	}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8"><!-- HTML5 charset -->
<title><?php echo ucwords($page) . ' - ' . $site_title; ?></title> <!-- This is the title of the page. It is generated automatically -->
<link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Include the bootstrap css -->
<link href="css/docs.min.css.php" rel="stylesheet"> <!-- Include the bootstrap docs css -->
<link rel="icon" type="image/png" href="http://i.imgur.com/Rq8q89J.png" /> <!-- Include the favicon -->
  </head>
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation"><!-- Start the nav bar -->
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/?page=home">Home</a>
          <a class="navbar-brand" href="/?page=adopt">Adopt A Lion</a>
          <a class="navbar-brand" href="/?page=contact">Contact US</a>
        </div><!-- /.navbar-header -->
      </div><!-- /.container -->
    </div><!-- Finish the nav bar -->

    <div class="bs-docs-header" id="content" style="margin-top:50px;"><!-- Start the header -->
      <div class="container">
        <h1><?php echo $header_title; ?></h1> <!--echo the headers title from the $header_title variable in the main configuration file -->
        <p><?php echo $header_description; ?></p> <!--echo the header description from the $header_description variable in the main configuration file -->
        </div><!-- /.container -->
    </div><!-- End the header -->
    
    <span id="page_data"><!-- This is where the loaded page will go in. -->
    <center><img src="http://i.imgur.com/rafr9Cu.gif" alt="loading"/></center><!-- This is the placeholder image till the data for the page comes from the web server -->
    </span><!-- /.page_data -->

<footer class="bs-docs-footer" role="contentinfo"><!-- This is the footer. Enable or disable this in the config.php file -->
<?php if($config_showfooter == TRUE){?><p>Designed and built by <a href="http://twitter.com/AlphaRecon19" target="_blank">@AlphaRecon19</a>. - &copy; <?php echo $header_title . " " . date("Y"); ?></p><?php }else{?><p>&copy; <?php echo $header_title . " " . date("Y"); ?></p><?php }?>
</footer>

<!-- Le JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- Include jquery from googles cnd -->
<script type="text/javascript">if (typeof jQuery == 'undefined') {document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));}</script>
 <!-- Fall back to localy host js if googles cnd is unreachable -->
<script>
$(document).ready(function() {
    //Wait till the page has loaded
    $.ajax({
        //Call ajax
        type: "GET",
        //Set the requset type
        url: "/load.php?page=<?php echo $page; ?>",
        //Set the url including the $page variable is set at the top of this page
        success: function(retuned) {
            //Now go do something and sets the returned data to the 
            if (retuned.data) {
                //If there is anything returned from this request then put it into the variable retuned
                $("#page_data").html(retuned.data);
                //Place all the data into the page in the span with the id=page_data
                } else {
                //If nothing was returned from this request then we need a 404
                $.ajax({
                    //Call ajax
                    type: "GET",
                    //Set the requset type
                    url: "/pages/404.php",
                    //Set the url to request the 404 page in /pages/404.php
                    success: function(retuned) {
                        if (retuned.data) {
                            //If there is anything returned from this request then
                            $("#page_data").html(retuned.data);
                            //Place all the data into the page in the span with the id=page_data
                            } else {
                            // If nothing was return by the server for the 404 then
                            $("#page_data").html("<center><h1>Error</h1><p class='lead'>There was and error reteiving that page.</p></center>");
                            //Place the data manually into the page in the span with the id=page_data
                            }
                    }
                });
            }
        }
    });
});
</script>
</body>
</html>
