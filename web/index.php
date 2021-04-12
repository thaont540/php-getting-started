<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+15106940818"><?php  echo $_POST['To'];?></Dial>
</Response>
