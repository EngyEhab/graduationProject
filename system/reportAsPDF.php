<?php

function fetchData()
{
    $content = '';
    include "../Connections/syscon.php";

    if (isset($_GET['reportAbout'])) {
        $reportAbout = $_GET['reportAbout'];
        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];
        $Department_id = $_GET['Department_id'];
        }
        if ($reportAbout == "penalties" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_penalties
                        ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE p74_penalties.startDate >= '$startDate' AND p74_penalties.endDate <= '$endDate' AND doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "penalties" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_penalties
                        ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id' ");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "penalties" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_penalties
                        ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput ");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>';}
        } elseif ($reportAbout == "penalties" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_penalties
                        ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput ");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "vacations" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_vacation_data
                        ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE p74_vacation_data.startDate >= '$startDate' AND p74_vacation_data.endDate <= '$endDate' AND doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "vacations" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_vacation_data
                        ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput ");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "vacations" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_vacation_data
                        ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id' ");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>';}
        } elseif ($reportAbout == "vacations" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_vacation_data
                        ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "missions" && !empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_missions_data
                        ON doctors_account.DoctorCode=p74_missions_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "missions" && empty($Department_id)) {

            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_missions_data
                        ON doctors_account.DoctorCode=p74_missions_data.doctorCodeInput");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "assignments" && !empty($Department_id)) {


            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_assignments_data
                        ON doctors_account.DoctorCode=p74_assignments_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>';}
        } elseif ($reportAbout == "assignments" && empty($Department_id)) {


            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_assignments_data
                        ON doctors_account.DoctorCode=p74_assignments_data.doctorCodeInput");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "privateVacations" && !empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_special_vacation_data
                        ON doctors_account.DoctorCode=p74_special_vacation_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "privateVacations" && empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_special_vacation_data
                        ON doctors_account.DoctorCode=p74_special_vacation_data.doctorCodeInput");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>';}
        } elseif ($reportAbout == "members" && !empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        WHERE doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "members" && empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "secondments" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_secondment_data
                        ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE p74_secondment_data.startDate >= '$startDate' AND p74_secondment_data.endDate <= '$endDate' AND doctors_account.Department_id = '$Department_id'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "secondments" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_secondment_data
                        ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE p74_secondment_data.startDate >= '$startDate' AND p74_secondment_data.endDate <= '$endDate'");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } elseif ($reportAbout == "secondments" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {
            $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_secondment_data
                        ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput");
            $results = mysqli_query($bis, $myquery);
            while ($row = mysqli_fetch_array($results)) {
                $content .= '<tr>
                <td width="15%">'.$row['DoctorCode'].'</td>
                <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                <td width="25%">'.$row['Department_ar_name'].'</td>
                <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                </tr>'; }
        } else {
            if ($reportAbout == "secondments" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {
                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_secondment_data
                            ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
                $results = mysqli_query($bis, $myquery);
                while ($row = mysqli_fetch_array($results)) {
                    $content .= '<tr>
                    <td width="15%">'.$row['DoctorCode'].'</td>
                    <td width="25%">'.$row['Doctor_ar_Name'].' </td>
                    <td width="25%">'.$row['Department_ar_name'].'</td>
                    <td width="35%">'.$row['Doctor_job_ar_name'].'</td>
                    </tr>';}
                }
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
$pdf->writeHTMLCell(50, 20, 80, 25, '<h5>تقرير</h5>', 0, 1, 0, true, "C", true);
$pdf->writeHTMLCell(0, 8, 0, 50, '', 0, 1, 0, true, "C", true);


$tbl= '<table cellspacing="2" align="center" cellpadding="2" border="1">
<thead>
    <tr>
        <th width="15%" style="font-weight:bold">كود العضو</th>
        <th width="25%" style="font-weight:bold">اسم العضو</th>
        <th width="25%" style="font-weight:bold">القسم العلمى</th>
        <th width="35%" style="font-weight:bold">الدرجة الوظيفية الحالية</th>
    </tr>
</thead>
<tbody>';
$tbl .= fetchData();
$tbl .='</tbody>
</table>';

$pdf->writeHTML($tbl, true, false, true, false, '');

$pdf->Output();

