<?php
    require('./fpdf184/fpdf.php');

    $nombre=$_GET['nombre'];
    $empresa=$_GET['empresa'];
    $representante=$_GET['representante'];
    $fecha = $_GET['fecha'];
    $intro = "A quien corresponda.";
    $texto1 = "A través de este documento me permito recomendar a $nombre ya que se trata de una persona responsable, seria y de confianza, con la que he colaborado a lo largo de varios años en la empresa $empresa. \n Durante estos años ha demostrado su valía en todo momento en el desempeño de las labores que se le han encomendado.";
    $texto2 = "Si quiere comunicarse conmigo para obtener más información acerca de este trabajador, puede comunicarse conmigo a través de la siguiente dirección de correo: $representante@$empresa.com";

    $texto3 = "En Madrid, España a fecha $fecha.";

    $texto4 = "Atentamente, $representante";

    class PDF extends FPDF {
  
    function Header() {
        
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,utf8_decode('Carta de recomendación'),0,0,'C');
        $this->Ln(20);
    }

    }

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Ln();
    $pdf->MultiCell(180,10,utf8_decode($texto1));
    $pdf->Ln();
    $pdf->MultiCell(180,10,utf8_decode($texto2));
    $pdf->Ln();
    $pdf->Cell(60,20,utf8_decode($texto3));
    $pdf->Ln();
    $pdf->Cell(60,20,utf8_decode($texto4));


    $pdf->Output();
?>