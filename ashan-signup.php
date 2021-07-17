<!doctype html>
<html>
<head>
    <title>
        Forms
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('images/home-page-bg.jpg'); background-size: cover;">
<div class="row">
   <div class="col-md-4 shadow mx-auto mt-4 bg-white p-3">
       <h1 class="text-center text-info">SIGNUP</h1>
       <form action="" method="post">
           <div class="row">
               <div class="col-md-6">
                   <label>First name</label>
                   <input type="text" name="first_name" class="form-control" placeholder="Emily" required/>
               </div>
               <div class="col-md-6">
                   <label>Last name</label>
                   <input type="text" name="last_name" class="form-control" placeholder="Nakachwa" required/>
               </div>
           </div>
            <label>Email</label>
           <input type="email" name="email" placeholder="eg ashan@boostedtechs.com"  autocomplete="off" required class="form-control">
           <label>Password</label>
           <input type="password" name="password" autocomplete="off" class="form-control" required placeholder="Password" />
           <label>Repeat password</label>
           <input type="password" name="password-2" class="form-control" required placeholder="Repeat password" />
            <button class="btn btn-primary mt-2 mb-2 form-control">CREATE ACCOUNT</button>
       </form>
   </div>
</div>
</body>
</html>