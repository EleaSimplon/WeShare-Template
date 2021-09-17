<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="../css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <!-- ***** MATERIALIZE FRAMEWORK CSS ***** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- ***** MATERIALIZE ICON ***** -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!----- ***** URL ICON LINK *****------>
    <link rel="icon" href="/images/url-logo.png"/>
  </head>

  <body data-barba="wrapper">

    <nav class="white">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo red-text">Logo</a>   
            <ul class="hide-on-med-and-down right">                               
                <li><a href="sass.html" class="red-text">Sass</a></li>
                <li><a href="badges.html" class="red-text">Components</a></li>
                <li><a href="collapsible.html" class="red-text">JavaScript</a></li>
                
                <li>
                    <a class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">account_circle</i></a>
                </li>  
                <li>
                    <!-- <a class="waves-effect waves-light btn-small"><i class="material-icons right">block</i>Log out</a> -->
                    <a class="waves-effect waves-light btn-small">Log out</a>
                </li> 
            </ul>
        </div>
    </nav> 

    <div class="wrapper" data-barba="container" data-barba-namespace="architecture">
      <header>
        <a href="/pages/find-food.php">Food</a>
        <a href="/pages/find-activity.php" class="is-active">Activity<span>&nbsp;</span></a>
        <a href="/pages/find-destination.php" class="is-active">Destination<span>&nbsp;</span></a>
      </header>
      <main>

        <div class="column">
          <div class="project project01">
            <div class="image">
              <a href="detail-page.php"><img src="../images/view.jpg" /></a>
            </div>
          </div>
          <div class="project project04">
            <div class="image">
              <a href="detail-page.php"><img src="../images/view.jpg" /></a>
            </div>
          </div>
          <div class="project project06">
            <div class="image">
              <a href="detail-page.php"><img src="../images/view.jpg" /></a>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="project project02">
            <div class="image">
              <a href="detail-page.php"><img src="../images/view.jpg" /></a>
            </div>
          </div>
          <div class="project project03">
            <div class="image">
              <a href="detail-page.php"><img src="../images/view.jpg" /></a>
            </div>
          </div>
          <div class="project project05">
            <div class="image">
              <a href="detail-page.php"><img src="../images/view.jpg" /></a>
            </div>
          </div>
        </div>

      </main>
    </div>

    <footer></footer>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="../js/gsap/animations/animationEnter.js"></script>
    <script src="../js/gsap/animations/animationLeave.js"></script>
    <script src="../js/gsap/animations/leaveFromProject.js"></script>
    <script src="../js/gsap/animations/leaveToProject.js"></script>
    <script src="../js/gsap/animations/revealProject.js"></script>
    <script src="../js/gsap/app.js"></script>

    <!----- ***** MATERIALIZE CDN SCRIPT *****------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>