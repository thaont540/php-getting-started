<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+19252043752"><?php  echo $_POST['To'];?></Dial>
</Response>
