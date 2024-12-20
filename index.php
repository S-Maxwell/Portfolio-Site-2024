<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');


$query = 'SELECT projects.id AS project,project_category,project_thumbnail, image_alt FROM projects';


$results = mysqli_query($connect, $query);



// Debugging: Visually Checking each image result for project ID
// echo '<pre style="color: white;">';
// print_r($image_array);
// echo '</pre>';

?>
    <head>
        <meta charset="UTF-8">
        <!-- in mobile set initial zoom level of page to 100%, set site size to equal device width not a larger canvas that is shrunk down-->
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <!-- Link to reset or normalize before main.css
        only choose one -->
        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css"/>
        <link href="css/grid.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <title>Sashoye Maxwell's Portfolio Website</title>
    </head>

    <body>
        <header>
            
            <div class="grid-con">
                <div class="side-menu col-span-full">
                    <div class="side-menu-content">
                        <a href="#home"><img src="images/home-icon-grey.svg" alt="Home"></a>
                    </div>
                    <div class="underline"></div>
                    <div class="side-menu-content">
                        <a href="#about"><img src="images/user-icon.svg" alt="About"></a>
                    </div>
                    <div class="underline"></div>
                    <div class="side-menu-content">
                        <a href="#projects"><img src="images/project-icon.svg" alt="Projects"></a>
                    </div>
                    <div class="underline"></div>
                    <div class="side-menu-content">
                        <a href="#reviews"><img src="images/reviews-icon.svg" alt="Reviews"></a>
                    </div>
                    <div class="underline"></div>
                    <div class="side-menu-content">
                        <a href="#contact"><img src="images/contact-icon.svg" alt="Contact"></a>
                    </div>
                </div>
            </div>
        </header>

        <main>
         
            <section id="hero-section" class="grid-con">
              

                <!-- <div class="container">
                    <div class="logo"></div>
                </div> -->
                <div class="header col-start-1 col-span-full">
                    <div class="content">
                        <h1>HI THERE! <br> I'M <span>SASHOYE</span> </h1>
                        <p class="subtext"><strong><span>UI/UX Designer | 
                            Front End Developer</span></strong></p>
                        <p class="description">
                            Transforming ideas into intuitive, functional designs with a focus on simplicity and impact.
                        </p>
                        <div class="btn-img">
                            <button class="more-abt" id="btn-1"> <strong>Let's Talk</strong></button>
                            <img src="images/chat-icon.svg" alt="">
                        </div>

                        <button class="more-abt"> <strong> More About Me</strong></button>
                    </div>
                </div>
            </section>

            <section class="grid-con">
                <div id="about" class="col-span-full">
                    <h2 class="about-me">ABOUT ME</h2>
                </div>
                     <br>
                <div class="col-span-full">
                    <p>I’m <strong>Sashoye Maxwell,</strong> UI/UX Designer / Front End Developer.</p>
                    <br>
                    <p>I’m a resourceful designer with a passion for blending creativity and technology. With a problem-solving mindset, I bring both innovation and precision to every project. Let’s work together to make your next design stand out!</p>
                </div>

               <br>
                 
            </section>

            <div class="grid-con">
                <section id="player-container" class="col-span-full">
                <video class="player" preload="metadata" poster="images/placeholder.jpg">
                 <source src="video/video2.mp4" type="video/mp4">
                 <source src="video/video.webm" type="video/webm">
                 <p>Uh oh, your browser does not support this video!</p>
                </video>
                </section>
            </div>
               <br>
            <!-- <div class="grid-con">
            <section class="video-pl col-span-full">
                <video class="player" preload="metadata" poster="images/placeholder.jpg">
                 <source src="video/video.mp4" type="video/mp4">
                 <source src="video/video.webm" type="video/webm">
                 <p>Uh oh, your browser does not support this video!</p>
                </video>
                </section>
            </div> -->
            <!-- <section>
                <div class="video-pl col-span-full">
                    <video autoplay loop muted src="video/Final_Demo.mp4">Demo Reel</video> 
                </div>
            </section> -->

            <br>
            <br>
            <br>
             <section class="design-quote col-span-full l-col-start-5 l-col-span-6">
                 <div id="tone-watch">
                     <img src="images/tone-funny.png" alt="Design Quote">
                 </div>
                 <!-- <div class="container">
                 <button class="case-study"><strong>Case Study</strong></button>
                 </div> -->
             </section>
             <br>
             <br>
             <br>


            <section class="grid-con">
                <div id="projects" class="col-span-full">
                    <h2 class="portfolio-me">PORTFOLIO</h2>
                </div>
                 <br>
                 <?php
                 while($row = mysqli_fetch_array($results)) {
                    echo'
                    <div id="p-cont" class="col-span-full">
                <img src="images/'.$row['project_thumbnail'].'" alt="Quatro Drink">
                <p class="logo-design">'.$row['project_category'].'</p>
                <div class="container">
                    <a href="case-study.php?id='. $row['project'] . '"><button class="case-study"><strong>Case Study</strong></button></a>
                    </div>
                </div> ';
                 }
                 ?>
                
            </section>

            <br>

           <!-- <br>
           <br>
           <br>
            <section class="">
                <div>
                    <img src="images/tone-funny.png" alt="Design Quote">
                </div>
                <div class="container">
                <button class="case-study"><strong>Case Study</strong></button>
                </div>
            </section>
            <br>
            <br>
            <br> -->

            <section class="grid-con reviews">

                <div id="reviews" class="col-span-full">
                    <h2 class="reviews-me">REVIEWS</h2>
                </div>
                <br>

                <div class="col-span-full review-card">

                    <div class="review-img">
                     <img src="images/reviews-1.JPG" alt="">
                    </div>

                    <div class="review-text">
                        <h3>Manira Opa</h3>
                        <h5>Organizer at WeBridge Community Services</h5>
                        <p> She has been an incredible asset to WeBridge Community Services. Her creativity and attention to detail brought our vision to life, and her designs truly captured the essence of our mission. She’s professional, reliable, and a pleasure to work with!</p>
                    </div>
                </div>

                <div class="col-span-full review-card">

                    <div class="review-img">
                     <img src="images/penelope.JPG" alt="Penelope">
                    </div>

                    <div class="review-text">
                        <h3>Penelope Arthur</h3>
                        <h5>Founder of Great Media Inc.</h5>
                        <p>She is a talented and reliable graphic designer who exceeded our expectations at Great Media Inc. She translated our ideas into stunning designs that perfectly aligned with our brand. Her creativity, attention to detail, and professionalism made the process seamless. Highly recommend working with her! </p>
                    </div>
                </div>

                <div class="col-span-full review-card">

                    <div class="review-img">
                        <img src="images/dominion_city-church.JPG" alt="Church Family">

                    </div>

                    <div class="review-text">
                        <h3>Dominion City Media Team</h3>
                        <h5>Organizers of the Media Team</h5>
                        <p>Sashoye is a talented and dedicated designer. Her innovative approach and keen eye for detail have significantly elevated our media presence. She’s a true professional and a joy to collaborate with!</p>
                    </div>
                </div>

                <div class="col-span-full review-card">

                    <div class="review-img">
                      <img src="images/jerry.JPG" alt="">
                    </div>

                    <div class="review-text">
                        <h3>Jerry Senata</h3>
                        <h5>Owner of Design Corp.</h5>
                        <p>Bringing creativity and precision to every project. That's Sashoye! Her commitment to delivering high-quality work and her professionalism make her an invaluable asset to any design team.</p>
                    </div>
                </div>
            </section>

            <section id="contact" class="grid-con">
                <div class="col-span-full">
                    <h2 class="contact-me">CONTACT</h2>
                    <br>
                    <p>Feel <strong>free</strong> to contact me!
                        <br>
                        <br>
                        Whether you’re interested in collaborating, 
                        have questions, or would like to learn more 
                        about my work, I’m happy to connect!</p>
                </div>
                <br>

                <div class="col-span-full contact-form">
                    <div class="field-1">
                    <label for="message"></label>
                    <input id="message" type="text" placeholder="Your name*" name="message" required>
                    </div>

                    <div class="field-2">
                        <label for="company"></label>
                        <input id="company" type="text" placeholder="Company Name" name="company" required>
                    </div>

                    <div class="field-2">
                        <label for="message"></label>
                        <input id="email" type="text" placeholder="Email Address*" name="email" required>
                    </div>

                    <div class="field-2">
                        <label for="phone-number*"></label>
                        <input id="phone-number" type="text" placeholder="Phone number*" name="phone-number" required>
                    </div>

                    <div class="field-2">
                        <label for="comment"></label>
                        <input id="comment" type="text" placeholder="A few words*" name="comment" required>
                    </div>

                    <button class="send">SEND</button>
                </div>
            </section>

            <br>

            <section class="grid-con">
                <div class="col-span-full l-col-start-5 l-col-span-6 s-center">
                    <img src="images/computer-screen.svg" alt="Computer Screen">
                    <br>
                    <p>Email: sashoyemaxwell@gmail.com
                        <br>
                    Feel free to reach out anytime for inquiries or collaborations.
                    </p>
                </div>

                <br>

                <div class="col-span-full l-col-start-5 l-col-span-6 s-center">
                    <img src="images/mobile-screen.svg" alt="Mobile Screen">
                    <br>
                    <p>Phone: (226) 724 - 7437
                        <br>
                        Available Monday to Friday, 
                        9:00 AM to 6:00 PM (EST).
                    </p>
                </div>
            </section>
        </main>

        <footer>
            <h2>Thanks for Patience!</h2>

            <div class="social-media" id="footer-socials">
                <a href="https://www.linkedin.com/in/sashoye-m-a629b0217/" target="_blank">
                    <img src="images/linkedin-icon.svg" alt="LinkedIn"></a>

                <a href="https://www.instagram.com/cutesash101/" target="_blank">
                <img src="images/instagram-icon.svg" alt="Instagram"></a>

                <a href="https://github.com/S-Maxwell" target="_blank">
                <img src="images/github-icon.svg" alt="Github"></a>

                <a href="https://discord.com/login" target="_blank">
                <img src="images/discord-icon.svg" alt=""></a>
            </div>
            <br>
            <p>© 2024 Sashoye Maxwell. All rights reserved.</p>
        </footer>
        
        
        

        <!--Logo and Intro Section-->

            
            
       



    <!--Video Background-->
    <!-- <div class="bg-vid">
        <video autoplay loop muted src="video/background-video.mp4">Portfolio Video</video>
    </div> -->





 <div class="circle-button">
    <img src="images/scroll-up-icon.svg" alt="">
 </div>


<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
<script src="js/main.js"></script>
    </body>
</html>