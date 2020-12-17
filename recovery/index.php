<html>
<head>
<title>Recovery</title>
<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/font-awesome.min.css"/>
<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
<link rel="stylesheet" href="../css/flaticon.css"/>
<link rel="stylesheet" href="../css/slicknav.min.css"/>

<!-- Main Stylesheets -->
<link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/product.css"/>
</head>
<body class="bg-info">
		
<form class="p-5" method="POST" action="../controller/recovery.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="confirm email">confrim email</label>
    <input type="email" class="form-control" id="confrim_email" name="confrim_email" placeholder="confirm email">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
</body>
</html>