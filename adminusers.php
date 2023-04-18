<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;

}
.hai{
    width: 100%;
    background-image: linear-gradient(43deg, rgb(0, 0, 0) 0%, rgb(200, 204, 206) 40%, rgb(86, 95, 100) 75%, rgb(0, 161, 155) 100%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: rgb(0, 161, 155);
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

.content-table{
   border-collapse: collapse;
    
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 350px ;
    margin-top: 25px;
    width: 800px;
    height: 500px;
}
.content-table thead tr{
    background-color: rgb(0, 161, 155);
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid rgb(0, 161, 155);
}

.content-table thead .active-row{
    font-weight:  bold;
    color: rgb(0, 161, 155);
}


.header{
    margin-top: 70px;
    margin-left: 650px;
    color: white
}



.nn{
    width:100px;
    background: rgb(0, 161, 155);
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}

.but a{
    text-decoration: none;
    color: black;
}   
</style>
<?php

require_once('connection.php');
$query="select *from users";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>
<div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">DriveF1</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="adminvehicle.php">Vehicle Management</a></li>
                    <li><a href="adminusers.php">Users</a></li>
                    <li><a href="admindash.php">Feedbacks</a></li>
                    
                    <li><a href="adminbook.php">Booking Requests</a></li>
                  <li> <button class="nn"><a href="index.php">Log Out</a></button></li>
                </ul>
            </div>
            
          
        </div>
        <div>
            <h1 class="header">Registered Users</h1>
            <div>
                <div>
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>Name</th> 
                        <th>Email</th>
                        <th>License Number</th>
                        <th>Phone Number</th> 
                        <th>Gender</th> 
                        <th>Delete Users</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['FNAME']."  ".$res['LNAME'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['LIC_NUM'];?></php></td>
                    <td><?php echo $res['PHONE_NUMBER'];?></php></td>
                    <td><?php echo $res['GENDER'];?></php></td>
                    <td><button type="submit" class="but" name="approve"><a href="deleteuser.php?id=<?php echo $res['EMAIL']?>">Delete User</a></button></td>
                </tr>
               <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
</body>
</html>