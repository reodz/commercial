<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta class="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Managment</title>

    <link rel="stylesheet" href="prospect (1).css">
    <link rel="stylesheet" href="./nav-bar.css">
    <link rel="stylesheet" href="side (1).css">
    <script src="https://kit.fontawesome.com/7bc55b4974.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}
.nav-bar {
    background-color: #f5f5f5;

    width: 100vw;
    height: 60px;
    display: grid;
    grid-template-columns:  1fr 1fr 300px;
    justify-content: space-evenly;
    align-items: center;
}



.hamburger{
    height:23.3px;
    width:30px;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    margin-left: 30px;
    cursor: pointer;
}

.hamburger div{
    height: 3px;
    width: 30px;
    background-color: blue;
    border-radius: 8px;
}

.hamactive :first-child{
    animation: rotate1 200ms linear forwards;
    transform-origin: 100% 0 ;
}
@keyframes rotate1{

    to{
        transform: rotate(-45deg);
    }
}

.hamactive :last-child{
    animation: rotate2 200ms linear forwards;
    transform-origin: 100% 0 ;
}
@keyframes rotate2{
    to{
        transform: rotate(45deg) translateX(2px);
    }
}

.hamdisactive :first-child{
    animation: rotate11 200ms linear forwards;
    transform-origin: 100% 0 ;
}
@keyframes rotate11{
    from{
        transform: rotate(-45deg);
    }
    to{
        transform: rotate(0deg);
    }
}

.hamdisactive :last-child{
    animation: rotate22 200ms linear forwards;
    transform-origin: 100% 0 ;
}
@keyframes rotate22{
    from{
        transform: rotate(45deg) ;
    }
    to{
        transform: rotate(0deg) ;
    }
}

@media screen and (max-width: 680px){
    .hamburger {
        display: flex;
    }
    .overmid{
        display: none;
    }

}

.search-box {
    transform: translateX(215px);
    width: 35px;
    height: 42px;
    background-color: white;
    border-radius: 70px;
    overflow: hidden;
    display: flex;
    align-items: center;
}

.search-box input {
    flex-grow: 1;
    display: none;
    border: none;
    padding-left: 8px;
    outline: none;
}

.search-box button {
    border-radius: 50%;
    background-color: rgb(79, 82, 245);
    border: none;
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.search-box button:hover {
    background-color: blue;
}

.search-box button i {
    color: white;
}

svg{
    width: 100px;
    height: 40px;
}
svg path{
    stroke-width: 3;
    stroke: blue;
    fill: transparent;
    stroke-dasharray: 365 ;
    stroke-dashoffset: 365;
    animation: fill 2s linear forwards;
}

@keyframes fill {
    0%{
        stroke-dashoffset: 365;
    }
    40%{
        stroke-dashoffset: 500;
    }
    80%{
        stroke-dashoffset: 730;
        fill: transparent;
    }
    100%{
        stroke-dashoffset: 730;
        fill: blue;
    }
}
.hide {
    display: none;
}
    </style>
    <style>
        :root {
    --main-col: blue;
    --sec-col: #4ad5ff;
    --text-col: #b6b2b4;
    --cal: (100% - 10%)/5;
    --login-height: 500px;
    --login-width: 450px;
}
/* star standers */
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}



