<?php
//import library
require '../vendor/autoload.php';

//penggunaan class
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//membuat object baru dari class
$spreadsheet = new Spreadsheet();

//get active sheet
$sheet = $spreadsheet->getActiveSheet();

//pemberian value pada (kolom, isi)
$sheet->setCellValue('A1', 'uvuvuevue onyetenyetve ugwemubwem osas');

//directory file xlsx
$writer = new Xlsx($spreadsheet);
$writer->save('hai.xlsx');
?>