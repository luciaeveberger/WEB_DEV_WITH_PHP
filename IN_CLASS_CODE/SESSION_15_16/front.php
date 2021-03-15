<?php
include_once "Log.php";
session_start();
?>
<html><head><title>Front Page</title></head>
<body>
<?php
include($_SERVER['DOCUMENT_ROOT']."/logs/example.log");
echo $_SERVER['DOCUMENT_ROOT'];
$now = strftime("%c");
if (!isset($_SESSION['logger'])) {
$logger = new Log($_SERVER['DOCUMENT_ROOT']);
$_SESSION['logger'] = $logger;
$logger->write("Created $now");
echo("<p>Created session and persistent log object.</p>");
}
else {
$logger = $_SESSION['logger'];
}
$logger->write("Viewed first page {$now}");
echo "<p>The log contains:</p>";
echo nl2br($logger->read());
?>
<a href="next.php">Move to the next page</a>
</body></html>