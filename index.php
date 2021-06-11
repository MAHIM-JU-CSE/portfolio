<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sub="Portfolio Contact Request";
    $sub2= "Message submission | Mahim";
    $to="mahbubislammahim@outlook.com";
    $headers="From: ". $email;
    $headers2="From: ". $to;
    $text="You have received an email from ". $name. ".\n\n". "Subject: ". $subject. ".\n\n". "Message: ". $message;
    $text2="Dear ". $name. ", Thank You for contacting me. I'll get back you shortly.";

    $result= mail($to, $sub, $text, $headers);
    $result2= mail($email, $sub, $text, $headers);

    if($result){
        echo '<script type="text/javascript> 
        alert("Success")
        </script>';
        
    }
    else
    {
        echo '<script type="text/javascript> 
        alert("Failed")
        </script>';
    }

        
        /* header("Location:index.html"); */
    
}

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" />
    <title>Mahbub Islam Mahim</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="CSS/style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"
    ></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("user_udK235SAl9Ya2YrauCIrd");
      })();
    </script>
  </head>

  <body>
    <!--  Header -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Mahim</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="uil uil-estate nav__icon"></i>Home
              </a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="uil uil-user nav__icon"></i>About
              </a>
            </li>
            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="uil uil-file-alt nav__icon"></i>Skills
              </a>
            </li>
            <li class="nav__item">
              <a href="#services" class="nav__link">
                <i class="uil uil-briefcase-alt nav__icon"></i>Services
              </a>
            </li>
            <li class="nav__item">
              <a href="#portfolio" class="nav__link">
                <i class="uil uil-scenery nav__icon"></i>Portfolio
              </a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="uil uil-message nav__icon"></i>Contact
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav__btns">
          <!-- Theme change button -->
          <i class="uil uil-moon change-theme" id="theme-button"></i>
          <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-apps"></i>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main -->
    <main class="main">
      <!-- Home -->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">
              <a
                href="https://www.linkedin.com/in/mahbub-mahim-5a25b4187/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-linkedin-alt"></i>
              </a>
              <a
                href="https://github.com/MAHIM-JU-CSE"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-github-alt"></i>
              </a>
              <a
                href="https://www.facebook.com/osohaybalokmahim/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-facebook-f"></i>
              </a>
            </div>

            <div class="home__img">
              <svg
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                  <image
                    class="home__blob-img"
                    x="17"
                    y="15"
                    xlink:href="Images/pic.png"
                  />
                </g>
              </svg>
            </div>
            <div class="home__data">
              <h1 class="home__title">
                Hi, I'm <span class="name__color">Mahim</span>
              </h1>
              <h3 class="home__subtitle" style="color: #4b7bec">
                <span class="typing"></span>
              </h3>
              <!-- <h3 class="home__subtitle">
                BSc. (Engineering) in Computer Science(JU)
              </h3> -->
              <p class="home__description">
                High-level experience and knowledge in software and web
                development, producing quality work.
              </p>
              <a href="#contact" class="button button--flex">
                Contact Me<i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </div>
          <div class="home__scroll">
            <a href="#about" class="home__scroll-button button--flex">
              <i class="uil uil-mouse-alt home__scroll-mouse"></i>
              <span class="home__scroll-name">Scroll down</span>
              <i class="uil uil-arrow-down home__scroll-arrow"></i>
            </a>
          </div>
        </div>
      </section>

      <!-- About -->
      <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">- Who I am -</span>

        <div class="about__container container grid">
          <img src="Images/image.png" alt="" class="about__img" />

          <div class="about__data">
            <p class="about__description">
              Hi, I am Mahim. I am a competitive programmer and a competent IT
              professional with a proven track record in designing and
              developing websites and developing software . My greatest passion
              is in life is using my technical know-how to benefit other people
              and organisations.
            </p>
            <div class="about__info">
              <div>
                <span class="about__info-title">02+</span>
                <span class="about__info-name">Years<br />experience</span>
              </div>
              <div>
                <span class="about__info-title">06+</span>
                <span class="about__info-name">Completed<br />project</span>
              </div>
              <div>
                <span class="about__info-title">00+</span>
                <span class="about__info-name">Companies<br />worked</span>
              </div>
            </div>
            <div class="about__buttons">
              <a
                href="Student_Info.pdf"
                download=" "
                class="button button--flex"
              >
                Download CV<i class="uil uil-download-alt button__icon"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Skills -->
      <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">- My technical level -</span>

        <div class="skills__container container grid">
          <div>
            <!------ SKILLS 1 ------>
            <div class="skills__content skills__open">
              <div class="skills__header">
                <i class="uil uil-brackets-curly skills__icon"></i>

                <div>
                  <h1 class="skills__title">Frontend developer</h1>
                  <span class="skills__subtitle">More than 2 years</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">HTML</h3>
                    <span class="skills__number">95%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__html"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">CSS</h3>
                    <span class="skills__number">90%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__css"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">JavaScript</h3>
                    <span class="skills__number">80%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__js"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">React</h3>
                    <span class="skills__number">85%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__react"></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Backend skills -->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-server-network skills__icon"></i>

                <div>
                  <h1 class="skills__title">Backend developer</h1>
                  <span class="skills__subtitle">More than 1 years</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">PHP</h3>
                    <span class="skills__number">80%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__php"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Node Js</h3>
                    <span class="skills__number">70%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__node"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Firebase</h3>
                    <span class="skills__number">90%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__firebase"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Laravel</h3>
                    <span class="skills__number">55%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__laravel"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <!--Competitive  -->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-swatchbook skills__icon"></i>

                <div>
                  <h1 class="skills__title">Competitive</h1>
                  <span class="skills__subtitle">More than 4 years</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">C</h3>
                    <span class="skills__number">95%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__c"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">C++</h3>
                    <span class="skills__number">95%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__cplus"></span>
                  </div>
                </div>
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Java</h3>
                    <span class="skills__number">80%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__java"></span>
                  </div>
                </div>
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Python</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__python"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Qualification -->
      <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">- My personal journey -</span>
        <div class="qualification__container container">
          <div class="qualification__tabs">
            <div
              class="qualification__button button--flex qualification__active"
              data-target="#education"
            >
              <i class="uil uil-graduation-cap qualification__icon"></i>
              Education
            </div>
            <div class="qualification__button button--flex" data-target="#work">
              <i class="uil uil-briefcase-alt qualification__icon"></i>
              Work
            </div>
          </div>
          <div class="qualification__sections">
            <!-- Q content 1 -->
            <div
              class="qualification__content qualification__active"
              data-content
              id="education"
            >
              <!-- Q1 -->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">
                    Computer Science & Engineering
                  </h3>
                  <span class="qualification__subtitle"
                    >Jahangirnagar University</span
                  >
                  <span class="qualification__subtitle">CGPA: 3.6</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2018-2022
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>
              <!-- Q2 -->
              <div class="qualification__data">
                <div></div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
                <div>
                  <h3 class="qualification__title">
                    Higher Secondery Certificate
                  </h3>
                  <span class="qualification__subtitle"
                    >Savar Cantonment School & College</span
                  >
                  <span class="qualification__subtitle">GPA: 5.00</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2015-2017
                  </div>
                </div>
              </div>
              <!-- Q3 -->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">
                    Secondery School Certificate
                  </h3>
                  <span class="qualification__subtitle"
                    >Radio Colony Model School</span
                  >
                  <span class="qualification__subtitle">GPA: 5.00</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2013-2015
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <!--  <span class="qualification__line"></span> -->
                </div>
              </div>
              <!-- Q4 -->
            </div>

            <!-- Q content 2 -->
            <div class="qualification__content" data-content id="work">
              <!-- Q1 -->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">JU Computer Club</h3>
                  <span class="qualification__subtitle"
                    >Jahangirnagar University</span
                  >
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2018-2022
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>
              <!-- Q2 -->
              <div class="qualification__data">
                <div></div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
                <div>
                  <h3 class="qualification__title">Online working</h3>
                  <span class="qualification__subtitle">Upwork</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2015-2017
                  </div>
                </div>
              </div>
              <!-- Q3 -->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Teaching</h3>
                  <span class="qualification__subtitle">Student's Home</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2018-Running
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <!--  <span class="qualification__line"></span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle">- What I offer -</span>
        <div class="services__container container grid">
          <!-- Sevice 1 -->
          <div class="services__content">
            <div>
              <i class="uil uil-web-grid services__icon"></i>
              <h3 class="services__title">
                Ui/Ux <br />
                Designer
              </h3>
            </div>
            <span
              class="
                button button--flex button--small button--link
                services__button
              "
            >
              View More
              <i class="uil uil-arrow-right button__icon"></i>
            </span>
            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Ui/Ux <br />
                  Designer
                </h4>
                <i class="uil uil-times services__modal-close"></i>
                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>I develop the user interface.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Web page development.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>I create Ux element interactions.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>I position your company brand.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Sevice 2 -->
          <div class="services__content">
            <div>
              <i class="uil uil-arrow services__icon"></i>
              <h3 class="services__title">
                Frontend <br />
                Dveloper
              </h3>
            </div>
            <span
              class="
                button button--flex button--small button--link
                services__button
              "
            >
              View More
              <i class="uil uil-arrow-right button__icon"></i>
            </span>
            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Frontend <br />
                  Developer
                </h4>
                <i class="uil uil-times services__modal-close"></i>
                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>HTML & CSS Responsive Web Design.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>React JS Development.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Node.js Development.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>React native Development.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Sevice 3 -->
          <div class="services__content">
            <div>
              <i class="uil uil-brackets-curly services__icon"></i>
              <h3 class="services__title">
                Software <br />
                Developer
              </h3>
            </div>
            <span
              class="
                button button--flex button--small button--link
                services__button
              "
            >
              View More
              <i class="uil uil-arrow-right button__icon"></i>
            </span>
            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Software <br />
                  Developer
                </h4>
                <i class="uil uil-times services__modal-close"></i>
                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Problem-solving ability.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Analytical and strategic.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Intrinsic motivation.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Teamwork.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Portfolio -->
      <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>
        <span class="section__subtitle">- Most recent works -</span>
        <div class="portfolio__container container swiper-container">
          <div class="swiper-wrapper">
            <!-- p1 -->
            <div class="portfolio__content grid swiper-slide">
              <img src="Images/portfolio1.jpg" alt="" class="portfolio__img" />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Modern Website</h3>
                <p class="portfolio__description">
                  Website adaptable to all devices, with ui components and
                  animated interactions.
                </p>
                <a
                  href="#"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo
                  <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>
            <!-- p2 -->
            <div class="portfolio__content grid swiper-slide">
              <img src="Images/portfolio2.jpg" alt="" class="portfolio__img" />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Brand Design</h3>
                <p class="portfolio__description">
                  Website adaptable to all devices, with ui components and
                  animated interactions.
                </p>
                <a
                  href="#"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo
                  <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>
            <!-- p3 -->
            <div class="portfolio__content grid swiper-slide">
              <img src="Images/portfolio3.jpg" alt="" class="portfolio__img" />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Online Store</h3>
                <p class="portfolio__description">
                  Website adaptable to all devices, with ui components and
                  animated interactions.
                </p>
                <a
                  href="#"
                  class="button button--flex button--small portfolio__button"
                >
                  Demo<i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Add Arrows -->
          <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!-- Project on mind -->
      <section class="project section">
        <div class="project__bg">
          <div class="project__container container grid">
            <div class="project__data">
              <h2 class="project__title">You have a new project</h2>
              <p class="project__description">
                Contact me now and get a 30% discount on your new project.
              </p>
              <a href="#contact" class="button button--flex button--white">
                Contact Me
                <i class="uil uil-message project__icon button__icon"></i>
              </a>
            </div>
            <img src="Images/project1.png" alt="" class="project__img" />
          </div>
        </div>
      </section>

      <!-- Testimonial -->
      <section class="testimonial section">
        <h2 class="section__title">Testimonial</h2>
        <span class="section__subtitle">- My clients say -</span>
        <div class="testimonial__container container swiper-container">
          <div class="swiper-wrapper">
            <!-- T1 -->
            <div class="testimonial__content swiper-slide">
              <div class="testimonial__data">
                <div class="testimonial__header">
                  <img
                    src="Images/testimonial1.jpg"
                    alt=""
                    class="testimonial__img"
                  />
                  <div>
                    <h3 class="testimonial__name">Sara Smith</h3>
                    <span class="testimonial__client">Client</span>
                  </div>
                </div>
                <div>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                </div>
              </div>
              <p class="testimonial__description">
                I get a good impression, I carry out my project with all the
                possible quality and attention and support 24 hours a day.
              </p>
            </div>
            <!-- T2 -->
            <div class="testimonial__content swiper-slide">
              <div class="testimonial__data">
                <div class="testimonial__header">
                  <img
                    src="Images/testimonial2.jpg"
                    alt=""
                    class="testimonial__img"
                  />
                  <div>
                    <h3 class="testimonial__name">Matt Robbinson</h3>
                    <span class="testimonial__client">Client</span>
                  </div>
                </div>
                <div>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                </div>
              </div>
              <p class="testimonial__description">
                I get a good impression, I carry out my project with all the
                possible quality and attention and support 24 hours a day.
              </p>
            </div>
            <!-- T3 -->
            <div class="testimonial__content swiper-slide">
              <div class="testimonial__data">
                <div class="testimonial__header">
                  <img
                    src="Images/testimonial3.jpg"
                    alt=""
                    class="testimonial__img"
                  />
                  <div>
                    <h3 class="testimonial__name">John Doe</h3>
                    <span class="testimonial__client">Client</span>
                  </div>
                </div>
                <div>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                  <i class="uil uil-star testimonial__icon-star"></i>
                </div>
              </div>
              <p class="testimonial__description">
                I get a good impression, I carry out my project with all the
                possible quality and attention and support 24 hours a day.
              </p>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination-testimonial"></div>
        </div>
      </section>

      <!-- Contact -->
      <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">- Get in touch -</span>
        <div class="contact__container container grid">
          <div>
            <div class="contact__info">
              <i class="uil uil-phone contact__icon"></i>
              <div>
                <h3 class="contact__title">Call Me</h3>
                <span class="contact__subtitle mail"><a href="tel:+8801982474475">+8801982474475</a></span>
              </div>
            </div>
            <div class="contact__info">
              <i class="uil uil-envelope contact__icon"></i>
              <div>
                <h3 class="contact__title">Email</h3>
                <span class="contact__subtitle mail">
                  <a href="mailto:mahbubislammahim@gmail.com"
                    >mahbubislammahim@gmail.com</a
                  >
                </span>
              </div>
            </div>
            <div class="contact__info">
              <i class="uil uil-map-marker contact__icon"></i>
              <div>
                <h3 class="contact__title">Location</h3>
                <span class="contact__subtitle mail"
                  ><a
                    href="https://www.google.com/maps/place/Savar+Upazila/@23.8858427,90.1289517,11z/data=!3m1!4b1!4m5!3m4!1s0x3755e9cdc8bac3b5:0xc155530f1e9923d6!8m2!3d23.7932126!4d90.2713349"
                    target="_blank"
                    >Savar, Dhaka, Bangladesh.</a
                  ></span
                >
              </div>
            </div>
          </div>

          <form action="" method="post" class="contact__form grid">
            <div class="contact__inputs grid">
              <div class="contact__content">
                <label for="name" class="contact__label">Name</label>
                <input
                  type="text"
                  class="contact__input"
                  name="name"
                  id="name"
                  placeholder="Enter your name"
                  required
                />
              </div>
              <div class="contact__content">
                <label for="email" class="contact__label">Email</label>
                <input
                  type="email"
                  class="contact__input"
                  name="email"
                  id="email"
                  placeholder="Enter your email"
                  required
                />
              </div>
            </div>
            <div class="contact__content">
              <label for="project" class="contact__label">Subject</label>
              <input
                type="text"
                name="subject"
                id="subject"
                class="contact__input"
                placeholder="Enter Subject"
              />
            </div>
            <div class="contact__content">
              <label for="message" class="contact__label">Message</label>
              <textarea
                name="message"
                id="message"
                cols="0"
                rows="7"
                class="contact__input"
                placeholder="Write message..."
                required
              ></textarea>
            </div>
            <div>
              <button
                type="submit"
                class="button button--flex"
                name="submit"
                id="submit"
                style="border: none; color: white"
              >
                Send Message <i class="uil uil-message button__icon"></i>
              </button>
            </div>
          </form>
        </div>
      </section>

      <!--Footer  -->
      <footer class="footer">
        <div class="footer__bg">
          <div class="footer__container container grid">
            <div>
              <h1 class="footer__title">Mahim</h1>
              <span class="footer__subtitle">Full Stack Developer</span>
            </div>
            <ul class="footer__links">
              <li>
                <a href="#services" class="footer__link">Services</a>
              </li>
              <li>
                <a href="#portfolio" class="footer__link">Portfolio</a>
              </li>
              <li>
                <a href="#contact" class="footer__link">Contact</a>
              </li>
            </ul>
            <div class="footer__socials">
              <a
                href="https://www.facebook.com/osohaybalokmahim/"
                target="_blank"
                class="footer__social"
              >
                <i class="uil uil-facebook-f"></i>
              </a>
              <a
                href="https://www.instagram.com/mahimju/"
                target="_blank"
                class="footer__social"
              >
                <i class="uil uil-instagram"></i>
              </a>
              <a
                href="https://twitter.com/Mahim78088847"
                target="_blank"
                class="footer__social"
              >
                <i class="uil uil-twitter-alt"></i>
              </a>
            </div>
          </div>
          <p class="footer__copy">
            &#169; Made with <i class="uil uil-heart"></i> by
            <a href="#home" style="color: #d2dcf4 !important">Mahim</a>. All
            rights reserved
          </p>
        </div>
      </footer>

      <!-- Scroll up -->
      <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
      </a>
    </main>

    <!--  Js Code -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="text/javascript" src="JS/main.js"></script>
  </body>
</html>
