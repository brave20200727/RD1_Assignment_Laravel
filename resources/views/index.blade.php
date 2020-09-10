<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>氣象站首頁</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
      <div class="row">
        <div>
            <select id="citySelected" name="citySelected" class="custom-select">
                <option value="-1">---</option> 
            </select>
        </div>
        <div style="color: red;" id="citySelectedErr"></div>
      </div>
      <div class="row"><img src="" id="cityPicture"></div>
      <h3>近三天天氣</h3>
      <div class="card-deck" id="threeDaysWeather">
        <div class="card bg-primary">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-primary">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-primary">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
      </div>
      <h3>近一周天氣</h3>
      <div class="card-group" id="oneWeekWeather">
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <p class="card-text">---</p>
          </div>
        </div>
      </div>
      <h3>累積雨量</h3>
      <div class="row" id="rainData">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>觀測站</th>
              <th>觀測時間</th>
              <th>近1小時累積</th>
              <th>近24小時累積</th>
            </tr>
          </thead>
          <tbody id="rainContent">
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>