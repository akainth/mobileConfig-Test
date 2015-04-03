<?php
header('Content-type: application/x-apple-aspen-config; charset=utf-8');
header('Content-Disposition: attachment; filename="MySettings.mobileconfig"');
echo $mobileconfig;
?>