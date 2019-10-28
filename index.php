<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>Form Login</title>
</head>
<body uk-height-viewport class="uk-height-vewport uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./pexels.jpeg); background-size : cover;">
          
       <form>
         <div class="uk-container uk-padding uk-align-center uk-position-center uk-card uk-card-default uk-card-body">  
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input style="border-radius:40px;" class="uk-input" type="text" placeholder="Username...">
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input style="border-radius:40px; " class="uk-input" type="password" placeholder="Password..." minlength="6" maxlength="25">
                </div>
            </div>
           
            <div class="uk-margin">
        <div style=" " class="">Gender</div>
        <div class="uk-form-controls" style="">
            <label><input class="uk-radio" type="radio" name="radio1"> Male</label>
            <br>
            <label><input class="uk-radio" type="radio" name="radio1"> Female</label>
            <br><br>
            <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" style="background : black;color:white;">LOGIN</button>
        </div>
    </div>

        </form>
</div>
     </div>          
        </div>
    
</div>



    
</body>
</html>