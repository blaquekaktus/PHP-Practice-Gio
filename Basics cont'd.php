<html>
    <head>

    </head>
    <body>
        <?php $score = 55 ?>

        <?php if($score >= 90): ?>
            <strong style="color: green;">A</strong>
        <?php elseif($score >= 80): ?>
            <strong>B</strong>
        <?php elseif($score >= 70): ?>
            <strong>C</strong>
        <?php elseif($score >= 60): ?>
            <strong>D</strong>
        <?php else: ?>
            <strong style="color: red;">F</strong>
        <?php endif ?>

    </body>
</html>