<?php

namespace app\helpers\fucus;


/**
 * ZTime class file.
 *
 */

class ZTime
{

    /**
     * get datetime string of current timestamp for datetime data type in mysql
     * @return string, the formatted time like "2015-04-01 12:42:13"
     */

    public static function getCurrentDateTime()
    {
        return date("Y-m-d H:i:s",time());
    }
}
