<!-- PHP Syntax Basics -->
<?php
echo "Hello, Everyone! Welcome to <b>PHP</b>.";
print "Hello, World!"; 
//Both are used to output data. echo is faster, but print returns a value (1), which can be useful
?>
<!-- End PHP Code Blocks:
You can mix PHP with HTML. End the block when switching to HTML.-->
<p>This is HTML content.</p>

<!-- Q3: Can we write HTML and PHP together?
Ans: Yes! PHP is designed to be embedded within HTML to produce dynamic content. 
Example: -->
<!DOCTYPE html>
<html>
<body>
  <h1>Welcome!</h1>
  <?php echo "This is a PHP script."; ?>
</body>
</html>
