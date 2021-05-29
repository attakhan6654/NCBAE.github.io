<html>
<style>
form{
max-width: 400px;

    margin: 250px auto 0;
   background-color: lightblue;
	 border: 2px solid red;
	 transform: translate(-0%, -0%);
}
.cont
{
	
  border-radius: 10px;
 

}
.inpt, .btn
 {
  width: 50%;
  padding: 12px;
  border: none;
  border-radius: 10px;
  margin: 5px 90px;
  opacity: 0.85;
  font-size: 17px;
  
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
 }
 .text
 {
margin: 10px 50px;	 
 }
 .hide-md-lg {
    display: block;
    text-align: center;
  }
</style>
<body style= "background-image: url('images/1.jpg'); height:100%;   background-position: center; background-repeat: no-repeat;  background-size: cover;">
<form  class="cont" action="#">
 

  <div class="text">  First name:<br></div>
    <input class="inpt" type="text" name="firstname" value="Mickey"><br>
    <div class="text">  Last name:<br></div>
    <input class="inpt" type="text" name="lastname" value="Mouse"><br><br>
	 
    <input class="btn" type="submit" value="Submit">
  
</form>
</body>
</html>