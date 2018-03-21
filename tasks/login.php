<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>

<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
 <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

 <!-- Modal Content -->
 <form class="modal-content animate" action="/action_page.php">
   <div class="imgcontainer">
     <img src="moonman.jpg" alt="Avatar" class="avatar">
   </div>

   <div class="container">
     <label for="uname"><b>Moonman</b></label>
     <input type="text" placeholder="Moonman" name="uname" required>

     <label for="psw"><b>Moonman</b></label>
     <input type="password" placeholder="Moonman" name="psw" required>

     <button type="submit">Moonman</button>
     <label>
       <input type="checkbox" checked="checked" name="remember"> Moonman
     </label>
   </div>

   <div class="container" style="background-color:#f1f1f1">
     <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     <span class="psw">Forgot <a href="#">Moonman?</a></span>
   </div>
 </form>
</div>
