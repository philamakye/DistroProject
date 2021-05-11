<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="images/6975.png_860.png" type="image/x-icon">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
  </script>

  <title>Distro | Home</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 500, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg" style="background-color: turquoise;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">D<i font-size:1em; class="fas fa-star"></i>stro Closet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <a href="checkout.php" style="padding-right:15px; font-size:1.3em; color:black;"><i
            class="fas fa-shopping-cart"></i></a>
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
          style="padding-right:15px; font-size:1.3em; color:black; background:transparent; border:0px"><i
            class="far fa-heart"></i></button>
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
          <a class="nav-link active" aria-current="page" style="background-color:white" href="#"><b>Home</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#fashion" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fas fa-tshirt" style="padding-right: 3px;"></i>Fashion</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Shirts</a></li>
            <li><a class="dropdown-item" href="#">Trousers</a></li>
            <li><a class="dropdown-item" href="#">Dresses</a></li>
            <li><a class="dropdown-item" href="#">Underwears</a></li>
            <li><a class="dropdown-item" href="#">Shoes</a></li>
            <li><a class="dropdown-item" href="#">Belts</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#h_and_b" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fas fa-stethoscope" style="padding-right: 3px;"></i>Health and Beauty</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">MakeUps</a></li>
            <li><a class="dropdown-item" href="#">Hair care</a></li>
            <li><a class="dropdown-item" href="#">Personal care</a></li>
            <li><a class="dropdown-item" href="#">Health care</a></li>
            <li><a class="dropdown-item" href="#">Oral care</a></li>
            <li><a class="dropdown-item" href="#">Fragrances</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#p_and_t" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fas fa-mobile-alt" style="padding-right: 3px;"></i>Phones and Tablets</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Iphones</a></li>
            <li><a class="dropdown-item" href="#">Samsung Galaxy</a></li>
            <li><a class="dropdown-item" href="#">Samsung Tablets</a></li>
            <li><a class="dropdown-item" href="#">Ipads</a></li>
            <li><a class="dropdown-item" href="#">Techno</a></li>
            <li><a class="dropdown-item" href="#">Sony</a></li>
            <li><a class="dropdown-item" href="#">Huawei</a></li>
            <li><a class="dropdown-item" href="#">Infinix</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#gaming" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fab fa-playstation" style="padding-right: 3px;"></i>Gaming</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Playstation</a></li>
            <li><a class="dropdown-item" href="#">XBox</a></li>
            <li><a class="dropdown-item" href="#">Nintendo</a></li>
            <li><a class="dropdown-item" href="#">Top games</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#h_and_o" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fas fa-home" style="padding-right: 3px;"></i>Home and office</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kitchen</a></li>
            <li><a class="dropdown-item" href="#">Office furniture</a></li>
            <li><a class="dropdown-item" href="#">Interior decor</a></li>
            <li><a class="dropdown-item" href="#">Bath</a></li>
            <li><a class="dropdown-item" href="#">Office products</a></li>
            <li><a class="dropdown-item" href="#">Home appliances</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#automobile" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fas fa-car" style="padding-right: 3px;"></i>Automobile</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mercedes Benz</a></li>
            <li><a class="dropdown-item" href="#">Audi</a></li>
            <li><a class="dropdown-item" href="#">Toyota</a></li>
            <li><a class="dropdown-item" href="#">Ford</a></li>
            <li><a class="dropdown-item" href="#">Jeep</a></li>
            <li><a class="dropdown-item" href="#">GMC</a></li>
            <li><a class="dropdown-item" href="#">Honda</a></li>
            <li><a class="dropdown-item" href="#">BMW</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#electronics" style="color:rgb(70, 74, 87);" role="button"
            aria-expanded="false"><i class="fas fa-tv" style="padding-right: 3px;"></i>Electronics</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">TVs</a></li>
            <li><a class="dropdown-item" href="#">Stereo</a></li>
            <li><a class="dropdown-item" href="#">Air condiioners</a></li>
            <li><a class="dropdown-item" href="#">Kenwood appliances</a></li>
            <li><a class="dropdown-item" href="#">Phillips appliances</a></li>
            <li><a class="dropdown-item" href="#">Other appliances</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/7041588-ghost-girl-dog.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Shop with confidence</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati odit, ab, laboriosam sint odio
            recusandae, quae labore nihil tempora voluptatibus corrupti? Dignissimos doloremque amet architecto ipsum
            quo sunt corporis perspiciatis?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae doloribus ipsam neque provident eum
            perspiciatis magni sint maiores quaerat eveniet aut repellendus laudantium, sed, assumenda sapiente,
            exercitationem nam suscipit dolorem.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, ullam eaque natus iusto, illum, beatae
            corporis nam aliquid quos suscipit sed minima ad veniam atque! Magni cumque omnis earum asperiores.
            <br><br><button type="button" class="btn btn-warning"><b>Start Shopping</b></button>
          </p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/7041646-crystal-ball.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Introducing Distro Closet Wishlist</h3>
          <p>Want to add store items for the future? Share item list to friends and family?
            The new Distro closet wishlist allows you to add as many products to a list and generates a unique for you
            to share with friends and family to redeem and purchase these products.
            <br><br><button type="button" class="btn btn-warning"><b>Create Wishlist</b></button>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/6802063-macbook-pro.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Black Friday sales coming up soon</h3>
          <h4>Get as low as 20% off products</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore totam saepe inventore sit cum, doloremque
            dolorum deleniti repellendus nam illum temporibus eos, quaerat quo aliquid facere quod iste, aspernatur
            tenetur!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio iste repellat suscipit unde delectus
            animi placeat non architecto qui fugiat? Nobis omnis aut aliquid fugit eveniet officiis ipsum modi in?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis repellendus dolorem tempore nihil, aperiam
            illum fuga quam iusto iste pariatur cumque maxime, dolores inventore temporibus recusandae optio tenetur
            aspernatur hic!
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <div class="col">
      <div class="row mt-5">
        <center>
          <h3>
            Explore Popular and Trending
            <small class="text-muted">Products</small>
          </h3>
          <figure>
            <blockquote class="blockquote">
              <p>“Whoever said that money can’t buy happiness simply didn’t know where to go shopping.”</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              <cite title="Source Title">Bo Derek</cite>
            </figcaption>
          </figure>
        </center>
        <script>
          var url = "http://localhost/DistroProject/distroAPI/api/read.php"
          fetch(url).then(function (response) {
            return response.json();
          }).then(function (body) {
            apiResult = body
            for (var key in apiResult) {
              if (apiResult.hasOwnProperty(key)) {
                let container = document.querySelector('#itemList');
                let containerHealth = document.querySelector('#h_and_b');
                let containerFashion = document.querySelector('#fashion');
                let containerElectronics = document.querySelector('#electronics');
                let containerPhones = document.querySelector('#p_and_t');
                let containerHome = document.querySelector('#h_and_o');
                let containerAutomobile = document.querySelector('#automobile');
                let containerGaming = document.querySelector('#gaming');


                apiResult[key].forEach((result, idx) => {
                  //creating card element
                  const card = document.createElement('div');
                  card.classList = 'card-body';
                  //construct card content
                  if (result.category_id == 2) {
                    const content = ` 
                   
                            <div class="card col">
                                <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                ${result.name}
                                            </head>
                                        </center>
                                        <center><b>$${result.price}</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Product Description" data-bs-content="${result.description}">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div> &nbsp; &nbsp;


               `;
                    //append newly created card element
                    containerFashion.innerHTML += content;
                  }

                  if (result.category_id == 1) {
                    const content = ` 
                   
                            <div class="card col">
                                <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <head>
                                                ${result.name}
                                            </head>
                                        </center>
                                        <center><b>$${result.price}</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Product Description" data-bs-content="${result.description}">Description</button></center>
                                       
                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div> &nbsp; &nbsp;


               `;
                    //append newly created card element
                    containerHealth.innerHTML += content;
                  }

                  if (result.category_id == 3) {
                    const content = ` 
                            <div class="card col">
                                <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                ${result.name}
                                            </head>
                                        </center>
                                        <center><b>$${result.price}</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                                                title="Product Description" data-bs-content="${result.description}">Description</button>
                                        </center>

                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                    </p>
                                </div>
                            </div> &nbsp; &nbsp;


               `;
                    //append newly created card element
                    containerPhones.innerHTML += content;
                  }

                  if (result.category_id == 4) {
                    const content = ` 
                        <div class="card col">
                            <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <center>

                                        <head>
                                            ${result.name}
                                        </head>
                                    </center>
                                    <center><b>$${result.price}</b></center>
                                    <br>
                                    <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                                            title="Product Description"
                                            data-bs-content="${result.description}">Description</button></center>

                                    <br>
                                    <center><button type="button" class="btn btn-outline-warning">Add to cart</button></center>
                                </p>
                            </div>
                        </div> &nbsp; &nbsp;
               `;
                    //append newly created card element
                    containerGaming.innerHTML += content;
                  }


                  if (result.category_id == 5) {
                    const content = ` 
                        <div class="card col">
                            <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <center>

                                        <head>
                                            ${result.name}
                                        </head>
                                    </center>
                                    <center><b>$${result.price}</b></center>
                                    <br>
                                    <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                                            title="Product Description"
                                            data-bs-content="${result.description}">Description</button></center>

                                    <br>
                                    <center><button type="button" class="btn btn-outline-warning">Add to cart</button>
                                    </center>
                                </p>
                            </div>
                        </div> &nbsp; &nbsp;
               `;
                    //append newly created card element
                    containerHome.innerHTML += content;
                  }

                  if (result.category_id == 6) {
                    const content = ` 
                        <div class="card col">
                            <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <center>

                                        <head>
                                            ${result.name}
                                        </head>
                                    </center>
                                    <center><b>$${result.price}</b></center>
                                    <br>
                                    <center><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                                            title="Product Description"
                                            data-bs-content="${result.description}">Description</button></center>

                                    <br>
                                    <center><button type="button" class="btn btn-outline-warning">Add to cart</button>
                                    </center>
                                </p>
                            </div>
                        </div> &nbsp; &nbsp;

               `;
                    //append newly created card element
                    containerAutomobile.innerHTML += content;
                  }

                  if (result.category_id == 7) {
                    const content = ` 
                            <div class="card col">
                                <img src="${result.product_img}" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center>

                                            <head>
                                                ${result.name}
                                            </head>
                                        </center>
                                        <center><b>$${result.price}</b></center>
                                        <br>
                                        <center><button type="button" class="btn btn-lg btn-danger"
                                                data-bs-toggle="popover" title="Product Description"
                                                data-bs-content="${result.description}">Description</button></center>

                                        <br>
                                        <center><button type="button" class="btn btn-outline-warning">Add to
                                                cart</button></center>
                                    </p>
                                </div>
                            </div> &nbsp; &nbsp;
               `;
                    //append newly created card element
                    containerElectronics.innerHTML += content;
                  }

                });

              }
            }
                container.innerHTML += containerAutomobile;
                container.innerHTML += containerElectronics;
                container.innerHTML += containerFashion;
                container.innerHTML += containerGaming;
                container.innerHTML += containerHealth;
                container.innerHTML += containerHome;
                container.innerHTML += containerPhones;
          });
        </script>
        <div  id="itemList">

          <div class="row" id="fashion">
              <center>
                <h2><b>Fashion</b></h2>
              </center>
              <hr>
              <br>
          </div>

          <br>
          <div class="row" id="h_and_b">
              <center>
                <h2><b>Health and Beauty</b></h2>
              </center>
              <hr>
              <br>
          </div>

          <br>
            <div class="row" id="p_and_t">
              <center>
                <h2><b>Phones and Tablets</b></h2>
              </center>
              <hr>
              <br>
            </div>

            <br>
            <div class="row" id="gaming">
              <center>
                  <h2><b>Gaming</b></h2>
              </center>
              <hr>
              <br>
          </div>

          <br>
            <div class="row" id="h_and_o">
              <center>
                  <h2><b>Home and Office</b></h2>
              </center>
              <hr>
              <br>
            </div>

            <br>
            <div class="row" id="automobile">
              <center>
                  <h2><b>Automobile</b></h2>
              </center>
              <hr>
              <br>
            </div>

            <br>
            <div class="row" id="electronics">
              <center>
                  <h2><b>Electronics</b></h2>
              </center>
              <hr>
              <br>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
</body>

</html>