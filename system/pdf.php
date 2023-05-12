<?php

function fetchData($tableName , $requiredElement ,$conditionColumn){
    $content = '';
    include "../Connections/syscon.php"; 
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "SELECT * FROM $tableName WHERE $conditionColumn = '$id' ";
    $results =mysqli_query($bis, $query);
    $row = mysqli_fetch_array($results);
    $content.=" ".$row[$requiredElement]." " ;
    }
    return $content;
};


include('../TCPDF-main/tcpdf.php');

$pdf = new TCPDF('P','mm','A4');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(15, 15, 15);

$pdf->SetFont('freeserif', '', 14);
$pdf->setRTL(true);

$pdf->AddPage();


$html .= '<h5>بيان حاله</h5>';


$html .='<p>نفيـد انه بالاطـلاع على ملف خدمـة سيادتـه بالجامعـة وجـد الآتـى:</p>
<span>الإســــــــــــم :</span>'. fetchData("doctors_account","Doctor_ar_Name","DoctorCode").'<br><span>تاريخ الميــــــلاد:</span>'
.fetchData("doctors_account","date_of_birth","DoctorCode").'<br><span>تاريخ التعييـــــن :</span>'. fetchData("doctors_account","hiring_date","DoctorCode").'<br><span>المؤهلات العلميــة :</span>'
. fetchData("doctors_account","qualifications","DoctorCode").'<br><span>التدرج الوظيفــــى :</span>'. fetchData("CompleteData","CompleteData","DoctorCodeInput").'<br><span>الجـــــــــزاءات :</span>'
. fetchData("penalities","penaltyDescription","DoctorCodeInput").'<br><span>الإعـــــــــارات :</span>'. fetchData("addsecondment_data","secondmentDescription","DoctorCodeInput").'<br><span>الأجـازات الخاصــة :</span> لا يوجد<br>
<span>البعثــــــــــات :</span> لا يوجد<br>
<span>الأجازات الدراسيــة :</span> لا يوجد <br>
<span>الإنتدابـــــــــات :</span> لا يوجد 
<p>*********************************************************************</p>
<p>و قد أعطيت لسيادته هذا البيان بناء على طلبه و ذلك لتقديمه إلى (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) ...</p>';

$html .='
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


?>