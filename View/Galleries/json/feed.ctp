<?php
$result = array();
foreach ($events as $event) {
	$event['ScheduleEvent']['allDay'] = $event['ScheduleEvent']['all_day'];
	array_push($result, $event['ScheduleEvent']);
}
echo json_encode($result);