<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#aaa7cc;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        Enter Your Fav Color: <input type="text" name="favcolor">
        <input type="submit" name="submit" value="Check Now">
    </form>

    <p>
        <?php
           if(isset($_POST['submit'])){
             $favColor=$_POST['favcolor'];
             switch($favColor){
                case "black":
                    echo 'your fav color is black </br>';
                    break;

                 case "white":
                    echo "Your fav color is white<br>";
                    break;

                case "blue":
                    echo 'your fav color is blue </br>';
                    break;

                case "red":
                    echo 'your fav color is red </br>';
                    break;

                case "green":
                    echo 'your fav color is green </br>';
                    break;

                case "yellow":
                     echo "Your fav color is yellow<br>";
                     break;

                case "orange":
                    echo "Your fav color is orange<br>";
                    break;

                case "pink":
                    echo "Your fav color is pink<br>";
                    break;

                case "purple":
                    echo "Your fav color is purple<br>";
                    break;

                case "brown":
                    echo "Your fav color is brown<br>";
                    break;

                case "grey":
                     echo "Your fav color is grey<br>";
                     break;

                case "cyan":
                     echo "Your fav color is cyan<br>";
                     break;

                case "magenta":
                     echo "Your fav color is magenta<br>";
                     break;
                     
                default:
                    echo "Sorry, I am not sure about your fav color";
             }
           }
        ?>
    </p>
</body>
</html>