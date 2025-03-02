<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
<style>
body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #a8edea, #fed6e3);
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.signup-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px 40px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

.signup-card h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #6a5acd;
}

.signup-form .form-group {
    margin-bottom: 15px;
    text-align: left;
}

.signup-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.signup-form input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.signup-btn {
    background: #6a5acd;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: all 0.3s ease;
    margin-top: 10px;
    width: 40%;
}

.signup-btn:hover {
    background: #836fff;
}

.login-link {
    margin-top: 15px;
    font-size: 0.9rem;
}

.login-link a {
    color: #6a5acd;
    text-decoration: none;
    font-weight: bold;
}

.login-link a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>
    <div class="signup-container">
        <div class="signup-card">
            <h2>Pendaftaran</h2>
            <form action="#" method="POST" class="signup-form">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                <br><br>
                <div class="buttons">
                <a href="login" class="btn signup-btn">Daftar</a>
                <a href="welcome" class="btn signup-btn">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>