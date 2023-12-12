<?php
include("connection.php");
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

$con = connection();

if ($con) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Agrega encabezados
    $sheet->setCellValue('A1', 'Id');
    $sheet->setCellValue('B1', 'Nombre');
    $sheet->setCellValue('C1', 'Apellido');
    $sheet->setCellValue('D1', 'Tipo_documento');
    $sheet->setCellValue('E1', 'Numero_documento');
    $sheet->setCellValue('F1', 'Correo');
    $sheet->setCellValue('G1', 'Telefono');
    $sheet->setCellValue('H1', 'Fecha_nacimiento');
    $sheet->setCellValue('I1', 'Rol');
    $sheet->setCellValue('J1', 'Contraseña');

    // Consulta los datos de la base de datos
    $sql = "SELECT * FROM usuarios";
    $ejecutar = mysqli_query($con, $sql);

    $row = 2; // Inicia desde la fila 2 para los datos

    while ($fila = mysqli_fetch_array($ejecutar)) {
        $sheet->setCellValue('A' . $row, $fila[0]);
        $sheet->setCellValue('B' . $row, $fila[1]);
        $sheet->setCellValue('C' . $row, $fila[2]);
        $sheet->setCellValue('D' . $row, $fila[3]);
        $sheet->setCellValue('E' . $row, $fila[4]);
        $sheet->setCellValue('F' . $row, $fila[5]);
        $sheet->setCellValue('G' . $row, $fila[6]);
        $sheet->setCellValue('H' . $row, $fila[7]);
        $sheet->setCellValue('I' . $row, $fila[8]);
        $sheet->setCellValue('J' . $row, $fila[9]);

        $row++;
    }

    // Crea un objeto para escribir el archivo XLS
    $writer = new Xls($spreadsheet);
    
    // Define el encabezado para la descarga
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="registros_de_usuarios.xls"');
    
    // Envía el archivo al navegador
    $writer->save('php://output');
} else {
    echo "Error en la conexión a la base de datos.";
}
?>
