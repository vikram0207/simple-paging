<?php

/**
 * Description of PagingTest
 *
 * @author vikram
 * @package default
 * @license default
 * @version 1.0
 */

require_once 'Bootstrap.php';

$dbHandler = new DbHandler();

$page = isset($_GET['page']) ? $_GET['page'] : '1';

$total = $dbHandler->getCount();

$rs = $dbHandler->getData($page, PAGING_RECORD_PER_PAGE);

$total = $dbHandler->getRowCount();
echo $total[0] .'**';

echo '<table border ="2" ><tr><td> A </td><td> B </td><tr>';

while($row = mysql_fetch_assoc($rs)) {
    
    echo '<tr>';
    echo '<td>' . $row['a'] . '</td>';
    echo '<td>' . $row['b'] . '</td>';
    echo '</tr>';
}

echo '</table>';


echo Paging::getPaging($page, $total[0]);