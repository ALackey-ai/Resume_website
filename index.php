<!-- starter code -->


<!-- I think this line makes the css values recognize a mobile screen size -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  -->

<?php
// php code to run if needed
?>
<html>
  <link rel = "stylesheet" href = "index.css">
  <!-- // reference css files as needed -->
<!--     <link rel = "stylesheet" href = "style_home.css">
    <link rel = "stylesheet" href = "index.css">
    <link rel = "stylesheet" href = "style_login_signup_buttons.css">
    <link rel = "stylesheet" href = "style_Login_Signup.css"> -->
  

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
  </style>

  
  <!-- // add some scripts as needed -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type = "text/javascript" src="buttonFunction.js"></script>
    <script type = "text/javascript" src="renderCorrectInfoBasedOnAuth.js"></script> -->
    
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      

    </head>

    <body>
      <div id="particles-js" id="par1">

      <!-- wifey says I should have a more professional picture -->
        <div id="main_box">
          <img src="portrait.jpg" id="portrait">
          <h1 id="title">
          Andrew Lackey
          </h1>
          <div id="social_links">
            <a href="mailto:andrewlackey97@gmail.com">
              <img src="gmail-icon.png" id="gmail-icon" alt="Email me">
            </a>
            <a href="https://www.linkedin.com/in/andrew-lackey-bb2049253/" target="_blank">
              <img src="linked_in_icon.png" id="linked_in_icon" alt="My Linked In page">
            </a>
          </div>
        </div>
        
        <div id="wrapper">
          <div class="sub_box" id="sub_box1">
            <div id="Introduction_background">
              <h2 id="About_me">
                A little about me...
              </h2>
              <!-- Probably change these from text links to either buttons or div's behind each text. Actually div's behind
              each could look really nice if I added some js to make them slowly "highlight" or even just slowly gain a shadow
              to remind the fact that they are clickable. Then link to the tabs at the bottom of the page. If I go the div 
              route, make sure it still looks good when the text wraps on a smaller screen, especially including on mobile devices. -->
              <ul id="general_stats">
                <li><a href=#sub_box2>B.S. Computer Science, Emphasis in Cyber Security from Boise State University<a></li>
                <li><a href=#sub_box3>Software Engineer with Hewlett Packard Enterprise<a></li>
                <li><a href=#sub_box2>Three summers of first responder experience as wildland firefighter with USFS<a></li>
                <li><a href="link to achor of Drone stuff">Experience in flying and creating custom drones<a></li>
                
                <li><a href="link to achor of Firearms experience">Trained by an experienced law enforcement officer, collegiate shooting coach, and other instructors on safe and effective firearm use for hunting, sporting and self defense<a></li>
              </ul>
            </div>
          </div>

          <div class="sub_box" id="sub_box2">
            <div id="Education_descrip">
              <h2 id="Formal_ed">
                Formal education 
              </h2>
              <ul id="ed_details">
                <li><a>Bachelor of Science in Computer Science from Boise State University</a></li>
                  <ul><a>- Graduated Cum Laude, Class of 2024</a></ul>
                <li><a>Completed degree with Emphasis in Cyber Security</a></li>
                  <ul><a>- Cyber Security Emphasis is curriculum endorsed by the NSA</a></ul>
                <li><a>Educated and Certified by Federal Aviation Administration on Part 107</a></li>
                  <ul><a>- The FAA offers a Remote Pilot Certificate that satisfies the Small UAS Rule (Part 107). I have been certified under this rule to fly a small UAS and have approx 40 flight hours of experience so far.</a></ul>
              </ul>
            </div>
          </div>

          <!-- I think I want to do expanded info for each section as linked and clickable "tabs" directly 
          below and connected to this section. Make it easy to undertand where the user is brought to on the
          page and intuitive to navigate -->
          <div class="sub_box" id="sub_box3">
            <div id="Job_exp_descrip">
              <h2 id="Job_exp">
                Job Experience 
              </h2>
              <ul id="job_exp_details">
                <li><a>July 2024 - present: Software Engineer with Hewlett Packard Enterprise</a></li>
                  <ul><a>- Work on Operating Systems (I should add more details here)</a></ul>
                <li><a>Summer of &nbsp;'23: Software Engineer Intern with Hewlett Packard Enterprise</a></li>
                  <ul><a>- I made a helpful tool for manual and OS triggered firmware updates on a linux based system</a></ul>
                <li><a>While in college &nbsp;'20-'24: MakerLab Lead at Boise State University</a></li>
                  <ul><a>- Student level leadership position helping teach students how to use innovative technologies</a></ul>
                <li><a>During summers of college &nbsp;'20-'22: Wildland firefighter for USFS</a></li>
                  <ul><a>- Spent 3 summers learning not only how to fight fire, but how to effectively work as a team in coordination with other teams sometimes on an inter-agency operation in order to contain and control any given incident</a></ul>
                <li><a>Summer of &nbsp;'19: Groundskeeper for OSU extention office</a></li>
                  <ul><a>- Maintained and did general upkeep for the expansive grounds of the OSU Agricultural Extension Office in Union, Oregon</a></ul>
                <li><a>Summer of &nbsp;'18: Barrista for local coffee shop</a></li>
                  <ul><a>- Took orders, made and prepared an assortment of coffee related drinks, and was a barrista in a small town coffee shop</a></ul>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- particles js files -->
      <!-- first particles.js file and then app.js -->
      <script src="particles.js"></script>
      <script src="app.js"></script>

    </body>
</html>
            
