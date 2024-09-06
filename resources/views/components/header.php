<? function HeaderComponent($type = 'default')
{
  if ($type === 'banner') { ?>
    <div class="mainbanner">
      <img class="logotip" src="media/Logo.png" width="80px">
      <header>
        <nav>
          <a href="">Equipment</a>
          <a href="">About us</a>
          <a href="">Blog</a>
          <?php
          if (isset($_SESSION['user']) && (int) $_SESSION['user']['role_id'] === 2) {
          ?>
            <div class="icons_h">
              <a href="?page=admin">
                <p class="acc">Account</p>
              </a>
            </div>
          <?php
          }
          ?>
          <?php
          if (isset($_SESSION['user']) && (int) $_SESSION['user']['role_id'] === 1) {
          ?>
            <div class="icons_h">
              <a href="?page=useracc">
                <p class="acc">Account</p>
              </a>
            </div>
          <?php
          }
          ?>
          <?php
          if (isset($_SESSION['user'])) { ?>
            <form action="action/logout.php" method="post">
              <button type="submit" class="buttonvoiti">Logout</button>
            </form>
          <?php } else { ?>
            <a href="?page=login">
              <p class="acc">Login</p>
            </a>
          <?php
          }
          ?>
        </nav>
      </header>
      <p class="nadzagbannera">A Hiking guide</p>
      <h1 class="zagolovokbanner">Be prepared for the Mountains and beyond!</h1>
      <p class="scroll">scroll down⭣</p>
    </div>
  <?
  } else {
  ?>

    <img class="logotip" src="media/Logo.png" width="80px">
    <header>
      <nav>
        <a href="">Equipment</a>
        <a href="">About us</a>
        <a href="">Blog</a>
        <p class="acc">Account</p>
      </nav>
    </header>
<? }
} ?>