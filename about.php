<!--─────────────────ABOUT PAGE────────────────-->

<?php include("topbit.php") ?>


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
          <li class="navbarli"><a style= "color: var(--main-fonts-color)" href="index.php">Home</a></li>
          <li class="active"><a style= "background: var(--main-decor-color); color: var(--main-fonts-color)" href="#">About Us</a></li>
          <li class="navbarli"><a style= "color: var(--main-fonts-color)" href="contact.php">Contact</a></li>
          <li class="navbarli"><a style= "color: var(--main-fonts-color)" href="#">Page 3</a></li>
        </ul>
      </div>
    </nav>
  </header> <!-- / banner -->

  <main>
    <h2>ABOUT</h2>
    <p>Why would you need to know about two random dudes making a site about strategy games? what pupose would this information hold? why did you even click this?</p>
  </main>

<?php include("bottombit.php") ?>