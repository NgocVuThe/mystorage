<?php
include_once "app/views/layout/header.php";
include_once "app/views/layout/sidebar.php";
include_once "app/views/layout/navbar.php";
?>
<script language = "javascript">
    function checkData(){
        var name = document.getElementById('name').value;
        var slug = document.getElementById('slug').value;
        var price = document.getElementById('price').value;
        var description = document.getElementById('description').value;
        var short_description = document.getElementById('short_description').value;

        if(name == ''){
            alert('Bạn chưa nhập tên sản phẩm'); 
        }
        else if(slug == ''){
            alert('Bạn chưa nhập Slug');
        }
        else if(price == ''){
            alert('Bạn chưa nhập giá');
        }
        else if(description == ''){
            alert('Bạn chưa nhập Description');
        }
        else if(short_description == ''){
            alert('Bạn chưa nhập Short Description');
        }
        else{
            alert('Nhập thành công');
            return true;
        }
        return false; 
    }
</script>
<section class="content">
    <div class="container-fluid">
    <h3 class="text-center">Create Product</h3>
        <form action="" method="POST" onsubmit = "return checkData()">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" id = "name">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" id = "slug">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5" id = "description"></textarea>
            </div>

            <div class="form-group">
                <label for="">Short Description</label>
                <textarea name="short_description" class="form-control" cols="30" rows="5" id = "short_description"></textarea>
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" id = "price">
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
</section>
<?php include_once "app/views/layout/footer.php";?>

