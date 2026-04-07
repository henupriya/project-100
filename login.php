* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}

section .bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
  }



section .car {
  position: absolute;
  scale: 0.65;
  pointer-events: none;
  
}



  .login-box{
    position: relative;
    width: 400px;
    height: 450px;
    background:transparent;
    border: 2px solid rgba(244, 219, 219, 0.5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}

.input-box {
    position: relative;
    width: 310px;
    margin: 30px 0;
    border-bottom: 2px solid #080808;
}


.input-box input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none; 
     outline: none; 
    font-size: 1em;
    color: #fdf6f6;
    padding: 0 35px 0 5px;
}





.input-box label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #f9f5f5;
    pointer-events: none;
    transition: .5s;
}


.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}



/* Icon style, if needed */
.input-box .icon {
    position: absolute;
    right: 8px;
    color: #989494;
    font-size: 1.2em;
    line-height: 57px;
}

.remember-forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #f5eded;
    display: flex;
    justify-content: space-between;
}
.remember-forget label input{
    margin-right: 3px;
}
.remember-forget a{
    color: #726ef4;
    text-decoration: none;
}
.remember-forget a:hover{
    text-decoration: underline;
}
button{
    width: 100%;
    height: 40px;
    background: #f10a0a;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #f1efef;
    font-weight: 500;
}
.register-link{
    font-size: .9em;
    color: #f6f5f5;
    text-align: center;
    margin: 25px 0 10px;
}
.register-link p a{
    color: #979def;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}



