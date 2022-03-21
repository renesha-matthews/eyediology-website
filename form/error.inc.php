<style type="text/css">
/******************** Universal Styling ********************/

/* Reset */
* {
    padding: 0;
    margin: 0;
}

body {
    font-family: myriad-pro, sans-serif;
    color: #07262F;
}

h1, h2, h3, h4, h5, h6 {
    font-family: como, sans-serif;
}

/******************** Header ********************/

/**** Logo ****/
.logo {
    max-width: 100%;
    padding-top: 20px;
    display: block;
    margin-right: auto;
    margin-left: auto;
}

/**** Mobile Nav Menu *****/

/* Mobile Nav Toggle Container */
.menu-flex-container {
    display: flex;
    justify-content: center;
    gap: 50px;
    align-items: center;
    flex-direction: row-reverse;
    background-color: #20B2DA;
    margin-top: 18px;
}

.menu {
    text-transform: uppercase;
    color: #FFF;
}

li.mobile-nav {
    position: relative;
    text-align: right;
    display: block;
    height: 4.5rem;
    /* vertical-align: middle;  */
  }
  
  /* Hamburger Menu */ 
  #nav-toggle {
    font-size: 1.875rem;
    position: absolute;
    width: 32px;
    left: 0;
    height: 73px;
    background: transparent;
    border: none;
    display: block;
    z-index: 1000;
    line-height: 1;
    padding: 0;
    cursor: pointer; 
  }
  
  #nav-toggle:hover, 
  #nav-toggle:focus {
    color: #20B2DA;
    outline: none; 
  }

  #nav-toggle .menu {
    position: absolute;
    display: block;
    width: 1.875rem;
    height: 2px;
    background: #FFF;
    overflow: visible;
    transition: background-color 0.3s ease-out;
    transition-delay: 0.1s; 
  }

  #nav-toggle .menu:before,
  #nav-toggle .menu:after {
    content: "";
    position: absolute;
    left: 0;
    width: 1.875rem;
    height: 2px;
    background: #FFF;
    transition: transform .2s;
  }

   #nav-toggle .menu:before {
    top: -8px; 
  }

  #nav-toggle .menu:after {
    top: 8px; 
  }

  #nav-toggle.open .menu {
    background-color: transparent;
    transition: background-color 0s;
    transition-delay: 0s; 
  }

  #nav-toggle.open .menu:before, 
  #nav-toggle.open .menu:after {
    transition: transform .3s;
  }

  #nav-toggle.open .menu:before {
    top: 0;
    box-shadow: none;
    transform: rotate(45deg); 
  }

  #nav-toggle.open .menu:after {
    transform: rotate(-45deg);
    top: 0; 
  }
  
  /* Mobile Nav Menu Styles */
  nav.mobile {
    display: block;
    position: fixed;
    top: 8rem;
    width: 100%;
    background-color: #07262F;
    z-index: 3;
    box-shadow: 0px 1px 3px -1px rgba(41, 70, 97, 0.2);
    transform: translate(0, -360px);
    transition: all 0.3s ease-out;
    padding-bottom: 1rem;
    opacity: 0; 
    margin-top: 2rem;  
  }

  nav.mobile--open {
    transform: translate(0, 0);
    opacity: 1; 
  }

  nav.mobile ul {
    list-style-type: none;
    padding: 0;
    margin: 0; 
  }

  nav.mobile li.link {
    font-family: Arial, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    padding: 1.5rem 0 0.5rem 1.5rem; 
  }

  nav.mobile li.link a {
    color: #FFF;
    display: block; 
    text-decoration: none;
    text-align: center;
  }

  .logo {
    display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      align-items: flex-start;
      box-sizing: border-box;
  
    }
    
    .nav-logo img {
      width: auto;
      height: 16px;
    }

/**** Desktop Nav Menu *****/
.desktop-nav {
  display: none;
}padding: 20px 0
}

/* Footer */
.footer-headings, .footer-links {
  text-align: left;
}

.connect {
  text-align: center;
}

.footer-flex-container {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
}

.fa-brands {
  transition: .3s;
}

.fa-brands:hover {
  color: #FFF ;
  background-color: #20B2DA;
  transition: .3s;
}

.copyright {
  padding-top: 10px;
}



}
</style>

<header class="site-header">
        <div class="wrapper site-header_wrapper">
          <!-- Logo -->
          <a href="index.html"><img class="logo" src="images/logo.png" alt="Eyediology Logo" title="Eyediology Logo" width=250></a>

          <div class="menu-flex-container">

              <p class="menu">Menu</p>

              <!-- Mobile Nav Menu -->
                 <nav class="primary">
                     <div class="header__container">
                       <ul>
                         <li class="mobile-nav">
                           <button id="nav-toggle">
                             <span class="menu"></span>
                           </button>
                         </li>
                       </ul>
                     </div>
                 </nav>
      
                 <nav class="mobile">
                  <ul>
                    <li class="link">
                      <a href="index.html">Home</a>
                    </li>
                    <li class="link">
                      <a href="about.html">About Us</a>
                    </li>
                    <li class="link">
                      <a href="products.html">Products</a>
                    </li>
                    <li class="link link--selected">
                      <a href="blog.html">Blog</a>
                    </li>
                    <li class="link link--selected">
                      <a href="contact.html">Contact</a>
                    </li>
                    <li class="link link--selected">
                      <a href="#">Retail Login</a>
                    </li>
                  </ul>
                </nav>
              <!-- End Mobile Nav Menu -->               
             </div>

             <!-- Desktop Menu -->
               <nav class="desktop-nav">
                 <ul>
                  <li><a href="index.html">Home</a></li>
                   <li><a href="about.html">About Us</a></li>
                   <li><a href="products.html">Products</a></li>
                   <li><a href="blog.html">Blog</a></li>
                   <li><a href="contact.html">Contact</a></li>
                   <li><a class="login-button" href="#"><span class="white-text blue-text">Retail Login</span></a></li>
                 </ul>
               </nav>
             <!-- End Desktop Menu -->
          </div>
      </header>
<div class="container">

	<h1>Missing fields</h1>
	<p>Sorry,it looks like you have not completed all of the required fields. ¯\_(ツ)_/¯</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
<div class="container">
  <h1>Oops! something went wrong!</h1>
  <p>Please try again</p>
</div>
<footer>
        <div class="footer-flex-container">
          <img class="reverse-logo" src="images/reverse-logo.png" alt="Reverse Version of Eyediology Logo" title="Eyediology Reverse Logo" width="250">

          <div class="footer-links">
            <p class="footer-headings">Site Links</p>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="#">Return Policy</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="footer-links">
            <p class="footer-headings">Get in Touch</p>
            <ul>
              <li><a href="mailto:info@tnbglasses.com">info@tnbglasses.com</a></li>
              <li><a href="tel:+18443874289">1-844-387-4289</a></li>
            </ul>
          </div>

          <div class="footer-socials">
            <p class="footer-headings connect">Connect with Us</p>
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.twiiter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>


        <p class="copyright">&copy; 2022 Eyediology. All Rights Reserved.</p>

      </footer>
