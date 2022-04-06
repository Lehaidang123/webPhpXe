<?php
// include __DIR__ . '/model/pdo.php';
include __DIR__ . '/entities/oderlist.php';


$pords = oderlist::Get_all_oder();

require __DIR__ . '/lib/Classes/PHPExcel.php';
$PHPExcel = new PHPExcel();

$PHPExcel->setActiveSheetIndex(0);

$PHPExcel->getActiveSheet()->setTitle('DS HOA DON');

$PHPExcel->getActiveSheet()->setCellValue('A1', 'STT');
$PHPExcel->getActiveSheet()->setCellValue('B1', 'idoder');
$PHPExcel->getActiveSheet()->setCellValue('C1', 'Ngay');
$PHPExcel->getActiveSheet()->setCellValue('D1', 'Đại chỉ');
$PHPExcel->getActiveSheet()->setCellValue('E1', 'Tên khách hàng');
$PHPExcel->getActiveSheet()->setCellValue('F1', 'số điện thoại');
$PHPExcel->getActiveSheet()->setCellValue('G1', 'mail');
$PHPExcel->getActiveSheet()->setCellValue('H1', 'ID');
$PHPExcel->getActiveSheet()->setCellValue('I1', 'Số lượng');
$PHPExcel->getActiveSheet()->setCellValue('J1', 'Giá');
$PHPExcel->getActiveSheet()->setCellValue('K1', 'Mã sản phẩm');

$rowNumber = 2;

foreach ($pords as $index => $item) {
    extract($item);
    $PHPExcel->getActiveSheet()->setCellValue('A' . $rowNumber, ($index + 1));
    $PHPExcel->getActiveSheet()->setCellValue('B' . $rowNumber, $item[0]);
    $PHPExcel->getActiveSheet()->setCellValue('C' . $rowNumber, $item[1]);
    $PHPExcel->getActiveSheet()->setCellValue('D' . $rowNumber, $item[2]);
    $PHPExcel->getActiveSheet()->setCellValue('E' . $rowNumber, $item[3]);
    $PHPExcel->getActiveSheet()->setCellValue('F' . $rowNumber, $item[4]);
    $PHPExcel->getActiveSheet()->setCellValue('G' . $rowNumber, $item[5]);
    $PHPExcel->getActiveSheet()->setCellValue('H' . $rowNumber, $item[7]);
    $PHPExcel->getActiveSheet()->setCellValue('I' . $rowNumber, $item[8]);
    $PHPExcel->getActiveSheet()->setCellValue('J' . $rowNumber, $item[9]);
    $PHPExcel->getActiveSheet()->setCellValue('K' . $rowNumber, $item[10]);
    $rowNumber++;
}

$objWriter = PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel2007');

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="DanhSachHoaDon.xls"');
header('Cache-Control: max-age=0');
if (isset($objWriter)) {
    $objWriter->save('php://output');
}
