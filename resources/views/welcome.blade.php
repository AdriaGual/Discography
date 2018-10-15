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

            .title {
                font-size: 96px;
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
        </style>
    </head>
    <body>
        <div class="container">
            <div>
			
                <button onclick="location.href='{{ url('artists') }}'" class="buttonartists">Artists</button>
				 <button onclick="location.href='{{ url('lps/0') }}'" class="buttonlps">LPs</button>
            </div>
			<hr/>
			<div class="content">
                <div class="title">Discography Project</div>
            </div>
        </div>
    </body>
</html>
