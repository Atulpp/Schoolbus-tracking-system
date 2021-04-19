    <head>
     <link rel="stylesheet" type="text/css" href="style.css">
     <script>
        function validate() {
          var id = document.login.id
          var pswd = document.login.id
          var facname = document.login.facname
            
          if (id.value == "") {
              alert("Please Enter ID!");
              return false;
          }
         
          
          if (pswd.value == "") {
              alert("Please Enter Password!");
              return false;
          }

          if (isNaN(login.id.value)) {
            alert("Enter A Numeric Value For ID");
            login.id.focus();
            return false;

          }

          if (facname.value == "") {
              alert("Please Enter Faculty Name!");
              return false;
          }
         

        }

        </script>
</head>

   <div class="main">
          <div class="login-box">
          <div class="info">Register Into Faculty Account</div>
        <form name="login" onsubmit="return validate()" action="facultyregister.php" method="post" class="form-box">

        <label class="account" for="facname">Name:</label>
        <input type="text" style=background-color:white name="facname" class="inp" placeholder="Name" ><br>

        <label class="account" for="id">User ID:</label>
        <input type="numeric" style=background-color:white name="id" class="inp" placeholder="ID Number" ><br>

        <label class="account" for="password">Password:</label>
        <input type="password" style=background-color:white name="pswd" class="inp" placeholder="*****"><br><br>
        
        <input type="submit" name="submit" value="REGISTER" class="sub-btn"><br><br><br>
