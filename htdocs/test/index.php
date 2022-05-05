<html>
    <head>

    </head>
    <body>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>
    <?php
    @$name = $_GET['person'];
    echo $name." is a hansome fellow!<br>";
    echo str_replace("Daniel","Jason","Hi Daniel")."<br>";

    //Logical Operators
    $x = 10;
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }

    ?>
    </body>
</html>



