<?php

$layout = 'emails/layout.php';
?>

<p>Hello <?= e($application->name) ?>, </p>
<p>
    We're sorry but your application, <?= e($application->title) ?>, was rejected.
</p>
<!-- <pre><?= e($reason) ?></pre> -->
