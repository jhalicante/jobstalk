<div id="lmi-print-div">
<table id="lmi-div" class="table lmi-table-reports"  cellpadding="3" cellspacing="0"  border=1
   style='border-collapse:collapse; border:none; mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <?php 
      if(!isset($_GET['admin-lmi-report-id'])){
   ?>
   <h4 style="text-align: right;color:gray;">
   LMI ANALYSIS FOR THE MONTH OF &nbsp;

   <select>
      <option value="" name="" hidden>SELECT A MONTH</option>
      <option value="" name="jan">JANUARY</option>
      <option value="" name="feb">FEBRUARY</option>
      <option value="" name="mar">MARCH</option>
      <option value="" name="april">APRIL</option>
      <option value="" name="may">MAY</option>
      <option value="" name="june">JUNE</option>
      <option value="" name="july">JULY</option>
      <option value="" name="aug">AUGUST</option>
      <option value="" name="sept">SEPTEMBER</option>
      <option value="" name="oct">OCTOBER</option>
      <option value="" name="nov">NOVEMBER</option>
      <option value="" name="dec">DECEMBER</option>
   </select>
   <?php 
      }
      ?>
   &nbsp;&nbsp;
   <tr style=' border: 1px solid black;'>
      <td style=" border: 1px solid black; font-weight: bolder" colspan="2">NUMBER OF JOBS SOLICITED</td>
   </tr>
   <tr style=' border: 1px solid black;'>
      <td style=" border: 1px solid black; padding-left:8%; width: 80%" >LOCAL</td>
      <td style="text-align: left; border: 1px solid black" > 
            <input type="text" style="border:none;height:20px;" class="txt t1 txt1" value="<?php echo $repInc->jobsCount(); ?>"/>      
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style=" border: 1px solid black; padding-left:8%; width: 80%">OVERSEAS</td>
      <td class="box-content"id="job-sol-overseas">
            <input type="text" style="border:none;height:20px;"  class="txt t2 txt2" value="<?php echo $repInc->jobsCount(); ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="cont-left" style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"  id="job-sol-total">
            <input type="text" style="border:none;height:20px;"  class="txt t3 txt-total1" disabled value="<?php echo $repInc->jobsCount()+$repInc->jobsCount(); ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px " colspan="2"> <i>Job vacancies solicited from different companies and establishments outside and within the province with a total of&nbsp
      <input class="text-edit t4 txt" type="text" name="edit">.</i></td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="content" style="font-weight: bolder;">LOCAL & OVERSEAS</td>
      <td class="box-content"> </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">MALE:</td>
      <td class="box-content">
            <input type="text" style="border:none;height:20px;"  class="txt t5 txt3" value="<?php echo $repInc->jobsCount(); ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">FEMALE:</td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t6 txt4" value="<?php echo $repInc->jobsCount(); ?>"/>      
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td class="cont-left" style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t7 txt-total2" disabled value="<?php echo $repInc->jobsCount()+$repInc->jobsCount(); ?>"/>
      </td>
   </tr>
   <tr  style='border: 1px solid black;'>
      <td  style=" border: 1px solid black;padding: 2.5%; font-size: 14px" colspan="2"><i>Applicants who registered in our log book/walk-in applicants totalled to&nbsp
      <input class="text-edit t8 txt" type="text" name="edit"> for the Job Solicited.</i></td>
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
            <input type="text" style="border:none;height:20px;"  class="txt t9 txt5" value=""/>
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">FEMALE:</td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t10 txt6" value=""/>
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="cont-left"  style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;" disabled class="txt t11 txt-total3" value=""/>
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px" colspan="2"> <i>Applicants referred for job placement is also &nbsp
      <input class="text-edit 12 txt" type="text" name="edit"> of the total applicants registered.</i></td>
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
            <input type="text" style="border:none;height:20px;" class="txt t13 txt7" value=""/>
       </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="content" style="border: 1px solid black; padding-left:8%; width: 80%;">FEMALE:</td>
      <td class="box-content">
            <input type="text" style="border:none;height:20px;"  class="txt t14 txt8" value=""/>      
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td class="cont-left"  style=" border: 1px solid black; padding-left:70%; width: 80%;"><i><b>Total</b></i></td>
      <td class="box-content"> 
            <input type="text" style="border:none;height:20px;"  class="txt t15 txt-total4" value=""/>      
      </td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px	" colspan="2"> <i>
         Applicants placed in the different companies and in the Provincial Government totalling to &nbsp
         <input class="text-edit t16 txt" type="text" name="edit"> out of control number of applicants referred.</i></td>
   </tr>
   <tr style='border: 1px solid black;'>
      <td style=" border: 1px solid black; padding: 2.5%; font-size: 14px" colspan="2"> 
         <i> Prepared by:
            <input class="txt t15 t17" type="text" name="edit">
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