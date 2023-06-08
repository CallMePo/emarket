<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            background: #ffffff;
        }

        input,
        button {
            border: none;
            outline: none;
            background: none;
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        }

        .cont {
            overflow: hidden;
            position: relative;
            width: $contW;
            height: 550px;
            margin: 0 auto 100px;
            background: #fff;
        }

        .form {
            position: relative;
            width: 100%;
            height: 100%;
            padding: 50px 30px 0;
        }

        button {
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            font-weight: bold;
            display: block;
            align-items: center ;
            width: 260px;
            height: 36px;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        h2 {
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            width: 100%;
            font-size: 26px;
            text-align: center;
        }
        h5{
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            width: 950px;
            font-size: 20px;
            text-align: right;
        }

        form {
            display: block;
            width: 100%;
            margin: -25px;
            text-align: center;
            align-items: center;
        }

        input {
            background: #ccc;
            width: 35%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left;
        }

        input:hover {
            background-color: #DC9966;
        }

        input[type=text]:focus {
            border: 3px solid #DC9966;
        }
        input[type=checkbox]{
            margin-top: 0px;
            margin-bottom: 50px;
            margin-left: -580px;
            margin-right: -230px;
        }

        div[class="form sign-up"] {
            border-radius: 5px;
            background-color: #ffffff;
            padding: 20px;
        }


        .register {
            margin-top: 80px;
            margin-bottom: 50px;
            margin-left: 600px;
            margin-right: 100px;
            background: #7D5243;
        }

        .register:hover {
            background-color: #DC9966;
        }

    </style>

    <body>
        <div class="page">
            <h2>Sign Up</h2>
            <a href="http://www.google.com"><h5>Sign In</h5></a>
        </div>
        <div class="form sign-up">
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}" class="form-group">
                    @csrf
                    <input type="text" name="nama" placeholder="Nama" /> <br/>
                    <input type="text" name="email" placeholder="Email" /> <br/>
                    <input type="password" name="password" placeholder="Password" id="password"/> <br/>
                    <input type="checkbox" onclick="myPassword()">Show Password
                    <button type="submit" class="register" value="submit" >Sign Up</button>
                </form>
            </div>
        </div>
    </body>
        <script>
            function myPassword(){
                var x = document.getElementById("password");
                if (x.type==="password") {
                    x.type="text";
                } else{
                    x.type="password";
                }
            }

        </script>
</head>

</html>
