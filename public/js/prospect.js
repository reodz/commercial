// function show_more(){
//     let div=document.createElement('div');

// }
// const phones = document.querySelectorAll(".phone");
// console.log(phones)
// phones.forEach((ph) => {
//     ph.addEventListener('click', () => {

//     })
// })

// console.log(clients)

// const userListItem = userList.getElementsByTagName("li")

// clients.forEach((e) => {
//     e.style.display = 'grid';
//     console.log()
// })


const shows = document.querySelectorAll('.show');
// console.log(shows)
const more_info = document.querySelector('.more-info')
const remove = document.querySelector('.remove')
const blur = document.querySelector('.blur')
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

    // remove = onclick.remove_hw(more_info
})
// function create() {
//     const client = document.createElement('div');
//     const c_name = document.createElement('div')
//     const categry = document.createElement('div')
//     const contact = document.createElement('div')
//     const secteur = document.createElement('div')
//     const date = document.createElement('div')
//     client.appendChild(document.createTextNode(document.querySelector('#client_inp')))
// }




// start faq data
const clientss = [
    {
        c_namm: 'djezzy',
        category: 'start app',
        secteur: 'secteru ',
        contact: {
            phone: '05555555555',
            email: '1........@gmail.com'
        },
        Date: 'nov 2 2022',
        contact_name: 'fodil',
        contact_function: 'directeur',
        st: 'old',
    },

    {
        c_namm: 'ooredop',
        category: 'start app',
        secteur: 'secteru ',
        contact: {
            phone: '06666666666',
            email: '2........@gmail.com'
        },
        Date: 'oct 2 2022',
        contact_name: 'ayoup',
        contact_function: 'directeur',
        st: 'new',

    },
    {
        c_namm: 'mobilis',
        category: 'start app',
        secteur: 'secteru ',
        contact: {
            phone: "0799999999",
            email: '3........@gmail.com'
        },
        Date: 'sep 2 2022',
        contact_name: 'khalil',
        contact_function: 'directeur',
        st: 'clt',

    }
]
const content = document.querySelector('.content')
clientss.map((cl) => {
    // cinet div
    let client_div = document.createElement('div');
    client_div.classList.add('client');
    client_div.setAttribute('state', `${cl.st}`)
    // company name
    let c_class = document.createElement('div');
    c_class.appendChild(document.createTextNode(`${cl.c_namm}`));
    c_class.classList.add('c-class');
    // category
    let category = document.createElement('div');
    category.appendChild(document.createTextNode(`${cl.category}`));
    category.classList.add('category');
    // contact info
    let contact = document.createElement('div');
    contact.classList.add('contact')
    // phone icon
    let phone_icon = document.createElement('i');
    phone_icon.classList.add('fa-sharp', 'fa-solid', 'fa-phone', 'phone')
    //phone info
    let phone = document.createElement('div');
    phone.appendChild(document.createTextNode(`${cl.contact.phone}`))
    phone.classList.add('phone-num')
    //email icpon
    let email_icon = document.createElement('i');
    email_icon.classList.add('fa-solid', 'fa-envelope', 'email')
    //emai info
    let email = document.createElement('div')
    email.appendChild(document.createTextNode(`${cl.contact.email}`))
    email.classList.add('email-num')
    //append phone and email;
    contact.appendChild(phone_icon)
    contact.appendChild(phone)
    contact.appendChild(email_icon)
    contact.appendChild(email)

    // sectuer
    let secteur = document.createElement('div');
    secteur.appendChild(document.createTextNode(`${cl.secteur}`));
    secteur.classList.add('secteur')
    // date
    let date = document.createElement('div');
    date.classList.add('date');
    date.appendChild(document.createTextNode(`${cl.Date}`))
    //show
    let show = document.createElement('div');
    show.classList.add('show')
    show.appendChild(document.createTextNode('+'))
    // appends
    client_div.appendChild(c_class)
    client_div.appendChild(category)
    client_div.appendChild(contact)
    client_div.appendChild(secteur)
    client_div.appendChild(date)
    client_div.appendChild(show)
    content.appendChild(client_div)
    // show fun
    show.addEventListener('click', () => {

        more_info.style.display = 'block'
        blur.style.display = 'block'
        const remove = document.querySelector('.remove')
        remove.addEventListener('click', () => {
            more_info.style.display = 'none'
            blur.style.display = 'none'

        })
        // more information changing
        more_info.querySelector('.mor-class').innerHTML = cl.c_namm
        more_info.querySelector('.mor-secteur').innerHTML = cl.secteur;
        more_info.querySelector('.mor-category').innerHTML = cl.category
        more_info.querySelector('.mor-email').innerHTML = cl.contact.email;
        more_info.querySelector('.mor-date').innerHTML = cl.Date;
        more_info.querySelector('.mor-phone').innerHTML = cl.contact.phone;
        more_info.querySelector('.contact-name').innerHTML = cl.contact_name;
        more_info.querySelector('.contact-function').innerHTML = cl.contact_function;


    })

})

const add = document.querySelector('.add');
const show_add = document.querySelector('.show-add')
const submite = document.querySelector('.submit')
//
let task = document.querySelector('.task')
let input = document.querySelector('.input')
let submit = document.querySelector('.add')
let ul = document.createElement('ul')
show_add.addEventListener('click', () => {
    add.style.display = 'block'
    blur.style.display = 'block'

})

// filtering
const clients = document.querySelectorAll('.client')
const lis = document.querySelectorAll('.side-b-ul li')
lis.forEach((li) => {

    li.addEventListener('click', () => {
        // remove acive
        lis.forEach((li) => {
            li.classList.remove('active');
        })
        // add active to the click
        li.classList.add('active')
        // get the atttribute
        let li_att = li.getAttributeNode('st').value
        // when click on all
        if (li_att === 'all') {
            clients.forEach((el) => {
                el.style.display = 'grid'
            })
        }
        // other list itmis
        else {
            clients.forEach((e) => {
                if (e.getAttributeNode('state').value === li_att) {
                    e.style.display = 'grid'
                }
                else {
                    e.style.display = 'none'
                }
            })

        }
    })


})
