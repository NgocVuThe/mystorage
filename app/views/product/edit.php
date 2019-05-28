<?php
include_once "app/views/layout/header.php";
include_once "app/views/layout/sidebar.php";
include_once "app/views/layout/navbar.php";
?>
<section class="content">
    <div class="container-fluid">
    <h3 class="text-center">Edit Product</h3>
        <form action="" method="POST" enctype="">
            <input type="hidden" name="id" value="<?=$products->id ?>">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" value = <?=$products->name?>>
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" value = <?=$products->price?> >
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5" value = <?=$products->description?>></textarea>
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" value = <?=$products->slug?>>
            </div>

            <div class="form-group">
                <label for="">Short Description</label>
                <textarea name="short_description" class="form-control" cols="30" rows="5" value = <?=$products->short_description?>></textarea>
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control">

                    <option value="1" >Active</option>
                    <option value="0" >Inactive</option>

                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name = "update">Update</button>
            </div>
        </form>
    </div>
</section>
<?php include_once "app/views/layout/footer.php";?>