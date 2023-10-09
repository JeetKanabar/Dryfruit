<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
footer {
  color: #333;
  background-color: #e6f0ff;
  overflow-x:hidden;
  bottom: 0;
}

.row {
  display: flex;
  padding: 1rem;
}

.column {
  width: calc(100% / 4);
  padding: 0 0.9375rem;
}


h4 {
  margin-bottom: 0.9375rem;
  font-size: 1.5rem;
}

p {
  font-size: 1rem;
  line-height: 1.3rem;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  margin-bottom: 0.625rem;
}

ul li a {
  color: #333;
  font-size: 1rem;
  text-decoration: none;
}

ul li i {
  color: #6faaff;
}

ul li a:hover {
  color: #6faaff;
}

ul.social-icons {
  display: flex;
  column-gap: 0.625rem;
}

.social-icons i {
  color: white;
}

ul.social-icons li {
  margin-bottom: 0rem;
}

ul.social-icons li a {
  display: grid;
  place-content: center;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 100%;
  background-color: #6faaff;
}

ul.social-icons li:hover a {
  background-color: #6fdeff;
}

.copyright {
  text-align: center;
  color: #fff;
  background-color: #6faaff;
  padding: 0.6rem 0;
}

/* Responsive adjustments */

@media screen and (max-width: 768px) {
  .column {
    margin: 0.4rem 0;
    width: 100%;
    padding: 0;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  h4 {
    font-size: 1.3125rem;
  }

  p {
    font-size: 0.9375rem;
  }

  ul li a {
    font-size: 0.9375rem;
  }

  ul.social-icons li a {
    width: 1.875rem;
    height: 1.875rem;
  }
}
</style>
<body>
    <footer>

        <div class="row">
        
          <div class="column">
        
            <h4>About Us</h4>
        
            <p>Discover Dryfruit Mart, your one-stop e-commerce for all Dryfruit needs. Enjoy fast shipping and exceptional service today!</p>
        
          </div>
        
          <div class="column">
        
            <h4>Quick Links</h4>
        
            <ul>
        
              <li><a href="index.php"><i class="fa fa-angle-right"></i>HOME</a></li>
        
              <li><a href="product.php"><i class="fa fa-angle-right"></i>PRODUCT</a></li>

              <li><a href="order.php"><i class="fa fa-angle-right"></i>ABOUT</a></li>
        
            </ul>
        
          </div>
          <div class="column">
        
            <h4>Quick Links</h4>
        
            <ul>
        
              <li><a href="contact.php"><i class="fa fa-angle-right"></i>CONTACT US</a></li>
        
              <li><a href="contact.php"><i class="fa fa-angle-right"></i>FEEDBACK</a></li>

              <li><a href="login.php"><i class="fa fa-angle-right"></i>SIGN-IN</a></li>
        
            </ul>
        
          </div>
        
          <div class="column">
        
            <h4>Connect with Us</h4>
        
            <ul class="social-icons">
        
              <li><a href="#"><i class="fa-brands fa-facebook fa-beat"></i></a></li>
        
              <li><a href="#"><i class="fa-brands fa-instagram fa-beat"></i></a></li>
              
              <li><a href="#"><i class="fa-brands fa-twitter fa-beat"></i></a></li>
        
                <li><a href="#"><i class="fa-brands fa-github fa-beat"></i></a></li>
        
            </ul>
        
          </div>
        
        </div>
        
        <p class="copyright"><span>Created By Viral Gajera & Jeet Kanabar | <span class="far fa-copyright"></span> 2020 All rights reserved.</span></p>
        
    </footer>
</body>
</html>