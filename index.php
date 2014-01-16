<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$mapname = 'default';
if (isset($_GET['mapname']))
{
	$mapname = $_GET['mapname'];
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SLS | Title</title>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>

<body>

<div class="container">
  <div class="content">
    <h1 class="bold">Title - Put Title Here</h1>
    <p class="content">Put your content here. The current map is
      <span class="bold">
      <?php
    echo "$mapname";
	?>.</span></p>
    <h2 class="bold">List Title</h2><ol>
<li><span class="bold">One.</span> List item 1.</li>
<li><span class="bold">Two.</span> List item 2.</li>
<li><span class="bold">Three.</span> List item 3.</li>
<li><span class="bold">Add Items.</span> To add items to the list, edit the code and add another &lt;li&gt; item.</li>
</ol></p>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
