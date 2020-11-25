<?php

namespace morozov;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {

    public function _log($str) {

        $this->log[]=$str;

    }

    public static function log($str) {

        self::Instance()->_log($str);

    }

 public function _write() {

        $a = new DateTime();
        $filename = "log/".$a->format('d.m.Y_T_H.i.s.u').".log";

        $dirname = "log";

        if(!(is_dir($dirname))){
            mkdir($dirname, 0777, true);
        }

        $logfile = "";

        foreach($this->log as $value){
            echo $value;
            $logfile .= $value;
        }

        file_put_contents($filename, $logfile);


    }

    public  static function  write() {

        self::Instance()->_write();

    }

}

?>

