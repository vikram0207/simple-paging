<?php

/**
 * Description of Paging
 *
 * @author vikram
 * @package default
 * @license default
 * @version 1.0
 */
class Paging {
    
    
    public static function getPaging($pageno,$total) {
        $returnMe = '';
        IF ($pageno == 1) {
            $returnMe .= " FIRST PREV ";
        } ELSE {
            $returnMe .= " <a href='{$_SERVER['PHP_SELF']}?pageno=1'>FIRST</a> ";
            $prevpage = $pageno - 1;
            $returnMe .= " <a href='{$_SERVER['PHP_SELF']}?pageno=$prevpage'>PREV</a> ";
        } // if
// Next we inform the user of his current position in the sequence of available pages.
        $lastpage = ceil($total / PAGING_RECORDS_PER_PAGE);
        
        $returnMe .= " ( Page $pageno of $lastpage ) ";

// This code will provide the links for any following pages.

        IF ($pageno == $lastpage) {
            $returnMe .= " NEXT LAST ";
        } ELSE {
            $nextpage = $pageno + 1;
            $returnMe .= " <a href='{$_SERVER['PHP_SELF']}?pageno=$nextpage'>NEXT</a> ";
            $returnMe .= " <a href='{$_SERVER['PHP_SELF']}?pageno=$lastpage'>LAST</a> ";
        } // if
        return $returnMe;
    }

}

