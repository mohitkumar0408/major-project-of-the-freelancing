<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
    --lightGrey-gs-neumorphic-login-signup: #c8d0e7;
    --lightGrey2-gs-neumorphic-login-signup: #e4ebf5;
    --header-colors-gs-neumorphic-login-signup: #6D78FA;
    --header-font-size-gs-neumorphic-login-signup: 25px;
    --header-scale-open-gs-neumorphic-login-signup: 1.5;
    --card-open-close-tansition-time-gs-neumorphic-login-signup: 1s;
    --form-input-border-radius-gs-neumorphic-login-signup: 5px;
    --form-input-padding-gs-neumorphic-login-signup: 10px;
    --form-input-font-size-gs-neumorphic-login-signup: 15px;
    --form-input-font-color--gs-neumorphic-login-signup: #9baacf;
    --form-input-margin-gs-neumorphic-login-signup: 15px;
    --form-input-max-width-gs-neumorphic-login-signup: 300px;
}

* {
  margin: 0;
}

.gs-neumorphic-main-card-outer-container{
    height: 100vh;
  background-color: #e4ebf5;
}

.gs-neumorphic-main-card-container{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card{
    width: 100%;
    height: 80%;
    position: relative;
    overflow: hidden;
    box-shadow: 0.8rem 0.8rem 1.4rem var(--lightGrey-gs-neumorphic-login-signup), -0.2rem -0.2rem 1.8rem #ffffff;
    border-radius: 1rem;
    font-weight: bold;
    background-color: var(--lightGrey2-gs-neumorphic-login-signup);
}

@media only screen and (min-width: 320px)  { .gs-neumorphic-main-card-container .gs-neumorphic-main-card{ width: 90%;} }
@media only screen and (min-width: 540px)  { .gs-neumorphic-main-card-container .gs-neumorphic-main-card{ width: 70%;} }
@media only screen and (min-width: 800px)  { .gs-neumorphic-main-card-container .gs-neumorphic-main-card{ width: 60%;} }
@media only screen and (min-width: 900px) { .gs-neumorphic-main-card-container .gs-neumorphic-main-card{ width: 30%;} }
@media only screen and (min-width: 1900px) { .gs-neumorphic-main-card-container .gs-neumorphic-main-card{ width: 30%;} }

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-signup{
    height: 85%;
    width: 100%;
    text-align: center;
    background-color: var(--lightGrey2-gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-login{
    height: 90%;
    width: 100%;
    text-align: center;
    transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup) ease-in-out;
    border-radius: 60% / 10%;
    box-shadow: 0rem 0rem 1rem var(--lightGrey-gs-neumorphic-login-signup), 0rem 0rem 1rem #ffffff;
    background-color: var(--lightGrey2-gs-neumorphic-login-signup);
    z-index: 3;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-login.gs-open{
    transform: translateY(-80%);
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-signup-login-header{
    text-transform: uppercase;
    color: var(--header-colors-gs-neumorphic-login-signup);
    cursor: pointer;
    font-size: var(--header-closed-size-gs-neumorphic-login-signup);
    font-weight: bold;
    transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup) ease-in-out;
    padding: 10px;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-signup-login-header.gs-open{
    transform: scale(var(--header-scale-open-gs-neumorphic-login-signup));
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container{
    width: 100%;
    visibility: hidden;
    opacity: 0;
    transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup) ease-in-out;
    height: 100%;
    overflow: auto;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-form-open .gs-neumorphic-form-container{
    visibility: visible;
    opacity: 1;
    padding-bottom: 20px;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-input{
    width: calc(100% - 50px);
    border: none;
    border-radius: var(--form-input-border-radius-gs-neumorphic-login-signup);
    padding: var(--form-input-padding-gs-neumorphic-login-signup);
    box-shadow: inset 0.1rem 0.1rem 0.3rem var(--lightGrey-gs-neumorphic-login-signup),
    inset -0.1rem -0.1rem 0.3rem white;
    background: none;
    color: var(--form-input-font-color--gs-neumorphic-login-signup);
    margin: var(--form-input-margin-gs-neumorphic-login-signup) auto;
    font-size: var(--form-input-font-size-gs-neumorphic-login-signup);
    max-width: var(--form-input-max-width-gs-neumorphic-login-signup);
    display: block;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-input::placeholder{
    color: var(--form-input-font-color--gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-input:focus{
    outline: none;
    box-shadow: 0.3rem 0.3rem 0.6rem var(--lightGrey-gs-neumorphic-login-signup),
    -0.2rem -0.2rem 0.5rem white;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container::-webkit-scrollbar {
    width: 5px;
    -webkit-appearance: none;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container::-webkit-scrollbar-track {
    background: transparent; 
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container::-webkit-scrollbar-thumb {
    background-color: rgba(108, 121, 119, 0.44);
    border: 1px solid #fff;
    border-radius: 1rem; 
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-button{
    width: max-content;
    padding: var(--form-input-padding-gs-neumorphic-login-signup) calc(var(--form-input-padding-gs-neumorphic-login-signup) * 2.5);
    margin-top: var(--form-input-margin-gs-neumorphic-login-signup);
    margin-bottom: var(--form-input-margin-gs-neumorphic-login-signup);
    border: none;
    border-radius: var(--form-input-border-radius-gs-neumorphic-login-signup);
    box-shadow: 0.3rem 0.3rem 0.6rem var(--lightGrey-gs-neumorphic-login-signup),
    -0.2rem -0.2rem 0.5rem white;
    cursor: pointer;
    transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup) ease;
    color: var(--form-input-font-color--gs-neumorphic-login-signup);
    background-color: var(--lightGrey2-gs-neumorphic-login-signup);
    font-size: var(--form-input-font-size-gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-button:hover{
    color: var(--header-colors-gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-button:active{
    box-shadow: inset 0.2rem 0.2rem 0.5rem var(--lightGrey-gs-neumorphic-login-signup),
    inset -0.2rem -0.2rem 0.5rem white;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card .gs-neumorphic-form-container .gs-neumorphic-button:focus{
    outline: none;
    color: var(--header-colors-gs-neumorphic-login-signup);
}
    </style>
</head>

<body>
    <div class="gs-neumorphic-main-card-outer-container">
        <div class="gs-neumorphic-main-card-container">
            <div class="gs-neumorphic-main-card">
                <div class="gs-neumorphic-signup gs-form-open"><br><br>
                    <div class="gs-neumorphic-signup-login-header gs-open" data-button="gs-neumorphic-signup">Signup</div>
                    <div class="gs-neumorphic-form-container">
                        <form>
                            <input type="text" class="gs-neumorphic-input" placeholder="First Name" required>
                            <input type="text" class="gs-neumorphic-input" placeholder="Last Name" required>
                            <input type="text" class="gs-neumorphic-input" placeholder="Username" required>
                            <input type="text" class="gs-neumorphic-input" placeholder="Mobile Number" required>
                            <input type="text" class="gs-neumorphic-input" placeholder="Email" required>
                            <input type="password" class="gs-neumorphic-input" placeholder="Password" required>
                            <input type="password" class="gs-neumorphic-input" placeholder="Confirm Password"required>
                            <button class="gs-neumorphic-button">Signup</button>
                        </form>
                    </div>
                </div>
    
                <!-- <div class="gs-neumorphic-login">
                    <div class="gs-neumorphic-signup-login-header" data-button="gs-neumorphic-login">Login</div>
                    <div class="gs-neumorphic-form-container">
                        <form>
                            <input type="text" class="gs-neumorphic-input" placeholder="Username">
                            <input type="password" class="gs-neumorphic-input" placeholder="Password">
                            <button class="gs-neumorphic-button">Login</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <script src="javascript/signincources.js"></script>
</body>

</html>