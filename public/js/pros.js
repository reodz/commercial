window.c = (e) => console.log(e);
// nav br

// cosntent

const shows = document.querySelectorAll('.show');
const more_info = document.querySelector('.more-info')
const remove = document.querySelector('.remove')
const blur = document.querySelector('.blur')
const add = document.querySelector('.add');
const show_add = document.querySelector('.show-add')
const submite = document.querySelector('.submit')
const content = document.querySelector('.content')
const cancel = document.querySelector('.cancel')
const lis = document.querySelectorAll('.side-b-ul li')


// start lets
let task = document.querySelector('.task')
let input = document.querySelector('.input')
let submit = document.querySelector('.add')
let ul = document.createElement('ul')
// start faq data
class client_cl {
    constructor(c_name, category, state, contact_phone, contact_email, Date, contact_name, contact_function, st) {
            this.c_name = c_name,
            this.category = category,
            this.state = state,
            this.contact = {
                phone: contact_phone,
                email: contact_email,
            },
            this.Date = Date,
            this.contact_name = contact_name,
            this.contact_function = contact_function,
            this.st = st
    }
}
const clientss = [
    new client_cl('djezzy', 'start app', 'old', '05555555555', '1........@gmail.com', 'nov 2 2020', 'fodil', 'directeur', 'old'),
    new client_cl('ooredo', 'start app', 'new', '06666666666', '2........@gmail.com', 'seb 3 2021', 'ayoub', 'directeur', 'normal'),
    new client_cl('amazon', 'start app', 'old', "0799999999" , '3........@gmail.com', 'oct 12 2022', 'khalil', 'directeur', 'cl'),
    new client_cl('mobilis', 'start app', 'pending', "025666667" , '4........@gmail.com', 'jan 31 2023', 'nasim', 'directeur', 'new'),
    new client_cl(   'omos', 'start app', 'new', "025666667" , '4........@gmail.com', 'jan 31 2023', 'nasim', 'directeur', 'new'),

]

        // =======================
        //    navbar & searchbox
        // =======================

const btn = document.getElementById("button")
const searchbar = document.getElementById("searchbar")
const searchInput = document.getElementById("searchInput")

let a = false;

function tall() {
    if (!a) {
        searchbar.style.width = "250px"
        searchInput.style.display = "block"
        btn.style.marginLeft = "12px"
        searchbar.style.transform = "translateX(0px)"
        searchbar.style.padding = "0 5px"

        a = true;
    }
    else {
        searchbar.style.padding = "0"

        searchbar.style.width = "35px";
        searchInput.style.display = "none";
        btn.style.marginLeft = "0px"
        searchbar.style.transform = "translateX(215px)"

        a = false;
    }
}



// ===============
// client creating
// ===============

