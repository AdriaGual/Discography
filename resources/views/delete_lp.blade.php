<!DOCTYPE html>
<html>
    <head>
        <title>Discography Project</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
				background-image: url("paper.gif");
                
            }

            .content {
                text-align: center;
                display: inline-block;
            }
			
			.artist_text {
                color: #111; 
				font-family: 'Open Sans', sans-serif; 
				font-size: 20px; 
				font-weight: 300; 
				line-height: 32px; 
				margin: 0 0 72px; 
				text-align: center; 
            }

            .title {
                font-size: 96px;
            }
			.button {
				margin-top: 10px;
				background-color: #4CAF50; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div>
                <button onclick="location.href='{{ url('/') }}'" class="button">Home</button>
				 <button onclick="location.href='{{ url('artists') }}'" class="button">Artists</button>
            </div>
			<hr/>
			<div class="content">

                <div class="artist_text">
					<?php 
						session_start();
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "discography";
						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);

						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql ='DELETE FROM lps WHERE id_lp = "'.$id_lp.'"';
						$result = mysqli_query($conn, $sql);
						mysqli_close($conn);
						echo "Successfull delete!"
					?>
					
				</div>
            </div>
        </div>
    </body>
</html>
