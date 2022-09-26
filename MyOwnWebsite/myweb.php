<?php include_once "header.php";?>
  <body>
    <div class="scroll-up-btn">
    <i class="fa-solid fa-angles-up"></i>
    </div>
    <!-- ----Navbar---- -->
    <nav class="navbar">
      <div class="max-width">
        <div class="logo">
          <a href="#home">
            <img src="images/logo-img.png" alt="">&nbsp;
            <lable class="zia">Zia</lable>
            <span class="b">B</span>
          </a>
        </div>
        <ul class="menu">
          <li><a href="#home" class="menu-btn">Home</a></li>
          <li><a href="#about" class="menu-btn">About</a></li>
          <li><a href="#services" class="menu-btn">Services</a></li>
          <li><a href="#skills" class="menu-btn">Skills</a></li>
          <li><a href="#teams" class="menu-btn">Teams</a></li>
          <li><a href="#contact" class="menu-btn">Contact</a></li>
        </ul>
        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
    <!-- ----Home---- -->
    <section class="home" id="home">
      <div class="max-width">
        <div class="home-content">
          <div class="text-1">Hello, my name is &#x1F31F; &#129095;</div>
          <div class="text-2">
            <div class="loader">
              <span class="red" style="--i: 1">Z</span>
              <span class="white" style="--i: 2">i</span>
              <span  class="red" style="--i: 3">a</span>
              <span style="--i: 4"> </span>
              <span class="white" style="--i: 5">B</span>
              <span class="red" style="--i: 6">e</span>
              <span class="white" style="--i: 7">h</span>
              <span class="red" style="--i: 8">r</span>
              <span class="white" style="--i: 9">o</span>
              <span class="red" style="--i: 10">z</span>
            </div>
          </div>
          <h1>
            <a
              href=""
              class="typewrite"
              data-period="2000"
              data-type='[ "I am Creative.", "I Love Design.", "I Love to Develop."]'
            >
              <span class="wrap"></span>
            </a>
          </h1>
          <div class="hire-btn">
            <a href="#"><span>Hire me</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- ----About---- -->
    <section class="about" id="about">
      <div class="max-width">
        <h2 class="title">About me</h2>
        <div class="about-content">
          <div class="column left">
            <div class="img-box">
            <img src="./images/about-pic.jpg" alt="" />
            </div>
          </div>
          <div class="columu right">
            <div class="text">
              I'm Behroz and, I'm a <span>Web Developer</span>
            </div>
            <p>
              I complete my bachelor degree in BCA from REVA University,
              Bangluru, India at 2018. And I finshed my M.Tech degree in CSE at
              C.V Raman Globle University, Odisha, India in this year.
            </p>
            <div class="hire-btn">
              <a href="#"><span>Download CV</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ----Services---- -->
    <section class="services" id="services">
      <div class="max-width">
        <h2 class="title">My services</h2>
        <div class="serv-content">
          <div class="card">
            <div class="icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <div class="box">
              <div class="text">Web Design</div>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                libero vitae quaerat itaque esse nemo.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="icon">
            <i class="fa-solid fa-arrow-trend-up"></i>
            </div>
            <div class="box">
              <div class="text">Advertising</div>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                libero vitae quaerat itaque esse nemo.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="icon">
            <i class="fas fa-code"></i>
            </div>
            <div class="box">
              <div class="text">Apps Design</div>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                libero vitae quaerat itaque esse nemo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ----Skills---- -->
    <section class="skills" id="skills">
      <div class="max-width">
        <h2 class="title">My skills</h2>
        <div class="skills-content">
          <div class="column left">
            <div class="text">My creative skills & expriences.</div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
              rerum molestias. Facilis earum atque reprehenderit iusto quod eum
              eos rerum quam aliquid consequatur, qui laboriosam, voluptatibus
              suscipit ullam temporibus iste!
            </p>
            <div class="hire-btn">
              <a href="#"><span>Read more</span></a>
            </div>
          </div>
          <div class="column right">
            <div class="bars">
              <div class="info">
                <span>HTML5</span>
                <span>90%</span>
              </div>
              <div class="line html"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>CSS</span>
                <span>80%</span>
              </div>
              <div class="line css"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>JavaScript</span>
                <span>70%</span>
              </div>
              <div class="line js"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>MySQL</span>
                <span>65%</span>
              </div>
              <div class="line sql"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>PHP</span>
                <span>55%</span>
              </div>
              <div class="line php"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ----Team---- -->
    <section class="teams" id="teams">
      <div class="max-width">
        <h2 class="title">My teams</h2>
        <div class="carousel owl-carousel">
          <div class="card">
            <div class="box">
              <img src="./images/team1.jpg" alt="" />
              <div class="text">Adamu Nafiu</div>
              <p>Web Designer and Master of Electrical Engineer.</p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./images/team2.jpg" alt="" />
              <div class="text">Haris Fedaee</div>
              <p>Web Designer, FrontEnd Developer and Civil Engineer.</p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./images/team3.jpg" alt="" />
              <div class="text">Chemical Muordit</div>
              <p>BackEnd Developer and Computer Science Engineer.</p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./images/team4.jpg" alt="" />
              <div class="text">Captin Mathew</div>
              <p>FrontEnd Developer and Computer Science Engineer.</p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./images/team5.jpg" alt="" />
              <div class="text">Ziaulhaq Behroz</div>
              <p>Web Developer and Moster of Computer Science Engineer.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-dots"></div>
    </section>
    <!-- ----Contact---- -->
    <section class="contact" id="contact">
      <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
          <div class="column left">
            <div class="text">Social Media</div>
            <p>I'm almost everywhere on Social Media:</p>
            <div class="icons">
              <div class="row">
                <ion-icon class="i-g i" name="logo-github"></ion-icon>
                <div class="info">
                  <div class="head head-g">GitHub:</div>
                  <div class="sub-title">
                    <a
                      class="a-g"
                      target="_blank"
                      href="https://github.com/ZiaulhaqBehroz"
                      >ZiaulhaqBehroz</a
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <ion-icon class="i-l i" name="logo-linkedin"></ion-icon>
                <div class="info">
                  <div class="head head-l">LinkedIN:</div>
                  <div class="sub-title">
                    <a
                      class="a-l"
                      target="_blank"
                      href="https://www.linkedin.com/in/ziaulhaq-behroz-367481109/"
                      >Ziaulhaq Behroz</a
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <ion-icon class="i-y i" name="logo-youtube"></ion-icon>
                <div class="info">
                  <div class="head head-y">YouTube:</div>
                  <div class="sub-title">
                    <a
                      class="a-y"
                      target="_blank"
                      href="https://www.youtube.com/channel/UCDuXxi43hf5Hc1kXUVkkPSg"
                      >ZiaCoding</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column right">
            <div class="text">Realtime chat App</div>
            <p>Get in touch with me dirctly from here</p>
            <div class="log-sign">
              <a href="login.php" target="_blank"><span><i class="fa-solid fa-right-to-bracket"></i>&nbsp;LogIn</span></a>
              <a href="index.php" target="_blank"><span><i class="fa-solid fa-user-plus"></i>&nbsp;SignUp</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ----Footer---- -->
    <footer>
      <span
        >Created By <a href="#">Ziaulhaq-Behroz</a> |
        <span class="far fa-copyright"></span> 2022 All rights recerved.</span
      >
    </footer>
    <script src="./javascript/type.js"></script>
    <script src="./javascript/myweb.js"></script>
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/login.js"></script>
  </body>
</html>
