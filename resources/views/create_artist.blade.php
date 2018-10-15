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
				 <button onclick="location.href='{{ url('lps/0') }}'" class="button">LPs</button>
            </div>
			<hr/>
			<div class="content">
				<form action="php/create_artist.php" class="artist_text" method="post">
				  Name: <input type="text" name="fname"><br>
				  Description: <textarea style="resize:none" type="text" name="dname"></textarea>
				  <br>
				  <input type="submit" class="buttoncreate" value="Create new Artist">
				</form>
            </div>
        </div>
    </body>
</html>
