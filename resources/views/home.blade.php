<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    body {
        margin: 10px;
        padding: 5px;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, rgb(230, 116, 120), #d4a192);
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
    margin-bottom: 10px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.welcome-sectionn h1 {
    color: #f10000;
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 100px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.welcome-section p {
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

        <div class="welcome-sectionn">
            <h1>Home</h1>
        </div>

        <div class="welcome-section">
            <h1>Lita Yuliana</h1>
            <h3>2257401018</h3>
            <h2>MI22A</h2>
        </div>
        <br>
        <div class="buttons">
            <a href="welcome" class="btn login-btn">Logout</a>
        </div>
    </div>
</body>
</html>