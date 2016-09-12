<?php

if(in_category(12)) {
include "single-washer.php";
}
if(in_category(11)) {
include "single-problem.php";
}
if(in_category(13)) {
include "single-advice.php";
}
else {
include "single-service.php";
}
?>
