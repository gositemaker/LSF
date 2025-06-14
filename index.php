<?php
include 'admin/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LifeSaviourFoundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-0">
                <h1 class="m-0 text-uppercase text-substle"><img src="img/logo.jpeg" height="60px" width="60px" margin-right="5px">LSF </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="story.html" class="nav-item nav-link">Story</a>
                    <a href="#member" class="nav-item nav-link">Members</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="#join" class="btn btn-danger btn-pills border-primary py-2 px-4">Join Us</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Welcome to</h1>
            <h1 class="text-white display-1 mb-5">Life <text style="color: rgb(235, 59, 59);">Saviour</text>  Foundation</h1>
  
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
   <div class="container-fluid py-5" id="about">
  <div class="container py-5">
    <div class="row">
      <!-- Image Column -->
      <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="img/bannernew.jpg" alt="About Us Image" style="object-fit: cover;">
        </div>
      </div>

      <!-- Text Column -->
      <div class="col-lg-7">
        <div class="section-title position-relative mb-4">
          <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
          <h1 class="display-4">Who We Are</h1>
        </div>
        <p>Life Saviour Foundation Bihar is a non-profit organization dedicated to saving lives through voluntary blood donation drives, emergency blood support, and crowdfunding for medical treatments. Founded by compassionate individuals in Forbesganj, Bihar, our mission is simple but urgent — no life should be lost due to lack of blood or financial help.</p>

        <!-- Stats Row -->
        <div class="row pt-3">
          <div class="col-6 col-md-3 mb-3">
            <div class="bg-success text-center p-4 h-100">
              <h1 class="text-white" data-toggle="counter-up">250</h1>
              <h6 class="text-uppercase text-white">Total<span class="d-block">Helped</span></h6>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="bg-primary text-center p-4 h-100">
              <h1 class="text-white" data-toggle="counter-up">250</h1>
              <h6 class="text-uppercase text-white">Life<span class="d-block">Saved</span></h6>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="bg-secondary text-center p-4 h-100">
              <h1 class="text-white" data-toggle="counter-up">200</h1>
              <h6 class="text-uppercase text-white">Blood<span class="d-block">Donated</span></h6>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="bg-warning text-center p-4 h-100">
              <h1 class="text-white" data-toggle="counter-up">100</h1>
              <h6 class="text-uppercase text-white">Donation<span class="d-block">Held</span></h6>
            </div>
          </div>
        </div>
        <!-- End Stats Row -->
      </div>
    </div>
  </div>
</div>

    <!-- About End -->

    <!-- News releases -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">News Releases</h6>
                    <h1 class="display-4">Checkout Our Work</h1>
                </div>
            </div>
        </div>
       
   <div class="owl-carousel courses-carousel">
