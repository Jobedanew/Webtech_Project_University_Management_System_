<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="faculty_style.css">
</head>
<body>

<div class="container">

    <div class="layout">

    <!-- header section -->
        <div class="header">
             <a href="https://www.aiub.edu/">
               <img src="aiub_logo.png" class="logo" alt="AIUB Logo">
             </a>

             <div class="log-welcome">
            
               <p style="color: #1479a8; font-weight: bold;">Welcome to Faculty Dashboard!</p>

            </div>

            <div class="log-out">
            
               <a href="logout.php" class="logout-link">Logout</a>

            </div>

   

        </div>



         <!-- Sidebar -->
        <div class="sidebar">
            <button id="profile">Profile</button>
            <button id="inbox">Inbox</button>
            <button id="calendar">Academic Calendar</button>

        </div>

        <!-- Routine -->
        <div class="routine">
            <h2>Weekly Routine</h2>

            <div class="routine-wrap">
                <table class="routine-table">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>08:00 - 10:00</th>
                            <th>10:00 - 11:00</th>
                            <th>11:00 - 13:00</th>
                            <th>13:00 - 16:00</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sunday</td>
                            <td>Webtechnology</td>
                            <td>Break</td>
                            <td>Introduction to Programming</td>
                            <td>Consulting Hour</td>    
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>Advance Webtechnology</td>
                            <td>Break</td>
                            <td>Object Oriented Programming</td>
                            <td>Consulting Hour</td>    
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>Advance Webtechnology</td>
                            <td>Break</td>
                            <td>Object Oriented Programming</td>
                            <td>Consulting Hour</td>    
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>Webtechnology</td>
                            <td>Break</td>
                            <td>Introduction to Programming</td>
                            <td>Consulting Hour</td>    
                        </tr>
                        <tr>
                            <td>Thursday</td> 
                            <td colspan="4">Holiday</td>   
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td colspan="4">Holiday</td>        
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td colspan="4">Holiday</td>    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   
    </div>
</div>

<!-- javascript -->

<script src="faculty_dashboard.js"></script>


</body>
</html>
