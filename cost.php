<?php
include("includes/init.php");

// open connection to database
$db = open_sqlite_db("secure/crop_scheduling.sqlite");
$uti_sum=0;
$prosup_sum=0;
$prolab_sum=0;
$pkco_sum=0;
$gs_sum=0;
$gd_sum=0;
$fix_miscel=0;
$mc_sum=0;
$ps_sum=0;
$ec_sum=0;

if( isset($_POST['submit1'])){
  //utility
  $uti_q1=filter_input(INPUT_POST,'uti_q1',FILTER_VALIDATE_INT);
  $uti_p1=filter_input(INPUT_POST,'uti_p1',FILTER_VALIDATE_INT);
  $uti_q2=filter_input(INPUT_POST,'uti_q2',FILTER_VALIDATE_INT);
  $uti_p2=filter_input(INPUT_POST,'uti_p2',FILTER_VALIDATE_INT);
  $uti_q3=filter_input(INPUT_POST,'uti_q3',FILTER_VALIDATE_INT);
  $uti_p3=filter_input(INPUT_POST,'uti_p3',FILTER_VALIDATE_INT);
  $uti_q4=filter_input(INPUT_POST,'uti_q4',FILTER_VALIDATE_INT);
  $uti_p4=filter_input(INPUT_POST,'uti_p4',FILTER_VALIDATE_INT);
  $uti_q5=filter_input(INPUT_POST,'uti_q5',FILTER_VALIDATE_INT);
  $uti_p5=filter_input(INPUT_POST,'uti_p5',FILTER_VALIDATE_INT);
  $uti_q6=filter_input(INPUT_POST,'uti_q6',FILTER_VALIDATE_INT);
  $uti_p6=filter_input(INPUT_POST,'uti_p6',FILTER_VALIDATE_INT);
  $uti_q7=filter_input(INPUT_POST,'uti_q7',FILTER_VALIDATE_INT);
  $uti_p7=filter_input(INPUT_POST,'uti_p7',FILTER_VALIDATE_INT);
  $uti_q8=filter_input(INPUT_POST,'uti_q8',FILTER_VALIDATE_INT);
  $uti_p8=filter_input(INPUT_POST,'uti_p8',FILTER_VALIDATE_INT);
  $uti_q9=filter_input(INPUT_POST,'uti_q9',FILTER_VALIDATE_INT);
  $uti_p9=filter_input(INPUT_POST,'uti_p9',FILTER_VALIDATE_INT);
  $uti_q10=filter_input(INPUT_POST,'uti_q10',FILTER_VALIDATE_INT);
  $uti_p10=filter_input(INPUT_POST,'uti_p10',FILTER_VALIDATE_INT);
  $uti_q11=filter_input(INPUT_POST,'uti_q11',FILTER_VALIDATE_INT);
  $uti_p11=filter_input(INPUT_POST,'uti_p11',FILTER_VALIDATE_INT);
  $uti_q12=filter_input(INPUT_POST,'uti_q12',FILTER_VALIDATE_INT);
  $uti_p12=filter_input(INPUT_POST,'uti_p12',FILTER_VALIDATE_INT);
  $uti_q13=filter_input(INPUT_POST,'uti_q13',FILTER_VALIDATE_INT);
  $uti_p13=filter_input(INPUT_POST,'uti_p13',FILTER_VALIDATE_INT);
  $uti_sum=$uti_q1*$uti_p1+ $uti_q2*$uti_p2+$uti_q3*$uti_p3+$uti_q4*$uti_p4+$uti_q5*$uti_p5+$uti_q6*$uti_p6+$uti_q7*$uti_p7+$uti_q8*$uti_p8+$uti_q9*$uti_p9+$uti_q10*$uti_p10+$uti_q11*$uti_p11+$uti_q12*$uti_p12+$uti_q13*$uti_p13;

  //production supplies
  $prosup_q1=filter_input(INPUT_POST,'prosup_q1',FILTER_VALIDATE_INT);
  $prosup_p1=filter_input(INPUT_POST,'prosup_p1',FILTER_VALIDATE_INT);
  $prosup_q2=filter_input(INPUT_POST,'prosup_q2',FILTER_VALIDATE_INT);
  $prosup_p2=filter_input(INPUT_POST,'prosup_p2',FILTER_VALIDATE_INT);
  $prosup_q3=filter_input(INPUT_POST,'prosup_q3',FILTER_VALIDATE_INT);
  $prosup_p3=filter_input(INPUT_POST,'prosup_p3',FILTER_VALIDATE_INT);
  $prosup_q4=filter_input(INPUT_POST,'prosup_q4',FILTER_VALIDATE_INT);
  $prosup_p4=filter_input(INPUT_POST,'prosup_p4',FILTER_VALIDATE_INT);
  $prosup_q5=filter_input(INPUT_POST,'prosup_q5',FILTER_VALIDATE_INT);
  $prosup_p5=filter_input(INPUT_POST,'prosup_p5',FILTER_VALIDATE_INT);
  $prosup_q6=filter_input(INPUT_POST,'prosup_q6',FILTER_VALIDATE_INT);
  $prosup_p6=filter_input(INPUT_POST,'prosup_p6',FILTER_VALIDATE_INT);
  $prosup_q7=filter_input(INPUT_POST,'prosup_q7',FILTER_VALIDATE_INT);
  $prosup_p7=filter_input(INPUT_POST,'prosup_p7',FILTER_VALIDATE_INT);
  $prosup_q8=filter_input(INPUT_POST,'prosup_q8',FILTER_VALIDATE_INT);
  $prosup_p8=filter_input(INPUT_POST,'prosup_p8',FILTER_VALIDATE_INT);
  $prosup_q9=filter_input(INPUT_POST,'prosup_q9',FILTER_VALIDATE_INT);
  $prosup_p9=filter_input(INPUT_POST,'prosup_p9',FILTER_VALIDATE_INT);
  $prosup_sum=$prosup_q1*$prosup_p1+$prosup_q2*$prosup_p2+$prosup_q3*$prosup_p3+$prosup_q4*$prosup_p4+$prosup_q5*$prosup_p5+$prosup_q6*$prosup_p6+$prosup_q7*$prosup_p7+$prosup_q8*$prosup_p8+$prosup_q9*$prosup_p9;

  //Production Labors
  $prolab_q1=filter_input(INPUT_POST,'prolab_q1',FILTER_VALIDATE_INT);
  $prolab_p1=filter_input(INPUT_POST,'prolab_p1',FILTER_VALIDATE_INT);
  $prolab_q2=filter_input(INPUT_POST,'prolab_q2',FILTER_VALIDATE_INT);
  $prolab_p2=filter_input(INPUT_POST,'prolab_p2',FILTER_VALIDATE_INT);
  $prolab_q3=filter_input(INPUT_POST,'prolab_q3',FILTER_VALIDATE_INT);
  $prolab_p3=filter_input(INPUT_POST,'prolab_p3',FILTER_VALIDATE_INT);
  $prolab_q4=filter_input(INPUT_POST,'prolab_q4',FILTER_VALIDATE_INT);
  $prolab_p4=filter_input(INPUT_POST,'prolab_p4',FILTER_VALIDATE_INT);
  $prolab_q5=filter_input(INPUT_POST,'prolab_q5',FILTER_VALIDATE_INT);
  $prolab_p5=filter_input(INPUT_POST,'prolab_p5',FILTER_VALIDATE_INT);
  $prolab_sum=$prolab_q1*$prolab_p1+$prolab_q2*$prolab_p2+$prolab_q3*$prolab_p3+$prolab_q4*$prolab_p4+$prolab_q5*$prolab_p5;

  //Packaging Costs
  $pkco_q1=filter_input(INPUT_POST,'pkco_q1',FILTER_VALIDATE_INT);
  $pkco_p1=filter_input(INPUT_POST,'pkco_p1',FILTER_VALIDATE_INT);
  $pkco_q2=filter_input(INPUT_POST,'pkco_q2',FILTER_VALIDATE_INT);
  $pkco_p2=filter_input(INPUT_POST,'pkco_p2',FILTER_VALIDATE_INT);
  $pkco_q3=filter_input(INPUT_POST,'pkco_q3',FILTER_VALIDATE_INT);
  $pkco_p3=filter_input(INPUT_POST,'pkco_p3',FILTER_VALIDATE_INT);
  $pkco_sum=$pkco_q1*$pkco_p1+$pkco_q2*$pkco_p2+$pkco_q3*$pkco_p3;

  //mischellaneous costs
  $mc_q1=filter_input(INPUT_POST,'mc_q1',FILTER_VALIDATE_INT);
  $mc_p1=filter_input(INPUT_POST,'mc_p1',FILTER_VALIDATE_INT);
  $mc_q2=filter_input(INPUT_POST,'mc_q2',FILTER_VALIDATE_INT);
  $mc_p2=filter_input(INPUT_POST,'mc_p2',FILTER_VALIDATE_INT);
  $mc_q3=filter_input(INPUT_POST,'mc_q3',FILTER_VALIDATE_INT);
  $mc_p3=filter_input(INPUT_POST,'mc_p3',FILTER_VALIDATE_INT);
  $mc_q4=filter_input(INPUT_POST,'mc_q4',FILTER_VALIDATE_INT);
  $mc_p4=filter_input(INPUT_POST,'mc_p4',FILTER_VALIDATE_INT);
  $mc_q5=filter_input(INPUT_POST,'mc_q5',FILTER_VALIDATE_INT);
  $mc_p5=filter_input(INPUT_POST,'mc_p5',FILTER_VALIDATE_INT);
  $mc_q6=filter_input(INPUT_POST,'mc_q6',FILTER_VALIDATE_INT);
  $mc_p6=filter_input(INPUT_POST,'mc_p6',FILTER_VALIDATE_INT);
  $mc_q7=filter_input(INPUT_POST,'mc_q7',FILTER_VALIDATE_INT);
  $mc_p7=filter_input(INPUT_POST,'mc_p7',FILTER_VALIDATE_INT);
  $mc_q8=filter_input(INPUT_POST,'mc_q8',FILTER_VALIDATE_INT);
  $mc_p8=filter_input(INPUT_POST,'mc_p8',FILTER_VALIDATE_INT);
  $mc_q9=filter_input(INPUT_POST,'mc_q9',FILTER_VALIDATE_INT);
  $mc_p9=filter_input(INPUT_POST,'mc_p9',FILTER_VALIDATE_INT);
  $mc_q10=filter_input(INPUT_POST,'mc_q10',FILTER_VALIDATE_INT);
  $mc_p10=filter_input(INPUT_POST,'mc_p10',FILTER_VALIDATE_INT);
  $mc_q11=filter_input(INPUT_POST,'mc_q11',FILTER_VALIDATE_INT);
  $mc_p11=filter_input(INPUT_POST,'mc_p11',FILTER_VALIDATE_INT);
  $mc_sum=$mc_p1*$mc_q1+$mc_p2*$mc_q2+$mc_p3*$mc_q3+$mc_p4*$mc_q4+$mc_p5*$mc_q5+$mc_p6*$mc_q6+$mc_p7*$mc_q7+$mc_p8*$mc_q8+$mc_p9*$mc_q9+$mc_p10*$mc_q10+$mc_p11*$mc_p11;

  // professional service
  $ps_q1=filter_input(INPUT_POST,'ps_q1',FILTER_VALIDATE_INT);
  $ps_p1=filter_input(INPUT_POST,'ps_p1',FILTER_VALIDATE_INT);
  $ps_q2=filter_input(INPUT_POST,'ps_q2',FILTER_VALIDATE_INT);
  $ps_p2=filter_input(INPUT_POST,'ps_p2',FILTER_VALIDATE_INT);
  $ps_sum=$ps_q1*$ps_p1+$ps_q2*$ps_p2+$ps_q3*$ps_p3;


}


