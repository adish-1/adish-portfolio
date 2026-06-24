<?php
 include("db.php");
    if(isset($_POST['name']) &&isset($_POST['email']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "INSERT INTO users(name,mail) values(?,?);";
             $stmt = mysqli_prepare($conn,$sql);
             mysqli_stmt_bind_param($stmt,'ss',$name,$email);
             mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt) > 0)
            {
                echo "
<!DOCTYPE html>
 <html lang='en'>
 <head>
     <meta charset='UTF-8'>
     <style>
         body {
             display: flex;
             justify-content: center;
             align-items: center;
             height: 100vh;
             background-color: #f8f9fa;
         }
        .sucseesbox {
            background-color: #baf1a0;
            color: #063110;
            padding: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 10px;
            width:70%;
            animation: pop 0.5s ease;
            
        }
            @keyframes pop{
    from{
        opacity:0;
        transform:scale(0.8);
    }
    to{
        opacity:1;
        transform:scale(1);
    }
} 
            .sucseesbox h2 {
                margin-top: 0;
                text-align: center;
                font-family: 'Poppins', system-ui;
                font-size: 24px;
                font-weight: bold;
                
            }
                .sucseesbox p {
                    text-align: center;
                    font-family: 'Poppins', system-ui;
                    font-size: 16px;
                }
             a {
                display: block;
                margin-top: 20px;
                text-align: center;
                background-color: #007ff7;
                font-family: 'Poppins', system-ui;
                font-size: 16px;
                color: #fff;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                font-weight: 500;
                transition: all 0.3s ease;
            }
             a:hover {
                background-color: #0056b3;
             }

      </style>
      </head>
      <body>
           <div class='sucseesbox'>
            <h2>Thank You, ".$name."!</h2>
<p>Your details have been received successfully. I appreciate your interest and will contact you soon.</p>
            <a href='../index.html'>Go Back to Home</a>
            </div>
          </body>
          </html>";
            }
            else
            {
                echo "<script>alert('Data Not Inserted');</script>";
            }
        }
 ?>