clientss.forEach((cl) => {

    const clientDiv = document.createElement("div");
    clientDiv.className = "client";
    clientDiv.setAttribute("state", `${cl.state}`);
    clientDiv.setAttribute("name", `${cl.c_name}`);

clientDiv.innerHTML =
    `<div class="c-class">${cl.c_name}</div>
        <div class="category">${cl.category}</div>
        <div class="contact">
            <i class="fa-sharp fa-solid fa-phone phone"></i>
            <div class="phone-num">${cl.contact.phone}</div>
            <i class="fa-solid fa-envelope email"></i>
            <div class="email-num">${cl.contact.email}</div>
        </div>
        <div class="state">${cl.state} </div>
        <div class="date">${cl.Date}</div>`

    content.appendChild(clientDiv);


    // let client_div = document.createElement('div');
    // client_div.classList.add('client');
    // client_div.setAttribute('state', `${cl.st}`)
    // // company name
    // let c_class = document.createElement('div');
    // c_class.appendChild(document.createTextNode(`${cl.c_namm}`));
    // c_class.classList.add('c-class');
    // client_div.setAttribute('name', `${cl.c_namm}`)
    // // category
    // let category = document.createElement('div');
    // category.appendChild(document.createTextNode(`${cl.category}`));
    // category.classList.add('category');
    // // contact info
    // let contact = document.createElement('div');
    // contact.classList.add('contact')
    // // phone icon
    // let phone_icon = document.createElement('i');
    // phone_icon.classList.add('fa-sharp', 'fa-solid', 'fa-phone', 'phone')
    // //phone info
    // let phone = document.createElement('div');
    // phone.appendChild(document.createTextNode(`${cl.contact.phone}`))
    // phone.classList.add('phone-num')
    // //email icpon
    // let email_icon = document.createElement('i');
    // email_icon.classList.add('fa-solid', 'fa-envelope', 'email')
    // //emai info
    // let email = document.createElement('div')
    // email.appendChild(document.createTextNode(`${cl.contact.email}`))
    // email.classList.add('email-num')
    // //append phone and email;
    // contact.appendChild(phone_icon)
    // contact.appendChild(phone)
    // contact.appendChild(email_icon)
    // contact.appendChild(email)

    // // sectuer
    // let secteur = document.createElement('div');
    // secteur.appendChild(document.createTextNode(`${cl.state}`));
    // secteur.classList.add('state')
    // // date
    // let date = document.createElement('div');
    // date.classList.add('date');
    // date.appendChild(document.createTextNode(`${cl.Date}`))
    // //show
    // show.classList.add('show')
    // show.appendChild(document.createTextNode('+'))
    // // appends
    // client_div.appendChild(c_class)
    // client_div.appendChild(category)
    // client_div.appendChild(contact)
    // client_div.appendChild(secteur)
    // client_div.appendChild(date)
    // client_div.appendChild(show)
    // content.innerHTML = clienttt;
    // show fun
    let show = document.createElement('div');
    show.innerHTML = '+'
    show.classList.add('showw')
    clientDiv.appendChild(show)

    show.addEventListener('click', () => {

        more_info.style.display = 'block'
        blur.style.display = 'block'
        const remove = document.querySelector('.remove')
        remove.addEventListener('click', () => {
            more_info.style.display = 'none'
            blur.style.display = 'none'

        })
        blur.addEventListener('click', () => {
            more_info.style.display = 'none'
            blur.style.display = 'none'

        })
        // more information changing
        more_info.querySelector('.mor-class').innerHTML = cl.c_namm
        more_info.querySelector('.mor-secteur').innerHTML = cl.state;
        more_info.querySelector('.mor-category').innerHTML = cl.category
        more_info.querySelector('.mor-email').innerHTML = `<i class="fa-solid fa-envelope email"></i> ${cl.contact.email}`;
        more_info.querySelector('.mor-phone').innerHTML = `<i class="fa-sharp fa-solid fa-phone phone"></i> ${cl.contact.phone}`;
        more_info.querySelector('.mor-date').innerHTML = cl.Date;
        more_info.querySelector('.contact-name').innerHTML = cl.contact_name;
        more_info.querySelector('.contact-function').innerHTML = cl.contact_function;


    })


    const phone_icon = clientDiv.querySelector('.fa-phone')
    const phone_info = cl.contact.phone
    phone_icon.addEventListener('click',function(){
        navigator.clipboard.writeText(phone_info);
        copied.style.display = 'block'
        setTimeout( function(){
            copied.style.display = 'none'
        },2000)
    })


    const email_icon = clientDiv.querySelector('.fa-envelope')
    const email_info = cl.contact.email
    email_icon.addEventListener('click',function(){
        navigator.clipboard.writeText(email_info)
        copied.style.display = 'block'
        setTimeout( function(){
            copied.style.display = 'none'
        },2000)
    })
    const copied = document.createElement("div")
    copied.classList.add("copied")
    copied.innerHTML= "Copied"
    email_icon.appendChild(copied)
    phone_icon.appendChild(copied)





})

        // ===============
        // show more & add
        // ===============

shows.forEach((el) => {
    el.addEventListener('click', () => {
        more_info.style.display = 'block'
        blur.style.display = 'block'
        console.log(el.parentElement.children)
        let chid = new Set(el.parentElement.children)
        chid.forEach((e) => {
        })
    })
    remove.addEventListener('click', () => {
        more_info.style.display = 'none'
        blur.style.display = 'none'
    })
})

show_add.addEventListener('click', () => {
    add.style.display = 'block'
    blur.style.display = 'block'

    submite.addEventListener('click', () => {
        location.reload()
    })
    cancel.addEventListener('click', () => {
        add.style.display = 'none'
        blur.style.display = 'none'
    })
})

        // =========
        // filtering
        // =========

const clients = document.querySelectorAll('.client')// i put it because there is no client so it need to be after the creating
// console.log(clients)
lis.forEach((li) => {

    let cp = 0;
    li.addEventListener('click', () => {
        var li_att = li.getAttributeNode("st").value
        console.log(li_att)
        // remove acive
        lis.forEach((li) => {
            li.classList.remove('active');
        })
        // add active to the click
        li.classList.add('active')
        // get the atttribute

        // when click on all
        if (li_att === 'all') {
            clients.forEach((el) => {
                el.style.display = 'grid'
            })
        }
        // other list itmis
        else {
            clients.forEach((e) => {
                console.log(e.getAttributeNode('state').value)
                if (e.getAttributeNode('state').value === li_att) {
                    e.style.display = 'grid'
                    cp++;
                }
                else {
                    e.style.display = 'none'
                }
            })
        }

        if (cp === 0 && !document.querySelector(".no-cl") && li_att !== 'all') {
            let alert = document.createElement('div');
            alert.className = "alert center no-cl";
            alert.appendChild(document.createTextNode('ther is no client here '));
            const container = document.querySelector('.container');
            container.appendChild(alert);


        }
        if ( cp>0 ) {
            document.querySelector('.no-cl').remove()
            alert.style.display = 'none'
        }
    })


})

        // ==========
        // search box
        // ==========

