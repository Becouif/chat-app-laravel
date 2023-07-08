<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuickChat</title>
    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- start of form  -->

    <div class="wrapper">
        <div class="logo" >
        <i style="font-size:100px" class="fa-regular fa-message my-icon"></i>
        <div class="text-center mt-4 name">
            QuickChat
        </div>
            <!-- <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt=""> -->
        </div>

        <form action="{{ route('register') }}" method="POST" class="p-3 mt-3"> @csrf
				<div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" class="@error('name') is-invalid @enderror" name="name" id="name" placeholder="Username" required>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" required>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" class="@error('password') is-invalid @enderror" name="password" id="pwd" placeholder="Password" required>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <!-- for comfirm password  -->
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" id="password-confirm" name="password_confirmation" placeholder="confirm password" required>

            </div>
            <button class="btn mt-3">Sign up</button>
        </form>
        <div class="text-center fs-6">
            <a style="font-size:15px" href="{{route('homepage')}}">Login</a>
        </div>
    </div>
    <!-- end of form  -->

    <footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </footer>
    <style>
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
  justify-content:center;
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    /* border-radius: 15px; */
    /* box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff; */
}

.logo {
    width: 80px;
    /* margin: auto; */
    margin-left:4rem;
}
/* start of icon and fontawesome logo css  */

.my-icon{
  margin-left:-10px
}
.my-icon{
	/*transform-style*/
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	transform-style: preserve-3d;
	/*perspective*/
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	-ms-perspective: 1000px;
	-o-perspective: 1000px;
	perspective: 1000px;
	/*Webkit*/
	-webkit-animation-name: rotate;
	-webkit-animation-duration:3s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count:infinite; 
	 -webkit-animation-fill-mode:both; 
	 /*mozilla*/
	-moz-animation-name: rotate;
	-moz-animation-duration:3s;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count:infinite; 
	-moz-animation-fill-mode:both; 
	 /*Opera*/
	-o-animation-name: rotate;
	-o-animation-duration:3s;
	-o-animation-timing-function: linear;
	-o-animation-iteration-count:infinite; 
	-o-animation-fill-mode:both; 
	 /*IE 10*/
	-ms-animation-name: rotate;
	-ms-animation-duration:3s;
	-ms-animation-timing-function: linear;
	-ms-animation-iteration-count:infinite; 
	-ms-animation-fill-mode:both; 
	
	 /*Default*/
	animation-name: rotate;
	animation-duration:3s;
	animation-timing-function: linear;
	animation-iteration-count:infinite; 
	animation-fill-mode:both; 
	color:#25405D;
	margin:30px;
}


@-webkit-keyframes rotate {
 	0% {
		 text-shadow: 1px 1px 1px #CCC;
		 -webkit-transform: rotateY(0deg); 
	} 
 
	25% {
		  text-shadow: 1px 1px 1px #CCC, -2px 1px 1px #CCC, -3px 1px 1px #CCC, -4px 1px 1px #CCC,-4px 1px 1px #CCC,
		 -5px 1px 1px #CCC,-6px 1px 1px #CCC,-7px 1px 1px #CCC,-8px 1px 1px #CCC,-9px 1px 1px #CCC,-10px 1px 1px #CCC,
		 -11px 1px 1px #CCC,-12px 1px 1px #CCC,-13px 1px 1px #CCC,-14px 1px 1px #CCC,-15px 1px 1px #CCC,-16px 1px 1px #CCC,
		 -17px 1px 1px #CCC,-18px 1px 1px #CCC,-19px 1px 1px #CCC,-20px 1px 1px #CCC; 
		 -webkit-transform: rotateY(40deg); 
	}
	50% {
		 text-shadow: 0px 0px 0px #CCC;
		 -webkit-transform: rotateY(0deg); 
	} 
 
	75% {
		  text-shadow: 1px 1px 1px #CCC, 2px 1px 1px #CCC, 3px 1px 1px #CCC, 4px 1px 1px #CCC,4px 1px 1px #CCC,
		 5px 1px 1px #CCC,6px 1px 1px #CCC,7px 1px 1px #CCC,8px 1px 1px #CCC,9px 1px 1px #CCC,10px 1px 1px #CCC,
		 11px 1px 1px #CCC,12px 1px 1px #CCC,13px 1px 1px #CCC,14px 1px 1px #CCC,15px 1px 1px #CCC,16px 1px 1px #CCC,
		 17px 1px 1px #CCC,18px 1px 1px #CCC,19px 1px 1px #CCC,20px 1px 1px #CCC; 
		 -webkit-transform: rotateY(-40deg); 
	}
	100% {
		 text-shadow: 1px 1px 1px #CCC;
		 -webkit-transform: rotateY(0deg); 
	} 
}


