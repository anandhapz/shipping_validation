<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Validation Form</title>
</head>
<body>

<div class="container border border-5 rounded" style>
  <h2>Address Validator</h2>
  <p>Validate/Standardizes addressess using USPS</p>
  <form action="action.php" method="POST" class="m-3">
    <div class="form-group m-2">
      <label for="Addres Line1">Addres Line1</label>
      <input type="text" class="form-control" id="address_line_1" placeholder="Addres Line1" name="address_line_1">
    </div>
    <div class="form-group m-2">
      <label for="Addres Line2">Addres Line2</label>
      <input type="text" class="form-control" id="address_line_2" placeholder="Addres Line1" name="address_line_2">
    </div>
    <div class="form-group m-2">
      <label for="City">City</label>
      <input type="text" class="form-control" id="city" placeholder="City" name="city">
    </div>

    <div class="form-group m-2">
    <label for="State">State</label>
    <select class="form-control" id="State" name="state">
    <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
    </select>
  </div>

    <div class="form-group m-2">
      <label for="Zip Code">Zip Code</label>
      <input type="number" class="form-control" id="zip_code" placeholder="Zip Code" name="zip_code">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

</body>
</html>