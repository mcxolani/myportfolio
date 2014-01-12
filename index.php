<?php
    if($_POST['submit']){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $messages = $_POST['messages'];

        
        if(!empty($name)&&!empty($email)&&!empty($messages)){
            if(!$phone_val = preg_match("%[\d]{10,10}%", $phone)){
                $message = "enter 10 digits phone numba";
            }else{

                

                $headers = "From: {$email}";
                //
                $mail = mail('mcxolani@gmail.com', 'Portfolio', $messages, $headers);

                if($mail){
                    $success = "I will revieve your message";
                }else{
                    $message = "could not send your message";
                }
                $name ='';
                $phone = '';
                $email = '';
                $messages = '';

                
                

            }

        }else{
            $message = "PLZ enter all fields B4 U Send me a message";
        }


    }
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Xolani Masuku Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/fff.ico" />
    
    <!-- All CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/fontello.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
<style>
    #xol {
        color: #11ccff;

    }
    #xoll{
        color: #fff;
    }

</style>
</head>
<body>
       <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" id="xol" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    MENU
                  </button>
                  <a class="navbar-brand" href="#section1" id="xoll">Xolani Portfolio</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="#section2">About Me</a></li>
                    <li><a href="#section3">Projects</a></li>
                    <li><a href="#section4">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    <!-- Section 1 -->
    
    <div class="section1" id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="intro">
                        <h1 id="xol">Xolani Charles Masuku</h1>
                        <h2 id="xol">I am a Web and Application Developer</h2>
                        <br>
                         <p><a href="#section2" class="btn-default">Want To Know More <span class="icon-angle-double-down"></span></a></p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                    <div class="image">
                         <img class="img-circle img-responsive" src="img/image3.jpg" width="70%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 2 
    <div class="section2-start"></div>
    -->
    <div class="section2" id="section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About</h1>
                    <p>
                        With a National Diploma in IT Web and Application Development from Tshwane University of Technology, I have a growing understanding of the full life cycle of a software/Web development project. I also have experience in learning and excelling at new technologies as needed like GitHub , I plan to further my knowledge portfolio with PhoneGap, Twitter Bootstrap, Angular JS, PostgreSQL, SQlite 3 and Python in the coming months..
                     </p>
                    <p>I have successfully designed, developed well performing projects</p>
                    <p>I strive for continued excellence</p>
                    <p>I provide exceptional contributions to group work and work well alone too.</p>

                    <hr/>
                </div>
             </div>  
             <div class="row"> 
                
                    <div class="col-lg-12">
                        <h1>Skills</h1>
                    </div>
                </div>
            <div class="row">

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>HTML5</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>CSS3</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>PHP</h3>
                    </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Java</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>C#</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>ASP.NET</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>jQuery</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>json</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>jQuery Mobile</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>PhoneGap</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>git</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Django</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Python</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>laravel</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>phpunit</h3>
                    </div>
                     <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>xml</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Ajax</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Javascript</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>MySQL</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Microsoft SQL</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>Twitter Bootstrap</h3>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h3>CodeIgniter</h3>
                    </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 3 -->
    
    <div class="section3-start"></div>
    
    <div class="section3" id="section3" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Projects</h2>
                    <p>I have worked on few awesome projects. Here I have compiled a list of projects.
                        Just go through them and be inspired.
                    </p>
                </div>
            </div>
                
            <div class="row"> 
                    <ul class="thumbnails">
                        <div class="col-lg-4 col-xs-12">
                            <div class="thumbnail">
                                <img src="img/proj1.png" alt="">
                                <h3><a target="_blank" href="http://xolanistore.eu1.frbit.net/">Musical Equipments Store(2013)</a></h3>
                                <p>This is the project I did during my 3rd year at University using php/mysql with twitter bootstrap</p>
                                <p>Administration Username: admin</p>
                                <p>Password: admin</p>
                            </div>
                        </div>
                
                    </ul>
                       
                </div>
            </div>
        </div>

    <!-- Section 4 -->
    
    <div class="section4-start"></div>
    
    <div class="section4" id="section4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Get In Touch</h1> <hr/>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <p>Enough about me lets hear about you. I am currently available for projects, permanent job or contracts.</p>
                    
                    <p><col-lg->Email: </col-lg-> mcxolani@gmail(dot)com</p>
                    <p><col-lg->Phone: </col-lg-> 074 957 1948 (RSA)</p>
                    
                    <div class="social">
                        <a target="_blank" href="https://twitter.com"><i class="icon-twitter-circled"></i></a>
                        <a target="_blank" href="https://google.com"><i class="icon-gplus-circled"></i></a>
                        <a target="_blank" href="https://www.facebook.com/xolani.masuku"><i class="icon-facebook-circled"></i></a>
                        <a target="_blank" href="https://github.com/mcxolani"><i class="icon-github-circled"></i></a>
                    </div>
                </div>
                
                <div  class="col-lg-6 col-lg-offset-2 col-sm-6">
                       <?php 
        //error
      if(isset($success)){
      ?>
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Thank you!</strong> <?php echo $success; ?>
        </div>
        <?php } ?>
    
        <?php 
        //error
      if(isset($message)){
      ?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Error!</strong> <?php echo $message; ?>
        </div>
        <?php } ?>
                    <form id="from" class="form" action="index.php#section4" method="post">

                        <fieldset>
                        <label>Name</label>
                        <input class="form-control" value="<?php if($name){ echo $name; }?>" id="name" placeholder="Sbusiso" type="text" name="name"/>
                        
                        <label>Email</label>
                        <input class="form-control" value="<?php if($email){ echo $email; }?>" id="email" placeholder="sbusiso@gmail.com" type="email" name="email" />
                        
                        <label>Phone (optional)</label>
                        <input class="form-control" maxlength="10" value="<?php if($phone){ echo $phone; }?>" id="phone" placeholder="0123456789" type="text" name="phone" />
                        
                        <label>Message</label>
                        <textarea rows="4" type="text" id="message" class="form-control" name="messages"><?php if($messages){ echo $messages; }?></textarea>
                        
                        </fieldset>
                        <input type="submit" id="submit" class="btn-default" name="submit" value="Send Message"/>

                    </form>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            
            
        </div>
    </div>
    
    
    
    <!-- All JavaScript Files -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>