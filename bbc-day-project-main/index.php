<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doms and Events</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
  </head>
  <body>
    <!-- Navigation bar -->
    <nav>
      <img src="images/logo.jfif" alt="" />
      <a href="#" id="registerButton">Register</a>
      <a href="#" id="loginBtn">Login</a>
      <a href="">Contact</a>
      <a href="">Faqs</a>
      <a href="">About</a>
      <a href="">Home</a>
    </nav>

    <!-- banner section -->
    <div class="banner">
      <div class="welcome-message">
        <h1>Welcome to the Faculty of Computing!</h1>
        <p>Join us in shaping the future of technology together.</p>
      </div>
    </div>

    <!-- about us section -->
    <h3 class="title">About the Faculty of Computing</h3>

    <div class="about-section">
      <div class="column left-column">
        <!-- Content for the left column -->
        <img src="images/about.jpg" alt="Faculty Image" style="width: 600px" />
      </div>
      <div class="column right-column">
        <!-- Content for the right column -->
        <h2>Welcome to the Faculty of Computing!</h2>
        <p>
          The Faculty of Computing is at the forefront of technological
          innovation, offering a dynamic learning environment where students can
          explore and master the latest advancements in information technology.
        </p>
        <p>
          Our dedicated faculty members are experts in their fields, committed
          to providing hands-on, industry-relevant education. From computer
          science to cybersecurity, our programs cover a wide range of
          specialized areas to prepare students for diverse and exciting career
          paths.
        </p>
        <p>
          As a student in the Faculty of Computing, you'll have access to
          state-of-the-art labs, collaborative spaces, and a supportive
          community of peers and mentors. Our goal is to empower you with the
          skills and knowledge needed to thrive in the ever-evolving landscape
          of the digital age.
        </p>

        <p>
          Join us on this exciting journey of discovery and innovation. Whether
          you're passionate about software development, data science, or
          cybersecurity, the Faculty of Computing is here to support your
          academic and career aspirations.
        </p>

        <!-- Add more content as needed -->
      </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
      <div class="columns">
        <div class="column">
          <h3>Contact Information</h3>
          <p>
            Contact us:
            <a href="mailto:info@facultyofcomputing.com"
              >info@facultyofcomputing.com</a
            >
          </p>
          <p>Phone: +1 (555) 123-4567</p>
          <p>Address: 123 Tech Street, Computing City, CC 12345</p>
        </div>
        <div class="column">
          <h3>Connect With Us</h3>
          <p>
            Stay connected with the Faculty of Computing through our social
            media channels:
          </p>
          <ul class="social-links">
            <li>
              <a href="https://facebook.com/facultyofcomputing" target="_blank"
                >Facebook</a
              >
            </li>
            <li>
              <a href="https://twitter.com/facultycomputing" target="_blank"
                >Twitter</a
              >
            </li>
            <li>
              <a
                href="https://linkedin.com/company/facultyofcomputing"
                target="_blank"
                >LinkedIn</a
              >
            </li>
            <!-- Add more social media links as needed -->
          </ul>
        </div>
        <div class="column">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Events</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; 2024 Faculty of Computing. All rights reserved.</p>
      </div>
    </div>
    <div class="login-popup" id="registerform">
      <h2>Login</h2>

      <form action="insert.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" /><br />

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" /><br />

        <label for="regNumber">Reg Number :</label>
        <input type="text" id="regNumber" name="regNumber" /><br />

        <label for="yearOfStudy">Year of study:</label>
        <input type="text" id="yearOfStudy" name="yearOfStudy"/><br />
        
        <button type="submit" onclick="register(),clearForm()">Register</button>
        <button>Cancel</button>
      </form>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>
