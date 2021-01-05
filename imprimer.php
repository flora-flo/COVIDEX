<?php

include "../../Controller/reclamationC.php";

 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }
   require ("pdf/fpdf.php");
 $reclamationC=new reclamationC();

$listereclamation=$reclamationC->afficherreclamation(); 



    $pdf=new FPDF('P','mm','A3');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(130,5,'PDF pour ADMIN :',1,1);

    $pdf->SetFont('Arial','',12);

   
    $pdf->Cell(35,5,'#',1,0);
    $pdf->Cell(45,5,'titre',1,0);
    $pdf->Cell(120,5,'description',1,0);
    $pdf->Cell(35,5,'role',1,0);
    $pdf->Cell(35,5,'created',1,1);
 
    foreach($listereclamation as $row){

    $pdf->Cell(35,5,$row["id"],1,0);
        $pdf->Cell(45,5,$row["titre"],1,0);
        $pdf->Cell(120,5,$row["description"],1,0);
        $pdf->Cell(35,5,$row["role"],1,0);
      

 $pdf->Cell(35,5,$row["created"],1,1);

                  
}
  


    $dest = date("Y-m-d-h-m-s").'.pdf';
    $pdf->Output('F', $dest);
        header('Location: listRecc.php');

?>