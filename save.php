<?php
file_put_contents('messages/'.time().'-'.rand(0, 999).'.txt', json_encode($_POST));
header("Location: index.html");
