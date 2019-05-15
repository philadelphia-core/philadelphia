<?php

  var_dump(date(DATE_RFC2822, mktime(0, 0, 0, date('m'), date('d')+1, date('Y'))));