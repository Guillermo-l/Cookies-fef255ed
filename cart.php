<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <!-- maak hier de opdracht -->
    <?php

    

    if (isset($_POST["submit"])) {
        if (isset($_POST["item"]) && !empty($_POST["item"]) && is_numeric($_POST["item"]) && $_POST["item"] > 0 && $_POST["item"] <= 3) {
            header("Refresh:0");
            setcookie("item", $_POST["item"]);
        } else {
            header("Refresh:0");
            setcookie("item", $_COOKIE["item"], time()-30);
        }
    }
    if (isset($_COOKIE["item"])) {
        echo "Gekozen item: #" . $_COOKIE["item"];
    } else {
        echo "Kies een geldig product nummer";
    }
     
    

    ?>

    <div>
        <form action="" method="post" name="item" autocomplete="off">
            <label for="item">Kies een item</label>
            <input type="text" name="item" id="item" />
            <input type="submit" name="submit" value="Verstuur" />
        </form>
    </div>
</body>

</html>