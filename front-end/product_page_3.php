<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
    <link rel="shortcut icon" href="images/6975.png_860.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   <title>Distro | Products</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg" style="background-color: turquoise;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">D<i font-size:1em; class="fas fa-star"></i>stro Closet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offset-2 distro-icon">
        <center>
          <img src="images/dribble_cart.gif" alt="Distro-icon">
        </center>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <a href="checkout.php" style="padding-right:15px; font-size:1.3em; color:black;"><i class="fas fa-shopping-cart"></i></a>
        <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-right:15px; font-size:1.3em; color:black; background:transparent; border:0px"><i class="far fa-heart"></i></button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
  <form action="wishlistpage.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wishlist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <center> Please enter your wishlist code below <br></center>
       <center> <input type="text" name="wishlist" id="wishlist"></center>
      </div>
      <div class="modal-footer">
              
        <input type="submit" value="Redeem" class="btn btn-secondary">
      </div>
    </div>
  </form>
  </div>
</div>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs justified" style="background-color:rgb(204, 248, 212);">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" style="background-color:white" href="#"><b>Phones and Tablet</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgb(70, 74, 87);" role="button" aria-expanded="false"><i class="fas fa-tshirt" style="padding-right: 3px;"></i>Fashion</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product_page_1.php">Shirts</a></li>
                        <li><a class="dropdown-item" href="product_page_1.php">Trousers</a></li>
                        <li><a class="dropdown-item" href="product_page_1.php">Dresses</a></li>
                        <li><a class="dropdown-item" href="product_page_1.php">Underwears</a></li>
                        <li><a class="dropdown-item" href="product_page_1.php">Shoes</a></li>
                        <li><a class="dropdown-item" href="product_page.php_1">Belts</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgb(70, 74, 87);" role="button" aria-expanded="false"><i class="fas fa-stethoscope" style="padding-right: 3px;"></i>Health and Beauty</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product_page_2.php">MakeUps</a></li>
                        <li><a class="dropdown-item" href="product_page_2.php">Hair care</a></li>
                        <li><a class="dropdown-item" href="product_page_2.php">Personal care</a></li>
                        <li><a class="dropdown-item" href="product_page_2.php">Health care</a></li>
                        <li><a class="dropdown-item" href="product_page_2.php">Oral care</a></li>
                        <li><a class="dropdown-item" href="product_page_2.php">Fragrances</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgb(70, 74, 87);" role="button" aria-expanded="false"><i class="fab fa-playstation" style="padding-right: 3px;"></i>Gaming</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product_page_4.php">Playstation</a></li>
                        <li><a class="dropdown-item" href="product_page_4.php">XBox</a></li>
                        <li><a class="dropdown-item" href="product_page_4.php">Nintendo</a></li>
                        <li><a class="dropdown-item" href="product_page_4.php">Top games</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgb(70, 74, 87);" role="button" aria-expanded="false"><i class="fas fa-home" style="padding-right: 3px;"></i>Home and office</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product_page_5.php">Kitchen</a></li>
                        <li><a class="dropdown-item" href="product_page_5.php">Office furniture</a></li>
                        <li><a class="dropdown-item" href="product_page_5.php">Interior decor</a></li>
                        <li><a class="dropdown-item" href="product_page_5.php">Bath</a></li>
                        <li><a class="dropdown-item" href="product_page_5.php">Office products</a></li>
                        <li><a class="dropdown-item" href="product_page_5.php">Home appliances</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgb(70, 74, 87);" role="button" aria-expanded="false"><i class="fas fa-car" style="padding-right: 3px;"></i>Automobile</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product_page_6.php">Mercedes Benz</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">Audi</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">Toyota</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">Ford</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">Jeep</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">GMC</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">Honda</a></li>
                        <li><a class="dropdown-item" href="product_page_6.php">BMW</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgb(70, 74, 87);" role="button" aria-expanded="false"><i class="fas fa-tv" style="padding-right: 3px;"></i>Electronics</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product_page_7.php">TVs</a></li>
                        <li><a class="dropdown-item" href="product_page_7.php">Stereo</a></li>
                        <li><a class="dropdown-item" href="product_page_7.php">Air conditioners</a></li>
                        <li><a class="dropdown-item" href="product_page_7.php">Kenwood appliances</a></li>
                        <li><a class="dropdown-item" href="product_page_7.php">Phillips appliances</a></li>
                        <li><a class="dropdown-item" href="product_page_7.php">Other appliances</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <div class="container mx-0">
        <div class="row mx-0">
            <div class="col-sm-2 side-one">
           
            </div>
            <div class="col-sm side-2">
                <center><h2><b>Iphones</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Samsung Galaxy</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Samsung Tablets</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Ipads</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Techno</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Sony</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Huawei</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <center><h2><b>Infinix</b></h2></center>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="images/7041605-honda-civic-car-tuning-parking.jpg" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                Honda Civic
                                            </head>
                                        </center>
                                        <center><b>$10500</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>