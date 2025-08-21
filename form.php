<html>
    <style>
         body {
            display: flex;
            justify-content: center;               
            margin: 0;
            font-family: Arial, sans-serif;
            background: white;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
             width: 400px;
            margin: auto;
         }
        input, select, button {
            width: 90%;
            padding: 6px;
            margin: 5px 0;
            border-radius: 5px;
        }
        input[type="submit"] {
         background-color: #4CAF50;
        padding: 10px;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        }
        </style>
    <body>
        <form action ="submit.php" method="post">
            <label>Name</label>
            <input type="text" name="name"><br><br>

            <label>Email</label>
            <input type="email" name="email"><br><br>

            <lebal>Phone</lebal>
            <input type="number" name="phone"><br><br>

            <Label>Address</Label>
            <input type="txt" name="address"><br><br>

            <lebal>Gender</lebal>
            <select name="ugender">
                <option value="male">male</opution>
                <option value="female">female</option>
            </select><br><br>
            <input type="submit" name="submit">
</form>
</body>
</html>