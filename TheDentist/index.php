

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> <!-- fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assests/styles.css" >
    </head> 
      </head>
    <body>
       <header class=" header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between"> <!-- row justify-content-between= this spaces the nav from the title-->
                <a href="#home" class="logo "> dental <span> Care.</span></a>
                <nav class ='nav'>
                    <a href="#home"> home</a>
                    <a href="#about"> about</a>
                    <a href="#services"> services</a>
               
                    <a href="#contact"> contact</a>
                </nav>
                <a href="#contact" class="link-btn"> make appointment </a>
                <div id='menu-btn' class="fa fa-bars"></div>
            </div>
        </div>
       </header>
     
<section class="home" id="home">

    <div class="container">
 
       <div class="row min-vh-100 align-items-center">
          <div class="content text-center text-md-left">
             <h3>let us brighten your smile</h3>
             <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
             <a href="#contact" class="link-btn">make appointment</a>
          </div>
       </div>
 
    </div>
 
 </section>
 <!-- about section starts -->

 <section class="about" id="about">

    <div class="container">
 
       <div class="row align-items-center">
 
          <div class="col-md-6 image">
             <img src="assests/images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
          </div>
          <div class="col-md-6 content">
             <span>about us</span>
             <h3>True Healthcare For Your Family</h3>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
             <a href="#contact" class="link-btn">make appointment</a>
          </div>
 
       </div>
 
    </div>
 
 </section>
<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">our services</h1>
 
    <div class="box-container container">
 
       <div class="box">
          <img src="assests/images/icon-1.svg" alt="">
          <h3>Alignment specialist</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
       </div>
 
       <div class="box">
          <img src="assests/images/icon-2.svg" alt="">
          <h3>Cosmetic dentistry</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
       </div>
 
       <div class="box">
          <img src="assests/images/icon-3.svg" alt="">
          <h3>Oral hygiene experts</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
       </div>
 
       <div class="box">
          <img src="assests/images/icon-4.svg "alt="">
          <h3>Root canal specialist</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
       </div>
 
       <div class="box">
          <img src="assests/images/icon-5.svg "alt="">
          <h3>Live dental advisory</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
       </div>
 
       <div class="box">
          <img src="assests/images/icon-1.svg" alt="">
          <h3>Cavity inspection</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
       </div>
 
    </div> 
   </section>
 <!-- service ends here -->
<!--process -->
 <section class="process">
     <h1 class="heading">work process</h1>
     <div class="box-container container">
        <div class="box">
            <img src="assests/images/process-1.png" alt="">
            <h3> Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>
        <div class="box">
         <a href="#">
            <img src="assests/images/process-2.png" alt=""></a>
            <h3> Pediatric Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>
        <div class="box">
            <img src="assests/images/process-3.png" alt="">
            <h3> Dental Implants</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>
       
      
     </div>
 </section>


<!-- contact section starts -->
<!-- code doesn't have backend but will be fixed quick 
<?php 
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   
   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');
   // code in question 
   // if the time is not in the allocated time we shouldn't allow the client to insert 

   if($insert){
      $message[] = 'appointment made successfully!';

   }
   else{
      $message[] = 'appointment failed';
   }


}


?>
-->
<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>


</section>
 
        <script src="assests/script.js" async defer></script>
    </body>
</html>