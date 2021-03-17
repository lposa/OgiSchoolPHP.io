var objPeople = [{
        email: "posa.97@gmail.com",
        password: "123"
    },

    {
        email: "ogi.kovacevic205@gmail.com",
        password: "Og12dog13"
    }

]



/*1. send data as JSON*/

function getInfo() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    for (i = 0; i < objPeople.length; i++) {
        if (email == objPeople[i].email && password == objPeople[i].password) {
            window.location.href = "schedule.html";
            return;
        }
        alert("Wrong username or password")
    }
}

const form = document.getElementById("form");
form.addEventListener('submit', registerUser)

async function registerUser(event) {
    event.preventDefault()
    const email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    const result = await fetch('/api/register', {
        method: 'POST',
        hedaers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            username,
            password
        })
    }).then((res) => res.json())
    console.log(result)
}