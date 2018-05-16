<!DOCTYPE html>
<html>
<head>
<title>Create Dynamic form Using JavaScript</title>
<script src="form.js" type="text/javascript"></script>
<link href="form.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main_content">
<!--
========================================================================================
Header Div.
========================================================================================
-->
<div class="first">
<p><a href="https://www.formget.com/app/"><img id="logo" src="logo.png">
</a> Online form builder.</p>
</div>
<!--
======================================================================================
This Div is for the Buttons. When user click on buttons, respective field will appear.
=======================================================================================
-->
<div class="two">
<h4>Frequently Used Form Fields</h4><!--<button onclick="nameFunction()">Idea</button>-->
<button onclick="emailFunction()">Add option</button>
<!--<button onclick="contactFunction()">total no of options</button>
<button onclick="textareaFunction()">Message</button>-->
<button onclick="resetElements()">Reset</button>
</div>
<!--
========================================================================================
This Div is meant to display final form.
========================================================================================
-->
<div class="three">
<h2>Create the form!</h2>
<form action="events/processform.php" id="mainform" method="get" name="mainform">
<span id="myForm"></span>
<input type="hidden" value="<?php echo $_GET['policy_id']; ?>" name="policy">
<p></p><input type="submit" value="Submit">
</form>
</div>
<!--
========================================================================================
Footer Div.
========================================================================================
-->
<div class="four">
<!--<p>2014 <a href="https://www.formget.com/app/"><img src="logo.png">
</a> All rights reserved.</p>-->
</div>
</div>
</body>
</html>