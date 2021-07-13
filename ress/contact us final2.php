  
  <?php include 'sendemail2.php'; ?>
<?php include 'contactus2.php'; ?>
 
 
    <!DOCTYPE html>
    
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
       <link rel="stylesheet" href="contact us final2.css">
       <!-- <link rel='stylesheet' type='text/css' href='css/contact us final2.php' /> -->
     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>        
    
      </head>
      <body >
            
    <?php echo $alert; ?>
        <div class="contact-section">
          <div class="contact-info">  
            <strong>    
            <div><i class="fas fa-map-marker-alt"></i>Secundrabad, Hyderabad, India</div> 
            <div><i class="fas fa-envelope"></i>Namasterestaurantinfo@gmail.com</div>
            <div ><i class="fas fa-phone"></i>+91 8106 232 069</div>
            <div ><i class="fas fa-clock"></i>Mon - Sun 10:00 AM to 9:00 PM</div>            
          </strong>
          </div>    
          <div class="contact-form" >
            <h2 style="border:5px solid rgb(0, 0, 0) ;border-radius: 50px;background: -webkit-linear-gradient(left, #fdc62f, #f76c5a)">
              <strong> Book Your Table </strong>
            </h2>
    
            <form class="contact" action=" " method="post" style="background-color: black;opacity: 0.9;">
    
              <input type="text" name="Name"  id="Name" class="text-box" placeholder="Your Name" required style="color: rgb(255, 0, 0); border: 3px  solid rgb(0, 0, 0); border-radius: 8px ;opacity: 5; font-weight: bolder;">  
              
              <input type="email" name="Email" id="Email" class="text-box" placeholder="Your Email"  required style="color: rgb(255, 0, 0); border: 3px solid rgb(17, 17, 17) ;border-radius: 8px; font-weight: bolder;">
              <input type="date" name="Date"  id="Date" class="text-box" placeholder="Which Date & time You Want to Book" required style="color: rgb(255, 0, 0); border: 3px  solid rgb(0, 0, 0); border-radius: 8px ;opacity: 5; width: 500px; font-weight: bolder;">  
        
              <textarea name="descr" id="descr" cols="30" rows="10"  placeholder="Enter your query" style="color: red; font-weight: bolder;"></textarea>

              <input type="submit" name="submit" class="send-btn" value="Send">

            </form>
          </div>
        </div>
        
      
        <br><br><br><br><br>
        
        <script type="text/javascript">
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }
          </script>
      </body>
    </html>
    
 
   