<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo '<table><thead><tr>';
	$columns = range(0, 100);
	foreach($columns as $column) {
		if($column == 0){
			$rows[$column] = array_merge(array(0),range(1, 100));
		} else {
			$rows[$column] = array_merge(array($column), range($column, ($column * 100), $column));
		}
	}

	echo '</tr></thead><tbody>';

	foreach($rows as $row) {
		echo '<tr>';
		foreach($columns as $column) {
			if($row[$column] == 0)
			{
				echo '<td></td>';
			} else {
				echo '<td>'.$row[$column].'</td>';
			}
		}
		echo '</tr>';
	}
	echo '</tbody></table>';

?>