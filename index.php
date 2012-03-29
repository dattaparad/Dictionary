<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dictionary Application </title>
        <link href="css/main.css" type="text/css" media="screen, projection" rel="stylesheet" />
    </head>
<body>
<div id="wrapper">
			  <form action="addrecord.php" id="dictForm" method="post">
			  <input type="submit" name="submit" value="add new record from file"/>
			  </form>
            <div id="message" style="display: none;">
            </div>
            <div id="waiting" style="display: none;">
                Please wait<br />
                <img src="images/ajax-loader.gif" title="Loader" alt="Loader" />
            </div>
            <form action="" id="dictForm1" method="post">
                <fieldset>
                    <legend>Dictionary page </legend>
                    <span style="font-size: 0.9em;">This is Dictionary  form.</span>
                    <p>
                        <label for="email">Enter Your word :</label>
                        <input type="text" name="word" id="word" value="" />
                    </p>
                    <p>
                        <input type="submit" name="submit" id="submit" style="float: right; clear: both; margin-right: 3px;" value="Submit" />
                    </p>
                </fieldset>
            </form>
        </div>
<script type="text/javascript" src="js/jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/ajaxSubmit.js"></script>
	
</body>
</html>