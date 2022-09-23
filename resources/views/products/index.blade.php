<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/index.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../assets/images/logos.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <title>Add Book</title>
</head>
<body>
    <div class="testbox">
      <!-- Form to register the user -->
      <form action="{{ route('products.store') }}" method="post">
      @csrf
        <div class="banner"></div>
        <br/>
          <fieldset class="field">
            <legend>Book Information</legend>
              <div class="item">
                <label for="name">Book Title</label>
                <input id="name" type="text" name="name" required/>
              </div>
              <div class="item">
                <label for="email">Publisher</label>
                <input id="email" type="text" name="publisher" required/>
              </div>
              <div class="item">
                <label for="age">Author/s</label>
                <input id="age" type="text" name="author" required/>
              </div>
              <div class="item">
                <label for="address">Year Published</label>
                <input id="address" type="text" name="year" required/>
              </div>
              <div class="item">
                <label for="address">Volume</label>
                <input id="vaccine" type="text" name="volume" required/>
              </div>

         <div>
        <span id="result"></span>
        <div class="btn-block">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Register
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel"><center><b>Data Confirmation</b></center></h5>
                </div>
                <div class="modal-body">
                  <h5><b>Make sure all the data are correct.</b></h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary" href="/">Register</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

      </fieldset>
    </form>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</html>





