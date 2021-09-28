<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
<body>
<form>
<div class="container">
<h1>Admission form</h1>
    <div  class="form">
        <div class="form group col-md-5">
        <lable for="first_name">first name:</lable><br>
        <input type="text" name="first_name" id="first_name"  class="form-control" placeholder="first name" ><br></br>
        </div>
        <div class="form group col-md-5">
        <lable for="last_name">last name:</lable><br>
        <input type="text" name="last_name" id="last_name"  class="form-control" placeholder="last name"><br></br>
        </div>
        <div class="form group col-md-5">
        <lable for="nick_name">nick_name:</lable><br>
        <input type="text" name="nick_name" id="nick_name"  class="form-control" placeholder="nick_name"><br></br>
        </div>
        <div class="form group col-md-5">
        <lable for="email">email:</lable><br>
        <input type="text" name="email" id="email"  class="form-control" placeholder="email"><br></br>
        </div>
        <div class="form group col-md-5">
        <lable for="password">password:</lable><br>
        <input type="text" name="password" id="password"  class="form-control" placeholder="password"><br></br>
        </div>
        <div class="form group col-md-6">
        <lable for="date_of_birth">date of birth:</lable><br>
        <input type="date" name="date_of_birth" id="date_of_birth"  class="form-control" placeholder="date of birth"><br></br>
        </div>
        <div class="form group col-md-6">
        <lable for="gender">gender:</lable><br>
        male<input type="radio" name="gender" id="gender">female<input type="radio" name="gender" id="gender"><br></br>
        </div>
        <div class="form group col-md-6">
        <lable for="mobile1">mobile1:</lable><br>
        <input type="text" name="mobile1" id="mobile1"  ><br></br>
        </div>
        <div class="form group col-md-6">
        <lable for="mobile2">mobile2:</lable><br>
        <input type="text" name="mobile2" id="mobile2"  ><br></br>
        </div>
        <div class="form group col-md-6">
        <lable for="address">address:</lable><br>
        <input type="text" name="address" id="address"  class="form-control" placeholder="address"><br></br>
        </div>
    
    </div>
    <button type="submit" class="btn-btn-primary">Submit</button>
</div>
</form>
</body>

</html>