<?php

function fetchData()
{
    $content = '';
    $colTitle = '';
    include "../Connections/syscon.php";

    if (isset($_GET['title'])) {
        $title = $_GET['title'];
        switch($title){
            case 'p74_penalties':
                $decription = 'penaltyDescription';
                $colTitle = 'العقوبة';
                break;
            case 'p74_vacation_data':
                $decription = 'vacationDescription';
                $colTitle = 'الأجازة';
                break;
            case 'p74_special_vacation_data':
                $decription = 'special_vacationDescription';
                $colTitle = 'الأجازة';
                break;
            case 'p74_missions_data':
                $decription = 'mission_Description';
                $colTitle = 'البعثة';
                break;
            case 'p74_assignments_data':
                $decription = 'assignment_Description';
                $colTitle = 'الإنتداب';
                break;
        }
        $content .= '<table cellspacing="3" align="center" cellpadding="2" border="1">
        <thead>
            <tr>
                <th width="50">كود العضو</th>
                <th width="120">اسم العضو</th>
                <th width="120">الدرجة الوظيفية الحالية</th>
                <th width="208">'.$colTitle.'</th>
            </tr>
        </thead>
        <tbody>';
        $query = "SELECT * FROM doctors_account 
        INNER JOIN doctor_jobs ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id 
        INNER JOIN $title ON $title.doctorCodeInput=doctors_account.DoctorCode";
        $results = mysqli_query($bis, $query);
        $row = mysqli_fetch_array($results);
        while ($row = mysqli_fetch_array($results)) {
        $content .= '<tr>
                        <td width="50">'.$row['doctorCodeInput'].'</td>
                        <td width="120">'.$row['Doctor_ar_Name'].' </td>
                        <td width="120">'.$row['Doctor_job_ar_name'].'</td>
                        <td width="208">'.$row[$decription].'</td>
                    </tr>';
        }
        return $content;
    }}
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



$tbl = fetchData();
$tbl .='</tbody>
</table>';

$pdf->writeHTML($tbl, true, false, true, false, '');

$pdf->Output();
