<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>

    <form method="POST" action="/welcome">
        @csrf

        <label>First name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br><br>

        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="indonesia">Indonesian</option>
            <option value="english">English</option>
            <option value="malaysia">Malaysian</option>
            <option value="other">Other</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language[]" value="indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" name="language[]" value="english"> English<br>
        <input type="checkbox" name="language[]" value="other"> Other<br><br>

        <label>Bio:</label><br>
        <textarea name="bio" rows="5" cols="30"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>

</body>
</html>
