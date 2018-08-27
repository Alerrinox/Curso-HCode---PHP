<?php  

// json para array
$json = '[{"nome":"rafael","idade":28},{"nome":"daimon","idade":40}]';

// Json_decode passa json pra objeto. O parametro true é para passar de objeto pra array.  
print_r(json_decode($json, true));

?>