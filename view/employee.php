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
  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="../custom.css">
  <title>index!</title>

  
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
          <a class="nav-link" href="http://localhost/MDTI/view/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </div>
  </nav>
  <!-- end nav bar -->

  

  <body>
    <div class="container">
    <br>
    <div class="row">
      <a href="medicine.php" type="button" class="btn btn-dark m-3">Medicine</a>
      <a href="surgical.php" type="button" class="btn btn-dark m-3">Surgical</a>
      <button type="button" class="btn btn-dark m-3">Emergency Room</button>
      <button type="button" class="btn btn-dark m-3">Operating Room</button>
      <button type="button" class="btn btn-dark m-3">Intensitive Care Unit</button>
      <button type="button" class="btn btn-dark m-3">Obstretic Gynecology</button>
      <button type="button" class="btn btn-dark m-3">Pediatric</button>
    </div>

    <!-- search bar -->
      <div class="d-flex justify-content-center">
        <div class="searchbar" id="searctID">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    <!-- end search -->

    <div class="row justify-content-center" id="con-card">
      <div class="col-auto table-responsive">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>License</th>
              <th>Name</th>
              <th>surnameName</th>
              <th>Position</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="rdall">
          </tbody>
        </table>
      </div>
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
          rdall.append(
            '<tr>' +
            '<td>' + value.license + '</td>' +
            '<td>' + value.name + '</td>' +
            '<td>' + value.surname + '</td>' +
            '<td>' + value.position + '</td>' +
            '<td>' + value.section + '</td>' +
            '<td>' + value.round + '</td>' +
            '<td>' + value.condition + '</td>' +
            '</tr>')
        });
      }
      function loadData() {
        var url = "http://localhost/MDTI-Atest/employeeIndex.php/jsonemp";
        $.getJSON(url).done(function (data) {
          console.log(JSON.stringify(data));
          var day;
          var line = "";
          $.each(data, function (k, item) {
            // console.log(item);
            line += "<tr><td align='center'>" + item.license + "</td>";
            line += "<td align='center'>" + item.name + "</td>";
            line += "<td align='center'>" + item.surname + "</td>";
            line += "<td align='center'>" + item.position + "</td>";
            line += "<td align='center'>" + item.section + "</td>";
            line += "<td align='center'>" + item.round + "</td>";
            for (var i in item.condition){
              switch(item.condition[i]) {
                case 1 :
                  line += "<td align='center'>วันจันทร์</td>";
                  break;

                // case 2 :
                //   day = "วันอังคาร";
                //   break;
                
                // case 3 :
                //   day = "วันพุธ";
                //   break;

                case "D04" :
                  day = "วันพุธ";
                  break;
                
                  default:
                  line += "<td align='center'>xxxxx</td>";
              }
              line += "<td align='center'>" + item.condition[i] + "</td>";
            }
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


