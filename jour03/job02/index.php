<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    
    <div id="gameCheck">
        
    </div>
    
    <div id="game">
        <img src="./img/arc1.png" alt="" id="1" name="img1">
        <img src="./img/arc2.png" alt="" id="2" name="img2">
        <img src="./img/arc3.png" alt="" id="3" name="img3">
        <img src="./img/arc4.png" alt="" id="4" name="img4">
        <img src="./img/arc5.png" alt="" id="5" name="img5">
        <img src="./img/arc6.png" alt="" id="6" name="img6">
    </div>

    <button id="start">JOUER</button>
    <button id="restart">REJOUER</button>
    
    <script src="./script.js"></script>

    <style>
        body{
            margin: 0;
            padding: 0;
        }

        #restart{
            display: none;
        }

        div{
            width: 820px;
            height: 399px;
            border: 1px solid black;
        }
        .hide{
            display: none;
        }
        img{
            cursor: pointer;
        }
    </style>
</body>
</html>