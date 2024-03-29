<?php 
session_start();
if(!isset($_SESSION['uname'])){
  header('location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seek for Geeks</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="file.css" />
  </head>
  <body data-scroll-container>
    <header>
      <nav class="navbar">
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <div class="logo">
          <a data-page="Home" href="#Home"> <h4>Seek for Geeks</h4> </a>
        </div>
        <ul class="nav-links">
          <li>
            <a class="coollink" id="homelink" data-page="Home" href="#Home"
              >Home</a
            >
          </li>
          <li>
            <a class="coollink" id="abtlink" data-page="About" href="#About"
              >About</a
            >
          </li>
          <li>
            <a
              class="coollink"
              id="servlink"
              data-page="services"
              href="#services"
              >Services</a
            >
          </li>
          <li>
            <a
              class="coollink"
              id="contactlink"
              data-page="Contact"
              href="#Contact"
              >Contact</a
            >
          </li>
          <li>
          <a class="coollink" href="logout.php"> logout </a>
          </li>
        </ul>
      </nav>
    </header>
    <section  id="Home" class="Home">
      <div class="homecontent">
        <h1 data-aos="zoom-in-up" data-aos-duration="1000">
          One Stop solution For all your tech needs
        </h1>
        <p data-aos="fade-up" data-aos-duration="1500">
          hey <?php echo $_SESSION['uname'];?>, Looking for a freelancer to get your geeky jobs done ?, then you are
          on the right place, this is a platform where you can find programmers
          and designers who can get geeky things done for you.
        </p>
        <a href="#services"
          ><button data-aos="fade-up" data-aos-duration="1900" class="phn">
            Check Services
          </button>
        </a>
      </div>
    </section>
    <section  id="About" class="About">
      <div class="aboutcontent">
        <h2 data-aos="fade-up" data-aos-duration="1300">Hey there !</h2>
        <p data-aos="fade-up" data-aos-duration="1700">
          Who are we ?, What we do ?, well we are a community of people who do
          freelancing, and in this platform you can find freelance web
          devoloper, Android devolopers, Graphic designers, and so on. And are
          you a freelancer who is ready to extend your services ?, then you can
          also join our community by contacting us.If you are looking for a
          freelancer then you are on the right place, check out the services and
          hire a freelancer now.
        </p>
      </div>
      <img
        id="abtimg"
        data-aos="zoom-in-up"
        data-aos-duration="1700"
        src="img/1.svg"
      />
      <img
        class="i2"
        id="abtimg"
        data-aos="zoom-in-up"
        data-aos-duration="1700"
        src="img/2.svg"
      />
    </section>

    <section  id="services" class="services">
      <a class="servlink" href="../webdev.html">
        <div data-aos="fade-up" data-aos-duration="1000" class="con">
          <img class="servlogos" src="img/webdev.svg" />
          <h3>Web Devoloper</h3>
        </div>
      </a>
      <a class="servlink" href="../appdev.html">
        <div
          class="con"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="300"
        >
          <img class="servlogos" src="img/app dev.svg" />
          <h3>App Devoloper</h3>
        </div>
      </a>

      <a class="servlink" href="../designer.html">
        <div
          class="con"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="600"
        >
          <img class="servlogos" src="img/designers.svg" />
          <h3>Graphic Designer</h3>
        </div> </a
      ><a class="servlink" href="../sftdev.html">
        <div
          class="con"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="900"
        >
          <img class="servlogos" src="img/soft dev.svg" />
          <h3>Software Devoloper</h3>
        </div>
      </a>
      <div class="testimonialcontainer">
        <div
          class="testimonial"
          data-aos="flip-left"
          data-aos-duration="1000"
          data-aos-delay="900"
        >
          <img src="img/user1.jpg" class="avatar" />
          <div class="testimonialuser">
            <h3 class="user__name">Elon Musk</h3>
            <h4 class="user__org">Tesla</h4>
          </div>
          <p class="testimonial_text">
            "I Found this platform very useful for the devolopers and also
            useful for the enterpreneurs to find good freelancers"
          </p>
        </div>

        <div
          class="testimonial"
          data-aos="flip-left"
          data-aos-duration="1000"
          data-aos-delay="1200"
        >
          <img src="img/user2.jpg" class="avatar" />
          <div class="testimonialuser">
            <h3 class="user__name">Jeff Bezos</h3>
            <h4 class="user__org">Amazon</h4>
          </div>
          <p class="testimonial_text">
            "Nice initative to unite all the devolopers to form as a community
            so that they could all devolop by freelancing"
          </p>
        </div>

        <div
          class="testimonial"
          data-aos="flip-left"
          data-aos-duration="1000"
          data-aos-delay="1500"
        >
          <img src="img/user3.jfif" class="avatar" />
          <div class="testimonialuser">
            <h3 class="user__name">Sundar Pichai</h3>
            <h4 class="user__org">Google</h4>
          </div>
          <p class="testimonial_text">
            "The devolopers and designers in this platform are very good and
            they were skillful and they get the job done in time"
          </p>
        </div>
      </div>
    </section>

    <section id="Contact" class="Contact">
      <div class="contactbox">
        <a class="contlinks" href="https://github.com/gokul-369">
          <div data-aos="fade-up" data-aos-duration="1000" class="c1">
            <img class="logos" src="img/github-logo.png" alt="gitlogo" />
            <h4 class="labels">Github</h4>
          </div></a
        >
        <a class="contlinks" href="https://www.instagram.com/gokul__369/"
          ><div
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="300"
            class="c1"
          >
            <img class="logos" src="img/instagram.png" alt="gitlogo" />
            <h4 class="labels">Instagram</h4>
          </div></a
        >
        <a class="contlinks" href="mailto:gokul369@oulook.com"
          ><div
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="600"
            class="c1"
          >
            <img class="logos" src="img/email.png" alt="gitlogo" />
            <h4 class="labels">Mail</h4>
          </div></a
        >
        <a class="contlinks" href="tel:+916381315837"
          ><div
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="900"
            class="c1"
          >
            <img class="logos" src="img/telephone-call.png" alt="gitlogo" />
            <h4 class="labels">Call</h4>
          </div></a
        >
      </div>
      <a href="https://forms.gle/kn5J8TQFnVvjVKxe9"
        ><button data-aos="fade-up" data-aos-duration="1000" class="feedback">
          give your feedbacks
        </button>
      </a>
    </section>
    <script src="file.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
