<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="layout">

    <!-- header section -->
        <div class="header">
             <a href="https://www.aiub.edu/">
               <img src="aiub_logo.png" class="logo" alt="AIUB Logo">
             </a>

        </div>

         <!-- Sidebar -->
        <div class="sidebar">
            <button id="profile">Profile</button>
            <button>Inbox</button>
            <!-- <a href=https://www.aiub.edu/academic-calendar> -->
            <button>Academic Calendar</button>
            <!-- </a> -->
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


<script src="dashboard.js"></script>


</body>
</html>
