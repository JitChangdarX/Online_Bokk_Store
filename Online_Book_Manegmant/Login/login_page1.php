<!-- html form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <script>
        function showPassword() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label ">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label ">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <center>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showPassword()">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </center>
        <center><button type="submit" class="btn btn-primary" id="btn">Submit</button></center>
        <p>Don't have an account? <a href="/signup/page1.php">Sign Up</a></p>
    </div>
    <div id="div"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn").click(function() {
                const formData = new FormData();
                formData.append("email", $("#exampleInputEmail1").val());
                formData.append("password", $("#exampleInputPassword1").val());
                console.log("Email: " + $("#exampleInputEmail1").val());
                console.log("Password: " + $("#exampleInputPassword1").val());
                $.ajax({

                    type: 'POST',
                    url: 'login_action.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $("#div").html(response);
                    },
                    error: function(xhr, status, error) {
                        $("#div").html("<p style='color:red;'>login error: " + error + "</p>");
                    }
                })


            })
        })
    </script>
</body>

</html>