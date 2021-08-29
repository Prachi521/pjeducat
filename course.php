<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="512x512" href="favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-chrome-192x192.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <!-- favicon ends -->

    
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital@1&family=Encode+Sans+SC:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Our Courses</h1>
    </section>

    <!---------Course------->
    <section class="course">
        <h1>Courses we offer</h1>
        <p>Lorem ipsum dolor sit amet, elit. I iure eum facere architecto exceptu</p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint cupiditate ullam natus ratione saepe.
                    Error, praesentium voluptates ducimus iure placeat inventore nostrum delectus minus quaerat aut amet
                    possimus sit nobis.
                    Distinctio voluptatem, iusto est dignissimos odio ullam itaq</p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint cupiditate ullam natus ratione saepe.
                    Error, praesentium voluptates ducimus iure placeat inventore nostrum delectus minus quaerat aut amet
                    possimus sit nobis.
                    Distinctio voluptatem, iusto est dignissimos odio ullam itaq</p>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint cupiditate ullam natus ratione saepe.
                    Error, praesentium voluptates ducimus iure placeat inventore nostrum delectus minus quaerat aut amet
                    possimus sit nobis.
                    Distinctio voluptatem, iusto est dignissimos odio ullam itaq</p>
            </div>
        </div>

    </section>
       <!------Facilities------->
       <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/lib.jpg" >
                <h3>Library</h3>
                <p>Lorem ipsum dolor, sit amet consectetur tempora delectus impedit adipisicing.</p>
            </div>
            <div class="facilities-col">
                <img src="images/sports.jpg" >
                <h3>Playground</h3>
                <p>Lorem ipsum dolor, sit amet consectetur tempora delectus impedit adipisicing.</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafe.jpg" >
                <h3>Cafeteria</h3>
                <p>Lorem ipsum dolor, sit amet consectetur tempora delectus impedit adipisicing.</p>
            </div>
        </div>
    </section>




    <!--    ------Footer------ -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing <br> Ipsam magni repudiandae, eum tempore id reprehenderit
            voluptate suscipit saepe, eaque, dicta nobis fuga sed nulla est voluptatibus atque quos fugit. Est.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart"></i>PJ</p>
    </section>
    <script>
        let navLinks = document.getElementById('navLinks');

        function showMenu() {
            navLinks.style.right = '0';
        }
        function hideMenu() {
            navLinks.style.right = '-200px';
        }


    </script>
</body>

</html>