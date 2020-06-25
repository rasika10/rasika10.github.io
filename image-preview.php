
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Crime File Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/animation.css">
<link rel="stylesheet" href="css/log.css">
<link rel="stylesheet" href="css/c.css">
<script src="browse.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">-->

<link rel="icon" href="images/icon.jpg">

<style media="screen">
  .container{
    padding-top: 125px;
    padding-left: 150px;
    padding-right: 50px;
    padding-bottom: 120px;
  }
  button {
      background-color:#580d0a;
      color: #f09220;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }
  hr{
    size:5px;
  }

  button:hover {
      opacity: 0.8;
  }
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>
</head>
<body>


    <!--div class="container"-->
        <!-- Trigger the modal with a button -->



<!--<div class="container-fluid">-->

<div class="container text-center" style="padding-left: 100px; text-align: center;">
  <h2 style="color:brown;"><center>Upload Image</center></h2>
  <hr>

    <div class="row" style="align:center;">


<form action="insert.php" method="post" onsubmit="return vali()" enctype="multipart/form-data">
<div class="col-lg-6" style="padding-left:60px;">
  <div class="form-group">

          <div class="input-group">
              <span class="input-group-btn">
                  <span class="btn btn-default btn-file">
                      Browse… <input type="file" id="image" name="image">
                  </span>
              </span>
              <input type="text" class="form-control" readonly >
          </div>
          <img id='img-upload'/>
          <center><span id="im" class="text-danger text-weight-bold"></span></center>

      </div>
</div>

<button  onclick="vali()" class="btn" name="Submit">Submit</button>


      </form>
    </div>
  </div>
</body>
<script type="text/javascript">
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;

		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#image").change(function(){
		    readURL(this);
		});
	});

</script>
<script type="text/javascript">
function vali(){
  var i= document.getElementById('image').value;

    if(i == ""){
    document.getElementById('im').innerHTML = " Please browse the image ";
    return false;
  }
  }
  </script>

</html>