if( isset($_POST['submit2'])){
  $gs_q1=filter_input(INPUT_POST,'gs_q1',FILTER_VALIDATE_INT);
  $gs_p1=filter_input(INPUT_POST,'gs_p1',FILTER_VALIDATE_INT);
  $gs_q2=filter_input(INPUT_POST,'gs_q2',FILTER_VALIDATE_INT);
  $gs_p2=filter_input(INPUT_POST,'gs_p2',FILTER_VALIDATE_INT);
  $gs_q3=filter_input(INPUT_POST,'gs_q3',FILTER_VALIDATE_INT);
  $gs_p3=filter_input(INPUT_POST,'gs_p3',FILTER_VALIDATE_INT);
  $gs_q4=filter_input(INPUT_POST,'gs_q4',FILTER_VALIDATE_INT);
  $gs_p4=filter_input(INPUT_POST,'gs_p4',FILTER_VALIDATE_INT);
  $gs_q5=filter_input(INPUT_POST,'gs_q5',FILTER_VALIDATE_INT);
  $gs_p5=filter_input(INPUT_POST,'gs_p5',FILTER_VALIDATE_INT);
  $gs_q6=filter_input(INPUT_POST,'gs_q6',FILTER_VALIDATE_INT);
  $gs_p6=filter_input(INPUT_POST,'gs_p6',FILTER_VALIDATE_INT);
  $gs_q7=filter_input(INPUT_POST,'gs_q7',FILTER_VALIDATE_INT);
  $gs_p7=filter_input(INPUT_POST,'gs_p7',FILTER_VALIDATE_INT);
  $gs_q8=filter_input(INPUT_POST,'gs_q8',FILTER_VALIDATE_INT);
  $gs_p8=filter_input(INPUT_POST,'gs_p8',FILTER_VALIDATE_INT);
  // $gs_sum=$gs_q1*$gs_p1+$gs_q2*$gs_p2+$gs_q3*$gs_p3+$gs_q4*$gs_p4+$gs_q5*$gs_p5+$gs_q6*$gs_p6+$gs_q7*$gs_p7+$gs_q8*$gs_p8;
  $gs_sum=$gs_q1*$gs_p1+$gs_q2*$gs_p2+$gs_q3*$gs_p3+$gs_q4*$gs_p4+$gs_q5*$gs_p5+$gs_q6*$gs_p6+$gs_q7*$gs_p7+$gs_q8*$gs_p8;


  $ec_q1=filter_input(INPUT_POST,'ec_q1',FILTER_VALIDATE_INT);
  $ec_p1=filter_input(INPUT_POST,'ec_p1',FILTER_VALIDATE_INT);
  $ec_q2=filter_input(INPUT_POST,'ec_q2',FILTER_VALIDATE_INT);
  $ec_p2=filter_input(INPUT_POST,'ec_p2',FILTER_VALIDATE_INT);
  $ec_q3=filter_input(INPUT_POST,'ec_q3',FILTER_VALIDATE_INT);
  $ec_p3=filter_input(INPUT_POST,'ec_p3',FILTER_VALIDATE_INT);
  $ec_q4=filter_input(INPUT_POST,'ec_q4',FILTER_VALIDATE_INT);
  $ec_p4=filter_input(INPUT_POST,'ec_p4',FILTER_VALIDATE_INT);
  $ec_q5=filter_input(INPUT_POST,'ec_q5',FILTER_VALIDATE_INT);
  $ec_p5=filter_input(INPUT_POST,'ec_p5',FILTER_VALIDATE_INT);
  $ec_q6=filter_input(INPUT_POST,'ec_q6',FILTER_VALIDATE_INT);
  $ec_p6=filter_input(INPUT_POST,'ec_p6',FILTER_VALIDATE_INT);
  $ec_q7=filter_input(INPUT_POST,'ec_q7',FILTER_VALIDATE_INT);
  $ec_p7=filter_input(INPUT_POST,'ec_p7',FILTER_VALIDATE_INT);
  $ec_q8=filter_input(INPUT_POST,'ec_q8',FILTER_VALIDATE_INT);
  $ec_p8=filter_input(INPUT_POST,'ec_p8',FILTER_VALIDATE_INT);
  $ec_q9=filter_input(INPUT_POST,'ec_q9',FILTER_VALIDATE_INT);
  $ec_p9=filter_input(INPUT_POST,'ec_p9',FILTER_VALIDATE_INT);
  $ec_q10=filter_input(INPUT_POST,'ec_q10',FILTER_VALIDATE_INT);
  $ec_p10=filter_input(INPUT_POST,'ec_p10',FILTER_VALIDATE_INT);
  $ec_q11=filter_input(INPUT_POST,'ec_q11',FILTER_VALIDATE_INT);
  $ec_p11=filter_input(INPUT_POST,'ec_p11',FILTER_VALIDATE_INT);
  $ec_q12=filter_input(INPUT_POST,'ec_q12',FILTER_VALIDATE_INT);
  $ec_p12=filter_input(INPUT_POST,'ec_p12',FILTER_VALIDATE_INT);
  $ec_q13=filter_input(INPUT_POST,'ec_q13',FILTER_VALIDATE_INT);
  $ec_p13=filter_input(INPUT_POST,'ec_p13',FILTER_VALIDATE_INT);
  $ec_sum=$ec_q1*$ec_p1+$ec_q2*$ec_p2+$ec_q3*$ec_p3+$ec_q4*$ec_p4+$ec_q5*$ec_p5+$ec_q6*$ec_p6+$ec_q7*$ec_p7+$ec_q8*$ec_p8+$ec_q9*$ec_p9+$ec_q10*$ec_p10+$ec_q11*$ec_p11+$ec_q12*$ec_p12+$ec_q13*$ec_p13;


  $gd_q1=filter_input(INPUT_POST,'gd_q1',FILTER_VALIDATE_INT);
  $gd_p1=filter_input(INPUT_POST,'gd_p1',FILTER_VALIDATE_INT);
  $gd_q2=filter_input(INPUT_POST,'gd_q2',FILTER_VALIDATE_INT);
  $gd_p2=filter_input(INPUT_POST,'gd_p2',FILTER_VALIDATE_INT);
  $gd_q3=filter_input(INPUT_POST,'gd_q3',FILTER_VALIDATE_INT);
  $gd_p3=filter_input(INPUT_POST,'gd_p3',FILTER_VALIDATE_INT);
  $gd_q4=filter_input(INPUT_POST,'gd_q4',FILTER_VALIDATE_INT);
  $gd_p4=filter_input(INPUT_POST,'gd_p4',FILTER_VALIDATE_INT);
  $gd_q5=filter_input(INPUT_POST,'gd_q5',FILTER_VALIDATE_INT);
  $gd_p5=filter_input(INPUT_POST,'gd_p5',FILTER_VALIDATE_INT);
  $gd_q6=filter_input(INPUT_POST,'gd_q6',FILTER_VALIDATE_INT);
  $gd_p6=filter_input(INPUT_POST,'gd_p6',FILTER_VALIDATE_INT);
  $gd_q7=filter_input(INPUT_POST,'gd_q7',FILTER_VALIDATE_INT);
  $gd_p7=filter_input(INPUT_POST,'gd_p7',FILTER_VALIDATE_INT);
  $gd_q8=filter_input(INPUT_POST,'gd_q8',FILTER_VALIDATE_INT);
  $gd_p8=filter_input(INPUT_POST,'gd_p8',FILTER_VALIDATE_INT);
  $gd_q9=filter_input(INPUT_POST,'gd_q9',FILTER_VALIDATE_INT);
  $gd_p9=filter_input(INPUT_POST,'gd_p9',FILTER_VALIDATE_INT);
  $gd_q10=filter_input(INPUT_POST,'gd_q10',FILTER_VALIDATE_INT);
  $gd_p10=filter_input(INPUT_POST,'gd_p10',FILTER_VALIDATE_INT);
  $gd_q11=filter_input(INPUT_POST,'gd_q11',FILTER_VALIDATE_INT);
  $gd_p11=filter_input(INPUT_POST,'gd_p11',FILTER_VALIDATE_INT);
  $gd_q12=filter_input(INPUT_POST,'gd_q12',FILTER_VALIDATE_INT);
  $gd_p12=filter_input(INPUT_POST,'gd_p12',FILTER_VALIDATE_INT);
  $gd_sum=$gd_q1*$gd_p1+$gd_q2*$gd_p2+$gd_q3*$gd_p3+$gd_q4*$gd_p4+$gd_q5*$gd_p5+$gd_q6*$gd_p6+$gd_q7*$gd_p7+$gd_q8*$gd_p8+$gd_q9*$gd_p9+$gd_q10*$gd_p10+$gd_q11*$gd_p11+$gd_q12*$gd_p12;

  $fixmis_p1=filter_input(INPUT_POST,'fixmis_p1',FILTER_VALIDATE_INT);
  $fixmis_q1=filter_input(INPUT_POST,'fixmis_q1',FILTER_VALIDATE_INT);
  $fix_miscel=$fixmis_p1*$fixmis_q1;

}




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="styles/all.css"/>
<title>crop costs</title>
</head>

