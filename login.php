<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        .login-container{
            max-width: 400px;
            margin: 80px auto;
            background-color: #fff0f6;
            padding: 30px;
            border-radius: 15px;
            border: 2px solid #f8aeba;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .login-container h2{
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-login{
            width: 100%;
            background-color: #ff4fa3;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-login:hover{
            background-color: #ff2a8a;
        }

        .back-home{
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #ff4fa3;
            font-weight: bold;
        }

        .back-home:hover{
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="login-container">
    <h2>Login Admin</h2>

    <form action="proses_login.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn-login">Login</button>
    </form>

    <a href="deswita.html" class="back-home"> ← Home</a>
</div>

</body>
</html>