<?php
	function dateRange($start,$end)
	{
		date_default_timezone_set('UTC');
		while (strtotime($start) <= strtotime($end)) {
			echo "$start\n";
			$start = date("Y-m-d",strtotime("+1 day", strtotime($start)));
		}
	}
	$date = '2018-11-01';
	$end_date = '2018-11-05';

	dateRange($date,$end_date)
?>