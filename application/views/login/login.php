<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'> 
    <style>
        body{
            font-family: 'Open Sans', sans-serif;
            background:#3498db;
            margin: 0 auto 0 auto;  
            width:100%; 
            text-align:center;
            margin: 20px 0px 20px 0px;   
        }

        p{
            font-size:12px;
            text-decoration: none;
            color:#ffffff;
        }

        h1{
            font-size:1.5em;
            color:#525252;
        }

        .box{
            background:white;
            width:300px;
            border-radius:6px;
            margin: 150px auto 0 auto;
            padding:0px 0px 70px 0px;
            border: #2980b9 4px solid; 
        }

        .btn{
            background:#2ecc71;
            width:125px;
            padding-top:5px;
            padding-bottom:5px;
            color:white;
            border-radius:4px;
            border: #27ae60 1px solid;
            
            margin-top:20px;
            margin-bottom:20px;
            float:left;
            margin-left:85px;
            font-weight:800;
            font-size:0.8em;
        }

        .btn:hover{
            background:#2CC06B; 
        }

    </style>
</head>
<body>
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
        <div class="box">
            <h1>Welcome</h1>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <input type="submit" class="btn" value="Sign In">
        </div> <!-- End Box -->
    </form>
</body>
</html>