<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>


    <div class="jumbotron">
        <div class="container text-center">
            <h1>Test send url by web</h1>
            <input type="text" id="url" name="url">
          
            <a href="#" id="button" class="btn btn-primary">send</a>
        </div>
    </div>
 

</body>


<script>
   

    document.getElementById("button").addEventListener("click", function() {
         
            var url = document.getElementById("url").value;
          
            alert("S3 Hybrid:play"+url);
            // alert(url);
    });
</script>

</html>