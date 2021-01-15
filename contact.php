<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151170839-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-151170839-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Edwin Leung - web designer and developer based in Toronto. Specialized in creating modern, unique and easy-to-navigate websites with online presence. Experienced in HTML5, CSS3, Javascript and Photoshop">
    <meta name="Keywords" content="website design, website development, Toronto web design, Toronto web development, Edwin Leung, Ed Leung, easy to navigate, modern, unique, online presence, website solution, HTML, HTML5, CSS, CSS3, JavaScript, JQuery, Bootstrap, Photoshop, Illustrator, PHP, Dreamweaver, SASS, Seneca graduate">
    <meta name="Author" content="Edwin Leung">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact - EWLdesign</title>
  </head>
  <body class="page">
      <header class="page-header">
          <nav class="navbar fixed-top navbar-expand-sm navbar-light font-weight-bold bg-custom py-1 pl-4">
            <a href="index.html" class="text-reset text-decoration-none"><h1 class="logo">EWLdesign</h1></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav1">
                       <ul class="navbar-nav m-auto">
                           <li class="nav-item">
                               <a class="nav-link" href="concept.html">CONCEPT</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="portfolio.html">PORTFOLIO</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="about.html">ABOUT</a>
                           </li>
                           <li class="nav-item  active">
                                <a class="nav-link" href="contact.php">CONTACT <span class="sr-only">(current)</span></a>
                           </li>
                       </ul>
                   </div>
             </nav>
      </header>

      <div class="page-content container smallbox">
              
                   <div class="">
                        <h2 class="h4 my-4">Contact Us</h2>
                        <p>Please feel free to call or send a message.</p>
                        <p id="callme"></p>
                        <p id="sendmail"></p>
                         
                        <form id="reach" class="pt-4" action="form.php" method="POST">
                          <h2 class="h5 mb-3">General Inquiry (* required)</h2>
                          <input type="text"  name="name" placeholder="* Your name" class="form-control mb-2">
                          <input type="text" name="email" placeholder="* Your email address" class="form-control mb-2">
                          <input type="text" name="phone" placeholder="Your phone number" class="form-control mb-2">
                          <input type="text" name="fax" placeholder="Your fax number" class="form-control mb-2 d-none">
                          <textarea name="inquiry" placeholder="* How can I help you?" class="form-control mb-3"></textarea>
                          <button type="submit" class="btn-info">Send</button>
                      </form>

                        <?php if (isset($_GET['message']) && $_GET['message'] == 'success') { ?>
                           <div class="alert alert-success">
                              Your message was sent successfully!
                          </div>
                    <?php } ?>
          <?php if (isset($_GET['message']) && $_GET['message'] == 'error') { ?>
              <div class="container pt-2">
                  <div class="row">
                      <div class="col-lg-6 offset-3">
                          <div class="alert alert-danger">
                              Sorry your message could not be sent.
                          </div>
                      </div>
                  </div>
              </div>
          <?php } ?>
          <?php if (isset($_GET['form']) && $_GET['form'] == 'error') { ?>
                  <div class="alert alert-danger">
                        Please fill in required information
                  </div>
           <?php } ?>
           </div>   

           
          </div>


      <footer class="page-footer container-fluid text-center mt-5 py-2 bg-custom">
            <p><small>&copy;Copyright <span id="year"></span> | EWLdesign</small></p>
        </footer>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/contact.js"></script>

      </body>
    </html>