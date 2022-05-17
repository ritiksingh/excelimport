<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-4">

   
  <div class="alert alert-success" role="alert" id="m" style="display:none;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> You have been signed in successfully!
</div>

  </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      const d = new Date();
      d.setTime(d.getTime() + (1*60*1000));
      let expires = "expires="+ d.toUTCString();   
     document.cookie = "username=John Doe ;" + expires + ";path=/";
      
      setInterval(function () {
          if(document.cookie==''){
            document.getElementById('m').style.display = 'block';
          }
        }, 1000);
    </script>
</body>
</html>