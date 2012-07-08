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
       parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    
    
    public function getData($page = '1', $limit = PAGING_RECORD_PER_PAGE) {
        $sql = "Select sql_calc_found_rows * from test order by a asc limit $page, $limit";
        return $this->getResultSet($sql);
    }
    
    public function getCount() {
        $sql = "Select count(*) from test";
        $rs = $this->getResultSet($sql);
        return mysql_fetch_row($rs);
    }
    
 
    
}

