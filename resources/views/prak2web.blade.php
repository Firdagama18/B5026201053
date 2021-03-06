<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validation Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      label {
        display: inline-block;
        width: 150px;
      }
      input {
        width: 800px;
      }
      select {
        padding: 5px 10px;
        width: 800px;
      }
      .container{
          border: black;
      }
      textarea {
        vertical-align: top;
      }
      body{
        background-image:url("background.jpg");
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-repeat: no-repeat;
        background-size:cover;
        height:100vh;
      }
      .mb-3{
          justify-content: first baseline;
      }
      .border{
        color: #303030;
      }

    </style>
  </head>
  <body>
    <div class="container border border-dark mt-4">
      <h2 class="mt-3 text-center">Registration Form</h2>
      <form method="post">
    <!---USER ID-->
        <div class="mb-3">
          <label for="userID" class="form-label">User ID :</label>
          <input type="number" id="InputUserID" required/>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

    <!--Password-->
        <div class="mb-3">
          <label for="Password" class="form-label ">Password :</label>
          <input type="password" id="InputPassword" required/>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

    <!--Name-->
        <div class="mb-3">
          <label for="Name" class="form-label">Name :</label>
          <input type="text" id="InputName" required/>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

    <!--Address-->
        <div class="mb-3">
          <label for="Address" class="form-label">Address :</label>
          <input id="InputAddress" />
        </div>

    <!--Country-->
        <div class="mb-3">
            <form action="/action_page.php">
                <label for="Country">Country :</label>
                <select name="cars" id="cars" required>
                  <option value="">(Please select your country)</option>
                  <option value="1">Indonesia</option>
                  <option value="2">Prancis</option>
                  <option value="3">Jepang</option>
                  <option value="4">Jerman</option>
                </select>
        </div>

    <!--ZIP Code-->
        <div class="mb-3">
          <label for="ZIPcode" class="form-label">ZIP Code :</label>
          <input type="number" id="InputZIPcode" required/>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Must be a</div>
        </div>

    <!--Email address-->
        <div class="mb-3">
          <label for="email" class="form-label">Email address :</label>
          <input type="email" id="InputEmail" required/>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Must be a valid email.</div>
        </div>

    <!--Sex-->
        <div class="mb-3">
          <label for="sex" class="form-label">Sex :</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
            <label class="form-check-label" for="inlineRadio1"> Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
        </div>

    <!--Language-->
        <label for="language" class="form-label">language :</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
          <label class="form-check-label" for="inlineCheckbox1">English</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
          <label class="form-check-label" for="inlineCheckbox2">Indonesia</label>
        </div>

    <!--About-->
    <div class="mb-3">
        <label for="About" class="form-label">About :</label>
        <textarea rows="5" cols="111" id="TITLE"> </textarea>
      </div>

        <center><button type="submit" class="btn btn-primary mb-4">Submit</button></center>
      </form>
    </div>
  </body>
</html>
