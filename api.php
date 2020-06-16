<?php
// api.php returns the JSON data but as a standalone call
require('data.inc.php');
header("Content-type: Application/json");
echo json_encode(getData());
exit();
