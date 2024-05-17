<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
</head>
<body>
  <h1>ADD PRODUCTS</h1>
  <!-- <div>index</div> -->
  <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div>
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter a product name">
    </div>
    <div>
      <label>Quantity</label>
      <input type="text" name="qty" placeholder="Enter a Quantity">
    </div>
    <div>
      <label>Price</label>
      <input type="text" name="price" placeholder="Enter a product price">
    </div>
    <div>
      <label>Description</label>
      <input type="text" name="desc" placeholder="Enter a product description">
    </div>
    <div>
      <input type="submit" value="Create">
    </div>
  </form>
</body>
</html>