<?php 
    if(!isset($_GET['id']) && $_GET['id'] < 1){
        header('Location: ../blog');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='article';
	include '../includes/import.php'; ?>

<style>
.blog-img {
  width:950px;
  height:500px;
}
</style>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	
	<?php include '../includes/header.php'; ?>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/header-bg/3.jpg">
		<div class="container">
			<h2>Blog</h2>
		</div>
	</section>
	<!-- Page top section end -->
    <div class="container my-5">

	<?php $blog = json_decode(
						file_get_contents('http://localhost/fitness/api/blog/'.$_GET['id']),
						TRUE
					);
					
					echo '
					<h2 class="mb-2">'.$blog['title'].'</h2>
					<hr>
					<div class="row d-flex justify-content-center">
					<img src="http://localhost/fitness/api/storage/'.$blog['image'].'" alt="" style="object-fit: cover; height:30%; width: 30%;" width="400" height="400">
					</div>
					<div class="blog-meta"><img src="../img/icons/edit.png" alt=""> By Admin</div>
					<div class="row my-4" >
					<p>'.$blog['description'].'</p>
					</div>
					
					';
					
					?> 
	

        <!-- <div class="row d-flex justify-content-center">
        <img src="https://api.time.com/wp-content/uploads/2020/03/gym-coronavirus.jpg" class="blog-img" alt="" width="400" height="300">
        </div>
        <div class="row my-5" >
        <h1 class="mb-2">The Blog Title</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas maiores nihil, alias asperiores 
        debitis dolore sint nesciunt consequatur, accusamus dolorem aliquam laboriosam. Harum qui numquam voluptas 
        accusantium. Quasi, perspiciatis quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolore
         dolorem molestiae? Exercitationem veniam sint tempora nesciunt blanditiis velit, officia mollitia laudantium, beatae
          recusandae deleniti magni neque nostrum possimus qui.</p>
        </div> -->
    </div>





	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
