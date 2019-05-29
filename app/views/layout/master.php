<?php
require_once "app/views/layout/header.php";
?>
<style>
    .bg-1{
        height: auto;
        /* background-color: red; */
    }
    .content-left{
        height: 100px;
        background-color: green;
    }
    .content-right{
        height: auto;
        /* background-color: blue; */
    }
    .content{
        height: auto;
    }
</style>
<div class="container-fluid bg-1">
    <div class="row">
    <div class="col-md-2 content-left">
        <?php include_once "app/views/layout/navbar.php";?>
    </div>
    <div class="col-md-10 content-right">
        <div class="sidebar">
        </div>
        <div class="content">
        <?php include_once $view;?>
        </div>
    </div>
    </div>
</div>