<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if (filter_var($url, FILTER_VALIDATE_URL)) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode == 200) {
            echo $response;
        } else {
            echo "<div class='error'>Error: Could not load the page. HTTP Status Code: " . $httpCode . "</div>";
        }
    } else {
        echo "<div class='error'>Error: Invalid URL. Please ensure the URL is correct.</div>";
    }
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAYSi's Web Proxy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #E0E0E0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: #1E1E1E;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            font-size: 2.8rem;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            color: #B0B0B0;
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"] {
            width: 80%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 25px;
            border: 1px solid #333;
            background-color: #2C2C2C;
            color: #fff;
            font-size: 1.1rem;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #4CAF50;
            background-color: #333;
        }

        input[type="submit"] {
            width: 80%;
            padding: 15px;
            border-radius: 25px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            background-color: #FF4B4B;
            color: white;
            padding: 20px;
            border-radius: 10px;
            font-size: 1.1rem;
            margin-top: 20px;
        }

        .footer {
            background-color: #1E1E1E;
            color: #B0B0B0;
            text-align: center;
            padding: 20px;
            font-size: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>FAYSi's Web Proxy</h1>
    <p>Access any website anonymously and securely. Simply input a URL below and load the page instantly!</p>

    <div class="form-container">
        <form action="" method="GET">
            <input type="text" id="url" name="url" placeholder="Enter a valid URL, e.g., https://example.com" required>
            <input type="submit" value="Load Page">
        </form>
    </div>
</div>

<div class="footer">
    <p>&copy; 2024 FAYSi's Web Proxy | <a href="https://github.com/faysi223/web-proxy" target="_blank">View Source on GitHub</a></p>
</div>

</body>
</html>

<?php
}
?>
