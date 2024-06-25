<?php
require 'vendor/setasign/fpdf/fpdf.php'; 

$host = "localhost";
$user = "root";
$pass = "";
$bd = "racknowledge";

$con = new mysqli($host, $user, $pass, $bd);

if ($con->connect_error) {
    die("Error en la conexión: " . $con->connect_error);
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 4); 

$pdf->Cell(20, 10, 'Id', 1); 
$pdf->Cell(20, 10, 'Nombre', 1); 
$pdf->Cell(20, 10, 'Apellido', 1);
$pdf->Cell(20, 10, 'Tipo_documento', 1); 
$pdf->Cell(20, 10, 'Numero_documento', 1);
$pdf->Cell(20, 10, 'Correo', 1); 
$pdf->Cell(20, 10, 'Telefono', 1); 
$pdf->Cell(20, 10, 'Fecha_nacimiento', 1); 
$pdf->Cell(20, 10, 'Rol', 1);
$pdf->Cell(20, 10, 'Contrasena', 1); 
$pdf->Ln(); 


$sql = "SELECT * FROM usuarios";
$result = $con->query($sql);

while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $nombre = substr($row['nombre'], 0, 20);
    $apellido = substr($row['apellido'], 0, 20);
    $tipo_documento = substr($row['tipo_documento'], 0, 10); 
    $numero_documento = $row['numero_documento']; 
    $correo = substr($row['correo'], 0, 30); 
    $telefono = $row['telefono']; 
    $fecha_nacimiento = $row['fecha_nacimiento']; 
    $rol = substr($row['rol'], 0, 10); 
    $contrasena = substr($row['contrasena'], 0, 10);

    $pdf->Cell(20, 10, $id, 1);
    $pdf->Cell(20, 10, $nombre, 1);
    $pdf->Cell(20, 10, $apellido, 1);
    $pdf->Cell(20, 10, $tipo_documento, 1);
    $pdf->Cell(20, 10, $numero_documento, 1);
    $pdf->Cell(20, 10, $correo, 1);
    $pdf->Cell(20, 10, $telefono, 1);
    $pdf->Cell(20, 10, $fecha_nacimiento, 1);
    $pdf->Cell(20, 10, $rol, 1);
    $pdf->Cell(20, 10, $contrasena, 1);
    $pdf->Ln(); // Salto de línea
}

// Genera el PDF
$pdf->Output();
?>
