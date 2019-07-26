<?php
//import library phpSpreadsheet
require 'vendor/autoload.php';

//menggunakan class
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//membuat object baru dari class Spreadsheet
$spreadsheet = new Spreadsheet();

//mendapatkan spreadsheet aktif
$sheet = $spreadsheet->getActiveSheet();

//memberikan nilai ke kolom A baris ke 1
$sheet->setCellValue('A1','Hai');

//menulis file spreadsheet
$writer = new Xlsx($spreadsheet);
$writer->save('hai.xlsx');
?>