<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+15106940818">
        <Client><?php echo isset($_GET['client_name']) ? $_GET['client_name'] : 'the_user_id' ?></Client>
    </Dial>
</Response>
