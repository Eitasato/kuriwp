<footer>
  <nav class="navbar navbar-expand navbar-light p-4" style="background-color: #c7b299;">
    <!--ブランド名-->
    <!--<a class="navbar-brand" href="#">Navbar</a>-->
    <!--トグルボタン-->
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/profile/">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/works/">Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/news/">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/contact/">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="copyright" style="background-color: #c7b299;">
 <small>©Kuriya Satoko</small>
</div>
</footer>
<?php wp_footer(); ?>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</body>
</html>
