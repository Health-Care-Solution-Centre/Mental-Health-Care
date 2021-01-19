<?php
class Database 
{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "mentalhealth";
	
	function runQuery($sql) 
	{
		$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
    	if ($conn->connect_error) 
    	{
        die("Connection failed: " . $conn->connect_error);
    	} 
    	$result = $conn->query($sql);
    	if ($result->num_rows > 0) 
    	{
      	while($row = $result->fetch_assoc()) {
          $resultset[] = $row;
      	}
    }
    	$conn->close();

		if(!empty($resultset))
			return $resultset;
	}
}

$Month=12;
$LastYear=2020;
$Year=date("Y");
$database = new Database();
$result = $database->runQuery("SELECT name,email,mobile,address,education,status FROM expert_profile WHERE gender='f'");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='mentalhealth' 
AND `TABLE_NAME`='expert_profile'
and `COLUMN_NAME` in ('name','email','mobile','address','education','status')");

require('fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
// Insert a logo in the top-left corner at 300 dpi
//$pdf->Image('dr1.png',10,10,-300);//
$pdf->SetFont('Arial','B',18);
$pdf->SetY(15);
$pdf->Cell(60,6,'Mental Health Care');
$pdf->SetY(30);
$pdf->Cell(60,6,'Mental Health Care Expert Profile Report');
$pdf->SetFont('Arial','B',12);
$pdf->SetY(40);
$pdf->Cell(60,6,'Female');
$pdf->SetY(45);
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(31,12,$column_heading,1);
}
$pdf->SetFont('Arial','B',8);
$pdf->SetFont('');
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(31,12,$column,1);
}



$database2 = new Database();
$result = $database2->runQuery("SELECT name,email,mobile,address,education,status FROM expert_profile WHERE gender='m'");
$header = $database2->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='mentalhealth' 
AND `TABLE_NAME`='expert_profile'
and `COLUMN_NAME` in ('name','email','mobile','address','education','status')");
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->SetY(15);
$pdf->Cell(60,6,'Mental Health Care');
$pdf->SetY(30);
$pdf->Cell(60,6,'Mental Health Care Expert Profile Report');
$pdf->SetFont('Arial','B',12);
$pdf->SetY(40);
$pdf->Cell(60,6,'Male');
$pdf->SetY(45);
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(31,12,$column_heading,1);
}
$pdf->SetFont('Arial','B',9);
$pdf->SetFont('');
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(31,12,$column,1);
}


$pdf->Output();
?>