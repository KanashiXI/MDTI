<!doctype html>
<html lang="en">

<head>
  <!-- search bar -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- end search var -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <title>index!</title>

  <style>
    /* search bar */
    body,
    html {
      height: 100%;
      width: 100%;
      margin: 0;
      padding: 0;
      background: #72f1d1 !important;
    }

    .searchbar {
      margin-bottom: 20px;
      margin-top: 20px;
      height: 60px;
      background-color: #353b48;
      border-radius: 30px;
      padding: 10px;
    }

    .search_input {
      color: white;
      border: 0;
      outline: 0;
      background: none;
      width: 0;
      caret-color: transparent;
      line-height: 40px;
      transition: width 0.4s linear;
    }

    .searchbar:hover>.search_input {
      padding: 0 10px;
      width: 450px;
      caret-color: red;
      transition: width 0.4s linear;
    }

    .searchbar:hover>.search_icon {
      background: white;
      color: #e74c3c;
    }

    .search_icon {
      height: 40px;
      width: 40px;
      float: right;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      color: white;
    }

    /* end search bar */

    img {
      display: block;

      margin-left: auto;
      margin-right: auto;
    }

    p .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 40%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* .container {
      padding: 2px 16px;
    } */

    #con-card {
      margin: 0px 0px 0px 70px;
      display: inline-block;
      position: relative;
      width: 90%;
      background-size: contain;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TIme table</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">พี่โต</a>
            <a class="dropdown-item" href="#">พี่โตถูกใจสิ่งนี้</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end nav bar -->

  <!-- search bar -->

  <body>
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="searchbar" id="searctID">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>


    <!-- end search -->


    <!-- <div class="card">
    <img src="https://cdn5.vectorstock.com/i/1000x1000/23/49/new-man-avatar-icon-flat-vector-19152349.jpg" alt="Avatar"
      style="width:100%">
    <div class="container">
      <h4><b>John Doe</b></h4>
      <p>Architect & Engineer</p>
    </div>
  </div> -->

    <div class="container-fluid" id="con-card">
      <div class="row">
        <div class="col-sm-3">
          <div class="card" style="width:auto;">
            <img class="card-img-top"
              src="https://cdn5.vectorstock.com/i/1000x1000/23/49/new-man-avatar-icon-flat-vector-19152349.jpg"
              alt="Avatar" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pongsathon Rakthong</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="calendar.html" class="btn btn-warning" id="btnserch">information</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width:auto;">
            <img class="card-img-top"
              src="https://cdn5.vectorstock.com/i/1000x1000/23/49/new-man-avatar-icon-flat-vector-19152349.jpg"
              alt="Avatar" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Panyapat ueaboon</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-warning">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width:auto;">
            <img class="card-img-top"
              src="https://cdn5.vectorstock.com/i/1000x1000/23/49/new-man-avatar-icon-flat-vector-19152349.jpg"
              alt="Avatar" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Jatuporn Phummanee</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-warning">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width:auto;">
            <img class="card-img-top"
              src="https://cdn5.vectorstock.com/i/1000x1000/23/49/new-man-avatar-icon-flat-vector-19152349.jpg"
              alt="Avatar" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-warning">Go somewhere</a>
            </div>
          </div>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th align="center">License</th>
                <th align="center">Name</th>
                <th align="center">Position</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="rdall">
            </tbody>
          </table>
      </div>
      <!-- ///////////////////////////////////////////// -->
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
      function renderTable(data) {
      var rdall = $("#rdall");
      rdall.empty();

      $.each(data, function(index, value) {
        rdall.append('<tr>' +
          '<th><img src="' + value.license + '" width="200"></th>' +
          '<td>' + value.name + '</td>' +
          '<td>' + value.position + '</td>' +
          '</tr>')
      });
    }
      function loadData() {
        var url = "http://localhost/MDTI-master/index.php/jsonemp";
        $.getJSON(url).done(function (data) {
          console.log(JSON.stringify(data));
          var line = "";
          $.each(data, function (k, item) {
            console.log(item);
            line += "<tr><td align='center'>" + item.license + "</td>";
            line += "<td align='center'>" + item.name + "</td>";
            line += "<td align='center'>" + item.position + "</td>";
            line += "</tr>";
          });
          $("#rdall").empty();
          $("#rdall").append(line);
        });
      }

      $(function () {
        loadData();
      });
    </script>


  </body>

</html>