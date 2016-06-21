<?php
include_once("xlsxwriter.class.php");

$header = array(
    'year'=>'string',
    'month'=>'string',
    'amount'=>'money',
    'first_event'=>'datetime',
    'second_event'=>'date',
);
$data = array(
    array('2003','1','-50.5','2010-01-01 23:00:00','2012-12-31 23:00:00'),
    array('2003','2', '23.5','2010-01-01 00:00:00','2012-12-31 00:00:00'),
);

$writer = new XLSXWriter();
$sheetName = 'Sheet1';
$writer->setHeaderHorizontalAlign(XLSXWriter::ALIGNMENT_CENTER);
$writer->setDataHorizontalAlign(XLSXWriter::ALIGNMENT_LEFT);
$writer->writeSheet($data, $sheetName, $header);
$writer->writeToFile('example.xlsx');

exit(0);


