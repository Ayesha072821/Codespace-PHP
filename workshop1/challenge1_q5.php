<?php
$month_hightemp= array( "July-Aug" => 19, 'Jan-Feb' =>7);
$month_lowtemp= array( 'July-Aug' => 11, 'Jan-Feb' =>1);
echo "Average Temperature in Edinburgh <br>";
echo "<pre>Month         High         Low</pre><br>";
echo "<pre>July-Aug       ".$month_hightemp['July-Aug']."        ".$month_lowtemp['July-Aug']."     </pre> <br>";
echo "<pre>Jan-Feb       ".$month_hightemp['Jan-Feb']."        ".$month_lowtemp['Jan-Feb']."     </pre>";


?>