<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/ObjectList.css">
    <link rel="stylesheet" href="../public/css/commom.css">
    <script src="../public/js/common.js"></script>
    <link rel="stylesheet" href="../public/css/import-export.css">
    <link rel="stylesheet" href="../public/css/version-information.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/js/import-export-version.js"></script>
    <title>Object List Screen - mysql-odbc</title>
</head>
<body>
<div class="navigation">
  <ul>
    <li>
      <a href="#">File(F)</a>
      <ul class="filewidth">
        <li><a href="#" class="bottom">New(N)</a></li>
        <li><a href="#" class="open_modal">Import(I)</a></li>
        <li><a href="#" class="bottom open_modal_exp">Export All(E)</a></li>
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
          <li><input type="checkbox" checked="true" class="chkBox"><a href="#">List of operative situation jobnets(O)</a></li>
          <li><input type="checkbox" checked="true" class="chkBox"><a href="#">List of error jobnets(T)</a></li>
          <li><input type="checkbox" checked="true" class="chkBox"><a href="#">List of jobnets duration the practice(R)</a></li>
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
          <li><a href="#" class="open_modal_ver">Version(A)</a></li>
        </ul>
      </li>
  </ul>
</div>

<div class="blank"></div>
<div class="blank1">
  <a href="#" class="jamlink">Job Arranger 5.0.0</a>
  <p class="username">User name: Admin</p>
