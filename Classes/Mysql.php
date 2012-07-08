<?php

/**
 * Description of Mysql
 *
 * @author vikram
 * @package default
 * @license default
 * @version 1.0
 */
class Mysql {
    
    public static $link ='';
    
    public function __construct($host, $user, $pass, $dbname) {
        self::$link = mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($dbname);
    }
    
    
    public function getResultSet($sql) {
        return mysql_query($sql, self::$link);
    }
    
    
    public function getRowCount()
    {
        $sql = "SELECT found_rows();";
        $rs = mysql_query($sql, self::$link);
        return mysql_fetch_row($rs);
    }
    
}

