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
<style type="text/css">
<!--
body {
        font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
        background: #4E5869;
        margin: 0;
        padding: 0;
        color: #000;
        background-image: url(images/<?php
          echo "$mapname"; /* this is what changes your background image*/
        ?>.jpg);
        background-repeat: no-repeat;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
        padding: 0;
        margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
        margin-top: 0px;         /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
        padding-right: 15px;
        padding-left: 15px;
        text-align: center;
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
        border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
        color:#414958;
        text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
        color: #4E5869;
        text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
        text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
        width: 80%;
        max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
        min-width: 780px;
        margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
        margin-top: 100px;
        opacity: 50%;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {
        padding: 10px 0;
        color: #FFF;
        text-align: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
        padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
        float: right;
        margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
        float: left;
        margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
        clear:both;
        height:0;
        font-size: 1px;
        line-height: 0px;
}
.content-title {
}
.container .content p {
        text-align: left;
}
.bold {
        font-weight: bold;
        color: #F66; /* set this color to what you want your bold color to be */
}
-->
</style>
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
