<html>
<title>File management system</title>

<body>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css.css">
<center><h2>File Management System</h2></center>
<div id='main_div'>
	<input type="button" value='Show Files' id='show_files'>
	<div id='file_div' style='display:none'></div>
  <div class="picture1" id='add_file' alt="Add New"  title="Add New">&nbsp;</div>
</div>
<div id='text_div' ><br><br>
<center><textarea id='text_area' name='text_area' rows='20' cols='50'></textarea><br><br>
<input type='button' value='save' id='save' onclick="javascript:addfile()"></center>
</div>
<div id="dialog-form" title="Save As">
  <form>
    <fieldset>
      <label for="file_name">File Name</label>
      <input type="text" name="file_name" id="file_name" value="" class="text ui-widget-content ui-corner-all">
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="view.js" type='text/javascript'></script>
</body>
</html>
