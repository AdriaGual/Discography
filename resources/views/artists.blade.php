<!DOCTYPE html>
<html>
    <head>
        <title>Discography Project</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }
			
			form, table {
				 display:inline;
				 margin:0px;
				 padding:0px;
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
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div>
				<button onclick="location.href='{{ url('/') }}'" class="buttonhome">Home</button>
				<button onclick="location.href='{{ url('lps/0') }}'" class="buttonlps">LPs</button>
            </div>
			<hr/>
			<div class="content">
				<?php
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
					$sql ='SELECT * FROM artist';
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<span class='artist_text'> Name: <strong>" . $row["name"]."</strong>"; 
							echo "<br>Description: <textarea class= 'textarea' style='resize:none'> " . $row["description"]."</textarea><br>";
							$id_artist = $row["id_artist"];
							$sql2 ='SELECT * FROM artist_lp WHERE id_artist="'.$id_artist.'"';
							$result2 = mysqli_query($conn, $sql2);
							$count_lps = mysqli_num_rows($result2);
							
							echo "</span>";
							?>
							<button onClick='location.href="lps/<?php echo $id_artist; ?>"' class="button"><?php echo $count_lps; ?> LPs</button>
							<button onClick='location.href="delete_artist/<?php echo $id_artist; ?>"' class="buttondelete">Delete Artist</button>
							<?php
							echo "<br><hr>";
						}
					} else {
						echo "0 results";
					}

					mysqli_close($conn);
				?>
				<button onclick="location.href='{{ url('create_artist') }}'" class="buttoncreate">Create New Artist</button>
            </div>
        </div>
    </body>
</html>
