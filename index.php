<!-- First we make connection with mysql database -->
<?php
    $insert=false;
    $shi=true;
    if(isset($_POST['name']))
    {   
    $server= "localhost";
    $username= "root";
    $password= "";

    $con=mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("Connection to this data base failed due to".
        mysqli_connect_error());
    }
    // echo "Success connecting to the database"

    function test_input($data) {    //THIS IS OPTIONAL
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    $name = test_input($_POST["name"]);
    $age=$_POST['age'];
    $email = test_input($_POST["email"]);
    $address=$_POST['address'];
    $interest=$_POST['interest'];
    //CHECKING THE INPUT
    if((preg_match("/^[a-zA-Z ]*$/",$name))and(strlen($age)<3)and(strlen($address)<=100)and(filter_var($email, FILTER_VALIDATE_EMAIL)))
    {
       $sql="INSERT INTO `eform`.`form` (`name`, `age`, `email`, `address`, `interest`, `dt`) VALUES ('$name', '$age', '$email', '$address', '$interest', current_timestamp())";

       if($con->query($sql)==true)
       {
         $insert=true;
        }
       else
       {
         echo "Error:$sql <br> $con->error";
       }
    }
    else{
        $shi=false;
    }
    $con->close();
   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iEducate - Transforming Online Education</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="navbar background h-nav">
        <ul class="nav-list v-class">
            <div class="logo">
                <img src="img/icon.png" alt="logo">
            </div>
            <!-- #home means it shift the screen to the place whose id is home -->
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="rightnav  v-class">
            <form action="https://www.google.com/search?q"target="_blank" method="get">
            <input type="text" name="q" id="search" onfocus="this.value=''" value="">
             <input type="Submit"class="btn btn-sm">
             </form>

        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
   
    </nav>
    <section class="background firstsection" id="home">
        <div class="box-main">    
        <?php
        if(($insert!=true)and($shi!=true))
        {
        echo "  <script> alert('WRONG INPUT');
            </script>
            ";
        }
        if(($insert==true)and($shi==true)){
            echo "<script>alert('Your Form Has Been Successfully Submitted!!!');
            </script>";
        }
       ?>
        
        <div class="fhalf">
                <p class="bigtext">Online Education is Basic need</p>
                <p class="smalltext">At iEducation, we envision a future in which all students become thriving adults, able and empowered to lead personally meaningful lives and to contribute to their communities.</p>
                <div class="buttons">
                    <button class="btn"><a style="text-decoration:none;color:white"  href="#contact">Subcribe</a></button>
                    <button class="btn"><a style="text-decoration:none;color:white"  href="https://www.youtube.com/results?search_query=onlinelearningcoursessubject" target="_blank">Watch Video</a></button>
                </div>
            </div>
            <div class="shalf">
                <img src="img/icon.png" alt="laptop">
            </div>
        </div> 
    </section>
    <hr>
    <section class="section" >
    <h1 id="about" >About</h1>   
    </section>
    <section class="section">
        <div class="para">
            <p class="sectiontag bigtext">The end of your search is here</p>
            <p class="sectionsubtag smalltext">Education is the process of facilitating learning, or the acquisition of
                knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training,
                storytelling, discussion and directed research. Education frequently takes place under the guidance of
                educators, however learners can also educate themselves. Education can take place in formal or informal
                settings and any experience that has a formative effect on the way one thinks, feels, or acts may be
                considered educational. The methodology of teaching is called pedagogy.</p>
        </div>

        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?coding,apple" alt="laptop img" class="imgFluid">
        </div>
    </section>
    <section class="section section-left">
        <div class="para">
            <p class="sectiontag bigtext">Transforming the Education here</p>
            <p class="sectionsubtag smalltext">Distance education or distance learning is the education of students who may not always be physically present at a school.Traditionally, this usually involved correspondence courses wherein the student corresponded with the school via post. Today, it involves online education. A distance learning program can be completely distance learning, or a combination of distance learning and traditional classroom instruction (called hybrid or blended).Massive open online courses (MOOCs), offering large-scale interactive participation and open access through the World Wide Web or other network technologies, are recent educational modes in distance education.A number of other terms (distributed learning, e-learning, m-learning, online learning, virtual classroom etc.) are used roughly synonymously with distance education.</p>
        </div>

        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?coding,apple,HTML" alt="laptop img" class="imgFluid">
        </div>
    </section>
    
    <section class="section">
        <div class="para">
            <p class="sectiontag bigtext">The discrimination in education ends here</p>
            <p class="sectionsubtag smalltext">The modern use of electronic educational technology (also called e-learning) facilitates distance learning and independent learning by the extensive use of information and communications technology (ICT), replacing traditional content delivery by postal correspondence. Instruction can be synchronous and asynchronous online communication in an interactive learning environment or virtual communities, in lieu of a physical classroom. "The focus is shifted to the education transaction in the form of virtual community of learners sustainable across time.</p>
        </div>

        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?coding,apple,Javascript" alt="laptop img" class="imgFluid">
        </div>
    </section>
    <hr>
    <section class="section">
    <h1 id="services">Services</h1>   
    </section>
    <section class="section-left section" > 
        <div class="para">
            <p class="sectiontag bigtext">Unacademy: We are India's largest learning platform</p>
            <p class="sectionsubtag smalltext">Unacademy is an e-learning platform that aims to build an online knowledge repository for multilingual education. The Bengaluru based platform founded by Gaurav Munjal, Roman Saini and Hemesh Singh connects expert educators with students across cities looking for quality education.Our success stories include thousands of students who have cracked toughest of examinations, improved their ability to speak and write better and increase their knowledge. Our vision is to partner with the brightest minds and have courses on every possible topic in multiple languages so the whole world can benefit from these courses. </p>
            <a href="https://www.unacademy.com" target="_blank">More</a>
        </div>

        <div class="thumbnail">
            <img src="img/unacademy.jpg" alt="laptop img" class="imgFluid">
        </div>
    </section>
    <section class="section ">
        <div class="para">
            <p class="sectiontag bigtext">Udemy: Learn anything on your schedule </p>
            <p class="sectionsubtag smalltext">Udemy, founded in May 2010, is an American online learning platform aimed at professional adults and students. As of Jan 2020, the platform has more than 50 million students and 57,000 instructors teaching courses in over 65 languages. There have been over 295 million course enrollments.Udemy is an online learning and teaching marketplace with over 100000 courses and 24 million students. Learn programming, marketing, data science and many more</p>
        <a href="https://www.udemy.com" target="_blank">More</a>
        </div>

        <div class="thumbnail">
            <img src="img/udemy.jpg" alt="laptop img" class="imgFluid">
        </div>
    </section>
    
    <section class="section section-left">
        <div class="para">
            <p class="sectiontag bigtext">BYJU'S -The Learning App</p>
            <p class="sectionsubtag smalltext">The Learning App is the common brand name for Think and Learn Private Ltd., an Indian educational technology (edtech) and online tutoring firm founded in 2011 by Byju Raveendran at Bangalore.In March 2019, it was the world's most valued edtech company at $5.4 billion (Rs 37,000 crore).Byju's has claimed on 27 May 2020 that they have gained Rs. 2,800cr revenue in FY20.The main focus is on mathematics and science, where concepts are explained using 12-20 minute digital animation videos.BYJU'S reports to have 40 million users overall, 3 million annual paid subscribers and an annual retention rate of about 85%.The app purports to tailor the content provided to the ind
            
            
            ividual student's learning pace and style. The average student spends 53 minutes daily using BYJU'S.</p>
        <a href="https://www.byjus.com" target="_blank">More</a>
        </div>

        <div class="thumbnail">
            <img src="img/byju.jpg" alt="laptop img" class="imgFluid">
        </div>
    </section>
    
    <hr>
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <div class="form">
            <form action="index.php" method="post" class="form"> 
            <input class="form-input "type="text" name="name" id="name" placeholder="Enter your name">
            <input class="form-input "type="text" name="age" id="age" placeholder="Enter your age">
            <input class="form-input "type="email" name="email" id="email" placeholder="Enter your email">
            <input class="form-input "type="text" name="address" id="address" placeholder="Enter your address">
            <textarea class="form-input "name="interest" id="interest" cols="20" rows="8"placeholder="Elaborate your interest"></textarea>
         
            <button class="btn2 btnx">Submit</button>
        </form>
 
        </div>
       
    </section>
    <footer class="footer background">
        Copyright &copy 2020- All rights reserved.
    </footer>
    <script>
         if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
         </script>

    <script src="js/res.js"></script>
    </body>


</html>