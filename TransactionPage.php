<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.btnApp{

    background:rgb(0,68,255);
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
    transform: scale(1.1,1.1);
    
}
.btnApp:hover{
    background: #fff;
    color:rgb(0,68,255);
  }
#third{
    padding-left: 10%;
}


#wrapper{

  width: 100%;
  margin-right: auto;
  margin-left: auto;
  border-color: black;

}
.masterCards{

    margin-top: 10%;
    display: flex;

    font-size: larger;
    border-width: 50%;
}
body {
	font-family: Arial, sans-serif;

   }

form {
            
    margin-left: 3%;
    width: 30%;
    background-color: rgba(255, 0, 0, 0);
     padding: 10px;
    border: 1px solid rgba(255, 0, 0, 0);  

                 
}

        label {
            background-color: white;
            display: flex;
            margin-bottom: 5px;
            font-size: larger;
            width: none;

        }
        
        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-size: large; 
        }
        #fr{

            background-image: url("cards2.jpg");
            background-position: center;
            background-repeat: no-repeat;
            padding-bottom: 5%;
            padding-top: 10%;
           
        }
#btn{

    border-radius: 10px;
    width: 30%;
}
#btn:hover{
    transform: scale(1.1);

}
#btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}      

#scroll-down-btn {
                  margin-left: 5%;
                  padding: 20px;
                  
                  color: #ffffff00;
                  border-radius: 5px;
                  cursor: pointer; 
                }    
#btn2{
    float: left;
    margin-bottom: 7%;
 
border-radius: 5px;
}

#btn2:active {
transform: translate(0px, 5px);
-webkit-transform: translate(0px, 5px);
box-shadow: 0px 1px 0px 0px;
}      
.text1::placeholder{
    color: green;
}

.text2::placeholder{
    color: red;
}
</style>


 <script>

  const form = document.querySelector('form');
  const submitBtn = document.querySelector('#submit');

  submitBtn.addEventListener('click', (event) => {
  event.preventDefault();
  
  const name = document.querySelector('#name').value;
  const email = document.querySelector('#email').value;
  const phone = document.querySelector('#phone').value;
  const cardType = document.querySelector('#card-type').value;
  const creditLimit = document.querySelector('#credit-limit').value;
  
  // code to submit form data to server goes here
  console.log(name, email, phone, cardType, creditLimit);
  
  form.reset();
 
});

function apply(){
    alert("are you sure you want to ge back?");
}

function finsih()
{
    alert("Are you sure you want to apply transaction ?");
}
 </script>
    <title>LBI CARDS-WEBSITE </title>
</head>


<body>
    
<div id="wrapper">

 <div id="fr">
<script>
    document.getElementById("fr").style.border = "thick solid black";
</script> 

    <form action= "Proced2.php" method= "get">
        <div style="max-width:400px;margin:auto" class="input-icons">
         <center>
  
         <input type="text" class="text1" name= "Ac_from" placeholder= "enter your account id ->"><br><br>

         <input type="text" class="text2" name= "Ac_To" placeholder= "enter the reciever account id "><br><br>        
    
        <select id="card-type" name="trans_type">
            <option value="debit">Online</option>
            <option value="credit">Cash</option>
            <option value="credit">Cheque</option>
        </select><br><br>

        <input type="number" id="credit-limit" name="Amount" min="1" max="100000" placeholder="enter value"><br><br>
        
        
        <button type="submit" id="btn">submit</button>
   
        </center>
     
</div>
 
    </form>
    <center><a href="home.php"><button id="btn2" onclick="apply()">return back</button></a></center>

</div>      

</div>

</body >
</html>