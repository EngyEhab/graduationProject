<?php

// function fetchData()
// {
//     $content = '';
//     include "../Connections/syscon.php"; 
//     return $content;
// };
function fetchData($tableName, $requiredElement)
{
    $content = '';
    include "../Connections/syscon.php";
    

        $query = "SELECT * FROM $tableName  ";

        $results = mysqli_query($bis, $query);
        $row = mysqli_fetch_array($results);
        $content .= " " . $row[$requiredElement] . " ";
        if ((!empty($row[$requiredElement]))) {


            return $content;
        } else {
            return "لا يوجد";
        }
    }
;

include('../TCPDF-main/tcpdf.php');

$pdf = new TCPDF('P', 'mm', 'A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(15, 15, 15);

$pdf->SetFont('freeserif', '', 14);
$pdf->setRTL(true);

$pdf->AddPage();

$pdf->writeHTMLCell(30, 25, 15, 5, '<img src="../images/Facultylogo.jpg">', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 5, 38, '<h5>Helwan University</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 5, 45, '<p>*******************</p>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 150, 15, '<h5>الإدارة العامة لشئون الأفراد</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 150, 25, '<h5>و أعضاء هيئة التدريس</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 150, 35, '<h5>إدارة وثائق الخدمة</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 150, 45, '<p>*******************</p>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(50, 20, 80, 25, '<h5>تقرير</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(0, 8, 0, 50, '', 0, 1, 0, true, "C", true);





$tbl ='<table cellspacing="2" align="center" cellpadding="2" border="1">
<thead>
    <tr>
        <th width="50">كود العضو</th>
        <th width="120">اسم العضو</th>
        <th width="120">الدرجة الوظيفية الحالية</th>
        <th width="210">العقوبة</th>
    </tr>
</thead>
<tbody>';

$tbl .= fetchData();
    




$tbl .='</tbody>
</table>';






$pdf->writeHTML($tbl, true, false, true, false, '');

$pdf->Output();