.log-in{
    height:var(--login-height)!important;
    width: var(--login-width)!important;
    display: grid;
    position: relative;
    grid-template-columns: 1fr;
    justify-content: center;
    align-items: center;
    background-color: white !important;
}
.backgroundd {
    background-color: #f6f6f6;
    width: 60vw;
    height: 80vh;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: 0.8s;
    z-index: 4;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.log-in .welcom{
    position: absolute;
    left:50% ;
    top: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: none;
    text-align: center;
}
.log-in .welcom h1{
    font-size: 40px;
    font-weight: 100;
    color: blue;
}
.log-in .header{
    margin: 25px;
    display: flex;
    align-items: center;
}
.log-in .header h1{
    color: blue;
    font-size: 33px;
}
.log-in div{
    position: relative;
}
.log-in .enter div label{
    position: absolute ;
    color: grey ;
    background-color: white;
    left:14% ;
    top: 11%;
    padding: 2px;
    transition: 100ms linear ;
}
.log-in div input{
    width: 80%!important;
    margin-left: calc((var(--login-width) - 80%) /2);
    border-radius: 20 !important;
    height: 50px;
    margin-bottom: 25px;
    padding: 10px;
}
.log-in div input:focus~label, .entered{
    top: -18% ;
    left: 12%;
    transform: scale(0.85);
    color: black;
}
.log-in button{
    background-color: rgba(0, 0, 255, 0.751);
    outline: none;
    border: none;
    width: 80%;
    margin-left: calc((var(--login-width) - 80%) /2);
    height: 60px ;
    color: white;
    border-radius: 2px;
    padding: 2px 4px
}
.log-in button:hover{
    background-color: blue;
}

.w1, .w2{
    position: absolute;
    top: 67%;
    left: 12%;
    color: red;
    font-size: 11px;
}
.log-in div input:focus .log-in .enter div p{
    display: none;
}
.log-in .enter div p{
    display: none;
}
@media screen and (max-width: 500px ) {
    .log-in{
        --login-height: 400px;
        --login-width: 350px;
    }
    .log-in div input{
        height : 40px;
    }
    .log-in .header{
        margin: 0 12px;
    }
    .log-in .header h1{
        font-size: 25px;
    }
    .log-in .enter div label{
        top: 12%;
        font-size: 13px;
    }
    svg{
        width: 75px;
        height: 30px;
    }
    .log-in button{
        height: 50px;
    }
    .welcom h1{
        font-size: 30px;
    }
    .welcom img{
        width: 200px;
        height: 240px;
    }
}



.alll{
    display: none;
}
.blur {
    width: 100vw;
    height: 100vh;
    /* background-color: #ddddddf5; */
    position: absolute;
    left: 0;
    top: 0;
    z-index: 3;
    display: none;
    backdrop-filter: blur(5px);
    overflow: hidden;
}

html {
    scroll-behavior: smooth;
}

.main-content{
    position: absolute;
    top: 60px;
    left: 0;
    display: flex;
    gap: 1rem;
    width: 100vw;
    justify-content: center;
}
.container {
    border-radius: 8px;
    /* width: calc(100vw - 18vw -30px); */
    flex-grow: 1;
    margin-top: 20px;
    padding-left: 15px;
    padding-right: 15px;
    /* margin-left: 17vw; */
    margin-right: 1vw;
    position: relative;
    background-color: #f5f5f5;
    height: 100%;

}


ul li {
    list-style: none;
}

.flex {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.section {
    padding-top: 30px;
    padding-bottom: 30px;
}

.center {
    display: grid;
    place-items: center;
}

.nav ul {
    display: grid;
    grid-template-columns: repeat(5, 19%) 5%;
    align-items: center;
    text-align: center;
}

.nav ul li {
    font-size: 1.6vmax;
    font-weight: bold;
    color: black;
}

.nav .more {
    font-size: 1.3vw;
}

.client {
    background-color: white;
    height: 50px;
    padding: 10px;
    display: grid;
    grid-template-columns: repeat(5, 19%) 5%;
    align-items: center;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 8px;
    transform: scale(1.01);
    transition: 300ms cubic-bezier(0, 0.55, 0.2, 0.89);
    z-index: -10000;
}
.client .state{
    background-color: blue;
    box-shadow: 0 0.125rem 0.625rem
                rgb(0 0 255 / 40%),
                0 0.0625rem 0.125rem
                rgb(0 0 255 / 50%);
    padding: 2px;
    width: 6vw;
    border-radius: 4px;
    color: white;
    margin-bottom: 8px;
    margin-left: 5vw;
}
.client .c-name {
    font-weight: 700;
    color: var(--main-col);
    letter-spacing: 1px;
    text-transform: uppercase
}

.client .contact {
    position: relative;
}

.client .contact i {
    padding-right: 10px;
    color: var(--main-col);
    font-size: 18px;
    position: relative;
}

.client .contact i::after{
    content: '';
    position: absolute;
    display: none;
    top: 10px;
    left: 1px;
    border: 10px solid;
    border-color: transparent transparent black transparent;
}
.client .contact .phone:hover::after{
    display: block;
}.client .contact .email:hover::after{
    display: block;
}
.client{
    transform: scale(1.01);
    transition: 280ms cubic-bezier(0, 0.55, 0.2, 0.89);
}
.client:hover {
    transform: scale(1.02);
    box-shadow: rgb(0 0 0 / 35%) -6px 3px 20px;
}

.showw {
    color: blue;
    font-size: 25px;
    cursor: pointer;
}



.contact .phone-num {
    position: absolute;
    background-color: black;
    color: white;
    text-align: center;
    padding: 2px 7px;
    font-size: 14px;
    top: 28px;
    left: 13px;
    letter-spacing: 1px;
    display: none;
    border-radius: 8px;
}

.contact .phone:hover~.phone-num {
    display: block;
}

.contact .email-num {
    position: absolute;
    background-color: black;
    color: white;
    text-align: center;
    padding: 1px 7px;
    font-size: 14px;
    top: 28px;
    letter-spacing: 1px;
    display: none;
    border-radius: 8px;
}

.copied{
    height: 30px;
    width: 90px;
    border-radius: 15px;
    position: absolute;
    top: -40px;
    left: -30px;
    background-color: blue;
    color: white ;
    padding: 6px 0;
    display: none;
    font-weight: 400;
}
.copied::after{
    content: '';
    position: absolute;
    display: block;
    top: 28px;
    left: 40px;
    border: 10px solid;
    border-color: blue transparent transparent transparent;

}

.contact .email:hover~.email-num {
    display: block;
}


/* ============ mooor =========== */











.background {
    background-color: #f6f6f6;
    width: 60vw;
    height: 80vh;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    transition: 0.8s;
    z-index: 4;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.more-info .remove {
    float: right;
    width: 35px;
    height: auto;
    cursor: pointer;
    height: 35px;

}

.more-info .remove:hover {
    background-color: red;
    border-radius: 2px;
}
.more-info .remove:hover i{
    color: white;
}
.fill .more{
    margin-top: 40px;
    display: flex;
    justify-content: space-between;
    padding: 0 70px;
    position : relative;

}

.fill .vr-line{
    width: 1px;
    height: 100%;
    background-color: black;
    position: absolute;
    left: 48%;
}
.fill .more-company {
    display: grid;
}
.fill .more-company div:not(:first-child){
    display: flex;
    margin-left: 25px ;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.fill .more-client{
    display: grid ;
    margin-right: 18%;
}
.fill .more-client:nth-child(3) span{
    position: relative;
    top: -20px ;
    left: 100px;
}
.fill .more-client div:not(:first-child){
    display: flex;
    margin: 0px 0 0 25px ;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}
.fill .more .first{
    margin-bottom: 25px;
    width: 120px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.fill .more .first div {
    height: 50px;
    width: 50px;
    border-radius: 50%;
    overflow: hidden;
}

.fill  h1 {
    font-size: 20px;
    color: var(--main-col);
    font-weight: 400;
}






/* Adding a client form  */




.show-add {
    position: absolute;
    right: 30px;
    bottom: 30px;
    color: rgb(82, 82, 250);
    border: 3px solid rgb(82, 82, 250);
    font-size: 30px;
    height: 60px;
    width: 60px;
    border-radius: 50%;
    background-color: white;
    padding: 8px 15px;
    cursor: pointer;

    display: flex;
    justify-content: center;
    align-items: center;

}
.show-add:hover{
    color: blue;
    border-color: blue;
}

/* .add {
    background-color: #f6f6f6;
    width: 60vw;
    height: 80vh;
    position: absolute;
    top: 50%;
    border-radius: 10px;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    transition: 2s;
    z-index: 4;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
} */
.add .bigtitle{
    position: relative;
    margin-bottom: 5px;
}
.add .bigtitle::before{
    content: " ";
    width: 45px;
    height: 3px;
    border-radius: 9px;
    background-color: blue;
    position: absolute;
    bottom: 2px ;
    left: 0;
}
.add ul{

    display: grid;
    grid-template-columns: 1fr 1fr ;
    justify-content: space-between;
    margin-bottom: 13px ;
}
.add  h1,h2{
    font-size: 20px;
    font-weight: 500;
    margin: 0 0 0px 40px;
}
.add h2{
    margin-top: 20px;
}

.add ul li {
    display: flex;
    flex-direction: column;
    width: calc(100% - 80px);
    margin: 0 40px;

}
.add ul li label {
    font-size: 15px;
    color: black;
    font-weight: 400;
    margin: 2px 0 3px 0 ;
}
input{
    border: 1px solid rgb(129, 127, 127);
    outline: none;
    height: 40px;
    border-radius: 5px ;
    padding-left: 10px;
}
input:hover, input:focus {
    border: 1.7px solid black;
}

.add input[type="submit"] {
    position: absolute;
    bottom: 30px;
    right: 30px;
    border-color: transparent;
    background-color: var(--main-col);
    color: white;
    padding: 2px 4px;
    height: 30px;
    border-radius: 3px;
}

.li-contact {
    display: block !important;
}

.cancel {
    position: absolute;
    color: var(--main-col);
    border: none;
    background-color: white;
    border-radius: 3px;
    padding: 5px;
    right: 105px;
    bottom: 31px;
}

.alert {
    background-color: #9cc99c;
    height: 40px;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 4px;
    border: solid 1px #b9b6b6;
    transition: 1s;
    margin-bottom: 30px;
}









/* ====================== */
/*      side bar         */
/* ====================== */













.side-bar {
    /* position: fixed; */
    /* height: calc(100vh - 80px); */
    height: calc(100vh - 60px);
    width: 16vw;
    top: 80px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    background-color: #f5f5f5;
    /* transform: translateY(80px); */
}
@media screen and (max-width: 680px) {
    .side-bar {
        position: absolute;
        top: 0 ;
        left: 0 ;
        display: none;
        z-index: 2999;
        width: 40vw;
    }
}

.side-bar .side-b-ul {
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    list-style: none;
}

.side-bar .side-b-ul li {
    width: calc(100% + 1vw);
    height: 100px;
    text-align: center;
    padding-top: 25px;
    font-size: large;
    letter-spacing: 2px;
    height: 100%;
    transition: 280ms cubic-bezier(0, 0.55, 0.2, 0.89);

}

/* .side-bar .side-b-ul li:not(:last-child) {
    /* border-bottom: 1px solid rgb(74, 73, 73);

} */

.side-bar .side-b-ul li:hover {
    background-color: blue;
    border-bottom: 1px solid black;
    /* width: ; */
    color: white;
    border-radius: 9px;
}


.side-bar .filter {
    /* padding: 30px 0 0 40px; */
    width: 100%;
    height: 100px;
    display: grid;
    place-items: center;
    /* color: blue; */
    font-size: 22px;
    font-weight: bold;
}

.active {
    width: 115%;
    border-radius: 9px;
    background-color: blue;
    color: white;
}
#clients{
    font-size: 1vmax;
}

    </style>
    <script type="text/javascript" src="{{URL::asset('assets/js/pros.js')}}"></script>
</head>

<body>

    <div class="log-in backgroundd">

        <div class="header">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="item">
                <path
                    d="M116.096 27.8065L103.741 14.1781L103.749 14.1732L92.0643 1.28584L62.9273 25.1164L62.7028 24.8669L62.6977 24.862L49.3649 10.159H49.3597C44.6412 4.95417 37.8484 1.47358 30.1036 0.949887C14.6089 -0.0975025 1.16522 11.0804 0.0713569 25.9143C-0.498794 33.624 2.38292 40.805 7.45494 46.0716L20.2743 60.2089L20.7206 60.7005L31.9559 73.0962L45.5725 61.8467L60.9614 49.1323L61.0517 49.2311L64.501 53.0353L74.1884 63.7216H74.1935C78.9095 68.9215 85.7023 72.4021 93.4497 72.9283C108.942 73.9756 122.388 62.7977 123.482 47.9638C124.052 40.2542 121.168 33.0706 116.096 27.8041V27.8065ZM49.2823 36.2795L33.7902 48.9495L32.0075 46.998L32.0179 46.9881L20.5091 34.2934C20.4833 34.2638 20.4549 34.2366 20.4291 34.207C18.7186 32.3197 17.7589 29.8099 17.955 27.1173C18.3523 21.7371 23.2283 17.6834 28.8498 18.0638C31.6593 18.2516 34.123 19.5188 35.8335 21.4036C35.8696 21.4456 35.9031 21.4827 35.9393 21.5222L47.3707 34.1279L49.1379 36.0794L49.3081 36.2573L49.2514 36.3017L49.2798 36.2795H49.2823ZM105.64 46.7929C105.242 52.1707 100.366 56.2268 94.7474 55.8464C91.9353 55.6587 89.4741 54.3914 87.7611 52.5066C87.7275 52.4671 87.6914 52.4301 87.6579 52.3881L74.7173 38.1149L79.0489 34.5059L90.1604 25.3585L103.088 39.6168C103.114 39.6465 103.14 39.6736 103.165 39.7033C104.879 41.5906 105.838 44.1028 105.64 46.7929Z"
                    opacity="1" >
                </path>
            </svg>
            <h1>New Digital Way</h1>
        </div>

        <div class="enter">
            <div>
                <input id="username" type="text" >
                <label id="entered" >Username</label>
                <p id="wrongusername">unvalid username, please check you username</p>
            </div>
            <div>
                <input id="password" type="password" >
                <label id="entered">Password</label>
                <p id="wrongpassword">wrong password, please check you password</p>

            </div>
        </div>

        <button id="logbtn">Log-in</button>

        <div class="welcom">
            <h1>Welcome...</h1>
            <img src="undraw_Welcoming_re_x0qo.png" width="300px" height="330px">
        </div>
    </div>
