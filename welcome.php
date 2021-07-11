<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Spectrum</title>
</head>
<body>
<section id="headernav">
    <div class="headernav container">
        <div class="navbar">
            <div class="icon"><img src="logoadj.png" alt="" height="80px" width="80px"></div>
            <div class="brand">
                <a href="#header"><h1>SPE<span>CTR</span>UM</h1></a>
            </div>
            <div class="navbar_list">
                <div class="hamburger"><div class="bar"></div></div>
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#aboutus">About us</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact us</a></li>
                    <li><a href="logout.php">logout</a></li>
                    <li><a href="profile.php">profile</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


    <section id="header">
        <div class="container header">
            <div>
               <h1>Welcome to Spectrum<span></span></h1> 
               <a href="#projects" type="button" class="signup">view projects</a>
            </div>
        </div>
    </section>


    <section id="aboutus">
        <div class="aboutus container">
            <div class="aboutus_top">
             <h1 class="title">ABO<span>ut</span> US</h1>
             <p>SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.

                This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics society in our college but with the efforts of other members we established two other wings - Software and Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.</p>
            </div>
            <div class="aboutus_bottom">
                <div class="aboutus_item">
                    <div class="icon"><img src="programming.png" alt="" height="80px" width="80px"></div>
                    <h2>Hardware</h2>
                    <p>✔VLSI
                       <br>
                       ✔EMBEDDED SYSTEM
                        <br>
                        ✔PCB DESIGN</p>
                </div>
                <div class="aboutus_item">
                    <div class="icon"><img src="programming.png" alt="" height="80px" width="80px"></div>
                    <h2>Software</h2>
                    <p>✔COMPETITIVE PROGRAMMING
                        <br>
                        ✔WEB DEVELOPMENT
                        <br>
                        ✔APP DEVELOPMENT
                        <br>
                        ✔MACHINE LEARNING</p>
                </div>
                <div class="aboutus_item">
                    <div class="icon"><img src="programming.png" alt="" height="80px" width="80px"></div>
                    <h2>Design</h2>
                    <p>✔UI/UX DESIGNING
                      <br>
                        ✔POSTER DESIGNING</p>
                </div>
            </div>
        </div>
    </section>


    <section id="projects">
        <div class="projects container">
            <div class="project_header">
                <div><h1 class="project_title">recent <span>projects</span></h1></div>
            </div>
            <div class="project_body">
                <div class="project_item">
                    <div class="project_info">
                        <h1>SUPPLY BOT</h1>
                        <!-- <h2>coding is love</h2> -->
                        <p>Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition 2019-20.</p>
                    </div>
                    <div class="project_image">
                        <img src="project1.jpg" alt="">
                    </div>
                </div>
                <div class="project_item">
                    <div class="project_info">
                        <h1>FRIENDLY-MEDICO</h1>
                        
                        <p>In this pandemic not everyone of us have the courage to go to hospitals and check our own reports.this app will take some short details and keep it in a database. In future it can be used by medicals to get the health data of a person and if any issue is found by the doctor they can directly contact them and problems can be solved over phones.</p>
                    </div>
                    <div class="project_image">
                        <img src="project2.jpg" alt="">
                    </div>
                </div>
                <div class="project_item">
                    <div class="project_info">
                        <h1>BHAAVANA</h1>
                        <!-- <h2>coding is love</h2> -->
                        <p>device helps physically imapired people to understand the emotions of the person they are talking to</p>
                    </div>
                    <div class="project_image">
                        <img src="project3.jpg" alt="">
                    </div>
                </div>
                <div class="project_item">
                    <div class="project_info">
                        <h1>Extractive-Text-Summarization</h1>
                        <!-- <h2>coding is love</h2> -->
                        <p>A simple python program which can find the most important sentences in a paragraph and can give them as the output. Quite useful for the tasks of reading short summaries of news articles and such. Unlike machine learning models, this doesn't train but rather uses a graph based approach to rank the sentences based on their cosine similarities and give the desired output as a result.</p>
                    </div>
                    <div class="project_image">
                        <img src="project4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


<section id="contact">
    <div class="contact container">
        <div>
            <h1 class="contact_title">Contact <span>info</span></h1>
        </div>
        <div class="contact_body">
            <div class="contact_item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
                <div class="contact_info">
                    <h1>Phone</h1>
                   <h2>+91-8249063374</h2>
                </div>
            </div>
            <div class="contact_item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/email--v1.png"/></div>
                <div class="contact_info">
                    <h1>E-mail</h1>
                  <h2>spectrumclub.ce<br>tb@gmail.com</h2>
                </div>
            </div>
            <div class="contact_item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/order-delivered.png"/></div>
                <div class="contact_info">
                    <h1>Address</h1>
                   <h3>College Of Engineering And Technology, Ghatikia, Bhubaneswar - 751003</h3>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="footer">
    <div class="footer container">
        <div class="brand"><h1>spec<span>tru</span>m</h1></div>
        <h2>follow us at</h2>
        <div class="social_icon">
            <div class="social_item">
                <a href="https://github.com/Spectrum-CETB"><img src="https://img.icons8.com/bubbles/100/000000/github.png"/></a>
            </div>
            <div class="social_item">
                <a href="https://www.facebook.com/spCETrum"><img src="https://img.icons8.com/bubbles/200/000000/facebook.png"/></a>
            </div>
            <div class="social_item">
                <a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/"><img src="https://img.icons8.com/bubbles/200/000000/linkedin.png"/></a>
            </div>
            <div class="social_item">
                <a href="https://www.instagram.com/spectrum.cetb/?hl=en"><img src="https://img.icons8.com/bubbles/200/000000/instagram.png"/></a>
            </div>
        </div>
        <p>made with 💗 by Suman Shadangi</p>
    </div>
</section>


<script src="app.js"></script>


</body>
</html>
</body>
</html>