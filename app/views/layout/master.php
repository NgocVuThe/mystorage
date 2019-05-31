<?php
require_once "app/views/layout/header.php";
?>
<div class="container-fluid bg-1">
    <div class="row">
    <div class="col-md-2 content-left">
        <?php include_once "app/views/layout/navbar.php";?>
    </div>
    <div class="col-md-10 content-right">
        <div class="content">
        <?php $this->show();?>
        <?php include_once "app/views/layout/footer.php";?>
        </div>
    </div>
    </div>
</div>

