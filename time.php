<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->nowWithSameTz()->format('H:i');
echo $dt->format('Y-m-d');