</div>
  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'objectMang')">Object management</button>
    <button class="tablinks" onclick="openTab(event, 'objectExec')">Object execution management</button>
    <button class="tablinks" onclick="openTab(event, 'execResult')">Object execution result</button>
    <button class="tablinks" onclick="openTab(event, 'general')">General settings</button>
  </div>

  <div id="objectMang" class="content tabcontent">
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
    <div id="second" class="rightBox">
       
        <table id="public_calendar_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
          <tr><td></td><td>2020/10/19 17:38:03</td><td>○</td><td>Admin</td><td>CALENDAR_13_Business_Day_201020</td><td>CALENDAR_13_Business_Day_201020</td></tr>
            <tr><td></td><td>2020/10/21 16:18:32</td><td>○</td><td>Admin</td><td>CALENDAR_16_Business_Day</td><td>CALENDAR_16_Business_Day</td></tr>
            <tr><td></td><td>2020/10/21 16:05:13</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_17_Private_To_Public</td><td>CALENDAR_17_Private_To_Public</td></tr>
            <tr><td></td><td>2020/10/22 17:00:11</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_1_Enable_Disable</td><td>CALENDAR_1_Enable_Disable</td></tr>
            <tr><td></td><td>2020/10/20 11:45:27</td><td>○</td><td>Admin</td><td>CALENDAR_27_Enable_Deletion</td><td>Calendar_Enable_Deletion</td></tr>
            <tr><td></td><td>2020/10/22 17:05:30</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_2_Enable_Disable_2</td><td>CALENDAR_2_Enable_Disable_2</td></tr>
            <tr><td></td><td>2020/10/22 17:14:02</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_3_Enable_Disable</td><td>CALENDAR_3_Enable_Disable</td></tr>
            <tr><td></td><td>2020/10/23 11:43:51</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_5_Sub_Jobnet</td><td>CALENDAR_5_Sub_Jobnet</td></tr>
            <tr><td></td><td>2020/10/20 09:35:05</td><td>○</td><td>dat_test_user_2</td><td>CALENDAR_Business_DAY_201019</td><td>Business DAY 201019</td></tr>
            <tr><td></td><td>2020/10/23 14:41:49</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_EN_DIS_5</td><td>CALENDAR_EN_DIS_5</td></tr>
            <tr><td></td><td>2020/10/23 15:06:40</td><td>○</td><td>dat_test_user_1</td><td>CALENDAR_MONITOR</td><td>CALENDAR_MONITOR</td></tr>
            
        </table>
        <table id="private_calendar_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
            <tr><td></td><td>2020/10/19 20:55:52</td><td>○</td><td>dat_test_user_2</td><td>Business_DAY_201019</td><td>Business DAY 201019</td><td></td></tr>
            <tr><td></td><td>2020/10/15 19:07:59</td><td>○</td><td>test1</td><td>CALENDAR_1</td><td>CALENDAR_1</td><td>CALENDAR_1</td></tr>
            <tr><td></td><td>2020/10/19 20:43:34</td><td>○</td><td>Admin</td><td>CALENDAR_15_Business_Day_201020</td><td>CALENDAR_15_Business_Day_201020</td><td></td></tr>
            <tr><td></td><td>2020/10/21 16:12:58</td><td>○</td><td>Admin</td><td>CALENDAR_18_Business_Day</td><td>CALENDAR_18_Business_Day</td><td>Enable to Disable</td></tr>
            <tr><td></td><td>2020/10/19 16:03:27</td><td>○</td><td>Admin</td><td>CALENDAR_3_Business_MonthStart</td><td>CALENDAR_3_Business_MonthStart_201019</td><td></td></tr>
            <tr><td></td><td>2020/10/19 16:03:37</td><td>○</td><td>Admin</td><td>CALENDAR_4_Business_MonthEnd</td><td>CALENDAR_4_Business_MonthEnd_201019</td><td></td></tr>
            <tr><td></td><td>2020/10/19 15:05:58</td><td>○</td><td>Admin</td><td>CALENDAR_BUSINESS_DAY</td><td>CALENDAR_BUSINESS_DAY</td><td></td></tr>
            <tr><td></td><td>2020/10/20 13:33:20</td><td>○</td><td>dat_test_user_2</td><td>CALENDAR_PrivateDelete_2</td><td>CALENDAR_PrivateDelete_2</td><td></td></tr>
            <tr><td></td><td>2020/10/19 14:51:16</td><td>○</td><td>dat_test_user_3</td><td>CALENDAR_TEST_1</td><td>Test_Calendar</td><td></td></tr>
            <tr><td></td><td>2020/10/19 13:42:17</td><td>○</td><td>dat_test_user_1</td><td>Test_Calendar_2</td><td>Test_Calendar_2</td><td></td></tr>
            <tr><td></td><td>2020/10/19 13:46:48</td><td>○</td><td>thiha</td><td>Thiha_Calendar</td><td>Thiha_Calendar</td><td>
        </table>
        <table id="public_filter_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
            <tr><td></td><td>2020/10/19 20:21:47<td>○<td>Admin<td>FILTER_13_Business_Day_201020<td>FILTER_13_Business_Day_201020<td></tr>
              <tr><td></td><td>2020/10/19 20:14:36<td>○<td>Admin<td>FILTER_14_Business_Day_201020<td>FILTER_14_Business_Day_201020<td></tr>
              <tr><td></td><td>2020/10/19 19:41:18<td>○<td>Admin<td>FILTER_18<td>test<td></tr>
              <tr><td></td><td>2020/10/26 10:54:56<td>○<td>dat_test_user_1<td>FILTER_1_Enable_Disable<td>FILTER_1_Enable_Disable<td></tr>
              <tr><td></td><td>2020/10/22 12:05:42<td>○<td>dat_test_user_1<td>FILTER_20_Enable_Filter_Deletion<td>FILTER_20_Enabled_Filter_Deletion<td></tr>
              <tr><td></td><td>2020/10/20 11:47:20<td>○<td>Admin<td>FILTER_29_Enable_Deletion<td>Filter_Enable_Deletion<td></tr>
              <tr><td></td><td>2020/10/21 11:37:15<td>○<td>dat_test_user_2<td>FILTER_End_OF_Month<td>FILTER_End_OF_Month<td></tr>
              <tr><td></td><td>2020/10/20 13:29:10<td>○<td>dat_test_user_2<td>FILTER_Specific_OF_Month_Prev<td>FILTER_Specific_OF_Month_Prev<td></tr>
        
        </table>
        <table id="private_filter_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
          <tr><td></td><td>2020/10/20 11:14:48<td><td>Admin<td>FILTER_25_Enable_Filter_Deletion<td>Enable_Filter_Deletion<td></tr>
            <tr><td></td><td>2020/10/19 18:12:04<td><td>dat_test_user_2<td>FILTER_Beginning_OF_Month_Prev<td>FILTER_Beginning_OF_Month_Prev<td></tr>
            <tr><td></td><td>2020/10/19 17:49:23<td><td>dat_test_user_2<td>FILTER_Beginning_Of_Month<td>Beginning_Of_Month_Private<td></tr>
            <tr><td></td><td>2020/10/19 18:36:36<td><td>dat_test_user_2<td>FILTER_End_OF_Month_Prev<td>FILTER_End_OF_Month_Prev<td></tr>
            <tr><td></td><td>2020/10/19 18:42:13<td><td>dat_test_user_2<td>FILTER_Specific_OF_Month<td>FILTER_Specific_OF_Month<td></tr>
            
        </table>
        <table id="public_schedule_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
          <tr><td></td><td>2020/10/22 17:04:52<td>○<td>dat_test_user_1<td>SCHEDULE_1_Enable_Disable_1<td>SCHEDULE_1_Enable_Disable_1<td></tr>
            <tr><td></td><td>2020/10/23 10:53:03<td>○<td>dat_test_user_1<td>SCHEDULE_2_Enable_Disable_2<td>SCHEDULE_2_Enable_Disable_2<td></tr>
            <tr><td></td><td>2020/10/22 17:16:35<td>○<td>dat_test_user_1<td>SCHEDULE_3_Enable_Disable_3<td>SCHEDULE_3_Enable_Disable_3<td></tr>
            <tr><td></td><td>2020/10/23 11:46:12<td>○<td>dat_test_user_1<td>SCHEDULE_5_Sub_Jobnet<td>SCHEDULE_5_Sub_Jobnet<td></tr>
            <tr><td></td><td>2020/10/23 18:31:05<td>○<td>dat_test_user_1<td>SCHEDULE_MONITOR<td>SCHEDULE_MONITOR<td></tr>
            <tr><td></td><td>2020/10/21 18:46:11<td>○<td>dat_test_user_1<td>SCH_3_Public_Create_24_2<td>SCH_3_Public_Create_24_2<td></tr>
            <tr><td></td><td>2020/10/21 15:54:31<td>○<td>dat_test_user_1<td>SCH_4_Public_Create_27<td>SCH_4_Public_Create_27<td></tr>
            <tr><td></td><td>2020/10/24 00:18:52<td>○<td>dat_test_user_1<td>SCH_4_Public_Create_27_2<td>SCH_4_Public_Create_27_2<td></tr>
            <tr><td></td><td>2020/10/21 15:55:33<td>○<td>dat_test_user_1<td>SCH_5_Circle_10_min<td>SCH_5_Circle_10_min<td></tr>
            <tr><td></td><td>2020/10/24 00:20:23<td>○<td>dat_test_user_1<td>SCH_5_Circle_10_min_2<td>SCH_5_Circle_10_min_2<td></tr>
            <tr><td></td><td>2020/10/21 15:56:09<td>○<td>dat_test_user_1<td>SCH_6_End_Of_Month<td>SCH_6_End_Of_Month<td></tr>
            <tr><td></td><td>2020/10/23 14:42:31<td>○<td>dat_test_user_1<td>SCH_EN_DIS_5<td>SCH_EN_DIS_5<td></tr>
               
        </table>
        <table id="private_schedule_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
          <tr><td></td><td>2020/10/24 00:01:54<td><td>dat_test_user_1<td>SCHEDULE_31<td>SCH_1_Private_Create_24_2<td></tr>
            <tr><td></td><td>2020/10/24 00:03:19<td><td>dat_test_user_1<td>SCH_1_Private_Create_24_2<td>SCH_1_Private_Create_24_2<td></tr>
            <tr><td></td><td>2020/10/21 15:53:12<td><td>dat_test_user_1<td>SCH_2_Private_Create_27<td>SCH_2_Private_Create_27<td></tr>
            
        </table>
      
        <table id="public_jobnet_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
          <tr><td></td><td>2020/10/02 16:50:55<td>○<td>JaEditor01<td>JN_01_00_SimpleJob_LinWin_dir<td>JN_01_00_SimpleJob_LinWin_dirX(CentOS7)<td></tr>
            <tr><td></td><td>2020/10/19 17:12:27<td>○<td>JaEditor01<td>JN_13_00_JobnetIcon<td>JN_13_00_JobnetIconX<td></tr>
            <tr><td></td><td>2020/10/19 17:18:28<td>○<td>Admin<td>JN_13_00_JobnetIcon-ko<td>JN_13_00_JobnetIcon-ko<td></tr>
            <tr><td></td><td>2020/10/23 14:33:53<td>○<td>dat_test_user_1<td>JN_ED_DS_PARENT_5<td>JN_ED_DS_PARENT_5<td></tr>
            <tr><td></td><td>2020/10/23 14:32:18<td>○<td>dat_test_user_1<td>JN_EN_DS_5<td>JN_EN_DS_5<td></tr>
            <tr><td></td><td>2020/10/22 17:02:25<td>○<td>dat_test_user_1<td>JOBNET_1_Enable_Disable<td>JOBNET_1_Enable_Disable<td></tr>
            <tr><td></td><td>2020/10/21 15:30:50<td>○<td>dat_test_user_1<td>JOBNET_1_Private_Create_24<td>JOBNET_1_Private_Create_24<td></tr>
            <tr><td></td><td>2020/10/24 00:01:21<td>○<td>dat_test_user_1<td>JOBNET_1_Private_Create_24_2<td>JOBNET_1_Private_Create_24_2<td></tr>
            <tr><td></td><td>2020/10/21 15:31:54<td>○<td>dat_test_user_1<td>JOBNET_2_Private_Create_27<td>JOBNET_2_Private_Create_27<td></tr>
            <tr><td></td><td>2020/10/22 17:13:25<td>○<td>dat_test_user_1<td>JOBNET_3_Enable_Disable_3<td>JOBNET_3_Enable_Disable_3<td></tr>
            <tr><td></td><td>2020/10/21 15:37:36<td>○<td>dat_test_user_1<td>JOBNET_3_Public_Create_24<td>JOBNET_3_Public_Create_24<td></tr>
            <tr><td></td><td>2020/10/21 15:39:54<td>○<td>dat_test_user_1<td>JOBNET_4_Public_Create_27<td>JOBNET_4_Public_Create_27<td></tr>
            <tr><td></td><td>2020/10/21 15:40:44<td>○<td>dat_test_user_1<td>JOBNET_5_Circle_10_min<td>JOBNET_5_Circle_10_min<td></tr>
            <tr><td></td><td>2020/10/24 00:19:44<td>○<td>dat_test_user_1<td>JOBNET_5_Circle_10_min_2<td>JOBNET_5_Circle_10_min_2<td></tr>
            <tr><td></td><td>2020/10/23 11:44:52<td>○<td>dat_test_user_1<td>JOBNET_5_Sub_Jobnet<td>JOBNET_5_Sub_Jobnet<td></tr>
            <tr><td></td><td>2020/10/21 15:50:37<td>○<td>dat_test_user_1<td>JOBNET_6_End_Of_Month<td>JOBNET_6_End_Of_Month<td></tr>
            <tr><td></td><td>2020/10/23 15:09:16<td>○<td>dat_test_user_1<td>JOBNET_MONITOR_NORM<td>JOBNET_MONITOR_NORM<td></tr>
            <tr><td></td><td>2020/10/23 15:07:58<td>○<td>dat_test_user_1<td>JOBNET_MONITOR_SCHEDULE<td>JOBNET_MONITOR_SCHEDULE<td></tr>
            <tr><td></td><td>2020/10/22 17:12:58<td>○<td>dat_test_user_1<td>SUBJOBNET_Enable_Disable<td>SUBJOBNET_Enable_Disable<td></tr>
            
        </table>
        <table id="private_jobnet_table" class="data_table" style="display: none;">
          <tr>
            <th>Valid</th>
            <th>Updated date</th>
            <th>Public</th>
            <th>User name</th>
            <th>Object id</th>
            <th>Object name</th>
            <th>Description</th>
          </tr>
          <tr><td></td><td>2020/10/14 21:06:20<td><td>Admin<td>AgentLessTest<td>AgentLessTest<td></tr>
            <tr><td></td><td>2020/10/07 19:27:26<td><td>thiha<td>CentOS_Host<td>CentOSTest<td></tr>
            <tr><td></td><td>2020/10/20 14:42:52<td><td>dat_test_user_2<td>JN_01_00_SimpleJob_LinWin<td>JN_01_00_SimpleJob_LinWin<td>Test Case -1<td></tr>
            <tr><td></td><td>2020/10/13 15:01:47<td><td>dat_test_user_1<td>JN_02_00_SimpleJob_EndHoryuu<td>JN_02_00_SimpleJob_EndHoryuu<td>Test_case_2<td></tr>
            <tr><td></td><td>2020/10/16 14:56:50<td><td>dat_test_user_2<td>JN_03_00_HeikoJobLinWin<td>JN_03_00_HeikoJobLinWin<td>Test Case 3<td></tr>
            <tr><td></td><td>2020/10/13 15:06:55<td><td>test1<td>JN_04_00_JokenHensuKakucho<td>JN_04_00_JokenHensuKakucho<td>Test Case 4<td></tr>
            <tr><td></td><td>2020/10/13 16:09:19<td><td>dat_test_user_1<td>JN_05_00_Joken_Hensu_Kakucho<td>JN_05_00_Joken_Hensu_Kakucho<td></tr>
            <tr><td></td><td>2020/10/13 17:50:00<td><td>test1<td>JN_06_00_JokenHenKakuJohoStop<td>JN_06_00_JokenHenKakuJohoStop<td>Test Case 6<td></tr>
            <tr><td></td><td>2020/10/14 10:34:49<td><td>test1<td>JN_07_00_LoopKeisanCntUp<td>JN_07_00_LoopKeisanCntUp<td>Test Case 7<td></tr>
            <tr><td></td><td>2020/10/14 13:56:45<td><td>test1<td>JN_08_00_KeisanTimeChienAlert<td>JN_08_00_KeisanTimeChienAlert<td>Test case 8<td></tr>
            
        </table>
    </div>
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
<div class="modal">
  <div class="modal-content">
      <div class="modal-header">
          <p>Import Screen</p>
          <span class="modal-close">&times;</span>
      </div>
      <div class="modal-body">
          <p>Please enter the export file to import</p><br>
          <div>
              <input type="text" id="file-chosen">
              <input type="file" id="actual-btn" class="modal-file" hidden/>
              <label for="actual-btn" class="modal-file-selcet ref-label">Reference</label>
          </div><br>
          <div>
              <input type="checkbox" name="group" id="group1" value="1" title="overwrite" />
              <label for="group1">Overwrite is permitted:</label>
          </div>
      </div>
      <div class="modal-footer">
          <div>
              <button class="modal-ok">OK</button>
              <button class="modal-close">Cancel</button>
          </div>
      </div>
  </div>