<body>
<div class="total_cost">
    <div class="variable_cost">
    <h2>Variable Costs</h2>
    <form method="post" action="cost.php">


    <h3>Utility</h3>

        <p>Electricity(general - no fans)</p>
        <input type="text" name='uti_q1' value="<?php echo $uti_q1;?>">kWh
        <input type="text" name="uti_p1" value="<?php echo $uti_p1;?>">/kWh

        <p>Electricity(fans and pads)</p>
        <input type="text" name='uti_q2' value="<?php echo $uti_q2;?>">kWh
        <input type="text" name="uti_p2" value="<?php echo $uti_p2;?>">/kWh

        <p>Electricity(fanjets/Horizontal Air Fans)</p>
        <input type="text" name='uti_q3' value="<?php echo $uti_q3;?>">kWh
        <input type="text" name="uti_p3" value="<?php echo $uti_p3;?>">/kWh

        <p>Electricity(lights)</p>
        <input type="text" name='uti_q4' value="<?php echo $uti_q4;?>">kWh
        <input type="text" name="uti_p4" value="<?php echo $uti_p4;?>">/kWh

        <p>Water and Sewer</p>
        <input type="text" name='uti_q5' value="<?php echo $uti_q5;?>">gallons
        <input type="text" name="uti_p5" value="<?php echo $uti_p5;?>">/gallon

        <p>Telephone</p>
        <input type="text" name='uti_q6' value="<?php echo $uti_q6;?>">months
        <input type="text" name="uti_p6" value="<?php echo $uti_p6;?>">/month

        <p>Cell Phone</p>
        <input type="text" name='uti_q7' value="<?php echo $uti_q7;?>">months
        <input type="text" name="uti_p7" value="<?php echo $uti_p7;?>">/month

        <p>Pond Pump Energy(DWS)</p>
        <input type="text" name='uti_q8' value="<?php echo $uti_q8;?>">kWh
        <input type="text" name="uti_p8" value="<?php echo $uti_p8;?>">/kWh

        <p>Pump Energy(NFT)</p>
        <input type="text" name='uti_q9' value="<?php echo $uti_q9;?>">kWh
        <input type="text" name="uti_p9" value="<?php echo $uti_p9;?>">/kWh

        <p>Demand Charge(fans)</p>
        <input type="text" name='uti_q10' value="<?php echo $uti_q10;?>">kW
        <input type="text" name="uti_p10" value="<?php echo $uti_p10;?>">/kW

        <p>Demand Charge(lights))</p>
        <input type="text" name='uti_q11' value="<?php echo $uti_q11;?>">kWh
        <input type="text" name="uti_p11" value="<?php echo $uti_p11;?>">/kWh

        <p>Demand Charge(Pond Pump)</p>
        <input type="text" name='uti_q12' value="<?php echo $uti_q12;?>">kWh
        <input type="text" name="uti_p12" value="<?php echo $uti_p12;?>">/kWh

        <p>Demand Charge(NFT)</p>
        <input type="text" name='uti_q13' value="<?php echo $uti_q13;?>">kWh
        <input type="text" name="uti_p13" value="<?php echo $uti_p13;?>">/kWh

      <h3>Production Supplies</h3>

        <p>Seed(package)</p>
        <input type="text" name='prosup_q1' value="<?php echo $prosup_q1;?>">packages
        <input type="text" name="prosup_p1" value="<?php echo $prosup_p1;?>">/package

        <p>horticubes</p>
        <input type="text" name='prosup_q2' value="<?php echo $prosup_q2;?>">cases
        <input type="text" name="prosup_p2" value="<?php echo $prosup_p2;?>">/cases

        <p>Benefitial Insects</p>
        <input type="text" name='prosup_q3' value="<?php echo $prosup_q3;?>">packages
        <input type="text" name="prosup_p3" value="<?php echo $prosup_p3;?>">/packages

        <p>Fertilizer(Blended Mix)</p>
        <input type="text" name='prosup_q4' value="<?php echo $prosup_q4;?>">pounds
        <input type="text" name="prosup_p4" value="<?php echo $prosup_p4;?>">/pounds

        <p>Fertilizer(CaNO3)</p>
        <input type="text" name='prosup_q5' value="<?php echo $prosup_q5;?>">pounds
        <input type="text" name="prosup_p5" value="<?php echo $prosup_p5;?>">/pounds

        <p>Fetilizer(Additions)</p>
        <input type="text" name='prosup_q6' value="<?php echo $prosup_q6;?>">pounds
        <input type="text" name="prosup_p6" value="<?php echo $prosup_p6;?>">/pounds

        <p>Fungicide/Pesticide</p>
        <input type="text" name='prosup_q7' value="<?php echo $prosup_q7;?>">pounds
        <input type="text" name="prosup_p7" value="<?php echo $prosup_p7;?>">/pounds

        <p>Sanitizer</p>
        <input type="text" name='prosup_q8' value="<?php echo $prosup_q8;?>">gallons
        <input type="text" name="prosup_p8" value="<?php echo $prosup_p8;?>">/gallons

        <p>Sticky Traps</p>
        <input type="text" name='prosup_q9' value="<?php echo $prosup_q9;?>">packages
        <input type="text" name="prosup_p9" value="<?php echo $prosup_p9;?>">/package



      <h3>Production Labor</h3>

        <p>Seed/Transplant/Harvest/Package</p>
        <input type="text" name='prolab_q1' value="<?php echo $prolab_q1;?>">hours/year
        <input type="text" name="prolab_p1" value="<?php echo $prolab_p1;?>">/hour

        <p>Delivering to market</p>
        <input type="text" name='prolab_q2' value="<?php echo $prolab_q2;?>">hours/year
        <input type="text" name="prolab_p2" value="<?php echo $prolab_p2;?>">/hour

        <p>Production Management</p>
        <input type="text" name='prolab_q3' value="<?php echo $prolab_q3;?>">hours/year
        <input type="text" name="prolab_p3" value="<?php echo $prolab_p3;?>">/hour


        <p>Others(Marketing, Maintainence, etc)</p>
        <input type="text" name='prolab_q4' value="<?php echo $prolab_q4;?>">hours/year
        <input type="text" name="prolab_p4" value="<?php echo $prolab_p4;?>">/hour

        <p>Fringe Benefit12</p>
        <input type="text" name='prolab_q5' value="<?php echo $prolab_q5;?>">hours/year
        <input type="text" name="prolab_p5" value="<?php echo $prolab_p5;?>">/hour

      <h3>Packaging Costs</h3>

        <p>Clamshell</p>
        <input type="text" name='pkco_q1' value="<?php echo $pkco_q1;?>">cases
        <input type="text" name="pkco_p1" value="<?php echo $pkco_p1;?>">/case

        <p>Box</p>
        <input type="text" name='pkco_q2' value="<?php echo $pkco_q2;?>">boxes
        <input type="text" name="pkco_p2" value="<?php echo $pkco_p2;?>">/box

        <p>Labels</p>
        <input type="text" name='pkco_q3' value="<?php echo $pkco_q3;?>">rolls
        <input type="text" name="pkco_p3" value="<?php echo $pkco_p3;?>">/roll


      <h3>Miscellaneous Costs</h3>

        <p>Advertising, Mailing, Flyers</p>
        <input type="text" name='mc_q1' value="<?php echo $mc_q1;?>">campaigns
        <input type="text" name="mc_p1" value="<?php echo $mc_p1;?>">/campaign

        <p>Continuing Education</p>
        <input type="text" name='mc_q2' value="<?php echo $mc_q2;?>">meetings
        <input type="text" name="mc_p2" value="<?php echo $mc_p2;?>">/meeting

        <p>Internet Service</p>
        <input type="text" name='mc_q3' value="<?php echo $mc_q3;?>">months
        <input type="text" name="mc_p3" value="<?php echo $mc_p3;?>">/month

        <p>Laboratory Fees</p>
        <input type="text" name='mc_q4' value="<?php echo $mc_q4;?>">tests
        <input type="text" name="mc_p4" value="<?php echo $mc_p4;?>">/test

        <p>Office Supplies</p>
        <input type="text" name='mc_q5' value="<?php echo $mc_q5;?>">months
        <input type="text" name="mc_p5" value="<?php echo $mc_p5;?>">/month

        <p>Postage</p>
        <input type="text" name='mc_q6' value="<?php echo $mc_q6;?>">months
        <input type="text" name="mc_p6" value="<?php echo $mc_p6;?>">/month

        <p>Marketing Material $ Promotions</p>
        <input type="text" name='mc_q7' value="<?php echo $mc_q7;?>">promos
        <input type="text" name="mc_p7" value="<?php echo $mc_p7;?>">/ptomo

        <p>Record Keepings</p>
        <input type="text" name='mc_q8' value="<?php echo $mc_q8;?>">months
        <input type="text" name="mc_p8" value="<?php echo $mc_p8;?>">/month

        <p>Software</p>
        <input type="text" name='mc_q9' value="<?php echo $mc_q9;?>">programs
        <input type="text" name="mc_p9" value="<?php echo $mc_p9;?>">/program

        <p>Subscriptions</p>
        <input type="text" name='mc_q10' value="<?php echo $mc_q10;?>">subscriptions
        <input type="text" name="mc_p10" value="<?php echo $mc_p10;?>">/subscription

        <p>Marketing & Trade Shows</p>
        <input type="text" name='mc_q11' value="<?php echo $mc_q11;?>">trade shows
        <input type="text" name="mc_p11" value="<?php echo $mc_p11;?>">/trade show

      <h3>Professional Service</h3>

        <p>Accountant</p>
        <input type="text" name='ps_q1' value="<?php echo $ps_q1;?>">hours
        <input type="text" name="ps_p1" value="<?php echo $ps_p1;?>">/hour

        <p>Lawyer</p>
        <input type="text" name='ps_q2' value="<?php echo $ps_q2;?>">hours
        <input type="text" name="ps_p2" value="<?php echo $ps_p2;?>">/hour




    <button id="submit1" type="submit" name='submit1'>Submit</button>
    </form>
    </div>
    <div class="fixed_cost">
      <h2>Fixed Cost</h2>
      <form  method="post" action="cost.php">
      <h3>Greenhouse Structure</h3>

      <p>Concrete</p>
      <input type="text" name='gs_q1' value="<?php echo $gs_q1;?>">sq.ft.
      <input type="text" name="gs_p1" value="<?php echo $gs_p1;?>">/sq.ft.

      <p>Frame,Ends,Doors</p>
      <input type="text" name='gs_q2' value="<?php echo $gs_q2;?>">houses
      <input type="text" name="gs_p2" value="<?php echo $gs_p2;?>">/house

      <p>Glazing Material(Glass/poly/double poly)</p>
      <input type="text" name='gs_q3' value="<?php echo $gs_q3;?>">houses
      <input type="text" name="gs_p3" value="<?php echo $gs_p3;?>">/house

      <p>Energy/Shade Curtains</p>
      <input type="text" name='gs_q4' value="<?php echo $gs_q4;?>">sq.ft.
      <input type="text" name="gs_p4" value="<?php echo $gs_p4;?>">/sq.ft.

      <p>Ground Cover</p>
      <input type="text" name='gs_q5' value="<?php echo $gs_q5;?>">sq.ft.
      <input type="text" name="gs_p5" value="<?php echo $gs_p5;?>">/sq.ft.

      <p>Permits</p>
      <input type="text" name='gs_q6' value="<?php echo $gs_q6;?>">permits
      <input type="text" name="gs_p6" value="<?php echo $gs_p6;?>">/permit

      <p>Site Preparation</p>
      <input type="text" name='gs_q7' value="<?php echo $gs_q7;?>">houses
      <input type="text" name="gs_p7" value="<?php echo $gs_p7;?>">/house

      <p>House Construction</p>
      <input type="text" name='gs_q8' value="<?php echo $gs_q8;?>">hours
      <input type="text" name="gs_p8" value="<?php echo $gs_p8;?>">/hour


      <h3> Greenhouse Environmental Control Equipment</h3>
      <p>Back-up Generator</p>
      <input type="text" name='ec_q1' value="<?php echo $ec_q1;?>">generators
      <input type="text" name="ec_p1" value="<?php echo $ec_p1;?>">/genetator

      <p>Cooling System(fan,vent,$pad)</p>
      <input type="text" name='ec_q2' value="<?php echo $ec_q2;?>">Systems
      <input type="text" name="ec_p2" value="<?php echo $ec_p2;?>">/system

      <p>Fanjet, 30" 1hp/ Horizontal Air Fans</p>
      <input type="text" name='ec_q3' value="<?php echo $ec_q3;?>">fanjets/HAF
      <input type="text" name="ec_p3" value="<?php echo $ec_p3;?>">/fanjets/HAF

      <p>Electrical Panel</p>
      <input type="text" name='ec_q4' value="<?php echo $ec_q4;?>">panels
      <input type="text" name="ec_p4" value="<?php echo $ec_p4;?>">/panel

      <p>Computer for Environmental Control</p>
      <input type="text" name='ec_q5' value="<?php echo $ec_q5;?>">computers
      <input type="text" name="ec_p5" value="<?php echo $ec_p5;?>">/computer

      <p>Extra Buildigng Supplies</p>
      <input type="text" name='ec_q6' value="<?php echo $ec_q6;?>">houses
      <input type="text" name="ec_p6" value="<?php echo $ec_p6;?>">/house

      <p>Heating Systems(Liquid Propane)</p>
      <input type="text" name='ec_q7' value="<?php echo $ec_q7;?>">heaters
      <input type="text" name="ec_p7" value="<?php echo $ec_p7;?>">/heater

      <p>Heating System(Natural Gas)</p>
      <input type="text" name='ec_q8' value="<?php echo $ec_q8;?>">heaters
      <input type="text" name="ec_p8" value="<?php echo $ec_p8;?>">/heater

      <p>Heating System(Fuel Oil)</p>
      <input type="text" name='ec_q9' value="<?php echo $ec_q9;?>">heaters
      <input type="text" name="ec_p9" value="<?php echo $ec_p9;?>">/heater

      <p>Poly Inflation Kit</p>
      <input type="text" name='ec_q10' value="<?php echo $ec_q10;?>">kits
      <input type="text" name="ec_p10" value="<?php echo $ec_p10;?>">/kits

      <p>Low Voltage Wiring Package</p>
      <input type="text" name='ec_q11' value="<?php echo $ec_q11;?>">packages
      <input type="text" name="ec_p11" value="<?php echo $ec_p11;?>">/package

      <p>Protective Equipment(PPE)</p>
      <input type="text" name='ec_q12' value="<?php echo $ec_q12;?>">sets
      <input type="text" name="ec_p12" value="<?php echo $ec_p12;?>">/set

      <p>Grow Lgiths17</p>
      <input type="text" name='ec_q13' value="<?php echo $ec_q13;?>">lights
      <input type="text" name="ec_p13" value="<?php echo $ec_p13;?>">/light

      <h3>Growing $ Delivery </h3>
      <p> Back Pack Sprayer </p>
      <input type="text" name='gd_q1' value="<?php echo $gd_q1;?>">sprayers
      <input type="text" name="gd_p1" value="<?php echo $gd_p1;?>">/sprayer

      <p> Carbon Dioxide Generator </p>
      <input type="text" name='gd_q2' value="<?php echo $gd_q2;?>">generators
      <input type="text" name="gd_p2" value="<?php echo $gd_p2;?>">/generator

      <p> Delivery Van with A/C</p>
      <input type="text" name='gd_q3' value="<?php echo $gd_q3;?>">vans
      <input type="text" name="gd_p3" value="<?php echo $gd_p3;?>">/van

      <p> Fertilizer Mixing Pump </p>
      <input type="text" name='gd_q4' value="<?php echo $gd_q4;?>">pumps
      <input type="text" name="gd_p4" value="<?php echo $gd_p4;?>">/pump

      <p>Meters and Sensors (EC) </p>
      <input type="text" name='gd_q5' value="<?php echo $gd_q5;?>">meters
      <input type="text" name="gd_p5" value="<?php echo $gd_p5;?>">/meter

      <p> Meters and Sensors (PH) </p>
      <input type="text" name='gd_q6' value="<?php echo $gd_q6;?>">sensors
      <input type="text" name="gd_p6" value="<?php echo $gd_p6;?>">/sensor

      <p> Meters and Sensors(Thermokmter) </p>
      <input type="text" name='gd_q7' value="<?php echo $gd_q7;?>">thermometers
      <input type="text" name="gd_p7" value="<?php echo $gd_p7;?>">/thermometer

      <p> Meters and Sersors (Monitor Humidity) </p>
      <input type="text" name='gd_q8' value="<?php echo $gd_q8;?>">sensors
      <input type="text" name="gd_p8" value="<?php echo $gd_p8;?>">/sensor

      <p> Meters and Sensors (CO2) </p>
      <input type="text" name='gd_q9' value="<?php echo $gd_q9;?>">sensors
      <input type="text" name="gd_p9" value="<?php echo $gd_p9;?>">/sensor

      <p> Grwoing System</p>
      <input type="text" name='gd_q10' value="<?php echo $gd_q10;?>">systems
      <input type="text" name="gd_p10" value="<?php echo $gd_p10;?>">/system

      <p> Scale </p>
      <input type="text" name='gd_q11' value="<?php echo $gd_q11;?>">scales
      <input type="text" name="gd_p11" value="<?php echo $gd_p11;?>">/scale

      <p> Cooler </p>
      <input type="text" name='gd_q12' value="<?php echo $gd_q12;?>">coolers
      <input type="text" name="gd_p12" value="<?php echo $gd_p12;?>">/cooler

      <h3> Miscellaneous</h3>
      <p> Land Rent</p>
      <input type="text" name='fixmis_q1' value="<?php echo $fixmis_q1;?>">Acres
      <input type="text" name="fixmis_p1" value="<?php echo $fixmis_p1;?>">/Acre

      <button id="submit2" type="submit" name='submit2'>Submit</button>
      </form>
    </div>
    <div class="back">
      <a href="index.php">BACK</a>
    </div>
    </div>
    <!-- this is for total cost -->



  <div class="result">
  <table id="table1">
  <tr>
    <th>Variable Costs</th>
    <th>cost</th>
  </tr>
  <tr>
    <td>Utility</td>
    <td> <?php echo $uti_sum ?></td>
  </tr>
  <tr>
    <td>Production Supplies</td>
    <td> <?php echo $prosup_sum ?></td>
  </tr>
  <tr>
    <td> Production Labor </td>
    <td> <?php echo $prolab_sum ?></td>
  </tr>
  <tr>
    <td> Packaging Costs</td>
    <td> <?php echo $pkco_sum ?></td>
   </tr>
  <tr>
    <td> Miscellaneous Cost </td>
    <td> <?php echo $mc_sum ?></td>
  </tr>
  <tr>
    <td> Professional Service</td>
    <td> <?php echo $ps_sum ?></td>
  </tr>
  <tr>
    <td>Total Variable Cost</td>
    <td> <?php echo $prosup_sum+$uti_sum+$prolab_sum+$pkco_sum+$mc_sum+$ps_sum?></td>
  </tr>

  <tr>
    <td> Total Cost </td>
    <td> <?php echo 1.2*$gs_sum+$ec_sum+$gd_sum*1.2+$fix_miscel+$prosup_sum+$uti_sum+$prolab_sum+$pkco_sum+$mc_sum+$ps_sum?></td>
  </tr>
  </table>
  <table id="table2">
  <tr>
    <th>Fixed Costs</th>
    <th>cost</th>
  </tr>
  <tr>
    <td> Greenhouse Structure</td>
    <td> <?php echo $gs_sum ?></td>
  </tr>

  <tr>
    <td> Total Annual Greenhouse Structure Cost</td>
    <td> <?php echo $gs_sum*0.2 ?> </td>
  </tr>

  <tr>
    <td> Greenhouse Environmental Control Equipment </td>
    <td> <?php echo $ec_sum ?> </td>
  </tr>

  <tr>
    <td> Growing & Delivery </td>
    <td> <?php echo $gd_sum ?></td>
  </tr>

  <tr>
    <td> Total Annual Growing & Delivery Costs</td>
    <td> <?php echo $gd_sum*0.2 ?></td>
  </tr>

  <tr>
    <td> Miscellaneous</td>
    <td> <?php echo $fix_miscel ?></td>
  </tr>

  <tr>
    <td> Total Fixed Cost </td>
    <td> <?php echo 1.2*$gs_sum+$ec_sum+$gd_sum*1.2+$fix_miscel ?></td>
  </tr>

  <tr>
    <td> Total Cost </td>
    <td> <?php echo 1.2*$gs_sum+$ec_sum+$gd_sum*1.2+$fix_miscel+$prosup_sum+$uti_sum+$prolab_sum+$pkco_sum+$mc_sum+$ps_sum?></td>
  </table>

  <table id="table3">
  <tr>
    <th>Total Cost</th>
    <th>cost</th>
  </tr>

  <tr>
    <td> Total Cost </td>
    <td> <?php echo 1.2*$gs_sum+$ec_sum+$gd_sum*1.2+$fix_miscel+$prosup_sum+$uti_sum+$prolab_sum+$pkco_sum+$mc_sum+$ps_sum?></td>
  </tr>
  </table>
  </div>



</body>

</html>
