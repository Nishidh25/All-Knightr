<?php
session_start();
?>
<?php
session_destroy(); 
echo "Session Ended Logged out";
echo "<br>";
echo "<a href='//localhost/project/tabs.php'>Return to Site</a>";
?>