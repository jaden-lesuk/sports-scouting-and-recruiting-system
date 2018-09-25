<!doctype html>

<html lang="en">
<head>
    <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/colorix-sports/128/soccer-512.png  ">
	<meta charset="utf-8">
    <title>E-recruiter</title>
    <link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.alternate.css?v=1.0">
	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/scripts.js"></script>
	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
</head>

<body>     
    <div class="col-md-7">
    <p id="brand-logo">Scout Log InS</p>
    </div>
    <div class="col-md-4">
        <div class="well recipes">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary hvr-buzz btn-block btn-mod">LOG IN</button>
                <div class="form-group">
                    <br>
                    <a href="mod.php"><label>Log in as moderator.</label></a>
                </div>
            </form> 
        </div>
    </div>
    <div class="col-md-1"></div>
    
</body>
</html>