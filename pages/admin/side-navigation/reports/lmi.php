<div id="lmi-print-div">
<table id="lmi-div" class="table lmi-table-reports"  cellpadding="3" cellspacing="0"  border=1
   style='border-collapse:collapse; border:none; mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <?php 
      if(!isset($_GET['admin-lmi-report-id'])){
   ?>
   <h4 style="text-align: right;color:gray;">
   LMI ANALYSIS FOR THE MONTH OF &nbsp;

   <select onchange="admin.lmiSelectedMonth(this);">
   <option selected value="">Select Month</option>";   
      <?php 
         $sql = "SELECT DISTINCT(created_date), created_date FROM `employer_job_posted` WHERE 1 ORDER BY created_date ASC  ";
         $result = $conn->query($sql);
         
         if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                  $date = $row['created_date'];
                  $date = date('F', strtotime($date));
                  if($_GET['lmi-month'] ==  $row['created_date']) {
                        echo "<option selected value=".$row['created_date'].">$date</option>";
                  }
                  else {
                        echo "<option value=".$row['created_date'].">$date</option>";                        
                  }
             }
         }
      ?>
      
   </select>
   <?php 
      }
      ?>

      <?php 
            $crow = null;
            $t1 = '0';
            $t2 = '0';
            $t3 = '0';
            $t4 = '0';
            $t5 = '0';
            $t6 = '0';
            $t7 = '0';
            $t8 = '0';
            $t9 = '0';
            $t10 = '0';
            $t11 = '0';
            $t12 = '0';
            $t13 = '0';
            $t14 = '0';
            $t15 = '0';
            $t16 = '0';
            $t17 = '0';
            $t18 = '0';
            $t19 = '0';
            $t20 = '0';
            $t21 = '';
            
            $prepared_by = '';
            
            if( !isset($_GET['admin-lmi-report-id']) ) {

                  $csql = "SELECT count(created_date) as created_date FROM `employer_job_posted` WHERE created_date='' ";
                  
                  if( isset($_GET['lmi-month']) ) {
                        $csql = "SELECT count(created_date) as created_date FROM `employer_job_posted` WHERE created_date='".$_GET['lmi-month']."' ";
                  }

                  $cresult = $conn->query($csql);   
                  
                  if ($cresult->num_rows > 0) {
                        $crow = $cresult->fetch_assoc();
                        $t2 = $crow['created_date'];
                        $t4 = $crow['created_date'];
                        $t5 = ($t2) + ($t4);

                        $t8 = $crow['created_date'];
                        $t10 = $crow['created_date'];
                        $t11 = ($t8) + ($t10);
                  }
            }

            if( isset($_GET['admin-lmi-report-id']) ) {

                  $csql = "SELECT * FROM `admin_lmi_report` WHERE ID='".$_GET['admin-lmi-report-id']."' ";
      
                  $cresult = $conn->query($csql);   
                  
                  if ($cresult->num_rows > 0) {
                        $crow = $cresult->fetch_assoc();
                        $t1 = $crow['1'];
                        $t2 = $crow['2'];
                        $t3 = $crow['3'];
                        $t4 = $crow['4'];
                        $t5 = $crow['5'];
                        $t6 = $crow['6'];
                        $t7 = $crow['7'];
                        $t8 = $crow['8'];
                        $t9 = $crow['9'];
                        $t10 = $crow['10'];
                        $t11 = $crow['11'];
                        $t12 = $crow['12'];
                        $t13 = $crow['13'];
                        $t14 = $crow['14'];
                        $t15 = $crow['15'];
                        $t16 = $crow['16'];
                        $t17 = $crow['17'];
                        $t18 = $crow['18'];
                        $t19 = $crow['19'];
                        $t20 = $crow['20'];
                        $t21 = $crow['prepared_by'];
                  }
            }
      ?>
   &nbsp;&nbsp;
   <tr style=' border: 1px solid black;'>
      <td style=" border: 1px solid black; font-weight: bolder" colspan="2">NUMBER OF JOBS SOLICITED</td>
   </tr>
   <tr style=' border: 1px solid black;'>
      <td style=" border: 1px solid black; padding-left:8%; width: 80%" >LOCAL</td>
      <td style="text-align: left; border: 1px solid black" > 
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:left;" class="txt t1" value="<?php echo $t1; ?>"/>      
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:right;" class="txt t2" value="<?php echo $t2; ?>"/>      
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style=" border: 1px solid black; padding-left:8%; width: 80%">OVERSEAS</td>
      <td class="box-content"id="job-sol-overseas">
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:left;"  class="txt t3" value="<?php echo $t3; ?>"/>
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:right;"  class="txt t4" value="<?php echo $t4; ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="cont-left" style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"  id="job-sol-total">
            <input type="text" style="border:none;height:20px;"  class="txt t5" disabled value="<?php echo $t5; ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px " colspan="2"> <i>Job vacancies solicited from different companies and establishments outside and within the province with a total of&nbsp</i>
      <input class="text-edit txt t6" type="text" name="edit" value="<?php echo $t6; ?>"></td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="content" style="font-weight: bolder;">LOCAL & OVERSEAS</td>
      <td class="box-content"> </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">MALE:</td>
      <td class="box-content">
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:left;"  class="txt t7" value="<?php echo $t7; ?>"/>
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:right;"  class="txt t8" value="<?php echo $t8; ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">FEMALE:</td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:left;"  class="txt t9" value="<?php echo $t9; ?>"/>
            <input type="text" style="border:none;height:20px;border:1px solid gray;width:70px;float:right;"  class="txt t10" value="<?php echo $t10; ?>"/>      
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="cont-left" style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t11" disabled value="<?php echo $t11; ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td  style=" border: 1px solid black;padding: 2.5%; font-size: 14px" colspan="2"><i>Applicants who registered in our log book/walk-in applicants totalled to&nbsp
      <input class="text-edit txt t12" type="text" name="edit"  value="<?php echo $t12; ?>"> for the Job Solicited.</i></td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td  style=" border: 1px solid black; font-weight: bolder" colspan="2">NUMBER OF APPLICANTS REFERRED</td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="content" style="font-weight: bolder;">LOCAL & OVERSEAS</td>
      <td class="box-content"> </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">MALE:</td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t13"  value="<?php echo $t13; ?>"/>
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">FEMALE:</td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t14"  value="<?php echo $t14; ?>"/>
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="cont-left"  style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;" disabled class="txt t15"  value="<?php echo $t15; ?>"/>
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px" colspan="2"> <i>Applicants referred for job placement is also &nbsp
      <input class="text-edit txt t16" type="text" name="edit"  value="<?php echo $t16; ?>"> of the total applicants registered.</i></td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; font-weight: bolder" colspan="2">NUMBER OF APPLICANTS PLACED</td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="font-weight: bolder;">LOCAL & OVERSEAS</td>
      <td class="box-content"> </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">MALE:</td>
      <td class="box-content">
            <input type="text" style="border:none;height:20px;" class="txt t17"  value="<?php echo $t17; ?>"/>
       </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">FEMALE:</td>
      <td class="box-content">
            <input type="text" style="border:none;height:20px;"  class="txt t18"  value="<?php echo $t18; ?>" />
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="cont-left"  style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t19"  value="<?php echo $t19; ?>"/>      
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px	" colspan="2"> <i>
         Applicants placed in the different companies and in the Provincial Government totalling to &nbsp
         <input class="text-edit txt t20" type="text" name="edit"  value="<?php echo $t20; ?>"> out of control number of applicants referred.</i></td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px" colspan="2"> 
         <i> Prepared by:
            <input class="txt t21" type="text" name="edit" value="<?php echo $t21; ?>" >
         </i>
      </td>
   </tr>
</table>
<br/>

</div>
<center>
      <?php 
      if(isset($_GET['admin-lmi-report-id'])){
            echo '<button class="button print-lmi"> Print </button>';
      }
      else {
            echo '<button class="button save-lmi"> Save Changes </button>';
      }
   ?>
   
</center>
<br/>
<br/>