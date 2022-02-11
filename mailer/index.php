<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-new.css">
    
    <title>Mailer</title>
</head>
<body>
   <div class="map-box">
       <div class="map span-1-of-2">&nbsp;</div>
       
        <div class="form span-1-of-2" id="form">
           <div class="row">
               <h2>We're happy to hear from you</h2>
           </div>

           <div class="row">
               <form action="mailer-new.php" method="post" class="contact-form">
                  <div class="row">
                     
                     <?php
                      if ($_GET['success'] == 1) {
                          echo "<div class=\"form-messages success\">Thank you! Your message has been sent</div>";
                      } else if ($_GET['success'] == -1) {
                          echo "<div class=\"form-messages error\">Oops. Something went wwrong. Please try again!</div>";
                      }
                      ?>
                      
                  </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="name">Name</label>
                       </div>
                       <div class="col span-2-of-3">
                           <input type="text" name="name" id="name" placeholder="Your name" required>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="email">Email</label>
                       </div>
                       <div class="col span-2-of-3">
                           <input type="email" name="email" id="email" placeholder="Your email" required>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="find-us">How did you find us?</label>
                       </div>
                       <div class="col span-2-of-3">
                           <select name="find-us" id="find-us">
                               <option value="friends">Friends</option>
                               <option value="search">Search engines</option>
                               <option value="ads">Advertisements</option>
                               <option value="other">Other</option>
                           </select>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="news">Newsletter</label>
                       </div>
                       <div class="col span-2-of-3">
                           <input type="checkbox" name="news" id="news" checked>Yes, please!
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="message">Drop us a line</label>
                       </div>
                       <div class="col span-2-of-3">
                           <textarea name="message" id="message" placeholder="Your message"></textarea>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label>&nbsp;</label>
                       </div>
                       <div class="col span-2-of-3">
                           <input type="submit" value="Send it!">
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
</body>
</html>