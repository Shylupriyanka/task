<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form method="POST" action="connect.php">
    firstname:
    <input type="text" name="firstname"><br><br>
    lastname:
    <input type="text" name="lastname"><br><br>
    gender:
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="male">male<br><br>
    country:
    <select name="country">
        <option value="India">India</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="USA">USA</option>
        <option value="Asia">Asia</option>
        <option value="Australia">Australia</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Canada">Canada</option>
        <option value="Egypt">Egypt</option>
        <option value="France">France</option>
       </select><br><br>
    from:   
    <input type="date" name="from"><br><br>
    to:
    <input type="date" name="to"><br><br>
    <input type="submit" value="submit" name="name">
<form>
</body>
</html>