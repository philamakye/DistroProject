<! DOCTYPE html>
  <html>

  <head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
  </head>

  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg" style="background-color: turquoise;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">DistroAdmin</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="d-flex" id="wrapper">
            <div class="bg-light border-right" id="sidebar-wrapper">
              <div class="sidebar-heading">Side Header </div>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Customers</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Orders</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="cards_set">
            <center>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD PRODUCT <br>
                <i class="fas fa-plus"></i>
              </button>
            </center>
          </div>
          <div>
            <table class="table" style="width:75%">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Product name</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="productList">
                <script>
                  var url = "http://localhost/DistroProject/distroAPI/api/read.php";

                  fetch(url).then(function(response) {
                    return response.json();
                  }).then(function(body) {
                    apiResult = body;

                    for (var key in apiResult) {
                      if (apiResult.hasOwnProperty(key)) {
                        let container = document.querySelector('#productList');
                        apiResult[key].forEach((result, idx) => {
                          const content = `
                          <tr>
                            <th scope="row">${result.id}</th>
                            <td>${result.category_name}</td>
                            <td>${result.name}</td>
                            <td>${result.stock}</td>
                            <td><button type="button" class="btn btn-secondary">Update</button></td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                          </tr>
                        `;

                          container.innerHTML += content;

                        });
                      }
                    }
                  });
                </script>

              </tbody>
            </table>

          </div>

        </div>

      </div>
    </div>




    <!--Sidebar-->


    <!--Cards-->

    <!--Table-->



    <!-- Modal add_product-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addProductForm" method="POST" action="" type="multipart/form-data">
              <label for="cname">Category ID: </label><br>
              <input type="text" id="cname" name="category_id"><br>

              <label for="pname">Product Name: </label><br>
              <input type="text" id="pname" name="name"><br>

              <label for="price">Product Price: </label><br>
              <input type="text" id="price" name="price"><br>

              <label for="pdesc">Product Description: </label><br>
              <input type="text" id="pdesc" name="description"><br>

              <label for="stock">Stock:</label><br>
              <input type="number" id="stock" name="stock"><br>

              <label for="c_image">Choose Image:</label><br>
              <input type="file" name="product_img" accept="image/*" id="c_image"><br>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-secondary" style="background-color: rgb(61, 61, 182);">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    -->


    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
      })

      
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>

  </html>