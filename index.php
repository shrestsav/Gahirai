<!DOCTYPE php>
<php>
<!-- <?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?> -->
<html lang="en">

<head>
	<style>
			.chart-container {
				/*width: 800px;
				height: auto;*/
                margin: auto;
                width: 75%;
                /*border: 3px solid black;*/
                padding: 10px;
			}
	</style>
    <!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gahirai</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ShreStsaV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#predict">Prediction</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Logs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#graph">Graph</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Monitoring System</div>
                <div class="intro-heading">River Water Level</div>
                <a href="#about" class="page-scroll btn btn-xl">More About the System</a>
            </div>
        </div>
    </header>

    <!-- about Section -->
    <section id="about">
        <!--  <a href="../pages/About.html"></a> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">About the System</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Gahirai:</h4>
                                    <h4 class="subheading">River Water Level Monitoring</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This system aims to monitor the river water level and predict flood with help of weather and water level parameters of the environment in real time.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Hardware Used</h4>
                                    <!-- <h4 class="subheading"></h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">To generate the data in real time, very stable hardware i.e Microprocessors and sensors are needed. Hence an Open-Sourced hardware Arduino is used to connect the different sensors such as Temperature, Ultrasonic and Pressure Sensors are used to measure the environmental data.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>How data is Forwarded to Server?</h4>
                                    <!-- <h4 class="subheading">Transition to Full Service</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Well just calculating the data on the hardware part is not enought to implement flood detection algorithms. So the data has to be forwarded to the server database. For this java language has been used to link up the harware of the system with the database through a serial connection. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Software</h4>
                                    <!-- <h4 class="subheading">Phase Two Expansion</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">For the easibility in using the system, the application part of the system has been made web based application. So any devices with the internet accessibility is able to access the system's application easily.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/5.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Prediction Algorithms</h4>
                                    <!-- <h4 class="subheading">Phase Two Expansion</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This system is able to measure the water label, predict the flood as well as predict the weather by help of data from different sensors and a well designed algorithm to make these all possible.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Designed
                                    <br>By
                                    <br>ShreStsaV</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Prediction Section -->
    <section id="predict">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">PREDICTION</h2>
                    <h3 class="section-subheading text-muted">Current Water Level and Weather Status</h3>
                </div>
            </div>
            <div class="col-sm-7">
         
            <?php
                include 'connection.php';
                $query = "SELECT * FROM `wms` ORDER BY `wms`.`id` DESC LIMIT 1";  
                $result = mysql_query($query);
                while( $row = mysql_fetch_assoc( $result ) ){
                    echo
                    "<div class='alert alert-success' role='alert'>
                    <h3 class='form-signin-heading'>CURRENT STATUS</h3>
                    <tr>
                      <td><strong>DATE:&nbsp;</strong> {$row['Date']}</td><br/>
                      <td><strong>TIME:&nbsp;</strong> {$row['Time']}</td><br/>
                      <td><strong>TEMPERATURE(C):&nbsp;</strong> {$row['temperature']}</td><br/>
                      <td><strong>HUMIDITY(%RH):&nbsp;</strong> {$row['Humidity']}</td><br/>
                      <td><strong>PRESSURE(mb):&nbsp;</strong> {$row['Pressure']}</td><br/>
                      <td><strong>INTENSITY:&nbsp;</strong> {$row['Intensity']}</td><br/>
                      <td><strong>WATER LEVEL:&nbsp;</strong> {$row['Depth']}&nbsp;cm</td><br/>
                    </tr><br/><br/>
                    </div>";
                }
            ?>
            </div>
            <div class="col-sm-4">
            <?php
                include 'connection.php';
                $img = 'img/team/2.jpg';
                $query = "SELECT * FROM `wms` ORDER BY `wms`.`id` DESC LIMIT 1";  
                $result = mysql_query($query);
                while( $row = mysql_fetch_assoc( $result ) ){
                    if ($row['temperature']< '24' && $row['Humidity']>'90')
                       $answer= 'Rainfall (Water Level May Rise)';
                    else if ($row['temperature']< '26' && $row['Humidity']>'50')
                       $answer= 'Cloudy';
                    else {
                       $answer= 'No Rainfall.';
                       // echo '<img src="'.$img.'"/>'."\n";
                        }
                    if ($row['Depth']> '1' && $row['Depth']<'15')
                       $warn= 'Water Level Stable';
                    else if ($row['Depth']>= '15' && $row['Depth']<'17')
                       $warn= 'Level 1 Reached';
                    else if ($row['Depth']>= '17' && $row['Depth']<'20')
                       $warn= 'Level 2 Reached';
                    else if($row['Depth']>= '20' && $row['Depth']<'40')
                       {
                        $warn= 'Warning Level';
                        include "sms.php";
                    }
                    else
                        $warn='Water Level Stable';
                    
                    echo "<div class='alert alert-info' role='alert'><strong>Predicted Weather </strong><br/>" . $answer."</div>";
                    echo "<div class='alert alert-info' role='alert'><strong>Water Level Condition</strong><br/>" . $warn."</div>";
                  }
                //query to get data from the table
                $query = mysql_query("SELECT * FROM `wms` ORDER BY `wms`.`id` DESC lIMIT 25");
                $array = array();
                while($row = mysql_fetch_assoc($query)){
                // add each row returned into an array
                $array[] = $row;
                 }
                if ($array[0]['Depth']-$array[20]['Depth']>9){
                    echo "<div class='alert alert-warning' role='alert'><strong>Level Difference Rate</strong><br/>Water LEVEL Increasing Rapidly. High Chances of Flood</div>";
                    echo "<div class='alert alert-warning' role='alert'><strong>Email and SMS Notification Forwarded Successfully</strong></div>";
                     include "sms.php";
/////SMS 
                    // <?php 

// require "/twilio-php/Services/Twilio.php";

// $AccountSid = "AC4f260eb171a398ff08b93c5c70b53679"; // Your Account SID from www.twilio.com/console
// $AuthToken = "bf33678879bea5fb79f1b9f9a9b48633";   // Your Auth Token from www.twilio.com/console

// $client = new Services_Twilio($AccountSid, $AuthToken);

// try {
//     $message = $client->account->messages->create(array(
//         "From" => "+18054914835 ", // From a valid Twilio number
//         "To" => "+9779808224917", // Text this number
//         "Body" => "River Water Level is increasing Rapidly",
//     ));
// } catch (Services_Twilio_RestException $e) {
//     echo $e->getMessage();
// }
// // Display a confirmation message on the screen
// echo "Sent message {$message->sid}";
// require_once('/twilio-php/Services/Twilio.php');
// $client = new Services_Twilio("{{ sid }}", "{{ auth_token }}");
// $client->account->messages->sendMessage("+9779808224917", "+12125552368", "There’s something strange in my neighborhood. I don’t know who to call. Send help!");
//
////////////Email
$name ="Gahirai Website";
$email_address = "Warning@Gahirai.com";
$phone = "9808224917";
$message = "High Probability of flood. Water Level is Rising rapidly";
    // Create the email and send the message
$to = 'shrestsav@gmail.com'; 
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: Warning@Gahirai.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
// return true;            
                }
                else{
                    echo "<div class='alert alert-success' role='alert'><strong>Level Difference Rate</strong><br/>Increase Rate Stable</div>";
                 } 
                // echo $array[0]['Depth']-$array[20]['Depth'];
                // echo "<br>";
                // echo $array[0]['Depth'];
                // echo $array[20]['Depth'];
        ?>   
        </div>       
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
       <div class="container">
       		<div class="row">
       			<div class="col-lg-12 text-center">
                    <h2 class="section-heading">RECORDS</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            	</div>
            </div>
			<!-- <h2 class="sub-header" align=center>Past Data Log File</h2> -->
          <div class="table-responsive" style="height: 455px; overflow-y: scroll; overflow-x: scroll">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Temperature (*C)</th>
                  <th>Humidity</th>
                  <th>Pressure</th>
                  <th>Intensity</th>
                  <th>Distance</th>
                  <th>Water Level</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'connection.php';
                $query = "SELECT * FROM `wms` ORDER BY `wms`.`id` DESC";  
                $result = mysql_query($query);
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Date']}</td>
              <td>{$row['Time']}</td>
              <td>{$row['temperature']}</td>
              <td>{$row['Humidity']}</td>
              <td>{$row['Pressure']}</td>
              <td>{$row['Intensity']}</td>
              <td>{$row['Wlevel']}</td>
              <td>{$row['Depth']}</td>  
            </tr>\n";
          }
        ?>          
              </tbody>
            </table>
          </div>
        </div>
        </div>
    </section>

    <!-- graph Section -->
    <section id="graph">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GRAPH</h2>
                    <!-- <h3 class="section-subheading text-muted"></h3> -->
                </div>
            </div>
            <div class="chart-container">
                <canvas id="mycanvas"></canvas>
            </div>
        </div> 
    </section>

    <!-- Team Section -->
   <section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Team</h2>
                <!-- <h3 class="section-subheading text-muted">ShreStsaV</h3> -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">

            </div>
        </div>
        <!--/.col-sm-6-->
        <div class="col-sm-7">
            <div class="team-member">
                <h2>Designed By</h2>
                <img src="img/team/2.jpg" class="img-circle img-responsive" alt="">
                <h4>Utsav Shrestha</h4>
                <p class="text-muted">Developer / Coder</p>
                <ul class="list-inline social-buttons">
                    <li><a href="https://www.twitter.com/shrestsav/"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/shrestsav"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/shrestsav/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-member">
                <h2>Development Phase</h2>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                        <span>Hardware</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                        <span>Arduino Programming Language</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span>Java</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                        <span>HTML/CSS/JS</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                        <span>PHP/JSON</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        </div>
        
        <!--   <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <p class="large text-muted">Arduino with Temperature, Pressure and Ultrasonic Sensors are used to forward the data to the website using pHP and mySQL server.</p>
        </div>
    </div>
    </div>
</section>

    <!-- Clients Aside -->
   <!--  <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SHRESTSAV</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.twitter.com/shrestsav/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/shrestsav"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/shrestsav/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <!-- <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!--     <script type="text/javascript">
        var auto_refresh = setInterval(
        function ()
        {
            $('#about').load('about.html').fadeIn("slow");
            $('#graph').load('graph.html').fadeIn("slow");
        }, 10000); // refresh every 10000 milliseconds
    </script> -->
    <!-- Chartjs Line Graph -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/Chart.min.js"></script>
            <script type="text/javascript" src="js/linegraph.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
