<!-- <div class="header-container"> -->
<nav class="header-wrapper">
   <div class="header-logo">
        <!-- <span> -->
        <?php
            $imageDirectory = 'img/';
            $logoImage = 'bliss-logo.png';
            echo '<img src="' . $imageDirectory . $logoImage . '" alt="bliss smoothie logo" class="header-logo-img">';
        ?>  
        <!-- </span> -->
    </div>
    <div class="header-links">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <div class="header-icons">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
    </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="menu-btn">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>

   
</nav>
</div>

<div class="mobile-menu">
    <div class="mobile-menu--wrapper">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>

        <div class="profile">
                <div class="btn">
                    login
                </div>
                <div class="btn">
                    register
                </div>
        </div>

        <div>
            <form action="">
                <div class="form-item-wrapper">
                    <!-- <label for="">Search</label> -->
                    <input type="text" name="search" placeholder="search product">
                </div>
            </form>

            <div class="search">
                <div class="search-output--wrapper">
                    <div class="search-output--details">
                        <h5 class="search-output--header">Lorem, ipsum.</h5>
                        <small class="search-output--paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eaque distinctio sint!</small>
                    </div>    

                    <div>
                    <?php
                    $imageDirectory = 'img/';
                    $searchImage = 'mix-two.jpg';
                    echo '<img src="' . $imageDirectory . $searchImage . '" alt="bliss smoothie" class="search-output--image">';
                    ?> 
                    </div>  

                
                </div>
            <!-- <div> -->
                <div class="search-output--btns">
                        <button class="btn-sm">add to cart</button>
                        <button class="btn-sm">view product</button>
                </div>
            </div>
            <!-- </div> -->
           
                <!-- <p>name:</p>
                <p>item:</p>
                <p>description:</p>
                <p>image:</p> -->
            
        </div>
    </div>
</div>


