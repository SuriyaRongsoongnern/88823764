<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BISHOPPz</title>
</head>
<body> 
    <?php

    $user = "BISHOPPz";
    $arr = array("Home","Member","About","Contact");

    ?>
    <h1>ยินดีต้อนรับเข้าสู่เว็บไซต์ {{$user}} </h1>
    <p>BISHOPPz - บริการจ้างเล่นเกม</p>
    <h1>{{$user}}</h1>

    @if($user == "BISHOPPz")
        <h1>คนนี้เป็นแอดมิน</h1>
    @else
        <h1>คนนี้เป็นสมาชิก</h1>
    @endif

    @foreach($arr as $menu)
        <a href="">{{$menu}}</a>
    @endforeach

    <ul>
    @for($i=1; $i<=5; $i++)
        <li>&i</li>
    @endfor
    </ul>

    @for($i=1; $i<=5; $i++)
        <p>&i</p>
    @endfor

</body>
</html>