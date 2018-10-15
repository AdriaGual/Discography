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
				 <button onclick="location.href='{{ url('lps/0') }}'" class="button">LPs</button>
            </div>
			<hr/>
			<?php    
				if(isset($_POST['submit'])){ //check if form was submitted
					session_start();
					$name = $_POST['fname'];
					$description = $_POST['dname'];
					$servername = "localhost";
					$username = "root";
					$password = "";
					
					//$id_artist = $_SESSION['id_artist'];
					$dbname = "discography";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					$sql ='UPDATE artist SET name="'.$name.'", description="'.$description.'" WHERE id_artist = "'.$id_artist.'"';
					$result = mysqli_query($conn, $sql);
				}    
			?>

			<div class="content">
				<form action="" class="artist_text" method="post">
				{{ csrf_field() }}
				  Name: <input type="text" name="fname" value="
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
						$sql ='SELECT * FROM artist WHERE id_artist="'.$id_artist.'"';
						$_SESSION['id_artist'] = $id_artist;
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						echo $row['name'];
						$description = $row['description'];
				  ?>"><br>
				  Description: <textarea style="resize:none" type="text" name="dname" ><?php echo $description;?></textarea>
				  <br>
				  <input type="submit" value="Update Artist Parameters" name ="submit">
				</form>
            </div>
        </div>
    </body>
</html>
