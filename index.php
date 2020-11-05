<?php

use morozov\MorozovException;
use morozov\MyLog;
use morozov\SolveTwo;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "morozov/MyLog.php";
include "morozov/Solve.php";
include "morozov/SolveTwo.php";
include "morozov/MorozovException.php";



ini_set("display_errors", 1);
error_reporting (-1);

// \morozov\MyLog::log("sdsdsdsdsd");
MyLog::write();

?>