<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script></head>
<body>
    <button id="btnjson1">json1</button>
    Name : <span id="fname"></span> <br/>
    sName : <span id="lname"></span>
</body>
<script>
        function loadjson() {
        var url = "https://cj-android-demon.herokuapp.com/json1.php";
        $.getJSON(url)
            .done(() => {
                console.log(data);
            })
            .fail((xhr, status, err) => {

            });
        }
    

    $(()=>{
        $("btnjson1").click(loadjson)

    })
</script>

</html>
