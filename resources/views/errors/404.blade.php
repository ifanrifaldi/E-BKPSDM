<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
        }

        h1 {
            font-size: 50px;
            margin: 0;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        .gif-container {
            margin: 20px 0;
        }

        .gif-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #07B3F9;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #005f99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Not Found</h1>
        <div class="gif-container">
            <img src="{{ url('public'   ) }}/template/404.gif" alt="GIF">
        </div>
        <p>Maaf, halaman yang Anda cari tidak ditemukan.</p>
        <a href="javascript:history.back()">Kembali ke halaman sebelumnya</a>
    </div>
</body>
</html>
