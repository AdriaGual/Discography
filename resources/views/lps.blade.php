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
			
			.textarea {
				 width: 400px;
				height: 100px;
			}
			
			.buttonhome {
				margin-top: 10px;
				background-color: #C0C7F5; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			
			.buttonartists {
				margin-top: 10px;
				background-color: #00B9BD; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			
			.buttondelete {
				margin-top: 10px;
				background-color: #F24943; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			
			.buttonlps {
				margin-top: 10px;
				background-color: #009481; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			
			.button {
				margin-top: 10px;
				background-color: #00E1FB; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			
			.buttoncreate {
				margin-top: 10px;
				background-color: #4CAF50; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			
			
        </style>
    </head>
    <body>
        <div class="container">
            <div>
                <button onclick="location.href='{{ url('/') }}'" class="buttonhome">Home</button>
				<button onclick="location.href='{{ url('artists') }}'" class="buttonartists">Artists</button>
            </div>
			<hr/>
			<div class="content">

                <div class="title">
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
						$sql ='SELECT * FROM artist_lp WHERE id_artist="'.$id_artist.'"';
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$id_lp = $row["id_lp"];
								$sql2 ='SELECT * FROM lps WHERE id_lp="'.$id_lp.'"';
								$result2 = mysqli_query($conn, $sql2);
								$row2 = mysqli_fetch_assoc($result2);
								echo "<span class='artist_text'> Name: <strong>" . $row2["name"]."</strong>"; 
								echo "<br>Description: <textarea class= 'textarea' style='resize:none'> " . $row2["description"]."</textarea></span>";
								echo "<br>";?>
								<button onClick='location.href="delete_lp/<?php echo $id_lp; ?>"' class="buttondelete">Delete LP</button>
							<?php
							echo "<br><hr>";}
						}
						else if ($id_artist == 0){
							$sql2 ='SELECT * FROM lps';
							$result2 = mysqli_query($conn, $sql2);
							while($row2 = mysqli_fetch_assoc($result2)) {
								$id_lp = $row2['id_lp'];
								echo "<span class='artist_text'> Name: <strong>" . $row2["name"]."</strong>"; 
								echo "<br>Description: <textarea class= 'textarea' style='resize:none'> " . $row2["description"]."</textarea><br>";
								echo "</span>";?>
								<button onClick='location.href="delete_lp/<?php echo $id_lp; ?>"' class="buttondelete">Delete LP</button>
							<?php
							echo "<hr>";
							}
						}
						else {
							echo "<span class='artist_text'>0 results</span>";
						}

						mysqli_close($conn);
					?>
				</div>
				
				<button onclick="location.href='{{ url('create_lp') }}'" class="buttoncreate">Create New LP</button>
            </div>
        </div>
    </body>
</html>
