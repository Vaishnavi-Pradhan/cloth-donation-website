
<!-- After Login Page   -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth Community</title>
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- google fonts- montserrat -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <style>
    .logo{
        width:40px;
        height: 40px;
        margin-right: auto;
        margin-left:0;
    }
    
</style> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <nav id="navbar">
        <div class="container nav__container">
            <!-- <img src="logo.jpg" alt="" class="logo"> -->
            <a href="index.html"><h4>Cloth Community</h4></a>
            <ul class="nav__menu">
                <li><a href="index.html">Home</a></li>

                <li><a href="#">Get Involved <i class="fas fa-caret-down"></i></a>
                <div class="dropdown__menu">
                    <ul>
                        <li><a href="ngo.html">NGO Partner</a></li>
    
                        <li><a href="nss.html">NSS Partner</a></li>
                    </ul>
                </div>
                
                </li>

                <li><a href="#abt">About us</a></li>
                <li><a href="#section-wrapper">Contact</a></li>
                <li><a href="index.html">Log Out &nbsp; <i class="fa-solid fa-right-to-bracket" style="color: #f5faf8;"></i></a></li>
            </ul>
    
        </div>
    </nav>
     
    <!-- header starts -->
    <header>
        <div class="container header__container" >
            <div class="header__left" id="left">
                 <div id="lefthalf">       <!--newdiv--> 

                 <!--To get the name of user--> 
                 <?php
    // Check if the name parameter exists in the URL
    if(isset($_GET['name'])) {
        // Print the name
        $name = $_GET['name'];
        echo "<h1>Hello, $name</h1>";
    } else {
        echo "<h1>Hello, Guest</h1>"; // If name parameter is not provided
    }
    ?>

              <h1>Welcome to<br> Threads of Kindness!</h1><br>
              <p>We Deliver your Donation to the Right Place </p><br><br>
            <a href="donation.html" class="btn btn-primary">Donate Now</a>
            <!-- <button class="btn btn-primary"><a href="donation.html" class="donate">Donate Now</a></button> -->
        </div>  <!-- End of new div -->
            </div>
            <div class="header__right" >
              <div class="header__right-image">
                <img src="cloth.jpg" id="img1"  alt="">
            </div>
            </div>
        </div>
    </header>
     <!-- header ends. -->

     <br><br><br><br><br>

       <!-- section1 start -->
       <div id="abtus">
     <div id="abt" class="container header__container">
        <div class="header__left">
          <h1>About us</h1>
          <br>
          <p>Welcome to Threads of Kindness, where every garment tells a story of compassion.<br>
            <br>
            We're more than just a clothing donation website. Our mission is simple: to spread warmth, dignity, and hope through donated clothing.
            <br><br>
            Partnering with local shelters and charities, we ensure that your contributions reach those in need. Together, let's weave a tapestry of kindness, one thread at a time. Join us in making a difference today.</p>
        </div>
        <div class="header__right" id="img2">
          <div class="header__right-image" >
            <img src="child.jpg" id="children" alt="">
        </div>
        </div>
    </div>
</div>
<!-- section1 ends -->


    <!-- Section2 how it works start -->
    <section class="Work" id="workpg">
        <h2>How it Works?</h2>
        <br>
        <br>
        <div class="container work__container">

         <article class="work">
            <div class="work__image">
                <img src="search.jpg" height="280px" alt="">
            </div>
            <div class="work__Info">
                <h4>Discover:</h4>
            <p>Browse through our curated list of NGOs and their causes, exploring projects aligned with your interests and values.</p>
         <!-- <a href="courses.html" class="btn btn-primary">Learn More</a> -->
            </div> 
        </article>  
        
        <article class="work">
            <div class="work__image">
                <img src="connect.png" alt="">
            </div>
            <div class="work__Info">
                <h4>Connect:</h4>
                <p>Engage directly with the NGOs of your choice, learning about their work, needs, and how you can contribute to their mission.</p>
             <!-- <a href="courses.html" class="btn btn-primary">Learn More</a> -->
            </div> 
        </article>  
    
        <article class="work">
            <div class="work__image">
                <img src="donate.JPG" width="173.39px" height="280px" alt="">
            </div>
           <div class="work__Info">
            <h4>Donate:</h4>
            <p>Make a meaningful impact by donating funds, supplies, or services to support the initiatives and projects of your chosen NGOs.</p>
            <!-- <a href="courses.html" class="btn btn-primary">Learn More</a>  -->
           </div>
        </article>  

        <article class="work">
            <div class="work__image">
                <img src="track.png"  alt="">
            </div>
           <div class="work__Info">
            <h4>Track Progress:</h4>
            <p>Stay informed about the impact of your contributions through real-time updates and witnessing the positive change your support helps to achieve.</p>
            <!-- <a href="courses.html" class="btn btn-primary">Learn More</a>  -->
           </div>
        </article> 
        </div>
    </section>
    <!-- Section how it works end -->
<br><br><br><br><br>


  <!-- Contact pg starts -->
  <section id="section-wrapper">
    <div class="box-wrapper">
        <div class="info-wrap">
            <h2 class="info-title">Contact Information</h2>
            <h3 class="info-sub-title">If you have any queries or suggestions, do let us know below!</h3>
            <ul class="info-details">
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>Phone:</span> <a href="tel:+ 1235 2355 98">99989898</a>
                </li>
                <li>
                    <i class="fas fa-paper-plane"></i>
                    <span>Email:</span> <a href="mailto:infotok@gmail.com">infotok@gmail.com</a>
                </li>
                <li>
                    <i class="fas fa-globe"></i>
                    <span>Website:</span> <a href="">threadsofkindness.com</a>
                </li>
            </ul>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="form-wrap">
            <form action="#" method="POST">
                <h2 class="form-title" id="msg">Send us a message</h2>
                <div class="form-fields">
                    <div class="form-group">
                        <input type="text" class="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="email" placeholder="Mail">
                    </div>
                    <div class="form-group">
                        <input type="number" class="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" placeholder="Write your message"></textarea>
                    </div>
                </div>
                <input type="submit" value="Send Message" class="submit-button">
            </form>
        </div>
    </div>
</section>


  <!-- Contact pg ends -->
</body>
</html>