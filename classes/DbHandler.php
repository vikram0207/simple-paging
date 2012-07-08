<?php

/**
 * Description of DbHandler
 *
 * @author vikram
 * @package default
 * @license default
 * @version 1.0
 */
class DbHandler extends Mysql {
    
    public function __construct() {
        parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    }
    
    
    public function getData($page='1', $limit='3') {
        $sql = " SELECT a,b from test ORDER by a ASC LIMIT $page, $limit ";
        return $rs = $this->getResult($sql);
    }
    
    public function getCount() {
        $sql = " SELECT count(*) from test";
        return $rs = $this->getResult($sql);
    }
   
}

