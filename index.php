
<?php
//including the database connection file
include_once("config.php");
include_once("insert.php");
$resultt = mysqli_query($mysqli, "SELECT * FROM img ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>YourFrame</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/animation.css">
<link rel="stylesheet" href="css/log.css">
<!--<link rel="stylesheet" href="css/c.css">-->
<script src="browse.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" href="images/icon.jpg">
<style>
body{
overflow-x: hidden;
}
.header{
background-color: brown;
  color: white;
  padding-top: 20px;
  padding-bottom: 20px;
}
.footer{
  background-color: brown;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  padding-top: 25px;
  padding-bottom: 20px;
  margin-bottom: 0px;
  margin-top: 35px;

}
.btnn {
    background-color: #ff863b;
    color: brown;
    padding: 14px 30px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;

}

.btnn:hover {
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
/*img{
 padding:10px; margin-top:10px; margin-left: 40px;
 width:600; height:300;
}*/

#img-upload{
  padding-top: 20px;

  width: 100%;
  margin-bottom: 0px;
}

div.c {
  margin: 65px;
  border: 3px solid #990903;
  float: left;
  width: 240px;
  align-items: center;


}

div.c:hover {
  border: 1px solid orang;
}

div.c img {
  width: 234px;
  height: 30%;
  padding-left: 00px;
  padding-right: 00px;
}

div.desc {
  padding: 5px;
  text-align: center;
  color: white;
  background-color: #990903;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
    <div class="header" style="border-bottom: 5px solid brown;">
               <h2><center>Gallery</center></h2>
  </div>
  <div class="container" style="padding-top:20px; ">
  <!-- Trigger the modal with a button -->
  <center><button type="button" class="btnn" data-toggle="modal" data-target="#myModal">Upload </button></center>
  <!--<a href="image-preview.php" style="text-decoration: none;"><h4>View Records</h4></a>-->

<form action="insert.php" method="post" onsubmit="return vali()" enctype="multipart/form-data">
  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="padding-bottom: 10px; ">
        <form action="/action_page.php">
          <div class="form-group">
      <label>Upload Image</label>
      <div class="input-group">
          <span class="input-group-btn">
              <span class="btn btn-default btn-file">
                  Browse… <input type="file" id="image" name="image">
              </span>
          </span>
          <input type="text" class="form-control" readonly >
       </div>
      <center><span id="im" class="text-danger text-weight-bold"></span></center>
      <img id='img-upload'/>
  </div>

      </div>

        <div class="modal-footer">
          <input type="submit" class="btnn" name="Submit" onclick="vali()">
          <button type="button" class="btnn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>

<div class="container" style="padding-left:10px; padding-right:10px; background-color:#fff5f2;">

  <?php
while($resl = mysqli_fetch_array($resultt)) {


//  echo "<img scr=".$resl['image'].">";

?>
  <!--<div class="row">
    <div class="col-4 col-s-12">
          <div class="card" style="width:265px; height: 265px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
        <?php  // echo "<img src="."gallery/%20".$resl["image"].">";
        ?>
        </div>

        <h4><?php //echo "<td>".$resl['name']."</td>"; ?>  </h4>

      </div>-->

      <div class="c">

      <?php   echo "<img src="."gallery/%20".$resl["image"].">";
      ?>
    </a>
    <div class="desc"> Image <?php echo $resl['id'];?></div>
  </div>

        <?php  }
        ?>


</div>

  <div class="footer">
  <p>Fullstack Challenge 2020</p>
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
  var i= document.getElementById('img').value;

    if(i == ""){
    document.getElementById('im').innerHTML = " Please browse the image ";
    return false;
  }
  }
  </script>
</html>
