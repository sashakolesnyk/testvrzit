<?php
$password = $_GET['password'];
if ($password == '12345') {
include ('oop.php');

	$db = new db_work(Connection::make());
	$isRead = $db->exportFromDb();
	

	if($isRead) {
		$delimiter = ',';
		$filename = 'export_' . date('Y-m-d') . '.csv';

		//create a file pointer
		$f = fopen('php://memory', 'w');

		//set colomn headers
		$fields = array('ID', 'Name', 'Phone', 'Message');
		fputcsv($f, $fields, $delimiter);

		//output each row of the data, format line as csv and write to file pointer
		foreach($isRead as $row) {

				$lineData = array($row['id'], $row['name'], $row['phone'], $row['text']);
				fputcsv($f, $lineData, $delimiter);
			}
		
		//move back to beginning of file
		fseek($f, 0);

		//set headers to download file rather than displayed
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="' . $filename . '";');
		
		//output all remaining data on a file pointer
		fpassthru($f);

		header('Location: http://www.test.verzus-it.loc');
		
	}

exit;
}
else {
	echo "
	<div style='text-align: center; margin-top: 300px'>
		<p>Please, enter '12345' password to export all data from database into .csv file</p> 
		<form action='#' method='GET'>
			<input type='password' name='password'>
			<input type='submit' value='Submit'>
		</form>
	</div>
	";
}