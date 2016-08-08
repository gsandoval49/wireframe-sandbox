<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- OPTIONAL THEME HERE -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- ADD YOUR CUSTOM CSS HERE -->
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css">

        <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- TITLE HERE-->
        <title>HTML Sando-box</title>

    </head>
    <body>
        <!--begin sticky footer-->
        <div class="sfooter-content">
        <header>

            <!-- NAV BAR GOES HERE -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- begin navbar -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Logo Here</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Button</a></li>
                                    <li><a href="about-me">Button</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Links<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Experiences</a></li>
                                            <li><a href="#">Latest Projects</a></li>
                                            <li><a href="#">Clients</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Get in Touch</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>


                    </div>
                </div>
            </div>

        </header>


        <main>
            <!-- NAME & CONTACT ME -->
            <!-- Fold #1 in mobile -->
            <div class="container">
                <div class="row fold-one">
                    <div class="row-xs-12 col-md-4">NAME & BRIEF DESCRIPTION</div>
                    <div class="row-xs-12 col-md-8">Get in touch
                        <p id="contact">Will have a button that shoots to forms or contact me link, in the center of the page</p>
                    </div>
                </div>
            </div>

            <!-- ABOUT ME-->
            <!-- Fold #2 -->
            <div class="container">
                <div class="row fold-two">
                    <div class="row-xs-12 col-md-6">ABOUT ME
                        <p id="about-me">content here - because words are everything...and nothing. !?WAT?!</p>
                    </div>
                    <div class="row-xs-12 col-md-6">Relevant Icons
                        <p class="bars">-------------</p>
                        <p class="bars">-------------</p>
                        <p class="bars">-------------</p>
                        <p class="bars">-------------</p>
                    </div>
                </div>
            </div>

            <!-- EXPERIENCES -->
            <!-- Fold #3 -->
            <div class="container">
                <div class="row fold-three">
                    <div class="col-md-3 col-sm-4 col-xs-12">EXPERIENCES</div>
                    <div class="col-md-9 col-sm-8 col-xs-12">Experience Content
                        <p id="resume">will display professional history</p>
                    </div>
                </div>
            </div>

            <!-- LATEST PROJECTS & CLIENTS -->
            <!-- Fold #4 -->
            <div class="container">
                <div class="row fold-four">
                    <div class="col-md-6 col-sm-6 col-xs-12">LATEST PROJECTS
                        <p id="projects">will house latest projects and pro bono projects</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">Clients
                        <p id="clients">will house future clients that I've worked with. This will most likely won't be here until later</p>
                    </div>
                </div>
            </div>

            <!-- GET IN TOUCH AND FORM-->
            <!-- Fold #5 -->
            <div class="container">
                <div class="row fold-five">
                    <div class="col-md-6 col-sm-6 col-xs-12">FORM FOR CONTACT</div>
                    <div class="col-md-6 col-sm-6 col-xs-12">Get in touch</div>
                </div>
            </div>



        </main>
    </body>

</html>