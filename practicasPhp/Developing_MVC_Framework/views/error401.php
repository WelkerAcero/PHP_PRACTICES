<?php

$template = '
<h1>Error 401 you are not authorized to get into this page</h1>
<img src="./public/img/Unauthorized.jpg" width="100%" alt="Error page">

<input type="button" class="button add block mauto" value="Go back" onclick="history.back()">

';

print($template);