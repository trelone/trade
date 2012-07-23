<?php
$file = $_GET['file'];
if(file_exists($file . ".mp3")) {
header("Content-Type: audio/mpeg");
header("Content-Disposition: attachment; filename=$file.mp3");
include($file . ".mp3");
}
else {
header("Content-Type: text/html; charset=utf-8");
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Error: File doesn&rsquo;t exist!</title>
<style type="text/css">
html {
font: .8125em/1.8 'lucida grande', 'lucida sans unicode', sans-serif;
}
body {
padding: .75em 1.5em;
margin: 0;
background: #fff;
color: #222;
}
p {
margin: .75em 0;
}
a {
color: #39f;
text-decoration: none;
}
a:hover {
color: #06c;
}
</style>
</head>
<body>
<p><strong>An error has occured</strong>. This file doesn&rsquo;t exist on this server. If you followed a legitimate link, please help us out and <a href="/contact">contact us</a>, so we can both fix this and redirect you to the file you wanted. Thank you.</p>
<p>&laquo; <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Go back</a></p>
</body>
</html>
<?php
}
?>