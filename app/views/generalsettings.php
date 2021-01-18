<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/commom.css">
    <link rel="stylesheet" href="../public/css/generalsettings.css">
    <script src="../public/js/generalsettings.js"></script>
    <script src="../public/js/common.js"></script>
    <title>Settings general screen - mysql-odbc</title>
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
<a href="#" class="jamlink">Job Arranger 5.0.0</a>
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
    <div class="system">
        <form>
            <fieldset>
                <legend>System settings:</legend>
                <table cellspacing="5" cellpadding>
                    <tr>
                        <td>
                            <label for="view" style="padding-right: 130px;">Jobnet view span(minute):</label>
                        </td>
                        <td>
                            <input type="text" id="view" name="view" size="7">
                        </td>
                        <td>
                            <label for="time" style="padding-left: 470px;">Job Arranger standard time</label>
                        </td>
                        <td>
                            <select id="standard" style="background-color:#E5E7E9">
                                <option value="local">Local time</option>
                                <option value="server">Server time</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="load">Jobnet load span(minute):&nbsp;</label>
                        </td>
                        <td>
                            <input type="text" id="load" name="load" size="7">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="keep">Jobnet keep span(minute):</label>
                        </td>
                        <td>
                            <input type="text" id="keep" name="keep" size="7">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="log">Joblog keep span(minute):</label>
                        </td>
                        <td>
                            <input type="text" id="log" name="log" size="7">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>  
    </div>
    <div class="zabbix">
        <form>
            <fieldset>
                <legend>Zabbix Notification settings:</legend>
                <table cellspacing="5" cellpadding>
                    <tr>
                        <td>
                            <label style="padding-right: 170px;">Zabbix Notification:</label>
                        </td>
                        <td>
                            <select id="notification" style="background-color:#E5E7E9">
                                <option value="yes">yes</option>
                                <option value="no">no</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Zabbix server IP address</label>
                        </td>
                        <td>
                            <input type="text" id="ipaddress" name="ipaddress" size="12">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Zabbix Server Port Number:</label>
                        </td>
                        <td>
                            <input type="text" id="port" name="port" size="12">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Zabbix  sender command (full path):</label>
                        </td>
                        <td>
                            <input type="text" id="sender" name="sender" size="135">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Message destination server:</label>
                        </td>
                        <td>
                            <input type="text" id="destination" name="destination" size="135">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Message destination item key:</label>
                        </td>
                        <td>
                            <input type="text" id="key" name="key" size="135">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Retry:</label>
                        </td>
                        <td>
                            <select id="retry" style="background-color:#E5E7E9">
                                <option value="no-retry">no-retry</option>
                                <option value="retry">retry</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Retry count:</label>
                        </td>
                        <td>
                            <input type="text" id="interval" name="interval" size="7">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Retry interval(second):</label>
                        </td>
                        <td>
                            <input type="text" id="interval" name="interval" size="7">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>  
    </div> 
    <p class="remark">*1 The value that you changed becomes effective after the reboot of the Job Server.</p>
    <p class="remark">*2 Jobnet view span becomes effective after relogin Job Manager</p>
   
        <div class="btnGroup">
            <button class="btnGeneral">redisplay</button>&nbsp;
            <button id="myBtn" class="btnGeneral">Update</button>
            <div id="myModal" class="modal">

                <div class="modal-content">
                  <div class="modal-header">
                    <span class="close">&times;</span>
                    <p>Editing Registration Confirmation</p>
                  </div>
                  <div class="modal-body">
                    <p>I register data editing. Are you all right?</p>
                  </div>
                  <div class="modal-footer">
                    <div class="btnGroupPopup">
                      <button class="btnpopup">Yes</button>&nbsp;&nbsp;&nbsp;
                      <button class="btnpopup">No</button>
                    </div>
                  </div>
                </div>
              
              </div>
        </div>
    </div>
</div>
</body>
</html>
