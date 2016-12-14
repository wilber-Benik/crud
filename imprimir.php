<?php
	require('fpdf.php');

	class MI_PDF extends FPDF
	{

		function Header()
		{

			$this->SetFont('Times','B',16);
			$this->Cell(0,5,'INSTITUTO SUPERIOR TECNOLOGICO PRIVADO', 0, 0, 'C');
			$this->Ln();
			$this->SetFont('Times','B',14);
			$this->Cell(0,5,'UNITEK PUNO', 0, 0, 'C');
			$this->Ln();
		}
		
		function Footer()
		{
			$this->SetY(-16);
			$this->Cell(0, 5,'Pagina N° '.$this->PageNo().' / {nb}','TB',0,'R');//lineas T=top B=buton L=left R=raid 
			
		}

		function Body()
		{

			//Ancho 190

			$this->SetFont('helvetica','B',12);
		 	$this->Cell(0, 5, '1', 1, 0, 'C');
		 	$this->Ln();
			$this->SetFont('helvetica','',10);
		 	$this->Cell(10, 5, '1', 1, 0, 'C');
		 	$this->Cell(20, 5, 'Col 1', 1, 0, 'L');
		 	$this->Cell(20, 5, 'Col2', 1, 0, 'L');
		 	$this->Cell(80, 5, utf8_decode('Col 3'), 1, 0, 'L');
		 	$this->Cell(60, 5, 'Col4', 1, 0, 'L');
		 	$this->Ln();

		 	$this->ln();
		 	$this->ln();

		 	include('inc/conexion.php');
		 	$consulta=$conexion->query('SELECT p.* FROM personas p');
		 	while($fila=$consulta->fetch_assoc())
		 	{
		 		$this->cell(20,5,$fila['paterno'],0,0,'L');
		 		$this->cell(20,5,$fila['materno'],0,0,'L');
		 		$this->cell(20,5,$fila['nombres'],0,0,'L');
		 		$this->ln();
		 	}
		}
	}
	//P= portraid(horizontal) ---- L=landscape(vertical)
	$ejemplo=new MI_PDF('P','mm','A4');

	$ejemplo->AliasNbPages();
	$ejemplo->AddPage();
	$ejemplo->Body();
	$ejemplo->Output();

?>