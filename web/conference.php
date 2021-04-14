<?php
header('Content-type: text/xml');
?>
<Response>
  <Dial>
    <Conference statusCallbackEvent='start' statusCallback='https://twilio-demo-call.herokuapp.com/receive.php' startConferenceOnEnter='true' endConferenceOnExit='true' participantLabel=<?php echo "'cf-" . time() . "'" ?>>My conference</Conference>
  </Dial>
</Response>
