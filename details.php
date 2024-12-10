<?php 
  
   include_once('config.php');
   $id = $_GET['id'];
   $_SESSION['movie_id'] = $id;
   $sql = "SELECT * FROM movies WHERE id=:id";
   $selectMovie = $conn->prepare($sql);
   $selectMovie->bindParam(":id",$id);
   $selectMovie->execute();
   $movie_data = $selectMovie->fetch();
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" href="dashboard.css">
  	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="theme-color" content="#7952b3">
  <script>window.aichatbotApiKey="0f743cfa-5977-47ad-86a7-66d71fe9d409"; window.aichatbotProviderId="f9e9c5e4-6d1a-4b8c-8d3f-3f9e9c5e46d1";</script><script src="https://script.chatlab.com/aichatbot.js" id="0f743cfa-5977-47ad-86a7-66d71fe9d409" defer></script>
 </head>
 <body>

 	<header>
    <div class="collapse bg-dark" id="navbarHeader">
     <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <a href="dashboard.php">  
      <span class="navbar-toggler-icon"></span>
      </a>
      </button>

    </div>
  </div>
</header>
 
 	<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Buy your product</h1>
        <p class="lead text-muted">You can buy your product by clicking the button below</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center" style="width: 100%;height: 100%;"><img src="images/<?php echo $movie_data['movie_image'];  ?>" class="img-responsive" style="width: 70%; height: 90%;"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5"><?php echo $movie_data['product_name']; ?></h4>
                    <p><?php echo $movie_data['product_desc']; ?></p>
                    <form action="book.php" method="post">
                    <div class="form-floating">
                      <input type="number" class="form-control" id="floatingInput" placeholder="Number of products" name="nr_items" >
                      <label for="floatingInput">Number of products</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInput" placeholder="Size" name="size" >
                      <label for="floatingInput">Size</label>
                    </div>
                    <div class="form-floating">
                      <select name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                      </select>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Book</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    
 </body>
 </html>