@-moz-keyframes rotate {
 	0% {
		 text-shadow: 1px 1px 1px #CCC;
		 -moz-transform: rotateY(0deg); 
	} 
 
	25% {
		  text-shadow: 1px 1px 1px #CCC, -2px 1px 1px #CCC, -3px 1px 1px #CCC, -4px 1px 1px #CCC,-4px 1px 1px #CCC,
		 -5px 1px 1px #CCC,-6px 1px 1px #CCC,-7px 1px 1px #CCC,-8px 1px 1px #CCC,-9px 1px 1px #CCC,-10px 1px 1px #CCC,
		 -11px 1px 1px #CCC,-12px 1px 1px #CCC,-13px 1px 1px #CCC,-14px 1px 1px #CCC,-15px 1px 1px #CCC,-16px 1px 1px #CCC,
		 -17px 1px 1px #CCC,-18px 1px 1px #CCC,-19px 1px 1px #CCC,-20px 1px 1px #CCC; 
		 -moz-transform: rotateY(40deg); 
	}
	50% {
		 text-shadow: 0px 0px 0px #CCC;
		 -moz-transform: rotateY(0deg); 
	} 
 
	75% {
		  text-shadow: 1px 1px 1px #CCC, 2px 1px 1px #CCC, 3px 1px 1px #CCC, 4px 1px 1px #CCC,4px 1px 1px #CCC,
		 5px 1px 1px #CCC,6px 1px 1px #CCC,7px 1px 1px #CCC,8px 1px 1px #CCC,9px 1px 1px #CCC,10px 1px 1px #CCC,
		 11px 1px 1px #CCC,12px 1px 1px #CCC,13px 1px 1px #CCC,14px 1px 1px #CCC,15px 1px 1px #CCC,16px 1px 1px #CCC,
		 17px 1px 1px #CCC,18px 1px 1px #CCC,19px 1px 1px #CCC,20px 1px 1px #CCC; 
		 -moz-transform: rotateY(-40deg); 
	}
	100% {
		 text-shadow: 1px 1px 1px #CCC;
		 -moz-transform: rotateY(0deg); 
	} 
}



@-o-keyframes rotate {
 	0% {
		 text-shadow: 1px 1px 1px #CCC;
		 -o-transform: rotateY(0deg); 
	} 
 
	25% {
		  text-shadow: 1px 1px 1px #CCC, -2px 1px 1px #CCC, -3px 1px 1px #CCC, -4px 1px 1px #CCC,-4px 1px 1px #CCC,
		 -5px 1px 1px #CCC,-6px 1px 1px #CCC,-7px 1px 1px #CCC,-8px 1px 1px #CCC,-9px 1px 1px #CCC,-10px 1px 1px #CCC,
		 -11px 1px 1px #CCC,-12px 1px 1px #CCC,-13px 1px 1px #CCC,-14px 1px 1px #CCC,-15px 1px 1px #CCC,-16px 1px 1px #CCC,
		 -17px 1px 1px #CCC,-18px 1px 1px #CCC,-19px 1px 1px #CCC,-20px 1px 1px #CCC; 
		 -o-transform: rotateY(40deg); 
	}
	50% {
		 text-shadow: 0px 0px 0px #CCC;
		 -o-transform: rotateY(0deg); 
	} 
 
	75% {
		  text-shadow: 1px 1px 1px #CCC, 2px 1px 1px #CCC, 3px 1px 1px #CCC, 4px 1px 1px #CCC,4px 1px 1px #CCC,
		 5px 1px 1px #CCC,6px 1px 1px #CCC,7px 1px 1px #CCC,8px 1px 1px #CCC,9px 1px 1px #CCC,10px 1px 1px #CCC,
		 11px 1px 1px #CCC,12px 1px 1px #CCC,13px 1px 1px #CCC,14px 1px 1px #CCC,15px 1px 1px #CCC,16px 1px 1px #CCC,
		 17px 1px 1px #CCC,18px 1px 1px #CCC,19px 1px 1px #CCC,20px 1px 1px #CCC; 
		 -o-transform: rotateY(-40deg); 
	}
	100% {
		 text-shadow: 1px 1px 1px #CCC;
		 -o-transform: rotateY(0deg); 
	} 
}

 



@keyframes rotate {
 	0% {
		 text-shadow: 1px 1px 1px #CCC;
		 transform: rotateY(0deg); 
	} 
 
	25% {
		  text-shadow: 1px 1px 1px #CCC, -2px 1px 1px #CCC, -3px 1px 1px #CCC, -4px 1px 1px #CCC,-4px 1px 1px #CCC,
		 -5px 1px 1px #CCC,-6px 1px 1px #CCC,-7px 1px 1px #CCC,-8px 1px 1px #CCC,-9px 1px 1px #CCC,-10px 1px 1px #CCC,
		 -11px 1px 1px #CCC,-12px 1px 1px #CCC,-13px 1px 1px #CCC,-14px 1px 1px #CCC,-15px 1px 1px #CCC,-16px 1px 1px #CCC,
		 -17px 1px 1px #CCC,-18px 1px 1px #CCC,-19px 1px 1px #CCC,-20px 1px 1px #CCC; 
		 transform: rotateY(40deg); 
	}
	50% {
		 text-shadow: 0px 0px 0px #CCC;
		 transform: rotateY(0deg); 
	} 
 
	75% {
		  text-shadow: 1px 1px 1px #CCC, 2px 1px 1px #CCC, 3px 1px 1px #CCC, 4px 1px 1px #CCC,4px 1px 1px #CCC,
		 5px 1px 1px #CCC,6px 1px 1px #CCC,7px 1px 1px #CCC,8px 1px 1px #CCC,9px 1px 1px #CCC,10px 1px 1px #CCC,
		 11px 1px 1px #CCC,12px 1px 1px #CCC,13px 1px 1px #CCC,14px 1px 1px #CCC,15px 1px 1px #CCC,16px 1px 1px #CCC,
		 17px 1px 1px #CCC,18px 1px 1px #CCC,19px 1px 1px #CCC,20px 1px 1px #CCC; 
		 transform: rotateY(-40deg); 
	}
	100% {
		 text-shadow: 1px 1px 1px #CCC;
		 transform: rotateY(0deg); 
	} 
}



/* end of icon and fontawesome logo css  */
.my-icon {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    /* box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff; */

}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
    </style>
  </body>
</html>