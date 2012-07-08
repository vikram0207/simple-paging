<?php
/**
 *
 * @author vikram
 */
interface DB {
    public function connect($host, $username, $password);
    public function setDatabase($dbName);
    public function getData($sql);
    
}
