<?php
$pass = $_POST['pass'];

if($pass == "LKIOS02") { include("../adhoc/agent1.html");}
elseif($pass == "G57QD1") { include("../adhoc/agent2.html");}
elseif($pass == "1BX3KM") { include("../adhoc/agent3.html");}
elseif($pass == "27ZRRTOL") { include("../adhoc/agent4.html");}
elseif($pass == "T1444GH") { include("../adhoc/agent5.html");}
elseif($pass == "70087N") { include("../adhoc/agent6.html");}
elseif($pass == "2215Q6") { include("../adhoc/agent8.html");}
elseif($pass == "XQ78KL") { include("../adhoc/AgentA.html");}
elseif($pass == "ZL011") { include("../adhoc/AgentB.html");}
elseif($pass == "PLOLP5") { include("../adhoc/AgentC.html");}
elseif($pass == "FR3OV5P") { include("../adhoc/AgentD.html");}
elseif($pass == "LKION099") { include("../adhoc/AgentE.html");}
elseif($pass == "SNWRT85") { include("../adhoc/AgentF.html");}
elseif($pass == "AS123JH") { include("../adhoc/AgentPi.html");}
else {
    if(isset($_POST))
    {?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title> ADHOC </title>

      <!-- External Stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet">
      <link rel="stylesheet" href="../css/bootstrap.min.css"/>
      <link rel="stylesheet" href="../css/font-awesome.min.css"/>
      <!-- Internal Main Stylesheets -->
      <link rel="stylesheet" href="../css/main.css"/>
      <link rel="stylesheet" href="../css/nav.css"/>
      <link rel="stylesheet" href="../css/modal.css"/>
      <!-- Specific Stylesheets -->
      <link rel="stylesheet" href="../css/page/adhoc.css"/>
</head>
<body>
      <!-- Main Content -->
      <div class="main">
            <div class="mCenter">
                  <a data-toggle="modal" href="#adhocModal"><img class="Adhocimg" src="../img/adhocL.png"></a>
                  <h1 class="Adhoch1">Adhoc</h1>
                  <p class="Adhocp">We are unpredictable. We are unforgiving.</p>
                  <p class="Adhocinv">The orca sings by the rogue 11.11.11</p>
                  <br><br><br>
                  <form method="POST" action="secure.php">
                        <input class="Adhocinput" type="password" name="pass" placeholder="Adhoc Password">
                        <button type="submit" name="submit" class="Adhocbut">Enter</button>
                  </form>
            </div>
      </div>

      <!-- Navigation -->
      <ul id="gn-menu" class="gn-menu-main">
            <li><a class="gnbtn" data-toggle="modal" href="#navModal">
                  <div class="gnbtn1"></div>
                  <div class="gnbtn2"></div>
                  <div class="gnbtn3"></div>
            </a></li>
            <li><a href="../index.html"><i class="fa fa-anchor"></i></a></li>
      </ul>
      <div id="navModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                  <div class="modal-content navMcontent">
                        <div class="modal-body navMbody">
                              <a class="navMa" href="../index.html">PacificMUN 2018</a><br>
                              <a class="navMa" href="../aboutus.html">About Us</a><br>
                              <a class="navMa" href="../committees.html">Committees</a><br>
                              <a class="navMa" href="../conference.html">Conference</a><br>
                              <a class="navMa" href="../registration.html">Registration</a><br>
                              <a class="navMa" href="https://www.facebook.com/PacificModelUN/">Facebook Page</a><br>
                        </div>
                        <div class="modal-exit"><button type="button" data-dismiss="modal" class="navMbtn"><p class="exitMp">&#10006;</p></button></div>
                  </div>
            </div>
      </div>
      <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Take Me Up!" data-toggle="tooltip" data-placement="left"><i class="fa fa-anchor"></i></a>

      <!-- Committee Description -->
      <div id="adhocModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                  <div class="modal-content adhocMcontent">
                        <div class="modal-body adhocMbody">
                              <br>
                              <p class="adhocMp">
                                    To the delegates of PacificMUN,
                              </p>
                              <p class="adhocMp">
                                    During the previous iteration of PacificMUN, our agents took control of over 10 committees and brought chaos into the conference rooms.
                                    Our footprint was forever cemented into the committee resolutions, bringing the Illuminati another step closer to world domination.
                                    This year we are back, and you are not prepared.
                              </p>
                              <p class="adhocMp">
                                    ADHOC is an exclusive committee built for the most calculating, ambitious, and talented delegates in the world of Model United Nations.
                                    Challenging to say the least, ADHOC at PacificMUN is the ultimate test of skill to any delegate who dare to step up to the plate.
                                    The topic and structure of the committee will be completely secret until the day of the conference.
                              </p>
                              <p class="adhocMp">
                                    Will you join us on a journey of destruction, manipulation, and validation, or to stand against us and collapse beneath our feet?
                              </p>
                              <p class="adhocMi">
                                    We are unpredictable. <br>
                                    We are unforgiving. <br>
                                    We are ADHOC. <br>
                              </p>
                              <p class="adhocMp">Best Regards, <a class="adhocMa" href="http://bit.ly/IqT6zt">Agent 007</a></p>
                        </div>
                        <div class="modal-exit">
                              <div class="modal-exit"><button type="button" data-dismiss="modal" class="adhocMbtn"><p class="exitMp">&#10006;</p></button></div>
                        </div>
                  </div>
            </div>
      </div>

      <!-- Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/classie.js"></script>
      <script src="../js/main.js"></script>
      <script language="javascript">
      function check(form){
            if (form.pswrd.value == "31415") {
                  window.open('test1.php')
            } else {
                  window.open('http://bit.ly/IqT6zt')
            }
      }
      </script>
</body>
</html>
<?}
}
?>
