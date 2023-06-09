<?php

function fetchData($tableName, $requiredElement, $conditionColumn)
{
    $content = '';
    include "../Connections/syscon.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM $tableName WHERE $conditionColumn = '$id' ";

        $results = mysqli_query($bis, $query);
        $row = mysqli_fetch_array($results);
        $content .= " " . $row[$requiredElement] . " ";
        if ((!empty($row[$requiredElement]))) {


            return $content;
        } else {
            return "لا يوجد";
        }
    }
};

function fetchData1($tableName, $requiredElement, $conditionColumn)
{
    $content = '';

    include "../Connections/syscon.php"; 
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $query = "SELECT * FROM $tableName WHERE $conditionColumn = '$id' ";
    $results =mysqli_query($bis, $query);
    while ($row=mysqli_fetch_array($results)){
    $content.="<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;".$row[$requiredElement]." " ;}

    }
    return $content;
};


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
$pdf->writeHTMLCell(50, 20, 80, 25, '<h5>بيان حاله</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(0, 8, 0, 50, '', 0, 1, 0, true, "C", true);





$html = '<p>نفيـد انه بالاطـلاع على ملف خدمـة سيادتـه بالجامعـة وجـد الآتـى:</p>
<span>الإســــــــــــم :</span>' . fetchData("doctors_account", "Doctor_ar_Name", "DoctorCode") . '<br><span>تاريخ الميــــــلاد:</span>'
    . fetchData("doctors_account", "date_of_birth", "DoctorCode") . '<br><span>تاريخ التعييـــــن :</span>' . fetchData("doctors_account", "hiring_date", "DoctorCode") . '<br><span>المؤهلات العلميــة :</span>'
    . fetchData("doctors_account", "qualifications", "DoctorCode") . '<br><span>التدرج الوظيفــــى :</span>' . fetchData1("p74_CompleteData", "CompleteData", "DoctorCodeInput") . '<br><span>الجـــــــــزاءات :</span>'
    . fetchData("p74_penalties", "penaltyDescription", "DoctorCodeInput") . '<br><span>الإعـــــــــارات :</span>' . fetchData("p74_secondment_data", "secondmentDescription", "DoctorCodeInput") . '<br><span>الأجـازات الخاصــة :</span>'. fetchData("p74_special_vacation_data", "special_vacationDescription", "DoctorCodeInput") .'<br>
<span>البعثــــــــــات :</span> '. fetchData("p74_missions_data", "mission_Description", "DoctorCodeInput") .' <br>
<span>الأجازات الدراسيــة :</span>  '. fetchData("p74_vacation_data", "vacationDescription", "DoctorCodeInput") .' <br>
<span>الإنتدابـــــــــات :</span> '. fetchData("p74_assignments_data", "assignment_Description", "DoctorCodeInput") .'
<p>*********************************************************************</p>
<p>و قد أعطيت لسيادته هذا البيان بناء على طلبه و ذلك لتقديمه إلى (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) ...</p>';

$html .= '
    <style>
        *
        {
            line-height:26px;
        }
        p, h5{
            text-align:center;
        }    
        span {
            font-weight:bold;
        }
    </style>
';



$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output();
