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
    echo str_replace("Daniel","Jason","Hi Daniel");
    ?>
    </body>
</html>



