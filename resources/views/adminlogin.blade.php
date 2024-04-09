<!DOCTYPE html>
<html lang="en">

<head>
    @section("title","login")
    @include("layout/Header")

    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f5f5f5;
    }

    .container {
        width: 300px;
        padding: 20px;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-group {
        margin-bottom: 15px;
        width: 100%;
    }

    label {
        font-weight: bold;
        text-align: center;
        display: block;
    }

    input[type="text"],
    input[type="password"] {
        padding: 8px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    button {
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    a {
        padding: 10px 15px;
        background-color: #28D74E;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    a:hover {
        background-color: #4AB574;
    }
    </style>


<body>
    <div class="container">
        <form id="loginForm" class="form" action="/verifilogin" method="POST">
            @csrf

            <h2>Login</h2>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <a href="/">HOME</a>
        </form>
    </div>
</body>

</html>
