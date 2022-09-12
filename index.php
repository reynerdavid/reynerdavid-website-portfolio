<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyner David Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    
<div id="header">
    <div class="container">

        <nav>
            <img src="images/logoo.png" class="logo">
            <ul id="sidemenu">        
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <h1>Hi There, I am <span> Reyner David</span>.</h1>
            <p>Web Developer / Graphic Designer / Photographer</p>
        </div>
    </div>
</div>

<!-- -----------------------------ABOUT SECTION-------------------------- -->
<!-- <div class="secondbg"> -->
<div class="bg">  
<div id="about">
    <div class="container">
        <div class="row">
            <div class="aboutcol1">
                <img src="images/prof.jpg">
            </div>
            <div class="aboutcol2">
                <h1 class="sub-title">About Me</h1>
                <p>I'm a Front-end Developer, Graphic Artist, and Photographer from Angeles City, Pampanga. I enjoy taking complex problems and turning them into simple and beautiful interface designs. I also love logic and structure of coding and always strive to write efficient and functioning code, whether it be HTML, CSS, JavaScript, or PHP. I am well organized, detail oriented, flexible, sociable, and willing to be trained and learn.</p>
            
            
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Web Development</span><br>Front-end Developer / Designing Website interfaces</li>
                        <li><span>Mobile Development</span><br>Creating basic Mobile Applications</li>
                        <li><span>Graphic Artist</span><br>Creating mock-ups design for Website, NFT, Logo, and etc...</li>
                        <li><span>Photography</span><br>Photographer, Videographer, and Editor for photo and video editing </li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2021 - 2022</span><br>NFT Artist and Collector / Near Protocol</li>
                        <li><span>2020 - 2021</span><br>Mobile Application / Thesis</li>    
                        <li><span>2020 - 2021</span><br>Webinar Facilitator and Editor / City College of Angeles</li>    
                        <li><span>2018 - 2021</span><br>Graphic Artist and Photographer / Computing Society</li>
                        <li><span>2015 - 2017</span><br>Food Assistant / Coffee Academy</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2017 - 2021</span><br>Bachelor of Science in Computer Science / City College of Angeles</li>
                        <li><span>2015 - 2017</span><br>BA Architecture / Holy Angel University</li>    
                        <li><span>2011 - 2015</span><br>Drafting / Angeles City National Trade School</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------services-------------------------- -->
<div id="services">
    <div class="container">
         <h1 class="sub-title">My Services</h1>
         <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web Designing</h2>
                <p>Web design refers to the design of websites or the user interfaces that are displayed on the internet.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-camera"></i>
                <h2>Photography</h2>
                <p>The art or practice of taking and processing photographs.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-video"></i>
                <h2>Video Editing</h2>
                <p>Rearranging, adding and/or removing sections of video clips and/or audio clips. Applying colour correction, filters and other enhancements.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-palette"></i>
                <h2>NFT / Graphic Art</h2>
                <p>Create NFT, Logo, Poster, and commercial arts for entertainment, media, marketing, advertising and publishing</p>
                <a href="#">Learn more</a>
            </div>

         </div>
    </div>

</div>
<!-- </div> -->

<!-- --------------------------------------portfolio---------------------------------- -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Projects</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/work3.jpg">
                   <div class="layer">
                        <h3>RD.Travel Website</h3>
                        <p>A Functioning and Responsive Travel Website.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
            </div>
            <div class="work">
                <img src="images/work1.jpeg">
                    <div class="layer">
                        <h3>AstroPix NFT</h3>
                        <p>NFT collection about Astronaut that are exclusive only in NEAR Protocol.</p>
                        <a href="https://paras.id/collection/3d-astropix-by-reynerdavidnear"><i class="fa-solid fa-link"></i></a>
                    </div>
            </div>
            <div class="work">
                <img src="images/work7.jpg">
                    <div class="layer">
                        <h3>Kule - Mobile Application</h3>
                        <p>A Mobile Application for a ColorBlind person to detect the color of the object.</p>
                        <a href="https://drive.google.com/drive/folders/191FeqHXYfii0PCdiKlLmu4uf9M0tjq88?usp=sharing"><i class="fa-solid fa-link"></i></a>
                    </div>
            </div>
            <div class="work">
                <img src="images/work2.jpeg">
                    <div class="layer">
                        <h3>Pixel NFT</h3>
                        <p>Pixel NFT collection that are exclusive only in NEAR Protocol</p>
                        <a href="https://paras.id/collection/pixel-by-reynerdavidnear"><i class="fa-solid fa-link"></i></a>
                    </div>
            </div>
            <div class="work">
                <img src="images/work5.jpeg">
                    <div class="layer">
                        <h3>Photography / Photo Manipulation</h3>
                        <p>Sample Photographs and Photo Manipulations / Edits.</p>
                        <a href="https://drive.google.com/drive/folders/12RGyS0ylZ5dXMIV4FN29DPpB9aj3R5_n?usp=sharing"><i class="fa-solid fa-link"></i></a>
                    </div>
            </div>
            <div class="work">
                <img src="images/work6.jpeg">
                    <div class="layer">
                        <h3>Full NFT Collections</h3>
                        <p>My NFT Collections.</p>
                        <a href="https://paras.id/reynerdavid.near/collections"><i class="fa-solid fa-link"></i></a>
            </div>
            </div>

            <div class="work">
                <video autoplay loop muted plays-inline>
                    <source src="images/jubel.mp4" type="video/mp4">
                </video>
                    <div class="layer">
                        <h3>Videography / MV</h3>
                        <p>Music Video edits.</p>
                        <a href="https://paras.id/reynerdavid.near/collections"><i class="fa-solid fa-link"></i></a>
            </div>
            </div>

            <div class="work">
                <video autoplay loop muted plays-inline>
                    <source src="images/job.mp4" type="video/mp4">
                </video>
                    <div class="layer">
                        <h3>Webinar Promo Edits</h3>
                        <p>Video edits for Online Webinars Promotions.</p>
                        <a href="https://paras.id/reynerdavid.near/collections"><i class="fa-solid fa-link"></i></a>
            </div>
            </div>
        </div>
    </div>

</div>

<!-- ------------------------------------contact-------------------------------- -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-envelope"></i>reynerdavid5@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>09565269988</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/ReynerD13/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-paras"></i></a>
                    </div>
                    <a href="images/Reyner-David-Resume.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                    <form name="submit-to-google-sheet">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
            </div>
        </div>
    </div>
</div>  
    <div class="copyright">
        <p>Created By Mr. Reyner David | All Rights Reserved!</p>
    </div>
</div>


<script>
    
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }


</script>

<script>

    var sidemenu = document.getElementById("sidemenu");
    
    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }
</script>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycby6d-llgY2iTsPvj_A1LEgoPzyrJl5YDdkILNplKlfu-sZcij-qLu2aMAjkIEexfA67QQ/exec'
  const form = document.forms['submit-to-google-sheet']
  const msg = document.getElementById("msg");

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        msg.innerHTML = "Message sent succesfully"
        setTimeout(function(){
            msg.innerHTML = ""
        },5000)
        form.reset()
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>
    
</body>
</html>