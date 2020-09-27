<!DOCTYPE html>
<html>
<head>
    <title>Mathews' Home Page</title>
    <meta charset="utf-8">
    <meta name="application-name" content="Prove02">
    <meta name="description" content="The purpose of this assignment is to review a minimal level of client-side programming and provide a homepage from which you can link to future assignments.">
    <meta name="img" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap stylesheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--animations from https://github.com/michalsnik/aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--google fonts: nanum gothic-->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="prove02.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--header and navbar-->
    <?php include 'header.php';?>

    <!--this is a modification from Bootstrap 4 > Components > Jumbotron-->
    <div class="jumbotron jumbotron-fluid height100p banner" id="home">
        <div class="container h100">
            <div class="bannerBox h100">
                <div class="shift-up">
                    <h1 data-aos="fade-up" data-aos-duration="1000"data-aos-delay="0">CSE341 Assignments</h1>
                    <p data-aos="fade-up" data-aos-duration="1000"data-aos-delay="500">This is where you can find what I have done.</p>
                </div>
            </div>
        </div>
    </div>

    <!--about me section-->
    <section class="about" id="about">
        <div class="container height70p">
            <div class="row" data-aos="fade-up" data-aos-duration="1000"data-aos-delay="100">
                <div class="offset-sm-2 col-sm-8">
                    <div class="hText">
                        <h2 class="text-center">A Little About Me</h2>
                        <p class="text-justify">Hello everyone. My name is Joshua Mathews. I am married and have a daughter that is just over 15 months now. She really is the light of our lives. There is a lot that I like to do in my free time. This includes, but isn't limited to: Spendind time with my wife and child, anything under the sun or moon, and games of the board and video variety. I'm not picky when it comes to food, unless there is mustard in it. I absolutly cannot stand the taste of mustard.</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000"data-aos-delay="100">
                <div class="col-sm-6">
                    <div class="aboutBox">
                        <div class="imgBox">
                            <img src="images/joshIdalis.jpg" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>My wife and I<br><span>"It's a wonderfull life"</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="aboutBox">
                        <div class="imgBox">
                            <img src="images/elioraSanta.jpg" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Eliora's First Christmas<br><span>"IDK about this 'santa' guy"</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--dynamically add assignments to the webpage-->
    <section class="assign" id="assignments">
        <div class="container height75p">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="hText text-center" data-aos="fade-up" data-aos-duration="1000"data-aos-delay="0">
                        <h2>Class Assignments</h2>
                        <p>Assignments should appear dynamically as they are added to the server.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include 'assignments.php';?>
            </div>
        </div>
    </section>

    <!--dynamically add projects to the webpage-->
    <section class="assign" id="projects">
        <div class="container height75p">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="hText text-center" data-aos="fade-up" data-aos-duration="1000"data-aos-delay="0">
                        <h2>Class Projects</h2>
                        <p>Projects should appear dynamically as they are added to the server.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include 'projects.php';?>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>© Copyright Joshua Mathews | cse341</p>
        </div>
    </footer>

    <!--Bootstrap dependancies-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!--animations from https://github.com/michalsnik/aos-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <!--script to toggle scrolled class to the navbar from Online Tutorial
    from w3schools:
        Example on use:
        $(selector).toggleClass(classname,function(index,currentclass),switch)
            selector = document
            classname = scrolled
            function = n/a
            switch = $(this).scrollTop() > $('.navbar').height())
        -->
    <script type="text/javascript">
        $(document).scroll(function () {
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
        });
    </script>
</body>
</html>