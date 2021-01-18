<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/commom.css">
    <script src="../public/js/common.js"></script>
    <link rel="stylesheet" href="../public/css/jobedit.css">
    <script src="../public/js/jobedit.js"></script>
    <title>Job edit screen - mysql-odbc</title>
</head>
<body>
<div class="navigation">
  <ul>
    <li>
      <a href="#">File(F)</a>
      <ul class="filewidth">
        <li><a href="#" class="bottom">New(N)</a></li>
        <li><a href="#">Import(I)</a></li>
        <li><a href="#" class="bottom">Export All(E)</a></li>
        <li><a href="#">Exit(X)</a></li>
      </ul>
    </li>
    <li>
        <a href="#">Edit(E)</a>
        <ul class="editwidth">
          <li><a href="#">Delete(D)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">View(V)</a>
        <ul class="viewwidth">
          <li><input type="checkbox"><a href="#">List of operative situation jobnets(O)</a></li>
          <li><input type="checkbox"><a href="#">List of error jobnets(T)</a></li>
          <li><input type="checkbox"><a href="#">List of jobnets duration the practice(R)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Run(S)</a>
        <ul class="runwidth">
          <li><a href="#">Immediate Run(R)</a></li>
          <li><a href="#">Immediate Run & Hold(W)</a></li>
          <li><a href="#">Test Run(T)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Help(H)</a>
        <ul class="helpwidth">
          <li><a href="#">Version(A)</a></li>
        </ul>
      </li>
  </ul>
</div>

<div class="blank"></div>
<div class="blank1">
<a href="https://www.jobarranger.info/document/doku.php?id=4.0:reference:icons:jobnet_icon_job" 
class="jamlink">Job Arranger 5.0.0</a>
<p class="username">User name: Admin</p>
</div>

<div>
  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'objectMang')">Object management</button>
    <button class="tablinks" onclick="openTab(event, 'objectExec')">Object execution management</button>
    <button class="tablinks" onclick="openTab(event, 'execResult')">Object execution result</button>
    <button class="tablinks" onclick="openTab(event, 'general')">General settings</button>
  </div>

  <div id="objectMang" class="tabcontent">
    <h3>Object Management</h3>
  </div>

  <div id="objectExec" class="tabcontent">
    <h3>Object Execution Management</h3>
  </div>

  <div id="execResult" class="tabcontent">
    <h3>Object Execution Result</h3>
  </div>

  <div id="general" class="tabcontent">
    <h3>General Settings</h3>
   </div>
</div>

