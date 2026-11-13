<?php

require_once "DataClass/conflict.php";
require_once "DataClass/helper.php";

use Data\One\{conflict as conflict1, dummy, sample};
use function helper\{helpme};

$conflict = new conflict1();
$dummy = new dummy();
$sample = new sample();
