<?php include "../includes/db.php";?>
<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password'];
       $username = mysqli_real_escape_string($connection, $username );   
      $password = mysqli_real_escape_string($connection, $password );
      
      $sql = "SELECT username FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($connection, $sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
     
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("../main/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>MCW</title>
    <link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="css/style.css">
<link href='style.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
  
</head>

<body>

  



  
<header class="main_h" >

    <div class="row">
        <a class="logo" href="#"><img src="Images/minilogo.png" class="logo"></a>

        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav>
            <ul>
                        <li><a href="#" class="page-scroll">ACCUEIL</a></li>

                        <li><a href="#MODULES" class="page-scroll">MODULES</a></li>

                        <li><a href="#about" class="page-scroll">DÉBOUCHÉS</a></li>

                        <li><a href="#COND" class="page-scroll">CONDITIONS D’ACCÈS</a></li>

                        <li><a href="#contact" class="page-scroll">CONTACT</a></li>
            </ul>
        </nav>

    </div> <!-- / row -->

</header>

<div class="hero">

    <h1><span>savoir plus sur MCW</span><br>Bienvenue</h1>

    <div class="mouse">
        <span></span>
    </div>

</div>
                <!-- start Nav area -->
<div id="index.html"></div>                
            
        <!-- MODULES-->
    <div class="testimonials" id="MODULES">
        <div class="container">
            <div class="tittlem">
                <h3>MODULES</h3>
            </div>

            <div class="sreen-gallery-cursual">
                <div id="owl-demo" class="owl-carousel">
                    <div class="item-owl">
                        <div class="test-review">
                            <img src="images/M1.png" class="img-responsive" alt="">

                            <h5>MODULE1:</h5><span>Infographie</span>

                            <p>L'infographie est le domaine de la création d'images numériques assistée par ordinateur. Cette activité est liée aux arts graphiques.</p>
                        </div>
                    </div>

                    <div class="item-owl">
                        <div class="test-review">
                            <img src="images/M2.png" class="img-responsive" alt="reseaux">

                            <h5>MODULE2:</h5><span>Systèmes Informatiques et Réseaux</span>

                            <p>une formation accès sur les compétences nécessaires pour gérer les infrastructures et réseaux des ordinateurs (postes de travail et serveur).</p>
                        </div>
                    </div>

                    <div class="item-owl">
                        <div class="test-review">
                            <img src="images/M3.png" class="img-responsive" alt="">

                            <h5>MODULE3:</h5><span>Programmation procédurale et Web Statique</span>

                            <p>la programmation procédurale est un paradigme qui se fonde sur le concept d'appel procédural. Une procédure, aussi appelée routine.</p>
                        </div>
                    </div>

                    <div class="item-owl">
                        <div class="test-review">
                            <img src="images/M4.png" class="img-responsive" alt="">

                            <h5>MODULE4:</h5><span>Communication professionnelle</span>

                            <p>La connaissance et la maîtrise des principaux outils de communication professionnelle au sein d'une organisation du ministère de l'éducation nationale.</p>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M5.png" class="img-responsive" alt="">

                                <h5>MODULE5:</h5><span>Bases de Données Relationnelles</span>

                                <p>En informatique, une base de données relationnelle est une base de données où l'information est organisée dans des tableaux à deux dimensions appelés des relations ou tables.</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M6.png" class="img-responsive" alt="">

                                <h5>MODULE6:</h5><span>Technologie web dynamique et Mysql</span>

                                <p>Une page web dynamique est une page web générée à la demande, par opposition à une page web statique. Le contenu d'une page web dynamique peut donc varier en fonction d'informations (heure, nom de l'utilisateur, formulaire rempli par l'utilisateur, etc.) qui ne sont connues qu'au moment de sa consultation..</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M7.png" class="img-responsive" alt="">

                                <h5>MODULE7:</h5><span>Algorithmique avancée</span>

                                <p>Un algorithme est suite finie d'opérations élémentaires constituant un schéma de calcul ou de résolution d'un problème.</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M8.png" class="img-responsive" alt="">

                                <h5>MODULE8:</h5><span>Mathématique</span>

                                <p>Les mathématiques sont un ensemble de connaissances abstraites résultant de raisonnements logiques appliqués à des objets divers tels que les nombres, les formes, les structures et les transformations..</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M9.png" class="img-responsive" alt="">

                                <h5>MODULE9:</h5><span>Programmation JAVA pour le Web</span>

                                <p>Java est un langage de programmation moderne développé par Sun Microsystems (aujourd'hui racheté par Oracle).</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M10.png" class="img-responsive" alt="">

                                <h5>MODULE10:</h5><span>Développement Web avancé</span>

                                <p>Les participants à cette formation apprendront à tirer profit des fonctionnalités les plus avancées du langage pour concevoir rapidement des applications web performantes, sécurisées et particulièrement riches.</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M11.png" class="img-responsive" alt="">

                                <h5>MODULE11:</h5><span>Génie logiciel et webmastering</span>

                                <p>Sa mission consiste autant à faire évoluer des applications existantes que d'en modéliser de nouvelles. Maîtrisant les techniques spécifiques en programmation objet, en génie logiciel, en modélisation UML et en langage de programmation (Java, C++ ou Framework .NET.).</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M12.png" class="img-responsive" alt="">

                                <h5>MODULE12:</h5><span>Management de projet</span>

                                <p>Le management de projet est l'ensemble des actions engagées par une ou des organisation(s) afin de définir/concevoir un projet, de le lancer et de le réaliser.</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M13.png" class="img-responsive" alt="">

                                <h5>MODULE13:</h5><span>Communication et gestion en entreprise</span>

                                <p>De façon globale la communication est une fonction à part entière dans la gestion de l'entreprise. On peut la subdiviser en deux grandes catégories que sont la communication externe et la communication interne.</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M14.png" class="img-responsive" alt="">

                                <h5>MODULE14:</h5><span>Ergonomie et scénarisation multimédia</span>

                                <p>C'est à dire avec les moyens offerts par les technologies multimédias. Création de storyboards Production sur outil auteur des storyboards</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M15.png" class="img-responsive" alt="">

                                <h5>MODULE15:</h5><span>Stage professionnel</span>

                                <p>les stages professionnels et les travaux sur l'exploitation ou dans l'atelier de l'établissement mettent les jeunes en situation professionnelle et donnent du sens aux enseignements qu'ils reçoivent.</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="images/M16.png" class="img-responsive" alt="">

                                <h5>MODULE16:</h5><span>Projet de fin d’étude</span>

                                <p>Le projet de fin d'études (PFE) est un projet complet en situation professionnelle qui marque la fin des études dans une école d'ingénieurs française. Sa durée est habituellement comprise entre cinq et huit mois.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- DÉBOUCHÉS DE LA FORMATION -->
    <section id="about" class="page-section">
        <div class="container">
            <div class="tittlem">
                <h3>DÉBOUCHÉS DE LA FORMATION</h3>
            </div>

            <div class="row">
                <div class="col">
                    <div class="service-item">
                        <div class="icon"><img src="images/D2.png" alt=""></div>

                        <h4>Webdesigner</h4>

                        <div class="line-dec"></div>

                        <p>le web- designer est spécialisé dans la création des pages Web. Il s'occupe de tout l'aspect graphique d'un site Internet (illustrations, animations, typographie...).</p>
                    </div>
                </div>

                <div class="col">
                    <div class="service-item">
                        <div class="icon"><img src="images/D1.png" alt=""></div>

                        <h4>Infographiste</h4>

                        <div class="line-dec"></div>

                        <p>réalise alors des plans de bâtiments, des reconstitutions d'intérieur en 3D ou des images de synthèse de molécules. s</p>
                    </div>
                </div>

                <div class="col">
                    <div class="service-item">
                        <div class="icon"><img src="images/D3.png" alt=""></div>

                        <h4>Chef de Projet</h4>

                        <div class="line-dec"></div>

                        <p>Le Chef de Projet Web détient le rôle principal d'une mission web accordée à une entreprise. C'est lui qui décide, qui coordonne, qui supervise et qui contrôle les actions à mettre en place pour que le projet se déroule dans les meilleures conditions possibles.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="service-item">
                        <div class="icon"><img src="images/D4.png" alt=""></div>

                        <h4>Architecte Web</h4>

                        <div class="line-dec"></div>

                        <p>L'architecte web est un expert technique qui a pour vocation de créer ou de faire évoluer un site internet ou une application. Souvent sollicité sur de grands projets, il garantit parallèlement le bon fonctionnement du site web</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- condition d'acces -->
    <div class="services" id="COND">
        <div class="container">
            <div class="tittlem">
                <h3>CONDITIONS D’ACCÈS</h3>
            </div>

            <div class="inner_sec_w3_agileinfo">
                <div class="col-md-4 grid_info_main">
                    <div class="grid_info">
                        <div class="icon_info">
                            <span class="Cecon"><img src="images/C1.png" alt=""></span>

                            <h5>Bac Sciences mathématiques</h5>

                            <p>La sélection est faite sur la base de la note de l’examen national du baccalauréat et le type de bac.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 grid_info_main">
                    <div class="grid_info">
                        <div class="icon_info">
                            <span class="Cecon"><img src="images/C2.png" alt=""></span>

                            <h5>Bac Sciences expérimentales (option : sciences physiques)</h5>

                            <p>La sélection est faite sur la base de la note de l’examen national du baccalauréat et le type de bac.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 grid_info_main">
                    <div class="grid_info">
                        <div class="icon_info">
                            <span class="Cecon"><img src="images/C3.png" alt=""></span>

                            <h5>Bac Sciences et technologies</h5>

                            <p>La sélection est faite sur la base de la note de l’examen national du baccalauréat et le type de bac.</p>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--//services-->
    <!-- contact -->

    <div class="contact" id="contact">
        <div class="container">
            <div class="agile-contact-grids">
                <h3 class="tittlem">Contact</h3>

                <div class="col-md-6 agile-contact-right">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <div class="w3_conl">
                                    <input type="text" name="text" placeholder="Nom" required="">
                                </div>

                                <div class="w3_conr">
                                    <input type="email" name="Email" placeholder="Email" required="">
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="styled-input">
                                <input type="text" name="Subject" placeholder="sujet" required="">
                            </div>

                            <div class="styled-input">
                                <textarea name="Message" placeholder="Message" required="">
                                </textarea>
                            </div><input type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>

                <div class="clearfix"></div>
                                <div class="col-md-6 agile-contact-left">
                    <div class="agileits-map"></div>

                    <div class="map-grid">
                    <img src="images/screen.png" class="screen" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- footer -->
    <div class="footer" id="footer">
        <div class="container">
            <div class="list">
                <div class="col-md-3 wthree_fl">
                    <a href="#"><img src="images/minilogo.png" alt="MCW Logo" class="logo"></a>
                    </div>
                    
                <div class="col-md-6 wthree_fc">
                    <h4> Av. Hassan II, </h4>
                    <h4> BP : 209 Poste Principale </h4>
                    <h4> Martil </h4>
                    </div>
                    
                    <div class="col-md-3 wthree_fr">
                    <h4>TÉL +212 539 97 91 75 <br>FAX +212 539 97 91 80</h4>
                    <h4><a href="mailto:contact@enstetouan.ma">contact@enstetouan.ma</a></h4>
                    </div>
                
                
            </div>
        </div>
    </div>
    
    <div class="copyright">
        <div class="container">
            
            <p>© 2018 MCW | Designed by Lemghari Achraf & Akhazzan Oussama <br> Sous la supervision du Dr.<a href="https://www.enstetouan.ma/d%C3%A9partements/d%C3%A9partement-de-l%E2%80%99informatique-et-de-gestion" target="_blank" >MOHAMED LAMARTI</a> </p>
            <p><a href="https://validator.w3.org" target="_blank"><img src="images/html.png" alt="HTML Valide !" class="verif" /></a>
            <a href="http://jigsaw.w3.org/css-validator" target="_blank"><img src="images/css.png" alt="CSS Valide !" class="verif" /></a></p>   
        </div>
    </div>
  

    <script  src="js/index.js"></script>




</body>

</html>