<?php
$sql = "SELECT id, title, images FROM blogs ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="courses-item position-relative">';
        echo '<img class="img-fluid" src="admin/' . $row['images'] . '" alt="" style="height: 300px; width: 100%; object-fit: cover;">';
        echo '<div class="courses-text">';
        echo '<h4 class="text-center text-white px-3">' . $row['title'] . '</h4>';
        echo '<div class="w-100 bg-white text-center p-4">';
        echo '<a class="btn btn-primary" href="story.php?id=' . $row['id'] . '">Read News</a>';
        echo '</div></div></div>';
    }
} else {
    echo '<p class="text-center text-muted">No news found.</p>';
}
?>
</div>

       <div class="row justify-content-center bg-image mx-0 mb-5">
  <div class="col-lg-6 py-5" id="join">
    <div class="bg-white p-5 my-5">
      <h1 class="text-center mb-4">Become a member</h1>
        <div class="container py-1 border border-primary" style="max-width: 800px; ">
            <div class="section-title text-center mb-4">
            
                <h1 class="display-4"><text style="color: rgb(190, 52, 52);">Step</text> with us</h1>
            </div>
            <div class="contact-form">
                <form id="formB" action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" name="name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="number" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Phone Number" name="number" required>
                        </div>
                
                    <div class="form-row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="custom-select bg-light border-0 px-0 " style="height: 60px; width: 305px; margin-left: 15px;" id="groupB">
                                            <option selected>Select Blood Group</option>
                                            <option value="O+" >O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" >A+</option>
                                            <option value="A-" >A-</option>
                                            <option value="B+" >B+</option>
                                            <option value="B-" >B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                        </div>  
                        </div>
                        </div>
                        <div class="mb-3">
                                <label for="formFile" class="form-label">Upload your Image</label>
                                <input class="form-control" type="file" id="formFile" name="dp">
                            </div>
                            <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload proof of Blood group</label>
                                    <input class="form-control" type="file" id="formFile" name="proof">
                                </div>
                    <div class="text-center">
                        <button class="btn btn-primary py-3 px-5" type="submit" name="submit">Join Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

    <!-- Courses End -->





    <!-- Team Start -->
    <div class="container-fluid py-5" id="member">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Members</h6>
                <h1 class="display-4">Meet Our Saviours</h1>
            </div>
            
             <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <?php
                $sql = "SELECT id , name, profile_pic, role FROM members order by id desc";
                $result= $conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                   echo '<div class="team-item">';
                  echo '<img class="img-fluid w-100" src="admin/' .$row['profile_pic'] .' "alt="" style="height: 300px; width: 100%; object-fit: cover;">';
                  echo '<div class="bg-light text-center p-4">';
                   
                  echo '<h5 class="mb-3"> ' .$row['name'] . '</h5>';
                  echo '<p class="mb-2">' .$row['role'] . '</p>';
                    echo '</div></div>';
                }}
             ?>
                      
                  <!-- </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/courses-2.jpg" alt="" style="height: 300px; width: 100%; object-fit: cover;">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Dhimkana Singh</h5>
                        <p class="mb-2">2 unit in last 6 month</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/courses-3.jpg" alt="" style="height: 300px; width: 100%; object-fit: cover;">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Chilna Singh</h5>
                        <p class="mb-2">50 Hazar Diya</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/courses-5.jpg" alt="" style="height: 300px; width: 100%; object-fit: cover;">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Manish Singh</h5>
                        <p class="mb-2">Alfa Donator</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>-->
            
             </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Helped</h6>
                        <h1 class="display-4">What Say Our Saviours</h1>
                    </div>
                    <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                                <div>
                                    <h5>Member Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Member Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0">+0123456789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-4">Send Us A Message</h1>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="number" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Phone number" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
<!-- Footer Start -->
<div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
  <div class="container mt-5 pt-5">
    <div class="row">
      <!-- Logo & Description -->
      <div class="col-12 col-md-6 mb-4">
        <a href="index.html" class="navbar-brand">
          <h1 class="mt-n2 text-uppercase text-white text-wrap" style="word-break: break-word; font-size: 1.4rem;">
            <i class="fa fa-book-reader mr-2"></i>Life Saviour Foundation
          </h1>
        </a>
        <p class="m-0">
          A society where compassion leads the way — where donors step forward without hesitation,
          and every patient receives the support they need to survive and heal.
        </p>
      </div>
    </div>

    <div class="row">
      <!-- Contact Info -->
      <div class="col-12 col-md-4 mb-5">
        <h3 class="text-white mb-4">Get In Touch</h3>
        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
        <div class="d-flex justify-content-start mt-4">
          <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
          <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
          <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
          <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
        </div>
      </div>

      <!-- Spacer (Optional) -->
      <div class="col-12 col-md-4 mb-5"></div>

      <!-- Quick Links -->
      <div class="col-12 col-md-4 mb-5">
        <h3 class="text-white mb-4">Quick Links</h3>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
          <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Copyright -->
<div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
        <p class="m-0">
          Copyright &copy; <a class="text-white" href="#">Your Site Name</a>. All Rights Reserved.
        </p>
      </div>
      <div class="col-md-6 text-center text-md-right">
        <p class="m-0">
          Designed by <a class="text-white" href="https://gositemaker.com">GoSite Maker</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top">
  <i class="fa fa-angle-double-up"></i>
</a>
<!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $('.courses-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: { items: 1 },
            576: { items: 2 },
            992: { items: 3 }
        }
    });
</script> -->
</body>

</html>

<?php
$conn = new mysqli("localhost", "root", "", "lsf");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Prepare the insert statement with placeholders



    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, blood_group, blood_group_proof, profile_image) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        echo "Prepare failed: " . $conn->error;
        exit;
    }

    // Bind the parameters: 6 strings
    $stmt->bind_param(
        "ssssss",
        $_POST['name'],
        $_POST['email'],
        $_POST['number'],
        $_POST['groupB'],
        $_POST['proof'],
        $_POST['dp']
    );

    // Execute and handle response
  if ($stmt->execute()) {
    echo "<script>alert('You joined successfully!');</script>";


    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>
