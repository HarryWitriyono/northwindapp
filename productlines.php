<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form>
  <div class="form-group row">
    <label for="productLine" class="col-4 col-form-label">productLine</label> 
    <div class="col-8">
      <input id="productLine" name="productLine" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="textDescription" class="col-4 col-form-label">Text Description</label> 
    <div class="col-8">
      <textarea id="textDescription" name="textDescription" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="htmlDescription" class="col-4 col-form-label">htmlDescription</label> 
    <div class="col-8">
      <textarea id="htmlDescription" name="htmlDescription" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="image" class="col-4 col-form-label">image</label> 
    <div class="col-8">
      <input id="image" name="image" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
