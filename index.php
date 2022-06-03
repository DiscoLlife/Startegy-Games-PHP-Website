<!--─────────────────HOME PAGE────────────────-->

<?php include("topbit.php") ?>
  <?php include("script.php")?>
  <!--────────────────HEADER───────────────-->
  <header>
    <nav class="navbar navbar-default" style= "background-color: var(--main-nav-color); color: #999">
      <div class="container-fluid">
        <ul class="nav navbar-nav" >
          <!-- Logo -->
            <li class="navbarli" style = "padding-top: 0px; padding-bottom: 0px">
              <button style="width:150px; height: 60px; background-color: var(--main-nav-color);" onclick="PlaySound()"> 
                <img src="images/Logo.webp" width="100" height="30" alt="Logo" />
              </button>
            </li>
          <!--Tabs/Other Pages-->
          <li class="active"><a style="background: var(--main-decor-color); color: var(--main-fonts-color)" href="#">Home</a></li>
          <li class="navbarli"><a style= "color: var(--main-fonts-color)" href="about.php">About Us</a></li>
          <li class="navbarli"><a style= "color: var(--main-fonts-color)" href="contact.php">Contact</a></li>
          <li class="navbarli"><a style= "color: var(--main-fonts-color)" href="#">Page 3</a></li>
        </ul>
      </div>
    </nav>
    
      <h1>Strategy Games</h1>  

  </header> <!-- / banner -->

  

  <main>
    <h2>Welcome</h2>
    
    <p>
        This page is gonna be a big fat collection of strategy
    </p>
    
    <p>&nbsp;</p>
    
    <hr style= "border-top-color: var(--main-text-color);">
    
    <h3>Acknowledgements &amp; Sources</h3>
    
    <ul>
      <li><a style= "color: var(--main-a-color);" href="https://www.kaggle.com/tristan581/17k-apple-app-store-strategy-games/version/1" target="_blank">original "17K Mobile Strategy Games" dataset</a></li>
    </ul>

  </main>
      
<?php include("bottombit.php") ?>