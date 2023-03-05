<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta class="viewport" content="width=device-width, initial-scale=1.0">
    <title>prospect</title>
    <link rel="stylesheet" href="prospect.css">
    <link rel="stylesheet" href="side.css">
    <style>
        :root {
    --main-col: blue;
    --sec-col: #4ad5ff;
    --text-col: #b6b2b4;
    --cal: (100% - 10%)/5
}

/* star standers */
* {
    box-sizing: border-box;
    margin: 0;

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
    transition: 3s;
    backdrop-filter: blur(10px);
    overflow: hidden;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: "Work Sans", sans-serif;
}

.container {
    margin-top: 30px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: 21vw;
    /* margin-right: 1vw; */
    position: relative;
    background-color: #f5f5f5;
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

/* end standers */
/* start globlayes */
/* small */
@media (min-width: 768px) {
    .container {
        width: 750px;
    }
}

/* meduim */
@media (min-width: 992px) {
    .container {
        width: 970px;
    }
}

/* large*/
@media (min-width: 1200px) {
    .container {
        width: 1170px;
    }
}

/* .cont {
    position: relative;
    background-color: #f5f5f5;
} */


.nav ul li {
    font-size: 22px;
    font-weight: bold;
    color: black;
}

.nav .more {
    font-size: 15px;
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
    /* display: none; */
}

.client .c-name {
    font-weight: 700;
    color: var(--main-col);
    /* colro: b; */
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
}

.show {
    color: blue;
    font-size: 25px;

}



.contact .phone-num {
    /* content: '0786315763'; */
    position: absolute;
    background-color: black;
    color: white;
    text-align: center;
    padding: 7px;
    font-size: 14px;
    top: 32px;
    right: 25px;
    letter-spacing: 1px;
    display: none;
}

.contact .phone-num::before {
    content: '';
    position: absolute;

    top: -19px;
    border: 10px solid;
    border-color: transparent transparent black transparent;
}

.contact .phone:hover~.phone-num {
    display: block;
}

.contact .email-num {
    /* content: '0786315763'; */
    position: absolute;
    background-color: black;
    color: white;
    text-align: center;
    padding: 7px;
    font-size: 14px;
    top: 32px;
    right: 50px;
    letter-spacing: 1px;
    display: none;
}

.contact .email-num::before {
    content: '';
    position: absolute;
    right: 10px;
    top: -19px;
    border: 10px solid;
    border-color: transparent transparent black transparent;
}

.contact .email:hover~.email-num {
    display: block;
}

.more-info {
    background-color: #f6f6f6;
    width: 60vw;
    height: 80vh;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    transition: 2s;
    z-index: 4;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.more-info .remove {
    float: right;
    padding: 5px 10px;
}

.fill ul {
    padding: 30px;
}

.fill ul li {
    padding-bottom: 30px;
    display: flex;
    align-items: center;
    gap: 10px;

}

.fill ul li h1 {
    font-size: 30px;
    color: var(--main-col);
    font-weight: 400;
}

/* .more-info ul li P {} */
.show-add {
    position: absolute;
    left: 30px;
    bottom: 30px;
    /* width: 30px; */
    /* height: 30px; */
    color: var(--main-col);
    font-size: 30px;
    border-radius: 50%;
    background-color: white;
    padding: 8px 15px;
    border: 2px solid var(--main-col);
}

.add {
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
}

.add input[type="text"] {
    background-color: transparent;
    /* border: none; */
    border-color: transparent;
    border-bottom-color: black;
}

.add input[type="text"]:focus {
    outline: none;
}

.add input[type="submit"] {
    position: absolute;
    bottom: 30px;
    right: 30px;
    border-color: transparent;
    background-color: var(--main-col);
    color: white;
    padding: 5px;
}
    </style>
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.side-bar {
    position: fixed;
    /* height: calc(100vh - 80px); */
    height: 100vh;
    width: 18vw;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    background-color: #f5f5f5;
    /* transform: translateY(80px); */
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
    width: 100%;
    height: 100px;
    text-align: center;
    padding-top: 15px;
    font-size: large;
    letter-spacing: 2px;
    height: 100%;
}

.side-bar .side-b-ul li:not(:last-child) {
    border-bottom: 1px solid rgb(74, 73, 73);

}

.side-bar .side-b-ul li:hover {
    background-color: blue;
    border-bottom: 2px solid black;

    color: white
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
    background-color: blue;
    color: white;
}
    </style>
    <script type="text/javascript" src="{{URL::asset('assets/js/prospect.js')}}"></script>
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/7bc55b4974.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="blur">

    </div>
    <div class="side-bar">
        <div class="filter">
            <p>Filter</p>
        </div>
        <ul class="side-b-ul">
            <li st='all' class="active">All</li>
            <li st="old">old</li>
            <li st="normal">normal</li>
            <li st="cl">cl</li>
            <li st="new">new</li>
            <li st="clt">clt</li>
            <li st="pro">pro</li>
        </ul>
    </div>
    <div class="container">
        <div class="nav section ">
            <ul class="flex">
                <li>c-class</li>
                <li>category</li>
                <li>conatact info</li>
                <li> secteur</li>
                <li>date</li>
                <li class="more">more</li>
            </ul>
        </div>
        <div class="content section" id="clients">
            <div class="client" state="old">
                <div class="c-class">old</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone"></i>
                    <div class="phone-num">079988623</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>

                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>
            </div>
            <div class="client" state="old">
                <div class="c-class">old</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone  "></i>
                    <div class="phone-num">087645356</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>
                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>

            </div>
            <div class="client" state="new">
                <div class="c-class">new</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone  "></i>
                    <div class="phone-num">087645356</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>
                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>

            </div>
            <div class="client" state="new">
                <div class="c-class">new</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone  "></i>
                    <div class="phone-num">087645356</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>
                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>

            </div>
            <div class="client" state="clt">
                <div class="c-class">clt</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone  "></i>
                    <div class="phone-num">087645356</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>
                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>

            </div>
            <div class="client" state="clt">
                <div class="c-class">clt</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone  "></i>
                    <div class="phone-num">087645356</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>
                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>

            </div>
            <div class="client" state="old">
                <div class="c-class">old</div>
                <div class="category">PCE</div>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone phone  "></i>
                    <div class="phone-num">087645356</div>
                    <i class="fa-solid fa-envelope email"></i>
                    <div class="email-num">......@gmail.com</div>
                </div>
                <div class="secteur">secteur</div>
                <div class="date">sept 3 2022</div>
                <div class="show">+</div>

            </div>
        </div>


    </div>
    </div>
    <div class="more-info fill">
        <div class="remove">
            9
        </div>
        <ul>
            <li>
                <h1>c-class:</h1>
                <p class="mor-class"></p>
            </li>
            <li>
                <h1>categor:y</h1>
                <p class="mor-category"></p>
            </li>
            <li>
                <h1>secteur:</h1>
                <p class="mor-secteur"></p>
            </li>
            <li>
                <h1>date: </h1>
                <p class="mor-date"></p>
            </li>
            <li>
                <h1>contact-class:</h1>
                <p class="mor-phone"></p>
                <p class="mor-email"></p>

            </li>
            <li>
                <h1>conatact-name:</h1>
                <p class="contact-name"></p>
            </li>
            <li>
                <h1>function:</h1>
                <p class="contact-function"></p>
            </li>
            <li>
                <h1>more:</h1>
            </li>
        </ul>
    </div>
    <div class="show-add">
        +
    </div>
    <div class="add fill">
      <form action="{{url('ajouter')}}" method="get">
          <ul>
            <li>
                <h1>stade:</h1>
                <input type="text" class="c-class-inp" name="stade">
            </li>
            <li>
                <h1>category:</h1>
                <input type="text" class="categor-inp" name="categorie">
            </li>
            <li>
                <h1>name:</h1>
                <input type="text" class="categor-inp" name="nom">
            </li>
            <li>
                <h1>entite:</h1>
                <input type="text" class="categor-inp" name="entite">
            </li>
            <li>
                <h1>secteur:</h1>
                <input type="text" class="secteur-inp" name="secteur">

            </li>
            <li>
                <h1>contact:</h1>
                <input type="text" class="categor-inp" name="contact">
            </li>
            <li>
                <h1>fonction:</h1>
                <input type="text" class="categor-inp" name="fonction">
            </li>
            <li>
                <h1>tel:</h1>
                <input type="text" class="categor-inp" name="tel">
            </li>
            <li>
                <h1>cordonne mail:</h1>
                <input type="text" class="categor-inp" name="coordonne_mail">
            </li>
            <li>
                <h1>commentaire:</h1>
                <input type="text" class="categor-inp" name="commentaire">
            </li>
            <li>
                <h1>step1: </h1>
                <input type="text" class="date-inp" name="step_1">
            </li>
        </ul>
        <input type="submit" class="submit">
    </form>
    </div>
    <script src="js/prospect.js"></script>
</body>

</html>
