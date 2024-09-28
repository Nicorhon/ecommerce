<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is php</p>
    <?php
        $weekname = "monday";
        switch($weekname){
            case "monday":
            case "tuesday":
            case "wednesday":
            case "thursday":
            case "friday":
                echo "weekdays";
                break;
            case "saturday":
            case "sunday":
                echo "weekends";
                break;
            /*
            case "tuesday":
                echo "weekdays";
                break;
            case "wednesday":
                echo "weekdays";
                break;
            case "thursday":
                echo "weekdays";
                break;
            case "friday":
                echo "weekdays";
                break;
            case "saturday":
                echo "weekdays";
                break;
            case "sunday":
                echo "weekdays";
                break;
            */
            default:
                echo "not valid day";
                break;
        }
    ?>
</body>
</html>