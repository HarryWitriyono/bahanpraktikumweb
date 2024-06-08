<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Mahasiswa V.2024 - Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
 <p>
 Selamat datang di Aplikasi demo ini. Aplikasi ini merupakan pembelajaran tentang pembuatan aplikasi database relational sederhana yang menginformasikan Manajemen Mahasiswa dan Program Studi.
 </p>
 <div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
const xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
const yArray = [55, 49, 44, 24, 15];

const layout = {title:"World Wide Wine Production"};

const data = [{labels:xArray, values:yArray, type:"pie"}];

Plotly.newPlot("myPlot", data, layout);
</script>

</body>
</html>