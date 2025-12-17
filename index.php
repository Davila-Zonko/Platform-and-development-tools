<?php
$data = include "CaseStudy.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Composite & Observer Patterns</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="container py-5">
    <div class="container-box">

        <h2 class="header-title text-center mb-4">
            Composite & Observer Design Patterns (PHP Case Study)
        </h2>

        <hr>

        <h4 class="section-title mt-4">📘 Composite Pattern Output</h4>
        <div class="output-box">
            <?php echo nl2br($data["composite"]); ?>
        </div>

        <h4 class="section-title mt-4">🔔 Observer Pattern Output</h4>
        <div class="output-box">
            <?php echo nl2br($data["observer"]); ?>
        </div>

        <div class="text-center mt-4">
            <a href="" class="btn btn-custom px-4 py-2">Run Again</a>
        </div>

    </div>
</div>

</body>
</html>
