<html>
<title>File management system</title>

<body>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<div id='main_div'>
	<input type="button" value='Show File' id='show_files'>
	<div id='file_div' style='display:none'></div>
	<input type="button" value='Add File' id='add_file'>
</div>
<div id='text_div' >
<textarea id='text_area' name='text_area'></textarea>
<input type='button' value='save' id='save' onclick="javascript:addfile()">
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
