<?php

if(in_category(12)) {
  include "single-washer.php";
} else if(in_category(11)) {
  include "single-problem.php";
} else if(in_category(13)) {
  include "single-advice.php";
} else {
  include "single-service.php";
}
?>
