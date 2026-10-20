<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar css dan javascript </title>

    <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
          display:none;
        }
        .kotak-info{
            background-color: #d11414;
            padding : 15px;
            margin : 10px; solid #a81313;
            border-radius : 6px;
        }

    </style>
    
</head>
<body>

    <div class="flex-center">
    <div class="kartu-profile">
        <h2>KIMURA</h2>
        <p>web desain</p>
        <button onclick="info()"class="btn-detail">info lengkap</button>
    </div>
    </div>

    <div class="kotak-info sembunyi">
        <h1>informasi detail</h1>
     </div>


<script>
    function info(){
        alert("tombol lengkap di clik");
    }
</script>
</body>
</html>