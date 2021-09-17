<?php

include 'include/header.php';

?>

  <body data-barba="wrapper">

    <div class="wrapper" data-barba="container" data-barba-namespace="architecture">
      <header>
        <a href="/pages/find-food.php">Landscape</a>
        <a href="/pages/find-activity.php" class="is-active">Architecture<span>&nbsp;</span></a>
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

  </body>
</html>
