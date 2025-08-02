<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Basic Page</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Desktop Background -->
      <div class="g-0 d-none d-md-block">
        <img src="resource/main_banner.jpg" alt="body_banner" class="img-fluid main-image" style="height: 100vh; width: 100%" />
      </div>

      <!-- Mobile background -->
      <div class="mobile-main-background col-12 d-block d-md-none">
        <div class="mobile-background-circle"></div>
        <div class="menu-bar">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>

      <div class="offset-md-1 col-md-10 header d-none d-md-flex">
        <div class="col-md-3 align-items-center header-text">
          <p style="font-size: 46px ; margin-top: 5px; white-space: nowrap;"><span style="color: #D54545;">K</span>avindu <span style="color: #D54545;">D</span>ev</p>
        </div>
        <div class="col-md-6 d-flex header-nav" style="gap: 65px; font-size: 18px; font-weight: 700; justify-content: center; align-items: center;">
          <span class="header-text">Home</span>
          <span class="header-text">About</span>
          <span class="header-text">Services</span>
          <span class="header-text">Portfolio</span>
          <span class="header-text">Contact</span>
        </div>
        <div class="offset-md-1 col-md-2 d-flex justify-content-center align-items-end">
          <p class="header-button">Let’s Talk</p>
        </div>
      </div>
      <div class="main-content-group offset-1 col-10 col-md-5 g-0">
        <p class="main-hi d-none d-md-block">Hi ,i’m</p>
        <p class="main-hi d-block d-md-none">Hi ,i’m Kavindu</p>
        <p class="main-name main-gap d-none d-md-block">Kavindu</p>
        <p class="main-role main-gap">I,m <span class="main-role-highlight">d</span>eveloper & <span class="main-role-highlight">P</span>rogrammer</p>
        <p class="main-desc main-gap-desc">I am a visionary thinker with strong leadership, creativity, and communication skills. Passionate about innovation and problem-solving, I thrive in dynamic environments, bringing ideas to life through design and technology.</p>
        <div class="offset-3 col-6">
          <button class="mobile-main-button d-md-none">Contact Us</button>
        </div>
        <div class="col-md-5">
          <button class="main-button d-none d-md-flex">Contact Us</button>
        </div>
      </div>
    </div>
  </div>
  <!-- About Section -->
  <div class="container-fluid">
    <div class="row">
      <div class="about-main-texts">
        <p class="about-heading">About Me</p>
        <p class="about-paragraph">Get To Know Me <span class="about-paragraph-highlight">Better</span></p>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="bootstrap.js"></script>
</body>
</html>