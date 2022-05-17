<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Form Validation</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="alert alert-success" style="display:none;">
successfully submitted
</div>

<div class="alert alert-danger" style="display:none;">
Please update any input value
</div>


<div class="m-4">
    <form class="needs-validation" id="addForm" method="post" novalidate>
    <div class="mb-3">
            <label class="form-label" for="inputEmail">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name" value="Test Name" attr-name="Test Name" required>
            <div class="invalid-feedback">Please enter a valid name.</div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="Test Email" attr-email="Test Email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
       
        <button type="button" onclick="updateData()" name="submit" class="btn btn-primary">Sign in</button>
    </form>

    <!-- JavaScript for disabling form submissions if there are invalid fields -->
    <script>
       function updateData()
       {
        var attr_name=$('#inputName').attr('attr-name');
        var attr_email=$('#inputEmail').attr('attr-email');
         var name=$('#inputName').val();
         var email=$('#inputEmail').val();

           if(attr_name!=name || attr_email!=email)
           {

            $.ajax({
    type: 'POST',
    url: 'dataSubmit.php',
    data: { name: name, email: email },
    success: function(data) {

        $(".alert-danger").hide();
        $(".alert-success").show();
            
    }
});
               
            
           }
           else{

            $(".alert-success").hide();
            $(".alert-danger").show();
            
           }
           
       } 
    </script>
</div>
</body>
</html>