<?php
  include 'assets/php/select-loisir.php';
  include 'assets/php/insert-message.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resume2023</title>

  <!-- fonts -->
  <link rel="stylesheet" href="assets/fonts/bebas.css" />
  <link rel="stylesheet" href="assets/fonts/oswald.css" />
  <link rel="stylesheet" href="assets/fonts/roboto.css" />

  <!-- icon link -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/menu.css" />
  <link rel="stylesheet" href="assets/css/introgrid.css" />
  <link rel="stylesheet" href="assets/css/modalprojet.css" />
  <link rel="stylesheet" href="assets/css/timeline.css" />
  <link rel="stylesheet" href="assets/css/skill.css">
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
  <section class="menu">

    <div id="menuid">
      <a href="#intro" id="">Qui je suis</a>
      <a href="#projects">Projets</a>
      <a href="#timeline">Cursus</a>
      <a href="#competence">Compétences</a>
    </div>
    <img src="assets/images/me2.jpg" id="memenu" alt="kevpic" />
  </section>
  
  <main>
    <section class="intro" id="intro">
      <div class="Intro">
        <div class="gridintro">
          <div class="titre">
            <h1>WAAG Kevin</h1>
          </div>
          <div class="undertitle">
            <h2>
              bienvenue!</h2>
          </div>
          <div class="mypic">
            <img src="assets/images/me2.jpg" alt="kevpic" />
          </div>

          <p class="quick">
            Sur <b> Reims,</b> je répare des ordinateurs, enseigne l'anglais et constuit des sites web. Je fais du vtt,
            du roller, je regarde beaucoup trop de series et films. Je suis également gamer, on peux peut-être se faire
            des
            parties pour brisée la glace.
          </p>
          <a href="assets/attachements/2023 CV2.pdf" target="_blank" name="dl_btn" class="attachements">
           Télécharger une version PDF du CV
          <i class="fa-solid fa-file-arrow-down"></i></a>
        </div>
      </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="sociallinks">
        <a href="https://www.linkedin.com/in/kevin-w-80651314b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.instagram.com/kevinwg02/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="#contact" onclick="openEmail()"><i class="fa-brands fa-at"></i></a>
        <a href="#contact" onclick="openMap()"><i class="fa-solid fa-map-pin"></i></a>
        <a href="https://github.com/Kevinwg02?tab=repositories" target="_blank"><i class="fa-brands fa-github"></i></a>
      </div>
      <div class="hidden">
        <div id="at">
          <h3>email@email.com</h3>
        </div>
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83334.59322137352!2d4.055107949999997!3d49.253540550000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e974334a533b09%3A0x40a5fb99a3b45c0!2s51100%20Reims!5e0!3m2!1sfr!2sfr!4v1692861178444!5m2!1sfr!2sfr" width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <section id="timeline">
      <h2>Cursus</h2>
      <h4>
        <div class="legendtimeline">
          <i class="fa-solid fa-medal"></i><span>Diplome</span>
          <i class="fa-brands fa-phoenix-framework"></i><span>Stage</span>
          <i class="fa-solid fa-briefcase"></i><span>Travail</span>
        </div>
      </h4>
      <div class="timelinecontainer">
        <div class="timelineblockcontainer">
          <div class="timelineblock">
            <div class="date">2023</div>
            <h3> <i class="fa-solid fa-medal"></i> RAN </h3>
            <span>CESI, Reims 51100 </span> <br>
            <p> Réseaux locaux, Architecture réseau, Adressage IPV4 et IPV6,
              HTML, CSS, JavaScript, Anglais, Algorithme</p>
          </div>
          <div class="timelineblock">
            <div class="date">2021</div>
            <h3><i class="fa-brands fa-phoenix-framework"></i> Stagiaire développeur web</h3>
            <span> San Francisco Etat Unis <br></span>
            Refonte et développement d'une newsletter Design et développement du blog sur Oncord
          </div>

          <div class="timelineblock">
            <div class="date">2020</div>
            <h3> <i class="fa-solid fa-medal"></i> DWWM </h3>
            <span>AFPA, Laon 02000 <br></span>
            Spécialisation web et validation de mon précédant BTS IRIS en 2014
            -HTML, CSS, Bootstrap, Javascript, PHP, MySQL, UML....}
          </div>
          <div class="timelineblock">
            <div class="date">2018</div>
            <h3><i class="fa-solid fa-medal"></i> TOIEC</h3>
            <span> URCA, Reims 51100</span> <br>
            SCORE: 925/990
          </div>
          <div class="timelineblock">
            <div class="date">2019</div>
            <h3><i class="fa-solid fa-briefcase"></i> Intervenant Anglais </h3>
            <span>language connexion, Laon 0200,</span> <br>
            Education de la langue anglaise à des enfants variants de 8 à 11 ans par le
            biais de chansons, vidéos, flashcards, exercices, jeux, cours....
          </div>
          <div class="timelineblock">
            <div class="date">2017</div>
            <h3><i class="fa-solid fa-medal"></i> LICENCE LLCER </h3>
            <span> URCA, Reims 51100 </span><br>
            Etudes de Textes anglais, Civilisation anglaise, Traduction,
            Cours intensif sur la grammaire anglaise....
          </div>
          <div class="timelineblock">
            <div class="date">2016</div>
            <h3><i class="fa-solid fa-briefcase"></i> Technicien de maintenance</h3> <br>
            <span>Alliance Scolaire, Nouvelle Caledonie</span> <br>
            Maintenance Informatique et renouvellement du parc informatique (réseau,
            ordinateur, vidéoprojecteur), cours informatique pour collégiens
          </div>

          <div class="timelineblock">
            <div class="date">2013</div>
            <h3><i class="fa-brands fa-phoenix-framework"></i> Stagiaire technicien maintenance</h3> <br>
            <span> UTC, 60200 Compiegne<br></span>
            Dépannage Réseaux<br>
            Cablage rj45 <br>
            Réparation et Installation de Baie
            Informatique et de borne WIFI
          </div>
          <div class="timelineblock">
            <div class="date">2012</div>
            <h3> <i class="fa-solid fa-medal"></i> BTS IRIS</h3>
            <span>Lycée Pierre Méchain, 02000 Laon<br></span>
            Language Internet et objet (C, C++, C#, HTML, CSS)
          </div>
          <div class="timelineblock">
            <div class="date">2012</div>
            <h3><i class="fa-brands fa-phoenix-framework"></i>Stagiaire Technicien Maintenance </h3>
            <span>GIE Convergence, 02000 Laon</span>
            Installation/ Configuration 30 PC et 20 de Wyses
            Configuration imprimante réseau
          </div>

          <div class="timelineblock">
            <div class="date">2011</div>
            <h3><i class="fa-solid fa-medal"></i> BAC SEN</h3>
            <span> Lycée Pierre Méchain, 02000 Laon</span><br>
            Spécialisation Numerique <br>
            Installation réseau, maintenance et montage pc, installation imprimante
          </div>
          <div class="timelineblock">
            <div class="date">2009</div>
            <h3><i class="fa-solid fa-medal"></i> BEP SEN</h3>
            <span> Lycée Pierre Méchain, Laon 02000</span> <br>
            Installation, mise en service, intervention , maintenance
          </div>
        </div>
      </div>
    </section>


  <section id="projects">
      <h2>Projets</h2>
      <!-- everyimgprojects -->
      <div class="project_img">
        <img src="assets/images/rps.png" alt="Rps_Picture" id="rpsimg" />
        <img src="assets/images/miniblog.png" alt="Miniblog_Picture" id="miniblogimg" />
        <img src="assets/images/puissance4.png" alt="Puissance4_Picture" id="puissance4img" />
        <img src="assets/images/login.png" alt="Login_Concept" id="loginimg" />
        <img src="assets/images/menu.png" alt="menu" id="menuimg" />
      </div>
      <!-- The Modals -->
      <div id="everymodalprojects">
        <div id="myModal_RPS" class="modal">
          <span class="closeR" class="close">&times;</span>
          <img class="modal-content" id="modaltarget_rpsimg" />
          <div id="captionR">Ceci est un petit jeu de pierre feuille ciseaux que l'on lance avec nodeJS. Une version FR
            et EN sont disponible, ainsi qu'une version 1 et 2 joueurs</div>
        </div>
        <div id="myModal_RPS" class="modal">
          <span class="closeR" class="close">&times;</span>
          <img class="modal-content" id="modaltarget_rpsimg" />
          <div id="caption">Ceci est un petit jeu de pierre feuille ciseaux que l'on lance avec nodeJS. Une version FR
            et EN sont disponible, ainsi qu'une version 1 et 2 joueurs</div>
        </div>
        <div id="myModal_miniblog" class="modal">
          <span class="closeMB" class="close">&times;</span>
          <img class="modal-content" id="modaltarget_miniblog" />
          <div id="caption">Ceci est un miniblob qui ma servis pour le passage oral d'un diplome. il y a un darkmode.
            tout les articles sont en bases. Il y a une page login ou nous pouvons tout modifier de la base.</div>
        </div>
        <div id="myModal_puissance4" class="modal">
          <span class="closeP" class="close">&times;</span>
          <img class="modal-content" id="modaltarget_puissance4" />
          <div id="caption">Un jeu puissance 4 lancer dans nodejs.</div>
        </div>
        <div id="myModal_login" class="modal">
          <span class="closeL" class="close">&times;</span>
          <img class="modal-content" id="modaltarget_login" />
          <div id="caption">Ceci est un concept pour une page login</div>
        </div>
        <div id="myModal_menu" class="modal">
          <span class="closeMD" class="close">&times;</span>
          <img class="modal-content" id="modaltarget_menu" />
          <div id="caption">Ceci est un concept d'un menu a modifier suivant le besoin</div>
        </div>
      </div>
      <script src="assets/js/modal.js"></script>
    </section>


    <section class="competence" id="competence">
      <h2>Competence</h2>
      <div>
        <p>HTMl</p>
        <progress value="90" max="100">80%</progress>
      </div>
      <div>
        <p>Css</p> <progress value="70" max="100">80%</progress>
      </div>
      <div>
        <p>js</p> <progress value="60" max="100">80%</progress>
      </div>
      <div>
        <p>php</p><progress value="40" max="100">80%</progress>
      </div>
      <div>
        <p>Linux</p> <progress value="30" max="100">80%</progress>
      </div>
      <div>
        <p>réseau</p> <progress value="20" max="100">80%</progress>
      </div>
      <div>
        <p>Linux</p> <progress value="20" max="100">80%</progress>
      </div>
      <div>
        <p>Switch</p> <progress value="20" max="100">80%</progress>
      </div>
      <div>
        <p>Routeur</p> <progress value="20" max="100">80%</progress>
      </div>
      </div>
    </section>


    <section id="loisir" >
      <div class="movie">
        <h2>Loisirs</h2>
        <?php while ($row = $stmtselect->fetch(PDO::FETCH_ASSOC)) : ?>
          <p><?php echo htmlspecialchars($row['loisirs']); ?></p>
        <?php endwhile; ?>
      </div>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <div class="form">
        <form action="assets/php/form.php" method="post">
          <input type="text"  name="nom" placeholder="lastname" />
          <input type="text" name="prenom" placeholder="firstname" /><br />
          <input type="email" name="email" placeholder="email" /> <br />
          <input type="text"  name="message" placeholder="your message here" class="message" />
          <br />
          <input type="submit" value="envoyer" />
        </form> 
      </div>
    </section>
  </main>

  <footer>
    <div class="socialsactuallinks">

      <div class="sociallinkfooter">
        <p>Social Medias</p>
        <a href="https://www.instagram.com/kevinwg02/" target="_blank">Instagram</a> <br>
        <a href="https://www.linkedin.com/in/kevin-w-80651314b/" target="_blank">Linkedin</a><br>
      </div>

      <div class="sociallinkproject">
        <p>Liens des projets</p>
        <a href="https://github.com/Kevinwg02/RockPaperScissors-NodeJs" target="_blank">RPS Game</a><br>
        <a href="https://github.com/Kevinwg02/MiniBlog" target="_blank">Miniblog</a><br>
        <a href="https://github.com/Kevinwg02/StarterKit" target="_blank">WebStarter Kit</a><br>
      </div>
      <div class="footercontact">
        <p>Contact</p>
        <a href="mailto:">email@email.com </a> <br>
        <a href="">Reims </a>
      </div>

    </div>
  </footer>

  <script src="assets/js/modalprojet.js"></script>
  <script src="assets/js/link.js"></script>

</body>

</html>