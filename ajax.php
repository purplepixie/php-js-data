<?php
require('templates/header.inc.php');
?>
<a href="./">Back to Index</a><br />
<h1>AJAX JS Example</h1>

<div id="data"> <!-- where the data goes! -->
Data goes here!
</div>

<script type="text/javascript">
// now we're going to get the data from an API
// we could handle this on a click or specific request or when document is ready
var http = new XMLHttpRequest();

// here is the function we're going to link to what happens
http.onreadystatechange = function()
{
    // note we use an anonymous function, we could give an existing function
    if (this.readyState == 4 && this.status == 200) // completed and OK - no error checking!
    {
        // turn the response to JSON
        var j = JSON.parse(this.responseText);
        // now handle this - clear and display
        clearData();
        writeData(j);
    }
}

// now we make the async request and the above function is called when needed
http.open("GET", "api.php", true);
http.send();

</script>
