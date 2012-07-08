<?php

/**
 * Description of pagingTest
 *
 * @author vikram
 * @package default
 * @license default
 * @version 1.0
 */


require_once 'Bootstrap.php';

$dbHandler = new DbHandler();

$rsCount = $dbHandler->getCount();

$total = mysql_fetch_row($rsCount);

$pageno = isset($_GET['pageno']) ? $_GET['pageno']  : 1 ;
//echo $total[0];
$result = $dbHandler->getData($pageno,PAGING_RECORDS_PER_PAGE);

echo '<table border="2"><tr><td>a</td><td>b</td></tr>';
while($row = mysql_fetch_assoc($result)) {
    echo '<tr><td>';
    echo $row['a'] . '</td>';
    echo '<td>'. $row['b'] . '</td>';
    
}
echo '</table>';


echo Paging::getPaging($pageno, $total[0]);