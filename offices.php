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
    <label for="officeCode" class="col-4 col-form-label">officeCode</label> 
    <div class="col-8">
      <input id="officeCode" name="officeCode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="city" class="col-4 col-form-label">city</label> 
    <div class="col-8">
      <input id="city" name="city" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-4 col-form-label">phone</label> 
    <div class="col-8">
      <input id="phone" name="phone" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="addressLine1" class="col-4 col-form-label">addressLine1</label> 
    <div class="col-8">
      <textarea id="addressLine1" name="addressLine1" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="addressLine2" class="col-4 col-form-label">addressLine2</label> 
    <div class="col-8">
      <textarea id="addressLine2" name="addressLine2" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="state" class="col-4 col-form-label">state</label> 
    <div class="col-8">
      <input id="state" name="state" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-4 col-form-label">country</label> 
    <div class="col-8">
      <input id="country" name="country" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="postalCode" class="col-4 col-form-label">postalCode</label> 
    <div class="col-8">
      <input id="postalCode" name="postalCode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="territory" class="col-4 col-form-label">territory</label> 
    <div class="col-8">
      <input id="territory" name="territory" type="text" class="form-control">
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
