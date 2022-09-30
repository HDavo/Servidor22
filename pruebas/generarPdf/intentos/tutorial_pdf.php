<?php 
    require('./fpdf184/fpdf.php');

    // $nombre=$_GET['nombre'];
    // $empresa=$_GET['empresa'];
    // $represante=$_GET['representante'];
    // $fecha = $_GET['fecha'];
    
    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Title',1,0,'C');
        // Line break
        $this->Ln(20);
    }
    
    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    

    $pdf = new PDF();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial','B',16);
    $pdf -> Cell(40,10, 'Hello World!');
    $pdf -> Output();
?> 
    
    // $pdf->Cell(60,20,$nombre);
    // $pdf->Ln();
    // $pdf->Cell(60,20,$empresa);
    // $pdf->Ln();
    // $pdf->Cell(60,20,$represante);
    // $pdf->Ln();
    // $pdf->Cell(60,20,$fecha);
    // $pdf->Ln();

    