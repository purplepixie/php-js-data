<?php
require('templates/header.inc.php');
?>
<a href="./">Back to Index</a><br />
<h1>In-Page JS Example</h1>

<div id="data"> <!-- where the data goes! -->
Data goes here!
</div>

<?php
// Get the data
require("data.inc.php");
$data = getData();

// Now we want to output this in a JS script as a JSON object
echo "<script type='text/javascript'>\n";
echo "var myData = ";
echo json_encode($data);
echo ";\n";
echo "</script>";

// and now we want to invoke our JS method to load the data
// we don't need to do that from within PHP as myData exists
?>
<script type='text/javascript'>
clearData();
writeData(myData);
</script>
