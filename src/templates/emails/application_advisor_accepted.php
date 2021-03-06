<?php

$layout = 'emails/layout.php';
?>

    <p>
        A CSTEM Scholars application is available for review. Have a reviewer go to
        <?= HTML::link(BASE_URL . '/reviewers/', BASE_URL . '/reviewers/') ?>
        to review it. Here are the details:
    </p>

    <div class="label">Project Title:</div>
    <p><?= e($application->title) ?></p>

<?= HTML::template('application_details.php', $application) ?>
<?= $reviewerComment ?>