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
    
    private $link ='';
    
    
    public function __construct($host, $username, $password, $dbName) {
        $this->link = mysql_connect($host, $username, $password);
        if(!$this->link) {
            mysql_error();
        }
        mysql_selectdb($dbName, $this->link) or die(mysql_error());
    }
    
    public function getResult($sql) {
        //echo $sql;
        return $rs = mysql_query($sql, $this->link);
        return mysql_fetch_assoc($rs);
    }
    
}

