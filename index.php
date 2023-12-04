<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kirim Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 50px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            color: #333;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.6);
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.6);
        }
    </style>
</head>
<body>
    <h2>Formulir Kirim Email</h2>
    <form method="post" action="process.php">
        <label for="tujuan_email">Tujuan Email:</label>
        <input type="email" name="tujuan_email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="pesan">Pesan:</label>
        <textarea name="pesan" rows="4" required></textarea><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
