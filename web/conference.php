<?php
header('Content-type: text/xml');
?>
<Response>
  <Dial>
    <Conference startConferenceOnEnter='true' endConferenceOnExit='true' participantLabel=<?php echo "'cf-" . time() . "'" ?>>My conference</Conference>
  </Dial>
</Response>
