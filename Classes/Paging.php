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
    
    public static function getPaging($page, $total) {
        
        $returnMe = '';
        
        if($page == 1) {
            $returnMe .= ' FIRST PREVIOUS';
        } else {
            $returnMe .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=1"> FIRST </a>&nbsp;';
            $prev = $page - 1;
            $returnMe .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='.$prev.'"> PREVIOUS </a>&nbsp;';
        }
        
        $last = ceil($total / PAGING_RECORD_PER_PAGE);
        $returnMe .= ' ( page '. $page . ' of '.$last .' ) ' ;
        
        if($page == $last) {
            $returnMe .= ' NEXT LAST';
        } else {
            $next = $page + 1;
            $returnMe .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='.$next.'"> NEXT </a>&nbsp;';
            $returnMe .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='.$last.'"> LAST </a>&nbsp;';
        }
        
        return $returnMe;

        
    }
    
}

