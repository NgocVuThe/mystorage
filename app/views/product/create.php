<head>
<script language = "javascript">
<?php

    
?>

</script>
</head>
<body>
    <div class="container">

        <h3 class="text-center">Create Product</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" id = "name">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="">Short Description</label>
                <textarea name="short_description" class="form-control" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" >
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control">
                    <option value="1" >Active</option>
                    <option value="0" >Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name ="btnsubmit">Submit</button>
            </div>
        </form>
    </div>
</body>

