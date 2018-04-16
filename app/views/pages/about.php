<!-- Adding header file -->
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="text-center">
    <h1 class="dispaly-3"><?php echo $data['title']; ?></h1>
    <p class="lead"><?php echo $data['description']; ?></p>
    <p>Version: <strong><?php echo APPVERSION; ?></p></strong>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
