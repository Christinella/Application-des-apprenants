
const submissionButton = document.getElementById("SoumissionButton");
const body = document.getElementById("body");



if (submissionButton) {
  submissionButton.addEventListener("click", SoumissionCo);
}

function SoumissionCo(event) {
  const inputEmail = document.getElementById("email").value;
  const inputPasswordValue = document.getElementById("password").value;


  event.preventDefault();

  console.log(inputEmail, inputPasswordValue);



  const url = "/";

  const user = {
    email: inputEmail,
    password: inputPasswordValue,

  };

  fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(user),
  })
    .then((response) => {
      return response.text();
    })
    .then((result) => {
     
    });
}


