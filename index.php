<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		//$datepicker = $_POST['datepicker'];
		//$human = intval($_POST['human']);
		$from = 'Contact Form Submission'; 
		$to = 'joe@slightlyleftfield.com'; 
		$subject = 'Message';
		$body ="From: $name\n E-Mail: $email\n Message: $message\n ";
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success center-block">Thank you for your message. I\'ll be in touch.</div>';
			} else {
				$result='<div class="alert alert-danger center-block">Sorry there was an error sending your message. Please try again later.</div>';
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <title>Joe Honywill</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Karma:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:150,300" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="img/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="img/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="img/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="img/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="img/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="img/mstile-310x310.png" /> 
</head>
<body>
  <div class="container top-stripe">
    <div class="title center-block"><a href="#contact">&ldquo;Let&#39;s Talk&rdquo;</a>
      <p class="subtitle">A Portfolio of Joe Honywill</p>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>Hello, I’m Joe.</p>
        <p>I’m a designer who’s been working with web technologies for over 20 years. In that time my job titles have described me as a Demonstrator, Technologist, Manager and Associate Director but it is design that has always been at the heart of what I do. I’ve got a degree in Media Lab Arts (now called Digital Art Technologies) and I am based in Plymouth in the South West of England.</p>
      </div>
    </div><!-- /.row -->
    <div class="row">
      <img src="img/johnfaulkner_single.jpg" class="showcase visible-xs center-block" alt="Image from John Faulkner project">
      <p class="caption text-center visible-xs">John Faulkner, artist and humourist</p> 
      <img src="img/johnfaulkner_collection.jpg" class="showcase hidden-xs center-block" alt="Images from John Faulkner project">
      <p class="caption text-center hidden-xs">John Faulkner, artist and humourist</p>
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>Designers are often expected to have a portfolio, a way of showing examples of work from previous projects. For web designers, these portfolios often take the form of a gallery of screenshots accompanied by a list of technologies used. There is, however, some debate about how effective these kinds of examples are at demonstrating a designer’s skill and experience.</p>
      </div>
    </div><!-- /.row -->
    <div class="row visible-xs">
      <img src="img/pl4cafe_single.jpg" class="showcase visible-xs center-block" alt="Image from PL4 Cafe project">
      <p class="caption text-center visible-xs">PL4 Cafe</p>
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>The problem with these types of portfolios is that they only ever reveal part of the bigger picture – pun intended - and what they don’t show is too important to ignore.</p>
      </div>
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>Design is a process. A process impossible to rationalise with static pictures alone.</p>
        <p>They can’t show context; how something meets customer or client needs; how it contributes to business goals; or any relationship to broader strategies. In short, whilst they can hint at skill levels they can only show a fraction of a designer’s value and experience.</p>
      </div>
    </div><!-- /.row -->
    <div class="row"> 
      <img src="img/shl_single.jpg" class="showcase visible-xs center-block" alt="Image from a Senate House Library project">
      <p class="caption text-center visible-xs">Senate House Library</p>
      <img src="img/various_collection.jpg" class="showcase hidden-xs center-block" alt="Images from University of Nottingham, Senate House Library and PL4 Cafe projects">
      <p class="caption text-center hidden-xs">University of Nottingham / Senate House Library / PL4 Cafe</p>
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>That is why you won’t find that type of portfolio here. What you will find is an invitation to talk. By talking about previous projects, I can fill the gaps that an image only portfolio would create. Critically, it will give me a chance to listen to you and offer some insight into how I can help.</p>
        <p>Please feel free to get in touch...</p>
      </div>
    </div><!-- /.row -->
    <section id="contact">
      <div class="row contact-header">
        <div class="col-sm-10 col-sm-offset-1">
          <p class="contact-links"><a href="https://twitter.com/joehonywill">Tweet</a> or <a href="mailto:jan2017@joehonywill.com">Email</a></p>
          <p>or, if you prefer, use this form</p>
        </div>
        <div class="col-sm-10 col-sm-offset-1"><?php echo $result; ?></div>
      </div><!-- /.row -->
      <div class="row">
        <!-- Form start -->
        <form class="form-signin" role="form" method="post" action="index.php#contact">
          <label for="Name" class="sr-only">Name</label>
          <input type="name" id="name" name="name" class="form-control" placeholder="Name" value="">
          <label for="Email" class="sr-only">Email address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="">
          <label for="Message" class="sr-only">Message</label>
          <textarea id="message" name="message" class="form-control" placeholder="Message" value="" ></textarea>
          <button class="btn btn-lg btn-send btn-block" type="submit" name="submit" value="send">Send Message</button>
        </form>
        <!-- Form end -->  
      </div><!-- /.row -->
    </section><!-- /.section -->
    <div class="row">
      <img src="img/everything_single-8bit.png" class="showcase visible-xs center-block" alt="Image from Senate House Library Digital Collections project">
      <p class="caption text-center visible-xs">SHL Digital Collections</p>
      <img src="img/everything_single_alt-8bit.png" class="showcase-final hidden-xs center-block" alt="Image from Senate House Library Digital Collections project">
      <p class="caption text-center hidden-xs">Senate House Library - Digital Collections</p>
    </div><!-- /.row -->
  </div><!-- /.container -->
  <footer class="footer">
    <div class="container">
      <p>&copy;2017 Joe Honywill</p>
    </div>
  </footer>
  
  <!-- JavaScript -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89933150-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>