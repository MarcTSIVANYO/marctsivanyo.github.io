<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<meta name="description" content="My name is Marc TSIVANYO and I'm Full Stack Developer based in Rennes, France.">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="vendor/material-design-lite/material.min.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="theme-color" content="#180f24">
    <title>Marc TSIVANYO - Full Stack Developer - Rennes, France</title>
    <meta content="My name is Marc TSIVANYO and I'm Full Stack Developer based in Rennes, France." name="description">
    <meta property="og:title" content="Marc TSIVANYO - Full Stack Developer - Rennes, France">
    <meta property="og:description" content="My name is Marc TSIVANYO and I'm Full Stack Developer based in Rennes, France">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="img/avatar-marc-tsivanyo.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@MarcTsivanyo">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Marc TSIVANYO",
        "additionalName": "MarcTSIVANYO",
        "jobTitle": "Full Stack Developer",
        "url": "https://marc.tsivanyo.fr",
        "image": "https://marc.tsivanyo.fr/img/avatar-marc-tsivanyo.png",
        "sameAs": [
          "https://twitter.com/MarcTSIVANYO",
          "https://www.linkedin.com/in/marc-tsivanyo-21976476",
          "https://github.com/MarcTSIVANYO",
          "https://medium.com/@MarcTsivanyo"
        ]
      }
    </script> 
  </head>
  <body class="mdl-color--grey-100 mdl-color-text--grey-800 mdl-base fonts--loading">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <header class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Marc TSIVANYO</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="#about">About</a>
            <a class="mdl-navigation__link" href="#skills">Skills</a> 
            <a class="mdl-navigation__link" href="#projects">Projects</a>
            <a class="mdl-navigation__link" href="#follow-me">Follow Me</a>
          </nav>
        </div>
      </header>

      <!-- Navigation -->
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Marc TSIVANYO</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#about">About</a>
          <a class="mdl-navigation__link" href="#skills">Skills</a> 
          <a class="mdl-navigation__link" href="#projects">Projects</a>
          <a class="mdl-navigation__link" href="#follow-me">Follow Me</a>
        </nav>
      </div>

      <main class="mdl-layout__content">
        <div class="page-content">
          <section class="about section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <h1>Marc TSIVANYO</h1>
              <h2>Full Stack Developer</h2>
              <h2>CEO of <a href="https://mastersolut.com/" title="MasterSolut" target="_blank">MasterSolut</a></h2>
              <h2>Membre of <a href="https://rennesjs.org/" title="Rennes JavaScript User Group" target="_blank">RennesJS</a> and <a href="https://www.meetup.com/fr-FR/gdg_rennes_android/" title="Rennes Android User Group" target="_blank">Rennes Android</a></h2> 
              <p class="resume">
                Hello! I'm Marc TSIVANYO , Full Stack Developer, based in Rennes, France.
                <br> 
                I've been working in IT for more than 3 years and I love web development.
                <br> 
              </p>
              <div>
                <!-- <a  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" title="Download my Curriculum Vitae"   id="show-dialog">
                  Download My CV
                  <i class="mdl-color-text--white material-icons mdi-picture-as-pdf" aria-hidden="true"> </i>
                </a> -->
                <a href="https://docs.google.com/forms/u/0/d/e/1FAIpQLScAY8k0Y4kmPyFZbaAdTnr0RUKajwY85ytEqMEp4Iht6mAKVw/formResponse" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" title="Download my Curriculum Vitae" target="_blank">
                  Download My CV
                  <i class="mdl-color-text--white material-icons mdi-picture-as-pdf" aria-hidden="true"> </i>
                </a>
              </div>

          <!-- Modal --> 
          <dialog class="mdl-dialog">
            <div class="mdl-dialog__content">
               <div id="formEmail">
                <h4 class="mdl-dialog__title">Your Email Address</h4>
               <!-- Simple Textfield -->
                <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScAY8k0Y4kmPyFZbaAdTnr0RUKajwY85ytEqMEp4Iht6mAKVw/formResponse" method="post">
                  <div id="email">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" id="emailUser" name="emailAddress" required="">
                        <label class="mdl-textfield__label" for="sample2">E-mail</label>
                        <span class="mdl-textfield__error">Enter a valid email!</span>
                      </div>
                  </div> 
                  <div class="mdl-dialog__actions">
                    <button type="button" class="mdl-button submit" type="submit">Submit</button>
                    <button type="button" class="mdl-button close">Close</button>
                  </div>
                </form>
              </div>
              <div style="display: none;" id="success">
                <h5 style="color: #311B92"id="successMessage"> 
                </h5>
                <div class="mdl-dialog__actions"> 
                  <button type="button" class="mdl-button closed">Close</button>
                </div>
              </div>
            </div>
          </dialog>

          <script>
          var dialog = document.querySelector('dialog');
          var showDialogButton = document.querySelector('#show-dialog');
          if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton.addEventListener('click', function() {
            document.getElementById('success').style.display = 'none'; 
        document.getElementById("formEmail").setAttribute("style","display:block");
            dialog.showModal();
          });

          dialog.querySelector('.submit').addEventListener('click', function() {
            var emails = document.getElementById('emailUser').value; 
            var msg= "Cv sent successfully in the mail box of "+emails;
            document.getElementById('successMessage').innerHTML=msg;
          document.getElementById('formEmail').style.display = 'none'; 
          document.getElementById("success").setAttribute("style","display:block");
          });

          dialog.querySelector('.close').addEventListener('click', function() {
            dialog.close();
          });
          dialog.querySelector('.closed').addEventListener('click', function() {
            dialog.close();
          });
        </script>  
        </div>
        <img id="about" class="avatar mdl-shadow--2dp" src="img/avatar-marc-tsivanyo.png" alt="Marc TSIVANYO" width="128" height="128">
      </section>
      <section id="skills" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
          <div class="mdl-card__supporting-text">
            <h4>
              <i class="mdl-color-text--blue-grey-400 material-icons mdi-thumb-up" aria-hidden="true"><!--thumb_up--></i>
              My Skills
            </h4>
            <ul>
              <li>JavaScript
                <ul>
                  <li>Front-End: Angular / Vue.js / TypeScript</li>
                  <li>Back-End: Node.js / Express </li>
                </ul>
              </li>
              <li>HTML 5</li>
              <li>CSS 3 / SASS </li>
              <li>Java / JAVA FX / JEE</li>
              <li>PHP / Laravel</li>
              <li>MySQL / PostgreSQL / SQLite / MongoDB</li>
              <li>Photoshop / CorelDRAW</li>
              <li><abbr title="Search Engine Optimization">Google Apps Script</abbr></li>
              <li><abbr title="Search Engine Optimization">SEO</abbr></li>  
            </ul>
          </div>
        </div>
      </section>
          <!--
            <section id="open-source" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <i class="mdl-color-text--blue-grey-400 material-icons mdi-extension" aria-hidden="true"> </i>
                  Open Source Projects
                </h4>
                <ul class="open-source-projects">
                  <li>
                      <b>Sitemap Module for Nuxt.js 🤖</b>
                      <p><a href="https://github.com/nuxt-community/sitemap-module">nuxt-community/sitemap-module</a></p>
                      <p><a class="github-button" href="https://github.com/nuxt-community/sitemap-module" data-size="large" data-show-count="true" aria-label="Star nuxt-community/sitemap-module on GitHub">Star</a></p></p>
                  </li>
                  <li>
                      <b>A Weather app build with Nuxt.js 🌤️</b>
                      <p><a href="https://github.com/MarcTSIVANYO/nuxt-weather">MarcTSIVANYO/nuxt-weather</a></p>
                      <p><a class="github-button" href="https://github.com/MarcTSIVANYO/nuxt-weather" data-size="large" data-show-count="true" aria-label="Star MarcTSIVANYO/nuxt-weather on GitHub">Star</a></p>
                  </li>
                  <li>
                      <b>Easily create your WebPageTest instance with Vagrant ⚡️</b>
                      <p><a href="https://github.com/MarcTSIVANYO/vagrant-webpagetest">MarcTSIVANYO/vagrant-webpagetest</a></p>
                      <p><a class="github-button" href="https://github.com/MarcTSIVANYO/vagrant-webpagetest" data-size="large" data-show-count="true" aria-label="Star MarcTSIVANYO/vagrant-webpagetest on GitHub">Star</a></p>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        -->
          <section id="projects" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <i class="mdl-color-text--blue-grey-400 material-icons mdi-forum" aria-hidden="true"><!--forum--></i>
                  My Projects
                </h4> 
                <ul class="talks__list">
                  <li>
                    <a target="_blank" href="https://www.agencehost.com/">AgenceHost</a> | February 2020
                    <ul>
                      <li>
                        Implementation of a web hosting and domain name server management application.
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://www.agencehost.com/">Agencehost</a>
                      </li>
                    </ul>
                  </li>     

                  <li>
                    <a target="_blank" href="https://cini.mastersolut.com/">GESCINI</a> | January 2020
                    <ul>
                      <li>
                        Development of an application for the CINI association.
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://cini.mastersolut.com/">Cini</a>
                      </li>
                    </ul>
                  </li>     

                  <li>
                    <a target="_blank" href="https://empactgroup.com/">Empact Group</a> | November 2019
                    <ul>
                      <li>
                        Creation of the Empact GROUP website
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://empactgroup.com/">Empact GROUP</a>
                      </li>
                    </ul>
                  </li> 

                  <li>
                    <a target="_blank" href="https://anglaisprofessionnels.com/">English Professional</a> | August 2019
                    <ul>
                      <li>
                        Website for learning English
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://anglaisprofessionnels.com/">English Platform</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a target="_blank" href="https://www.mastersolut.com/">MasterSolut</a> | June 2019
                    <ul>
                      <li>
                        MasterSolut website redesign
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://www.mastersolut.com/">MasterSolut</a>
                      </li>
                    </ul>
                  </li> 

                  <li>
                    <a target="_blank" href="https://pvs-international.org/">NGO PVS </a> | February 2019
                    <ul>
                      <li>
                        Creation of the NGO PVS website
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://pvs-international.org/">NGO PVS</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a target="_blank" href="#">MasFinance</a> | January 2019
                    <ul>
                      <li>
                        Design of a micro-finance management application applied to financial and accounting information.
                      </li>
                      <li>
                       Link : <a target="_blank" href="https://masfinance.mastersolut.com/">Masfinance</a>
                      </li>
                    </ul>
                  </li> 
                   
                </ul>
              </div>
            </div>
          </section>

          <section id="follow-me" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <i class="mdl-color-text--blue-grey-400 material-icons mdi-people" aria-hidden="true"><!--people--></i>
                  Follow Me
                </h4>
                <ul class="social">
                  <li>
                    <a href="https://www.linkedin.com/in/marc-tsivanyo-21976476" target="_blank">LinkedIn</a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MarcTsivanyo" target="_blank">Twitter</a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/marc.tsivanyo" target="_blank">Facebook</a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/tsivanyomarc/" target="_blank">Instagram</a>  
                  </li>
                  <li>
                    <a href="https://stackoverflow.com/users/12780628/marc-tsivanyo" target="_blank">StackOverflow</a>  
                  </li>
                  <li>
                    <a href="https://github.com/MarcTSIVANYO" target="_blank">GitHub</a> / 

                    <a href="https://gitLab.com/MarcTSIVANYO" target="_blank">GitLab</a>
                  </li> 
                  <li>
                    <a href="https://medium.com/@MarcTsivanyo" target="_blank">Medium</a>
                  </li>
                  <li>
                    <a href="https://www.slideshare.net/MarcTSIVANYO" target="_blank">SlideShare</a>
                  </li>
                </ul>
              </div>
            </div>
          </section> 
        </div>
      </main>

    </div>

    <script src="vendor/raven/3.27.0/raven.min.js"></script>
    <script src="vendor/material-design-lite/material.min.js"></script>
    <script src="vendor/loadcss/0.1.7/loadCSS.min.js"></script>
    <script>
      Raven.config('https://cdf67a30b325483893c7d843765a6cf2@sentry.io/158789').install();

      var ss=loadCSS('https://fonts.googleapis.com/icon?family=Material+Icons');
      onloadCSS(ss,function(){document.body.classList.add('mdi--loaded');});
    </script>
    <noscript><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></noscript>
 
  </body>

<!-- Mirrored from marc.tsivanyo.fr/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2020 15:06:28 GMT -->
</html>
