<?php require APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  

  <main role="main">
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Welcome to DNA101 </p>
        <p class="lead"> DNA101 Website for Bioinformatics  </p>
      </div>
    </section>

   
 
    <section class="contact">
      <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <div class="">
          <div class="col-md-6 offset-md-3">
            <form>
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="text-center mt-4">
    <p>&copy; 2023 DNA101. All rights reserved.</p>
  </footer>

</body>


