<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Login & Registration Form || codemastiwithadi</title>
    <!------link with css---------->
    
    </head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #132D46;
}

.wrappera {
    position: relative;
    width: 400px;
    height: 500px;
    background: #000; 
    box-shadow: 0 0 50px rgb(125, 191, 177);
    border-radius: 20px;
    padding: 40px;
    overflow: hidden;
}
.wrappera:hover{
    animation: animate 1s linear infinite;
}
@keyframes animate{
    100%{
        filter: hue-rotate(360deg);
    }
}

.form-wrappera {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    transition: 1s ease-in-out;
}
.wrappera.active .form-wrapper.sign-in {
    transform: translateY(-450px);
}

.wrappera.active .form-wrapper.sign-up {
    transform: translateY(-450px);
}
h2 {
    font-size: 30px;
    color: #fff;
    text-align: center;
}

.input-group {
    position: relative;
    margin: 30px 0;
    border-bottom: 2px solid #fff;
}

.input-group label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.input-group input {
    width: 320px;
    height: 40px;
    font-size: 16px;
    color: #fff;
    padding: 0 5px;
    background: transparent;
    border: none;
    outline: none;
}

.input-group input:focus~label,
.input-group input:valid~label {
    top: -5px;
}

.remember {
    margin: -5px 0 15px 5px;
}

.remember label {
    color: #fff;
    font-size: 14px;
}

.remember label input {
    accent-color: rgb(125, 191, 177);
}

button {
    position: relative;
    width: 100%;
    height: 40px;
    background: rgb(125, 191, 177);
    box-shadow: 0 0 10px rgb(125, 191, 177);
    font-size: 16px;
    color: white;
    font-weight: 500;
    cursor: pointer;
    border-radius: 30px;
    border: none;
    outline: none;
}

.signUp-link {
    font-size: 14px;
    text-align: center;
    margin: 15px 0;
}

.signUp-link p {
    color: #fff;
}

.signUp-link p a {
    color: rgb(125, 191, 177);
    text-decoration: none;
    font-weight: 500;
}

.signUp-link p a:hover {
    text-decoration: underline;
}
#error{
    background: rgb(125, 191, 177);
    color: rgb(255, 0, 0) ;
    padding: 4px;
}



</style>
<body>

        <!---------start with sign-up seaction------->
        <div class="wrappera">
        <div class="form-wrapper sign-up">
        <form action="register_post.php" method="POST">
                <h2>create account</h2>


                <?php if(isset($user_error)){
               echo $user_error;
            } ?>
                <div class="input-group">
                    <input type="text" name="Username" id="Username" required>
                    <label for="Username" >Username</label>
                </div>


                <?php if(isset($Email_error)){
               echo $Email_error;
            } ?>
                <div class="input-group">
                    <input type="email"name="Email" id="Email" required>
                    <label for="Email">Email</label>
                </div>


                <?php if(isset($Pass_error)){
               echo $Pass_error;
            }?>
                <div class="input-group">
                    <input type="password" name="Password" id="Password" required>
                    <label for="Password">Password</label>
                </div>
            
                <button type="submit" name="submit" id="submit" value="Sign Up" >Sign Up</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="jjj.php" class="signInBtn-link">Sign In</a></p>
                </div>
                </form>
        </div>
    </div>

    <!----link with js------->
    <script src="script.js"></script>
</body>

</html>