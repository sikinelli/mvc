<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head> 

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



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
  max-width: 360px;
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
        if(isset($userById)){
            foreach ($userById as $key => $value) {                
            
?>


<form action="<?php echo BASE_URL; ?>/editKorisnik/updateLozinka/<?php echo $value['user_id'] ?>" method="post"> 
  <label>    
    
    
    <input type="password" class="input" name="polje_nova" required="1" placeholder="Unesi novu lozinku">
   
    
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>  

  <button name="submit">Sacuvaj</button><br><br><br>
  <p class="message">Hoces da odustanes? <a href="<?php echo BASE_URL; ?>/Profil">Vrati se nazad</a></p>

</form>
        
<?php } } ?>