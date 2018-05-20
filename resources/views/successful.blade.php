<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body class="text-center">
    <h1 id="result"></h1>
    <div id="type"></div>
    <div id="info">
        <table>
            <tr>
                <td>roll number</td>
                <td id="rollnumber"></td>
            </tr>
            <tr>
                <td>name</td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>phone</td>
                <td id="phone"></td>
            </tr>
            <tr>
                <td>email</td>
                <td id="email"></td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        document.getElementById('type').innerText = <?php echo json_encode($type); ?>;
        document.getElementById('result').innerText = <?php echo json_encode($result); ?>;
        var student = <?php echo json_encode($student); ?>;
        student = JSON.parse(student)
        document.getElementById('rollNumber').innerText = student.rollNumber;
        document.getElementById('name').innerText = student.name;
        document.getElementById('phone').innerText = student['phone'];
        document.getElementById('email').innerText = student['email'];
    </script>
    <form type="GET" action="/">
        <button type="submit">return homepage</button>
    </form>

</body>
</html>