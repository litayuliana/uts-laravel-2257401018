<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
    body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
    border-radius: 5px;
}

.container {
    text-align: center;
}

.welcome-section h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 110px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.welcome-section p {

    font-weight: bold;
    color:purple;
    font-size: 1.2rem;
    margin-bottom: 30px;
    font-weight: 300;
}

.buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn {
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 1rem;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}

.register-btn {
    background-color: #ff6f61;
    color: white;
}

.login-btn {
    background-color: #6a5acd;
    color: white;
}

.btn:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h1>Selamat Datang</h1>
        </div>
        <div class="buttons">
            <a href="pendaftaran" class="btn register-btn">Daftar</a>
            <a href="login" class="btn login-btn">Login</a>
        </div>
        <br><br>
        <br>
        <div class="welcome-section">
            <p>Created by</p>
            <p>Lita Yuliana, MI22A, 2257401018</p>
        </div>
    </div>
</body>
</html>