<?php include_once '../app/view/admin/headeradmin.php'; ?>
<div class="container">
    <h2 class="text-center">This is page Admin </h2>
    <?php
    if (isset($insert)) {
        echo '<div class="alert alert-success">' . $insert . '</div>';
    }elseif(isset($update)){
        echo '<div class="alert alert-success">' . $update . '</div>';
    }
    ?>
</div>
