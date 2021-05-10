<! DOCTYPE html>
  <html>

  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distro | Admin</title>
    <link rel="shortcut icon" href="images/6975.png_860.png" type="image/x-icon">
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
        <a class="navbar-brand" href="index.php">D<i font-size:1em; class="fas fa-star"></i>stro Closet</a>
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
     <!--
        <div class="col">
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
           -->
           <div class="col"></div>
        <div class="col">
        <div class="col-sm cards_set">
            <center>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD PRODUCT <br>
                <i class="fas fa-plus"></i>
              </button>
            </center>
            <center>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                UPDATE PRODUCT <br>
                <i class="fas fa-pen"></i>
              </button>
            </center>
            <center>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                DELETE PRODUCT <br>
                <i class="far fa-trash-alt"></i>
              </button>
            </center>
          </div>
                   
            <table class="table mx-4" style="width:75%" >
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Product name</th>
                  <th scope="col">Stock</th>
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
        <div class="col"></div>

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
            <form id="addProductForm" name="addProductForm" method="POST" enctype="multipart/form-data">
            <label for="cars">Choose a category:</label><br>
              <select id="categories" name="category_id">
                <option value="1">Health and Beauty</option>
                <option value="2">Fashion</option>
                <option value="3">Phones and Tablets</option>
                <option value="4">Gaming</option>
                <option value="5">Home and Office</option>
                <option value="6">Automobile</option>
                <option value="7">Electronics</option>
              </select>
              <br>
              <label for="pname">Product Name: </label><br>
              <input type="text" id="pname" name="name" required><br>

              <label for="price">Product Price: </label><br>
              <input type="text" id="price" name="price" required><br>

              <label for="pdesc">Product Description: </label><br>
              <input type="text" id="pdesc" name="description" required><br>

              <label for="stock">Stock:</label><br>
              <input type="number" id="stock" name="stock" required><br>

              <label for="c_image">Choose Image:</label><br>
              <input type="file" name="product_img" accept="image/*" id="c_image"><br>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-secondary" id='btnSubmit' style="background-color: rgb(61, 61, 182);">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!--Update Modal-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">UPDATE PRODUCT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="updateProductForm" name="updateProductForm" method="POST" enctype="multipart/form-data">
            <label for="pid">Enter ID of product to update </label><br>
              <input type="number" id="pid" name="id"><br>
              
            <label for="cars">Choose a category:</label><br>
              <select id="categories" name="category_id" required>
                <option value="1">Health and Beauty</option>
                <option value="2">Fashion</option>
                <option value="3">Phones and Tablets</option>
                <option value="4">Gaming</option>
                <option value="5">Home and Office</option>
                <option value="6">Automobile</option>
                <option value="7">Electronics</option>
              </select>
              <br>

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
            <button type="submit" class="btn btn-secondary" id='btnUpdate' style="background-color: rgb(61, 61, 182);">Update</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">DELETE PRODUCT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="deleteProductForm" name="deleteProductForm" method="POST" enctype="multipart/form-data">
            <center><label for="">Enter ID of product to delete</label></center>
            <input class="form-control" name="id" id="id" type="number" placeholder="" aria-label="default input example" required>
         

          </div>
          <div class="modal-footer">
            
            <button type="submit" class="btn btn-secondary" id='btnSubmit' style="background-color: rgb(61, 61, 182);">Delete</button>
          </div>
          </form>
        </div>
      </div>
    </div>




    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      // myModal.addEventListener('show.bs.modal', function() {
      //   myInput.focus()
      // })


      //let's start this from scratch
      function buildJsonFormData(form) {
          const jsonFormData = { };
          for(const pair of new FormData(form)) {
              if(pair[1] instanceof File){
                jsonFormData[pair[0]] = 'images/' + pair[1].name;
              } else {
                jsonFormData[pair[0]] = pair[1];
              }
          }
          return jsonFormData;
      }


      async function submitForm(e, form){
        //1. prevent reloading page
        // e.preventDefault();
        // 2. Submit the form
        // 2.1 User Interaction
        const btnSubmit = document.getElementById('btnSubmit');
        btnSubmit.disabled = true;
        setTimeout(() => btnSubmit.disabled = false, 2000);


        // 2.2 Build JSON body
        const jsonFormData = buildJsonFormData(form);
        // 2.4 Request & Response
        const response = await fetch(`http://localhost/DistroProject/distroAPI/api/create.php`, {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(jsonFormData)
        });

      }

      async function deleteForm(e, form){
        //1. prevent reloading page
        // e.preventDefault();
        // 2. Submit the form
        // 2.1 User Interaction
        const btnSubmit = document.getElementById('btnSubmit');
        btnSubmit.disabled = true;
        setTimeout(() => btnSubmit.disabled = false, 2000);


        // 2.2 Build JSON body
        const jsonFormData = buildJsonFormData(form);
        // 2.4 Request & Response
        const response = await fetch(`http://localhost/DistroProject/distroAPI/api/delete.php`, {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(jsonFormData)
        });

      }

      async function updateForm(e, form){
        //1. prevent reloading page
        // e.preventDefault();
        // 2. Submit the form
        // 2.1 User Interaction
        const btnSubmit = document.getElementById('btnUpdate');
        btnSubmit.disabled = true;
        setTimeout(() => btnSubmit.disabled = false, 2000);


        // 2.2 Build JSON body
        const jsonFormData = buildJsonFormData(form);
        // 2.4 Request & Response
        const response = await fetch(`http://localhost/DistroProject/distroAPI/api/update.php`, {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(jsonFormData)
        });

      }

      const addProductForm = document.querySelector('#addProductForm');
      if(addProductForm){
        addProductForm.addEventListener('submit', function(e){
          submitForm(e, this);
        });
      }

      const deleteProductForm = document.querySelector('#deleteProductForm');
      if(deleteProductForm){
        deleteProductForm.addEventListener('submit', function(e){
          deleteForm(e, this);
        });
      }

      const updateProductForm = document.querySelector('#updateProductForm');
      if(updateProductForm){
        updateProductForm.addEventListener('submit', function(e){
          updateForm(e, this);
        });
      }
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>

  </html>