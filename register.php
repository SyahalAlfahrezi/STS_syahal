<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .registration-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .registration-container h2 {
            text-align: center;
        }

        .registration-form input[type="text"],
        .registration-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .registration-form button {
            width: 110%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <div class="registration-container"> 
        <h2 >Warung Coding</h2>
        <h2 style="text-align: center ;">Register</h2>
        <form class="registration-form">
            <input type="text" placeholder="nama lengkap" required>
            <input type="text" placeholder="email" required>
            <input type="password" placeholder="Password" required>
            <input type="text" placeholder="tanggal lahir" required>
            <input type="text" placeholder="tempat lahir" required>
            <button type="submit"><a href="index.php">Register</button>
        </form>
    </div>
</body>
</html>
