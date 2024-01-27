<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>bliss smoothies</title>
</head>
<body>


<?php include './components/header.php';?>
    <div class="main">      
    <!-- SECTION -->
    <div class="section-wrapper">
    <div class="section-box">
        <div class="section-logo"> 
            <ion-icon name="fitness-outline"></ion-icon>
        </div>
        <a href="" class="section-header">
            wellness
        </a>
        <p class="section-paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque inventore in autem explicabo, voluptas consectetur?
        </p>
    </div>

    <div class="section-box">
        <div class="section-logo">
            <ion-icon name="fast-food-outline"></ion-icon>
        </div>
        
        <a href="" class="section-header">
            Blissmix
        </a>
        <p class="section-paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque inventore in autem explicabo, voluptas consectetur?
        </p>
    </div>

    <div class="section-box">
        <div class="section-logo"> 
            <ion-icon name="options-outline"></ion-icon>
        </div>

        <a href="" class="section-header">
            custom bliss
        </a>
        <p class="section-paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque inventore in autem explicabo, voluptas consectetur?
        </p>
    </div>

    <div class="section-box">
        <div class="section-logo">
            <ion-icon name="people-outline"></ion-icon>
        </div>
        <a href="" class="section-header">
            kid bliss
        </a>
        <p class="section-paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque inventore in autem explicabo, voluptas consectetur?
        </p>
    </div>

    </div>
    </div>

    <!-- SERVICES -->
    <div class="main services-wrapper">
        <div class="services-box">
            <div class="services-image">
            <?php
            $imageDirectory = 'img/';
            $newImage = 'new.png';
            echo '<img src="' . $imageDirectory . $newImage . '" alt="whats new" class="giftcard">';
            ?>
            </div>

            <div class="services-details">
            <a href="" class="services-header">
                What's new ?
            </a>
            <p class="services-paragraph">
                Lorem ipsum dolor sit.
                Amet consectetur adipisicing elit. Culpa
                Iste iusto adipisci, impedit tempora, odio vero unde.
            </p>
            </div>
        </div>
        <div class="services-box">
            <div class="services-image">
            <?php
                $imageDirectory = 'img/';
                $giftImage = 'giftcard-1.jpg';
                echo '<img src="' . $imageDirectory . $giftImage . '" alt="Hero Image" class="giftcard">';
            ?>
            </div>

            <div class="services-details">
                <a href="" class="services-header">
                    Buy gift cards
                </a>
                <p class="services-paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque inventore in autem explicabo, voluptas consectetur?
                </p>
            </div>
        </div>
    </div>

    <!-- SERVINGS -->
    <div class="main servings-wrapper">
         <div class="servings-details">
            <div class="servings-digits ">
               <span>6,377</span>
            </div>
            <p class="servings-paragraph">
               Smoothies Served Today
            </p>
         </div>

         <div class="servings-details">
            <div class="servings-digits">
               <span>261,446</span>
            </div>
            <p class="servings-paragraph">
               Smoothies Served Per Month
            </p>
         </div>

         <div class="servings-details">
            <div class="servings-digits">
               <span>3,314,168</span>
            </div>
            <p class="servings-paragraph">
               Smoothies Served Per Year
            </p>
         </div>
      </div>

      <!-- FOOTER -->
      <div class="footer">
        <div class="main">
            <!-- <div class="footer-logo outline"> -->
            <?php
            $imageDirectory = 'img/';
            $logoImage = 'bliss-logo.png';
            echo '<img src="' . $imageDirectory . $logoImage . '" alt="bliss smoothie logo" class="footer-logo-img">';
            ?>  
            <!-- </div> -->
            <div class="footer">
            <!-- id="footer-heading" -->
                <h3>Business</h3>
                <div>
                    <p class="footer-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque maiores consequuntur numquam illum saepe dignissimos!</p>
                </div>
            </div>
                <div class="footer">
                <h3>Support</h3>
                <div>
                    <p class="footer-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, id?.</p>
                    <p class="footer-paragraph">+233 555 666 777</p>
                    <a href="#" class="footer-paragraph email">support@bliss.com</a>
                </div>
            </div>
            <div class="footer-links">
                <div class="inner-out">
                <div>
                    <a href="">home</a>
                    <a href="">contact us</a>
                    <a href="">products</a>
                    <a href="">errrhnm ok</a> 
                </div>
                </div>
                <div class="inner-out">
                <div class="footer-social">
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-facebook"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                </div>
            </div>
        </div>
      </div>
<script src="script.js"></script>      
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>