<div class="splitter">
    <div id="first" class="leftBox">

      <ul class="treeview" id="myUL">
        <li><span class="caret">Calendar</span>
          <ul class="nested">
            <li><span class="caret" id="public_calendar">Public calendar</span>
              <ul class="nested">
                <li>CALENDAR_16_Business_Day</li>
                <li>CALENDAR_17_Private_To_Public</li>
              </ul>
            </li>  
            <li><span class="caret" id="private_calendar">Private calendar</span>
              <ul class="nested">
                  <li>Business_Day_201019</li>
                  <li>Test_Calender_2</li>
              </ul>
            </li>
            <li><span class="caret" id="public_filter">Public filter</span>
              <ul class="nested">
                  <li>FILTER_18</li>
                  <li>FILTER_1_Enable_Disable</li>
              </ul>
            </li>
            <li><span class="caret" id="private_filter">Private filter</span>
              <ul class="nested">
                  <li>FILTER_Beginning_Of_Month</li>
                  <li>FILTER_End_Of_Month</li>
              </ul>
            </li>
          </ul>
        </li>
      
        <li><span class="caret">Schedule</span>
          <ul class="nested">
            <li><span class="caret" id="public_schedule">Public Schedule</span>
              <ul class="nested">
                <li>SCHEDULE_1_Enable_Disable</li>
                <li>SCHEDULE_MONITOR</li>
              </ul>
            </li>  
            <li><span class="caret" id="private_schedule">Private Schedule</span>
              <ul class="nested">
                <li>SCHEDULE_27</li>
                <li>SCH_1_Private_Create_31</li>
              </ul>
            </li>
          </ul>
        </li>
      
        <li><span class="caret">Jobnet</span>
          <ul class="nested">
            <li><span class="caret" id="public_jobnet">Public Jobnet</span>
              <ul class="nested">
                <li>JOBNET_1_Enable_Disable</li>
                <li>JOBNET_1_Public_Create_24</li>
              </ul>
            </li>  
            <li><span class="caret" id="private_jobnet">Private Jobnet</span>
              <ul class="nested">
                <li>JN_01_00_SimpleJob_LinWin</li>
                <li>JN_2_SmallJobnet</li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="separator"></div>
    <div id="second" class="right">
      <div class="menu">
        <table class="menutbl">
          <tr>
              <td><label>Jobnet id:</label></td>
              <td><input type="text" id="jobnetid" size="30"></td>
              <td><label>multiple:</label></td>
              <td><select id="multiple" style="background-color:#E5E7E9">
                  <option value="yes">Yes</option>
                  <option value="skip">Skip</option>
                  <option value="waiting">Waiting</option>
              </select></td>
              <td> <label>Public:</label>
                  <input type="checkbox" id="public"></td>
              <td><label>Authority: Can update</label></td>
              <td><label>User name: </label></td>
              <td><label>Admin</label></td>
          </tr>
          <tr>
              <td><label>Jobnet name:</label></td>
              <td colspan="4"><input type="text" id="jobnetname" size="75"></td>
              <td><label>Update date:</label></td>
          </tr>
          <tr>
              <td><label>Description:</label></td>
              <td colspan="4"><input type="text" id="jobnetname" size="80"></td>
              <td><label>Timeout warning(minute):</label></td>
              <td><input type="text" id="timeout" size="5"></td>
              <td><select id="timeout" style="background-color:#E5E7E9">
                  <option value="warning">Warning</option>
                  <option value="jobnet stop">Jobnet stop</option>
              </select></td>
          </tr>
      </table>
  
      </div>
      <div class="min_max_bar">
        <div class="cssCircle minusSign" id="minimize">-</div>    
        <div class="range-slider"> 
            <input class="input-range" id="range" type="range" value="0" min="0" max="100"> 
        </div>
        <div class="cssCircle plusSign" id="maximize">+</div>
      </div>
      <div class="iconbox">
        <div class="icongroup">
          <div id="iconblock" style="width:80px;">
            <canvas id="newCanvas0" width="300" height="150"></canvas>
              <script>
                  var canvas0 = document.getElementById('newCanvas0');
                  var ctx0 = canvas0.getContext('2d');
                  ctx0.beginPath();
                  ctx0.moveTo(10, 0);
                  ctx0.lineTo(70, 0);
                  ctx0.quadraticCurveTo(75, 0, 80, 10);
                  ctx0.lineTo(80, 20);
                  ctx0.quadraticCurveTo(75, 30, 70, 30);
                  ctx0.lineTo(10, 30);
                  ctx0.quadraticCurveTo(5, 30, 0, 20);
                  ctx0.lineTo(0, 10);
                  ctx0.quadraticCurveTo(0, 0, 10, 0);
                  ctx0.stroke();
                  ctx0.font = "12px Arial";
                  ctx0.fillText("JOB",25,20);
              </script>
    <!-- <img src="image/reboot.png" width="20px" height="20px" style="margin-right: -220px; 
    margin-bottom: 103px; margin-left: -220px;"> -->
      </div>
        <div id="iconblock" style="width: 60px;">
            <canvas id="myCanvas">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c = document.getElementById("myCanvas");
                    var ctx = c.getContext("2d");
                    ctx.beginPath();
                    ctx.moveTo(0,15);
                    ctx.lineTo(30,0);
                    ctx.lineTo(60,15);
                    ctx.lineTo(30,30);
                    ctx.closePath();
                    ctx.stroke();
                    ctx.font = "12px Arial";
                    ctx.fillText("IF",25,20);                                                                   
                </script>
        </div>
        <div id="iconblock" style="width: 35px;">
            <canvas id="myCanvas1">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c1 = document.getElementById("myCanvas1");
                    var ctx1 = c1.getContext("2d");
                    ctx1.beginPath();
                    ctx1.moveTo(0,15);
                    ctx1.lineTo(20,0);
                    ctx1.lineTo(40,15);
                    ctx1.lineTo(20,30);
                    ctx1.closePath();
                    ctx1.stroke();
                    ctx1.font = "15px Arial";
                    ctx1.fillText("|",18,18)
                </script>
        </div>
        <div id="iconblock">
            <svg width="40" height="50">
                <rect x="5" y="5" width="30" height="30" style="fill:#E5E7E9; stroke:black;" />
                <text x="10" y="38" fill="black" style="font:icon; font-size: 30px;" transform="rotate(90 24,25)">E</text>
                Sorry, your browser does not support inline SVG.     
              </svg>
        </div>
        <div id="iconblock">
            <svg width="40" height="50">
                <rect x="5" y="5" width="30" height="30" style="fill:#E5E7E9; stroke:black;" />
                <text x="42" y="40" fill="black" style="font:icon; font-size: 30px;" transform="rotate(270 31,40)">E</text>
                Sorry, your browser does not support inline SVG.     
              </svg>
        </div>
        <div id="iconblock" style="width:70px;">
            <canvas id="myCanvas2">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c2 = document.getElementById("myCanvas2");
                    var ctx2 = c2.getContext("2d");
                    ctx2.beginPath();
                    ctx2.moveTo(0,30);
                    ctx2.lineTo(60,30);
                    ctx2.lineTo(70,0);
                    ctx2.lineTo(10,0);
                    ctx2.closePath();
                    ctx2.stroke();
                    ctx2.font = "12px Arial";
                    ctx2.fillText("VARIABLE",10,17);
                </script>
        </div>
        <div id="iconblock" style="width:110px;">
            <canvas id="myCanvas3">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c3 = document.getElementById("myCanvas3");
                    var ctx3 = c3.getContext("2d");
                    ctx3.beginPath();
                    ctx3.moveTo(0,0);
                    ctx3.lineTo(100,00);
                    ctx3.lineTo(100,30);
                    ctx3.lineTo(0,30);
                    ctx3.closePath();
                        ctx3.moveTo(10,0);
                        ctx3.lineTo(10,30);
                        ctx3.moveTo(90,0);
                        ctx3.lineTo(90,30);
                    ctx3.stroke();
                    ctx3.font = "12px Arial";
                    ctx3.fillText("EXTENSION",15,20);                         
                </script>
        </div>
        <div id="iconblock">
            <p id="rcorners">START</p>
        </div>
        <div id="iconblock">
            <p id="rcorners">END</p>
        </div>
        <div id="iconblock" style="width:60px;">
            <canvas id="myCanvas4">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c4 = document.getElementById("myCanvas4");
                    var ctx4 = c4.getContext("2d");
                    ctx4.beginPath();
                    ctx4.moveTo(0,5);
                    ctx4.lineTo(60,5);
                    ctx4.lineTo(50,30);
                    ctx4.lineTo(10,30);
                    ctx4.closePath();
                    ctx4.stroke();
                    ctx4.font = "12px Arial";
                    ctx4.fillText("CALC",12,20);
                </script>
        </div>
        <div id="iconblock">
            <svg width="40" height="50">
                <rect x="5" y="5" width="30" height="30" style="fill:#E5E7E9; stroke:black;" />
                <text x="15" y="30" fill="black" style="font:icon; font-size: 30px;">L</text>
                Sorry, your browser does not support inline SVG.     
              </svg>
        </div>
        <div id="iconblock" style="width:70px;">
            <canvas id="myCanvas5">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c5 = document.getElementById("myCanvas5");
                    var ctx5 = c5.getContext("2d");
                    ctx5.beginPath();
                    ctx5.moveTo(0,15);
                    ctx5.lineTo(15,0);
                    ctx5.lineTo(50,0);
                    ctx5.lineTo(65,15);
                    ctx5.lineTo(50,30);
                    ctx5.lineTo(15,30);
                    ctx5.closePath();
                    ctx5.stroke();
                    ctx5.font = "12px Arial";
                    ctx5.fillText("TASK",15,20);
                </script>
        </div>
        <div id="iconblock" style="width:80px;">
            <canvas id="myCanvas6">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c6 = document.getElementById("myCanvas6");
                    var ctx6 = c6.getContext("2d");
                    ctx6.beginPath();
                    ctx6.moveTo(0,10);
                    ctx6.lineTo(10,0);
                    ctx6.lineTo(60,0);
                    ctx6.lineTo(60,30);
                    ctx6.lineTo(0,30);
                    ctx6.closePath();
                    ctx6.stroke();
                    ctx6.font = "12px Arial";
                    ctx6.fillText("INFO",15,20);
                </script>
        </div>
        
    </div>
    <div class="icongroup">
        <div id="iconblock" style="width:80px;">
            <canvas id="myCanvas7">
                Your browser does not support the HTML5 canvas tag.</canvas>
                
                <script>
                var c7 = document.getElementById("myCanvas7");
                var ctx7 = c7.getContext("2d");
                
                ctx7.beginPath();
                ctx7.moveTo(0,20);
                ctx7.bezierCurveTo(0, 40, 80, 20, 80, 25);
                ctx7.lineTo(80,0);
                ctx7.lineTo(0,0);

                ctx7.closePath();
                ctx7.stroke();
                ctx7.font = "12px Arial";
                ctx7.fillText("F-TRANSFER",3,15);
                </script> 
                <!-- <img src="image/FileTransfer.PNG" width="15px" height="15px" style="margin:40px 50px"> -->
        </div>

        <div id="iconblock" style="width:80px;">
        <canvas id="myCanvas8">
            Your browser does not support the HTML5 canvas tag.</canvas>
            
            <script>
            var c8 = document.getElementById("myCanvas8");
            var ctx8 = c8.getContext("2d");
            
            ctx8.beginPath();
            ctx8.moveTo(0,20);
            ctx8.bezierCurveTo(0, 40, 80, 20, 80, 25);
            ctx8.lineTo(80,0);
            ctx8.lineTo(0,0);
            
            ctx8.closePath();
            ctx8.stroke();
            ctx8.font = "12px Arial";
            ctx8.fillText("F-WAIT",15,15);                   
            
            </script> 
            <!-- <img src="image/filewait.png" width="25px" height="25px" style="margin:65px -185px"> -->
        </div>
        <div id="iconblock" style="width:80px;">
            <canvas id="newCanvas9" width="300" height="150"></canvas>
                <script>
                    var canvas9 = document.getElementById('newCanvas9');
                    var ctx9 = canvas9.getContext('2d');
                    ctx9.beginPath();
                    ctx9.moveTo(10, 0);
                    ctx9.lineTo(70, 0);
                    ctx9.quadraticCurveTo(75, 0, 80, 10);
                    ctx9.lineTo(80, 20);
                    ctx9.quadraticCurveTo(75, 30, 70, 30);
                    ctx9.lineTo(10, 30);
                    ctx9.quadraticCurveTo(5, 30, 0, 20);
                    ctx9.lineTo(0, 10);
                    ctx9.quadraticCurveTo(0, 0, 10, 0);
                    ctx9.stroke();
                    ctx9.font = "12px Arial";
                    ctx9.fillText("REBOOT",15,20);
                </script>
      <!-- <img src="image/reboot.png" width="20px" height="20px" style="margin-right: -220px; 
      margin-bottom: 103px; margin-left: -220px;"> -->
        </div>
        <div id="iconblock" style="width:80px;">
            <canvas id="myCanvas10">
                Your browser does not support the HTML5 canvas tag.</canvas>
                
                <script>
                var c10 = document.getElementById("myCanvas10");
                var ctx10 = c10.getContext("2d");
                
                ctx10.beginPath();
                ctx10.moveTo(0,0);
                ctx10.lineTo(65,0);
                ctx10.lineTo(75,10);
                ctx10.lineTo(75,30);
                ctx10.lineTo(10,30);
                ctx10.lineTo(0,20);
                
                
                ctx10.closePath();
                ctx10.stroke();
                ctx10.font = "12px Arial";
                ctx10.fillText("RELEASE",12,20);
                
                </script> 
                <!-- <img src="image/release.png" width="20px" height="20px" style="margin:95px -195px"> -->
        </div>
        <div id="iconblock" style="width:70px;">
            <canvas id="myCanvas11">Your Browser does not support the HTML5 canvas tag.</canvas>
                <script>
                    var c11 = document.getElementById("myCanvas11");
                    var ctx11 = c11.getContext("2d");
                    ctx11.beginPath();
                    ctx11.moveTo(0,0);
                    ctx11.lineTo(70,0);
                    ctx11.lineTo(70,30);
                    ctx11.lineTo(0,30);
                    ctx11.closePath();
                    ctx11.stroke();
                    ctx11.font = "12px Arial";
                    ctx11.fillText("ZABBIX",15,20);                         
                </script>
            </div>
            <div id="iconblock" style="width:80px;">
                <canvas id="newCanvas12" width="300" height="150"></canvas>
                    <script>
                        var canvas12 = document.getElementById('newCanvas12');
                        var ctx12 = canvas12.getContext('2d');
                        ctx12.beginPath();
                        ctx12.moveTo(10, 0);
                        ctx12.lineTo(70, 0);
                        ctx12.quadraticCurveTo(75, 0, 80, 10);
                        ctx12.lineTo(80, 20);
                        ctx12.quadraticCurveTo(75, 30, 70, 30);
                        ctx12.lineTo(10, 30);
                        ctx12.quadraticCurveTo(5, 30, 0, 20);
                        ctx12.lineTo(0, 10);
                        ctx12.quadraticCurveTo(0, 0, 10, 0);
                        ctx12.stroke();
                        ctx12.font = "12px Arial";
                        ctx12.fillText("AGENTLESS",5,20);
                    </script>
          <!-- <img src="image/agentless.png" width="20px" height="20px" style="margin-right: -220px; 
          margin-bottom: 103px; margin-left: -220px;"> -->
            </div>
    </div>
    </div>

      <div class="jobnetbox"></div>
      <div class="jobnetfooter">
        <div class="buttonbox">
        <button onclick="#">Save</button>
        <button onclick="#">Cancel</button>
        </div>
      </div>
</div>
      
</body>
</html>