searchInput.addEventListener("input", e => {
    let bool = false
    const value = e.target.value.toLowerCase()
    clients.forEach(client => {
        const isVisible =
            client.getAttribute('name').toLowerCase().includes(value)

        if (!isVisible) {
            client.style.display = 'none'

        }
        let lis_active_att = document.querySelector('.active').getAttribute('st')
        let client_state = client.getAttribute('state')
        if (isVisible && lis_active_att === 'all') {
            client.style.display = 'grid';
            bool = true;
        }
        else if (isVisible && lis_active_att === client_state) {
            client.style.display = 'grid'
            bool = true
        }

        //
    })


        // =======================
        //    navbar & searchbox
        // =======================

const btn = document.getElementById("button")
const searchbar = document.getElementById("searchbar")
const searchInput = document.getElementById("searchInput")

let a = false;

function tall() {
    if (!a) {
        searchbar.style.width = "250px"
        searchInput.style.display = "block"
        btn.style.marginLeft = "12px"
        searchbar.style.transform = "translateX(0px)"
        searchbar.style.padding = "0 5px"

        a = true;
    }
    else {
        searchbar.style.padding = "0"

        searchbar.style.width = "35px"
        searchInput.style.display = "none"
        btn.style.marginLeft = "0px"
        searchbar.style.transform = "translateX(215px)"

        a = false;
    }
}
    let alert = document.createElement('div');
    alert.className = "alert center";
    alert.appendChild(document.createTextNode('oops! '));
    const container = document.querySelector('.container');
    if (!bool && !document.querySelector('.alert')) {
        container.appendChild(alert)

        // c(container.children.)
    }
    if ((bool && document.querySelector('.alert'))) {

        document.querySelector('.alert').remove()
            ;
    }
})



const hamburger = document.querySelector('.hamburger')
const middle = document.querySelector('.middle')
const side___bar = document.querySelector('.side-bar')

hamburger.addEventListener("click", function(){
    if(!a){
        hamburger.classList.add('hamactive');
        hamburger.classList.remove('hamdisactive')
        middle.style.display = 'none'
        side___bar.style.position = "absolute"
        side___bar.style.display = 'flex'
        a = true;
    }
    else{
        hamburger.classList.remove('hamactive');
        hamburger.classList.add('hamdisactive')
        middle.style.display = 'block'
        side___bar.style.display = 'none'
        a = false;
    }
})


const username = document.getElementById('username')
const password = document.getElementById('password')
const logBtn = document.getElementById('logbtn')
const logInBox = document.querySelector('.log-in')
const allcontent = document.querySelector('.alll')
const logheader = document.querySelector('.header')
const logenter = document.querySelector('.enter')
const welcom = document.querySelector('.welcom')
const wrongusername = document.getElementById('wrongusername')
const wrongpassword = document.getElementById('wrongpassword')

// const labell = document.getElementById('entered')

// if(username.value!== '' || username.value!== ''  ){
//     labell.classList.add('entered')

// }

if (localStorage.getItem('isLoggedIn')) {
    logInBox.style.display = 'none'
    allcontent.style.display = 'block'
    }
    else {
        logInBox.style.display = 'block'
        allcontent.style.display = 'none'
    }

logBtn.addEventListener('click' , function(){
    if(username.value === 'khalil' && password.value === 'WayDigitalNew@2022'){
        logheader.style.display = 'none'
        logBtn.style.display = 'none'
        logenter.style.display = 'none'
        welcom.style.display = 'block'

        localStorage.setItem('isLoggedIn', true)

        setTimeout( function(){
            welcom.style.display = 'none'
            logInBox.style.display = 'none'
            allcontent.style.display = 'block'
        },2000)
    }
    if(username.value !== 'khalil'){
        wrongusername.classList.add('w1')
        wrongusername.style.display = 'block'
    }
    if(password.value !== 'khalil'){
        wrongpassword.classList.add('w2')
        wrongpassword.style.display = 'block'

    }
})
