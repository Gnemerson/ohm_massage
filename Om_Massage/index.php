<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="_assets/_styles/main.css" rel="stylesheet">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Om Massage</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">OWNERS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Om Massage</h1> 
  <p>"The best place around to get a massage!"</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About us</h2><br>
      <h4>We have been serving these United States for the last 30 years, building rapore with our customers and leaving them feeling completely refreshed, so that they will keep coming back again and again.</h4><br>
      <p>We specialize in all sorts of massages, but please keep in mind that each massage may have varying results, so please keep that in mind when selecting your massage.</p>
      <br><button href="#contact" class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> To protect the world from devastation via muscle pain. To defend our nation from the painful cramp menace.</h4><br>
      <p><strong>VISION:</strong> We have a vision, that one day in the future, everyone(no matter the age) will have access to a massage by a licensed professional. That day, is today.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-music logo-small"></span>
      <h4>MUSIC</h4>
      <p>We provide complimentary music to calm you while you recieve your massage.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>We promise a judgement-free enviroment.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB WELL DONE</h4>
      <p>We guarantee that you will leave feeling less stressed, as well as help you feel more relaxed.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>All of our massage oils and candles are made of organic materials.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Each of our Massueses are certified in the specific field that they specialize in.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-map-marker logo-small"></span>
      <h4 style="color:#303030;">CONVENIENT LOCATIONS</h4>
      <p>We have locations just around the corner; no matter where you are!</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>The owners</h2><br>
  <h4>What we look like</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src="_assets/_images/scott_headshot.jpg" alt="Scott" width="50" height="40">
        <p><strong>Scott</strong></p>
        <p>He did the back-end.</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src="_assets/_images/jonahs_headshot.jpg" alt="New York" width="400" height="300">
        <p><strong>Jonah</strong></p>
        <p>He did the front-end.</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"These guys made my back feel so much better!!"<br><span>Ian Rice, Professional Script Kiddie</span></h4>
      </div>
      <div class="item">
        <h4>"I used to be in constant pain, but now I can get back to my powerlifting!"<br><span>Brian Gavra, Professional Lifter</span></h4>
      </div>
      <div class="item">
        <h4>"Simply the best Massage company around!!"<br><span>Dr. Dante Ciolfi, Department Head, Fort Myers Technical College</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a massage that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Foot</h1>
        </div>
        <div class="panel-body">
          <p><strong>20 Minutes</strong> spent on each foot</p>
        </div>
        <div class="panel-footer">
          <h3>$20</h3>
          <h4>Before your massage</h4>
          <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" id="myBtn1">Set an appointment</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Full Body</h1>
        </div>
        <div class="panel-body">
          <p><strong>2 Hours</strong> For your entire body</p>
        </div>
        <div class="panel-footer">
          <h3>$100</h3>
          <h4>Before your massage</h4>
          <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" id="myBtn1">Set an appointment</button>

        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Multi-Massage Membership</h1>
        </div>
        <div class="panel-body">
          <p><strong>1 Foot Massage</strong> Daily</p>
          <p><strong>10 Full Body Massages</strong> Per Month</p>
        </div>
        <div class="panel-footer">
          <h3>$400</h3>
          <h4>per month</h4>
          <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" id="myBtn1">Set an appointment</button>

        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    </footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
    <form method="post" action="om_massage_form.php" class="well span7">
        <legend class="text-center" style="color: #fff"><img src="http://i.imgur.com/0KyKwkh.png"> Make an Appointment</legend>
        <div class="row">
            <div class="span2">
                <label class="">Name</label>
                <input name="fullname" type="text" class="span2" placeholder="">
                <label class="">Email</label>
                <input name="email" type="text" class="span2" placeholder="">
            </div>
            <div class="span5">
                <label class="">Date</label>
                <input type="text" name="date" value="">
                <label class="">Time</label>
                <input type="text" name="time" value="">
                       
                    </div>
                    <!-- /btn-group -->
            <button name="submit" type="submit" class="btn btn-info" style="margin-left: 32%;" contenteditable="false">Submit</button>
        </div>
    </form>
</div>
    
    
</body>
</html>
