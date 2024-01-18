<!DOCTYPE html>
<html>
<head>
    <style type="text/css" media="screen">
        * {
            font-size: 21pt;
        }
        #user {
            background-color: #E6E6FA;
            font-size: 32px;
        }
        #todo {
            border: 4px solid powderblue;
            font-size: 40px;
            padding: 30px;
            font-family:georgia,garamond,serif;
            font-style:italic;"
        }
        .unselectable { 
            -webkit-user-select: none; 
            -webkit-touch-callout: none; 
            -moz-user-select: none; 
            -ms-user-select: none; 
            user-select: none;    
            color: #cc0000;
        }
        input[type='submit'],[type='reset'] {
            padding:5px 30px;
            background: #cce6ff;
            border: none;
            border-radius: 30px;
        }
        input[type='text'],[type='password'] {
            padding: 10px;
            border: none;
            border-radius: 25px;
            outline: none;
        }
        fieldset {
            border: 0;
        }
        body {
          background: url("");
        }
        #login-container {
            margin-top: 30px;
            text-align: center;
        }
        #login-form {
            display: inline-block;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div>
        <center id="todo"> Todo Application </center>
    </div>

    <div id="login-container">
        <div id="login-form">
           Please <a href="login.php">login</a> to view your to-do 
        </div>
    </div>
</body>
</html>
