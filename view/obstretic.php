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
  <title>Home MDTI Time table</title>

  
</head>

<body>
 

  <!-- nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="employee.php">MDTI Time table</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/MDTI/view/employee.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </div>
  </nav>
  <!-- end nav bar -->

  <body>
    <div class="container">
    <br>
    <div class="row">
      
      <a href="employee.php" type="button" class="btn btn-dark m-3">Employee</a>
      <a href="medicine.php" type="button" class="btn btn-dark m-3">Medicine</a>
      <a href="surgical.php" type="button" class="btn btn-dark m-3">Surgical</a>
      <a href="emergency.php" type="button" class="btn btn-dark m-3">Emergency Room</a>
      <a href="operatine.php" type="button" class="btn btn-dark m-3">Operating Room</a>
      <a href="Intensitive.php" type="button" class="btn btn-dark m-3">Intensitive Care Unit</a>
      <a href="obstretic.php" type="button" class="btn btn-info m-3">Obstretic Gynecology</a>
      <a href="pediatric.php" type="button" class="btn btn-dark m-3">Pediatric</a>

      
    </div>

    <!-- search bar -->
      <!-- <div class="d-flex justify-content-center">
        <div class="searchbar" id="searctID">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div> -->
    <!-- end search -->

    <div class="row justify-content-center" id="con-card">
      <div class="col-auto table-responsive">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>ชื่อ - นามสกุล</th>
              <!-- <th>surnameName</th> -->
              <th>หน้าที่</th>
              <th>แผนก</th>
              <th>จันทร์</th>
              <th>อังคาร</th>
              <th>พุธ</th>
              <th>พฤหัสบดี</th>
              <th>ศุกร์</th>
              <th>เสาร์</th>
              <th>อาทิตย์</th>
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
            // '<td>' + value.condition + '</td>' +
            '</tr>')
        });
      }
      function loadData() {
        var url = "http://localhost/MDTI-Atest/obstreticIndex.php/jsonemp";
        $.getJSON(url).done(function (data) {
          console.log(JSON.stringify(data));
          var day;
          var line = "";
          var addSerialNumber = function () {
              var i = 1
              $('table tr').each(function(index) {
              $(this).find('td:nth-child(1)').html(index+1);
            });
          };
          $.each(data, function (k, item) {
            // console.log(item);
            line += "<tr>";
            line += "<td>#</td>";
            // line += "<td align='center'>" + item.license + "</td>";
            line += "<td>" + item.name + " " + item.surname + "</td>";
            // line += "<td align='center'>" + item.surname + "</td>";
            // line += "<td align='center'>" + item.position + "</td>";
            switch(item.position){
              case "P01" :
                line += "<td align='center'>แพทย์</td>";
                break;

              case "P02" :
                line += "<td align='center'>แพทย์เฉพาะทาง</td>";
                break;

              case "P03" :
                line += "<td align='center'>พยาบาล</td>";
                break;

              case "P04" :
                line += "<td align='center'>พยาบาลเชี่ยวชาญพิเศษ</td>";
                break;

              case "P05" :
                line += "<td align='center'>ผู้ดูแล</td>";
                break;

              case "P06" :
                line += "<td align='center'>รักษาความปลอดภัย</td>";
                break;

              default:
                line += "<td align='center'> - </td>";
              
            }

            // line += "<td align='center'>" + item.section + "</td>";
            switch(item.section){
              case "S01" :
                line += "<td align='center'>อายุรกรรม</td>";
                break;

              case "S02" :
                line += "<td align='center'>ศัลยกรรม</td>";
                break;

              case "S03" :
                line += "<td align='center'>อุบัติเหตุ</td>";
                break;

              case "S04" :
                line += "<td align='center'>ผ่าตัด</td>";
                break;

              case "S05" :
                line += "<td align='center'>ICU</td>";
                break;

              case "S06" :
                line += "<td align='center'>สูตินรีเวช</td>";
                break;
              
              case "S07" :
                line += "<td align='center'>กุมารเวช</td>";
                break;
              
              default:
                line += "<td align='center'> - </td>";
              
            }

            // line += "<td align='center'>" + item.round + "</td>";
            switch(item.round){
              case "R01" :
                line += "<td align='center'>08:00 - 16:00 <br> 16:00 - 00:00</td>"; //01-02
                line += "<td align='center'></td>";
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>"; //01-03
                line += "<td align='center'></td>"
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>"; //02-03
                line += "<td align='center'></td>"
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>";
                break;

              case "R02" :
                line += "<td align='center'></td>";
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>"; //02-03
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br> 16:00 - 00:00</td>"; //01-02
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>"; //01-03
                line += "<td align='center'></td>"
                break;

              case "R03" :
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>"; //02-03
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br> 16:00 - 00:00</td>"; //01-02
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>"; //01-03
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>";
                break;

              case "R04" :
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>";
                line += "<td align='center'></td>";
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>";
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br> 16:00 - 00:00</td>";
                line += "<td align='center'></td>"
                break;

              case "R05" :
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>"; //02-03
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br> 16:00 - 00:00</td>"; //01-02
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>"; //01-03
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>";
                break;

              case "R06" :
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br>00:00 - 08:00</td>"
                line += "<td align='center'></td>"
                line += "<td align='center'>16:00 - 00:00 <br>00:00 - 08:00</td>";
                line += "<td align='center'></td>"
                line += "<td align='center'>08:00 - 16:00 <br> 16:00 - 00:00</td>"; //01-02
                line += "<td align='center'></td>"
                break;
              
              default:
                line += "<td align='center'> - </td>";
              
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