</div>
<div class="modal-exp">
  <div class="modal-content">
      <div class="modal-header">
          <p>Export Screen</p>
          <span class="modal-close">&times;</span>
      </div>
      <div class="modal-body">
          <p>Please input the output place of an export file.</p><br>
          <div>
              <input type="text" id="file-chosen-exp">
              <input type="file" id="actual-btn-exp" class="modal-file" hidden/>
              <label for="actual-btn-exp" class="modal-file-selcet ref-label">Reference</label>
          </div>
      </div>
      <div class="modal-footer">
          <div>
              <button class="modal-ok">OK</button>
              <button class="modal-close">Cancel</button>
          </div>
      </div>
  </div>
</div>
<div class="error-box">
  <div class="error-content">
      <div class="error-header">
          <p>Error</p>
          <span class="error-ok">&times;</span>
      </div>
      <div class="error-body">
          <p>Please Input the file name.</p>
      </div>
      <div class="error-footer">
          <div>
              <button class="error-ok">OK</button>
          </div>
      </div>
  </div>
</div>
<div class="modal-ver">
  <div class="modal-content">
      <div class="modal-header">
          <p>Version Information</p>
          <span class="modal-close">&times;</span>
      </div>
      <div class="modal-body">
          <p>Job Arranger for Zabbix</p><br>
          <p>Job Manager Version 5.0.0 (Rev:7532)</p>
      </div>
      <div class="paragraph-body">
          <p>Copyright(C) 2012-2013 FitechForce, Inc. All Rights Reserved.</p>
          <p>Copyrght(C) 2013-2020 Daiwa Institute of Research Business Innovation Ltd. All Rights Reserved.</p><br>
      </div>
      <div class="modal-footer">
          <div>
              <button class="modal-close">OK</button>
          </div>
      </div>
  </div>
</div>
</body>
</html>
