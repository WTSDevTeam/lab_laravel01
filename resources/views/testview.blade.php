<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kookcupid</title>
    
    <link href="/asset/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

</head>
<body>
    <h1>{{ $title_name }}</h1>
    
    <form action="{{URL::to('getdata')}}" method="POST">
        @csrf
        <label for="">ชื่อ</label>
        <input type="text" name="txtname" id="name" value="{{ $name }}">
        <br>
        <label for="">นามสกุล</label>
        <input type="text" name="surname" id="surname" value="{{ $sur_name }}">
        <br>
        <label for="">อายุ</label>
        <input type="text" name="age" id="age" value="">
        <button type="button" onclick="hello();">button 1</button>
        <button>submit</button>
    </form>
    
    <script type="text/javascript" src="/asset/js/jquery.js"></script>
    <script type="text/javascript" src="/asset/script.js"></script>

    <script>
        $(document).ready(function() {
            console.log('jquery ทำงานแล้ว');
        });

        function hello() {
            let name = $('#name').val();
            //let name = $("[name='txtname']").val();
            let surname = $('#surname').val();
            alert(name + ' ' +surname);
        }

    </script>

</body>
</html>
