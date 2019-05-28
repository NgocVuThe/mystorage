<head>
    <script type="text/javascript">
      function ConfirmDelete()
      {
          var conf = confirm("Delete Account?");
            if (conf === false){    
               return false;
            }else{
                alert('Delete student success!')
            }
      }
    </script>
</head>
<body>
    <div class="container">
    <h1>List</h1>
    <table class="table table-bordered table-delete">
        <thead>
            <tr>
                <th>STT</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Status</th>
                <th>Short Description</th>
                <th>Slug</th>
                <th>
                    <a class="btn btn-sm btn-success" href="create-products">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $key => $product): ?>
            <tr id = <?= $product->id; ?>>
                <td><?= $key+1; ?></td>
                <td><?= $product->name; ?> </a></td>
                <td><?= $product->price; ?></td>
                <td><?= $product->description ; ?></td>
                <td><?= $product->status ; ?></td>
                <td><?= $product->short_description ; ?></td>
                <td><?= $product->slug ; ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="edit-products&id=<?=$product->id ?>">Edit</a>
                    <a class="btn btn-sm btn-danger btn-submit" OnClick= "return ConfirmDelete()" href="delete-products&id=<?=$product->id?>">Delete</a>   
                </td>
            </tr>            
        <?php endforeach ?>
        </tbody>
    </table>
    </div>
</body>
