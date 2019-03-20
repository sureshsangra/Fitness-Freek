<?php
$ext = get_loaded_extensions();
foreach ($ext as $key => $value) {
	echo $value."\n";
}
echo phpinfo(); 
 ?>