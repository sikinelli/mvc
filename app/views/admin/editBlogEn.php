<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head> 

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<style>
#pocetna { /* button vrati se nazad*/
  padding: 12px 24px;
  font-weight: bold;
  background-color: #2bafa7; 
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}
#pocetna:hover {
  background: rgb(220,220,220);
  color: rgb(120,120,120);
}

body {
  background: #2bafa7;
}
form {
  top: 100px;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 650px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
form .input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 14px;
}
form .message a {
  color: #2bafa7;
  text-decoration: none;
}



.input:focus + .line-box .line {
  width: 100%;
}

.label-txt {
  position: absolute;
  top: -2.6em;
  padding: 7px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}

.label-active {
  top: -3em;
}

button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #2bafa7;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

form button:hover,.form button:active,.form button:focus {
  background: #13504c;
}

#dimmer
{
    background:#000;
    opacity:0.5;
    position:fixed; /* important to use fixed, not absolute */
    top:0;
    left:0;
    width:100%;
    height:100%;
    display:none;
    z-index:9999; /* may not be necessary */
}
</style>


<?php 
        if(isset($blogById)){
            foreach ($blogById as $key => $value) {                
            
?>


<form action="<?php echo BASE_URL; ?>/editBlogEn/updateBlog/<?php echo $value['blog_id'] ?>" method="post"> 
  <label>
  <a style="color:#fff" href="<?php echo BASE_URL; ?>/editBlog/editBlog/<?php echo $value['blog_id'] ?>"><button type="button" class="btn btn-secondary" >SRP</button></a>
    <br><br>             

    <p style="color:#2bafa7" class="message">Blog name</p>   
    <input type="text" class="input" name="polje_naslov" required="1" value="<?php echo $value['blog_naslov'] ?>" placeholder="name">
    
    <p style="color:#2bafa7" class="message">Author Firstname/Lastname</p>
    <input type="text" class="input" name="polje_autor" required="1" value="<?php echo $value['blog_autor'] ?>" placeholder="author">
    
    <p style="color:red" class="message">aktivan | neaktivan</p>
    <input type="text" class="input" name="polje_status" required="1" value="<?php echo $value['blog_status'] ?>" placeholder="status">
    <textarea id="editor"name="polje_opis" placeholder="Main text" required="1"> </textarea>
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>  

    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>  

  <button name="submit">Edit</button>
  <p class="message">Want to quit? <a href="<?php echo BASE_URL; ?>/Blog">Back</a></p>

</form>
        
<?php } } ?>

