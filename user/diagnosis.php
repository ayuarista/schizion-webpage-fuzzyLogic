 <?php
include("../includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <link rel="shortcut icon" href="assets/img/brain.ico" />
    <title>Schizion</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Schizion</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                   
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">
                  <?php
          if(isset($_SESSION['email_user'])){

          echo "Welcome:" . $_SESSION['email_user'] ."";
         }
         else {
          echo "Welcome, user";
         }

         ?></h5>
                    
                 <li class="mt">
                      <a  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="profile.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Profile</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profil_patient.php">Patient</a></li>
                          <li><a  href="profil_caregiver.php">Care Giver</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="diagnosis.php" >
                          <i class="fa fa-book"></i>
                          <span>Diagnosis</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="diag_patient.php">Patient</a></li>
                          <li><a  href="diag_caregiver.php">Care Giver</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="about.php" >
                          <i class="fa fa-tasks"></i>
                          <span>About Schizophrenia</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="contact.php" >
                          <i class="fa fa-th"></i>
                          <span>Contact</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="logout.php" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Logout</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
       <!--main content start-->
       <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-11 main-chart">

      <div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
      <h2>DIAGNOSIS</h2><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Diagnosis Patient</a></li>
    <li><a href="#menu1">Result</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <div class="row mt">
        
                    <div class="col-md-12">
                        <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Question</th>
                                  <th>Yes</th>
                                  <th>No</th>
                              </tr>
                              </thead>
                              <tbody>
                               <form action="#" method="post">
                              <tr>
                                  <td>1</td>
                                  <td>Do you have some repetitive thoughts in your mind ?</td>
                                  <td><input type="radio" name="q[0]" id="q_1_yes" value="1yes"></td>
                                  <td><input type="radio" name="q[0]" id="q_1_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Do you ever think about something that are not sourced from yourself ?</td>
                                 <td><input type="radio" name="q[1]" id="q_2_yes" value="1yes"></td>
                                  <td><input type="radio" name="q[1]" id="q_2_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Do you ever do something things that are not considered normal by community and without you realize it is known by the other ?</td>
                                     <td><input type="radio" name="q[2]" id="q_3_yes" value="1yes"></td>
                                  <td><input type="radio" name="q[2]" id="q_3_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>Do you feel there is Something  controlling yourself when you  do activity ?</td>
                                   <td><input type="radio" name="q[3]" id="q_4_yes" value="2yes"></td>
                                  <td><input type="radio" name="q[3]" id="q_4_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Do you feel there is something  influence yourself when you do some activity ? </td>
                                 <td><input type="radio" name="q[4]" id="q_5_yes" value="2yes"></td>
                                  <td><input type="radio" name="q[4]" id="q_5_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Do you feel powerless to control your self because there are other forces that control you ?</td>
                                 <td><input type="radio" name="q[5]" id="q_6_yes" value="2yes"></td>
                                  <td><input type="radio" name="q[5]" id="q_6_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>Have you ever had experience interacting with mystical things ?</td>
                                  <td><input type="radio" name="q[6]" id="q_7_yes" value="2yes"></td>
                                  <td><input type="radio" name="q[6]" id="q_7_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td>Have you ever heard a whispers continously that others poeple do not think existed ?</td>
                                  <td><input type="radio" name="q[7]" id="q_8_yes" value="3yes"></td>
                                  <td><input type="radio" name="q[7]" id="q_8_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>9</td>
                                  <td>Do you have a great belief in somethings that other don't have ?</td>
                                  <td><input type="radio" name="q[8]" id="q_9_yes" value="4yes"></td>
                                  <td><input type="radio" name="q[8]" id="q_9_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>10</td>
                                  <td>Do you feel hearing a whispers from somethings unreal ?</td>
                                  <td><input type="radio" name="q[9]" id="q_10_yes" value="yes"></td>
                                  <td><input type="radio" name="q[9]" id="q_10_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>11</td>
                                  <td>When in the middle conversation, do you often lose concentration and even talk about other things ?</td>
                                  <td><input type="radio" name="q[10]" id="q_11_yes" value="yes"></td>
                                  <td><input type="radio" name="q[10]" id="q_11_no"  value="no"></td>
                              </tr>
                              <tr>
                                  <td>12</td>
                                  <td>Do you ever been in a position or doing certain movements that others think are strange for a long time?</td>
                                  <td><input type="radio" name="q[11]" id="q_12_yes" value="yes"></td>
                                  <td><input type="radio" name="q[11]" id="q_12_no"  value="no"></td>
                              </tr>
                                  <tr>
                                  <td>13</td>
                                  <td>Do you often behaved negatively ? As Pathetic, rarely talk, emotional respon isn't fair etc)</td>
                                  <td><input type="radio" name="q[12]" id="q_13_yes" value="yes"></td>
                                  <td><input type="radio" name="q[12]" id="q_13_no"  value="no"></td>
                              </tr>
                                  <tr>
                                  <td>14</td>
                                  <td>Do you experiencing various things as above more than a month?</td>
                                  <td><input type="radio" name="q[13]" id="q_14_yes" value="yes"></td>
                                  <td><input type="radio" name="q[13]" id="q_14_no"  value="no"></td>
                              </tr>
                                  <tr>
                                  <td>15</td>
                                  <td>Do you not interested in doing activities that you often did before?</td>
                                  <td><input type="radio" name="q[14]" id="q_15_yes" value="yes"></td>
                                  <td><input type="radio" name="q[14]" id="q_15_no"  value="no"></td>
                              </tr>
                                  <tr>
                                  <td>16</td>
                                  <td>Do you feel lost your life purpose?</td>
                                  <td><input type="radio" name="q[15]" id="q_16_yes" value="yes"></td>
                                  <td><input type="radio" name="q[15]" id="q_16_no"  value="no"></td>
                              </tr>
                                  <tr>
                                  <td>17</td>
                                  <td>Do you feel want to stop doing all of your activities?</td>
                                  <td><input type="radio" name="q[16]" id="q_17_yes" value="yes"></td>
                                  <td><input type="radio" name="q[16]" id="q_17_no"  value="no"></td>
                              </tr>
                                  <tr>
                                  <td>18</td>
                                  <td>Do you avoid to interact with others?</td>
                                  <td><input type="radio" name="q[17]" id="q_18_yes" value="yes"></td>
                                  <td><input type="radio" name="q[17]" id="q_18_no"  value="no"></td>
                              </tr>
                              </tbody>
                          </table>
                        </div><!--/content-panel -->
                    </div><!-- /col-md-12 -->
<input type="submit" name="submit" value="Submit"/>
</form>

<?php 
if(isset($_POST['submit'])){
$onea = 0;
$twoa = 0;
$threea = 0;
$foura = 0;

$poinone=0;
$pointwo=0;
$pointhree=0;
$poinfour=0;

$result=0;

for($i = 0; $i < 9; ++$i) {
    if($_POST['q'][$i] == '1yes') {
        $onea++;
      }
    if($_POST['q'][$i] == '2yes') {
        $twoa++;
      }
    if($_POST['q'][$i] == '3yes') {
        $threea++;
      }
    if($_POST['q'][$i] == '4yes') {
        $foura++;
      }
    }


if ($onea =3 || $twoa =4 || $threea =1 || $foura =1)
{
  $poinone =1;
}


for ($i=9; $i < 13 ; $i++) { 
  if ( $_POST['q'][$i] == 'yes') {
   $pointwo = 1;
  }
}


if ($_POST['q'][13]== 'yes') {
  $pointhree = 1;
}


for ($i=14; $i < 17 ; $i++) { 
   if ( $_POST['q'][$i] == 'yes') {
   $poinfour = 1 ;
}
}


if (($poinone=1 && $pointhree=1 && $poinfour=1) || ($pointwo=1 && $pointhree=1 && $poinfour=1) ||
  ($poinone=1 && $pointhre=1 && $poinfour=1 && $pointwo=1))
{
  $result ==1 ;
  echo "<h3>anda terkena</h3>";
}
else
{
  echo "<h3> anda tidak terkena </h3>";
}


}

    ?>
    <br><div id="menu1" class="tab-pane fade">
      <div class="row mt">
                  <div class="col-md-12">
                          <div class="row">
              <div class="col-lg-5 main-chart">
              <img align="middle" class= "center" src="assets/img/BRAIN-1.png"/><br>
              </div>
              <div class="col-lg-6 main-chart showback">
                  <h3>YOUR RESULT : POSITIVE SCHIZOPHRENIA</h3>
                  <p>Your answers suggest you are suffering from schizophrenia critical level.</p>
                  <p>Consider immediate treatment to the nearest hospital</p><br>
              </div>
              <div class="col-lg-6">
              <h4>Here Some Recommendation : </h4><br></div>
            </div>
            <div class="row">
            <div class="col-sm-4">
              <div class="single_contact_info">
                  <div class="single_info_text">
                    <h3>BALI</h3>
                    <p>Rumah Sakit Jiwa Bangli <br>
                    Jl Kesumayuda 29, Kawan, <br>
                    BANGLI <br>
                    Telp : 0366 3568782</p>

                    <h3>DI Yogyakarta</h3>
                    <p>RS Jiwa Prop. D.I.Yogyakarta <br>
                    Alamat : Jl. Kaliurang Km 17 Yogyakarta </p>

                    <h3>DKI JAKARTA</h3>
                    <p>RS Saraf dan Jiwa Dharma Jaya, <br>
                    Alamat : Jl. Raya Mangga Besar No. 138 <br><br>

                    RS Jiwa Jakarta <br>
                    Alamat Jl dr. Latumeten No. 1, Jakarta Barat<br> 
                    Lokasi Jakarta Barat <br>
                    Telpon 021-5682842 <br>
                    Fax 021-5682843 <br></p>

                    <h3>BANDUNG</h3>
                    <p>RS. Jiwa Bandung<br> 
                    Alamat : Jl. Laks. L RE Martadinata 11 <br>
                    Telpon : (022) 4203651 <br>
                    Faksimile : (022) 4205447 <br></p>

                  </div>
                </div>
              </div>

            <div class="col-sm-4">
              <div class="single_contact_info">
                  <div class="single_info_text">
                    <h3>DKI JAKARTA</h3>
                    <p>RS Saraf dan Jiwa Dharma Jaya, <br>
                    Alamat : Jl. Raya Mangga Besar No. 138 <br><br>

                    RS Jiwa Jakarta <br>
                    Alamat Jl dr. Latumeten No. 1, Jakarta Barat<br> 
                    Lokasi Jakarta Barat <br>
                    Telpon 021-5682842 <br>
                    Fax 021-5682843 <br></p>

                    <h3>BANDUNG</h3>
                    <p>RS. Jiwa Bandung<br> 
                    Alamat : Jl. Laks. L RE Martadinata 11 <br>
                    Telpon : (022) 4203651 <br>
                    Faksimile : (022) 4205447 <br></p>

                    <h3>BALI</h3>
                    <p>Rumah Sakit Jiwa Bangli <br>
                    Jl Kesumayuda 29, Kawan, <br>
                    BANGLI <br>
                    Telp : 0366 3568782</p>

                    <h3>DI Yogyakarta</h3>
                    <p>RS Jiwa Prop. D.I.Yogyakarta <br>
                    Alamat : Jl. Kaliurang Km 17 Yogyakarta </p>

                  </div>
                </div>
                      </div>

                      <div class="col-sm-4">
              <div class="single_contact_info">
                  <div class="single_info_text">
                    <h3>BANDUNG</h3>
                    <p>RS. Jiwa Bandung<br> 
                    Alamat : Jl. Laks. L RE Martadinata 11 <br>
                    Telpon : (022) 4203651 <br>
                    Faksimile : (022) 4205447 <br></p>

                    <h3>BOGOR</h3>
                    <p>RSJ Marzuki Mahdi Bogor<br>
                    Jl. Dr Sumeru No. 114 Bogor <br>
                    Telp. 051-8320467<br></p>

                    <h3>DKI JAKARTA</h3>
                    <p>RS Saraf dan Jiwa Dharma Jaya, <br>
                    Alamat : Jl. Raya Mangga Besar No. 138 <br><br>

                    RS Jiwa Jakarta <br>
                    Alamat Jl dr. Latumeten No. 1, Jakarta Barat<br> 
                    Lokasi Jakarta Barat <br>
                    Telpon 021-5682842 <br>
                    Fax 021-5682843 <br></p>

                    <h3>DI Yogyakarta</h3>
                    <p>RS Jiwa Prop. D.I.Yogyakarta <br>
                    Alamat : Jl. Kaliurang Km 17 Yogyakarta </p>

                  </div>
                </div>
                      </div><!--<!-- /content-panel -->
                  </div><!-- /col-md-12 -->
    </div></div>
</div>
</div>
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
             
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->


    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->            
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  

      <!-- **********************************************************************************************************************************************************
      FOOTER CONTENT
      *********************************************************************************************************************************************************** -->               

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 - SCHIZION - ASES TEAM
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }

        function clickYes() {
    if (document.getElementById("ResponseSaidCBN").checked) {
        document.getElementById("ResponseSaidCBN").checked = false;
    }
}

function clickNo() {
    if (document.getElementById("ResponseSaidCBY").checked) {
        document.getElementById("ResponseSaidCBY").checked = false;
    }
}

document.getElementById("ResponseSaidCBY").onchange = clickYes;
document.getElementById("ResponseSaidCBN").onchange = clickNo;
    </script>
    <script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
  

  </body>
</html>
