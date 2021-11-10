'use strict';


// Prevent default action on all buttons
let allButtons = document.querySelectorAll('button');
  Array.from(allButtons).forEach(cur =>
  cur.addEventListener('click', e =>{
        e.preventDefault();
      })
);


function isJson(str){
  try {
    JSON.parse(str)
  } catch (e){
  return false;
  }
  return true;
}


  function getWordsBetweenCurlies(str) {
    let results = [],
    re = /{([^}]+)}/g, text;
    while(text = re.exec(str)) {
      results.push(text[1]);
    }

    let resultString = results;
    if (resultString.length > 0){
        resultString = resultString[0].toString();
        resultString = "{" + resultString + "}";

        let json = isJson(resultString);
        if (json){
         json = JSON.parse(resultString);
          return json;
        }
    }
  }


  //error divs
  let emailError, nameError, serviceError, feedBackMsg, successMsg, msgError, phoneError;
  nameError = document.querySelector('#name_error');
  emailError = document.querySelector('#email_error');
  serviceError = document.querySelector('#service_error');
  phoneError = document.querySelector('#phone_error');
  msgError = document.querySelector('#message_error');
  feedBackMsg = document.querySelector('#feedbackMsg');
  successMsg = document.querySelector('#successMsg');

  let names, email, service, token, phone, message;

  let popupDiv, popupTxt, textArea;
  popupDiv = document.querySelector('.popup__left');
  popupTxt = document.querySelector('.popup__content--text');

//Clear error divs
function clearErrDivs() {
  emailError.innerHTML    = "";
  nameError.innerHTML     = "";
  feedBackMsg.innerHTML   = "";
  successMsg.innerHTML    = "";
  if(serviceError){
    serviceError.innerHTML  = "";
  }

  if(msgError){
    successMsg.innerHTML  = "";
    msgError.innerHTML  = "";
    phoneError.innerHTML  = "";
  }
}

function Visible(e){
  if (window.getComputedStyle(e).display !== 'none'){
    return true;
  }
}

function emptyInputs(){
  let inputs, selects;

  //Get all inputs from the dom
  inputs = document.getElementsByTagName('input');
  selects = document.getElementsByTagName('select');
  textArea = document.querySelector('#message');

  //Loop through all the inputs
  for(const input of inputs ){

    //Set all their values to empty
    input.value = '';
  }

  //Loop through all the select
  for(const select of selects ){

    //Set all their values to empty
    select.value = 0;
  }

  if(textArea){
    textArea.value = '';
  }
}


  //When modal close button is clicked
    let closeBtn = document.querySelector('.popup__close');
    if (closeBtn){
      //When close button is clicked
      closeBtn.addEventListener('click', e => {

        //Restore div elements
        if(!Visible(popupDiv) || !Visible(popupTxt)){
        popupDiv.style.display  = "block";
        popupTxt.style.display  = "block";
        }

        //Reset form
        emptyInputs();

        //Clear error divs
        clearErrDivs();
      });
  }


//Submit Quote modal
let submitBtns = document.querySelector('#submit_quote');
  if (submitBtns){
    submitBtns.addEventListener('click', e => {
    e.preventDefault();

    //Run validation
    validateData();
  });
}

//Contact form submit
let contactBtn = document.querySelector('#send_contact');
  if (contactBtn){
    contactBtn.addEventListener('click', e => {
    e.preventDefault();

    //Run validation
    validateData();
  });
}

const errorMessages = {
name: "Please Enter your name",
nameLength: "We would appreciate a more descriptive name",
invalidNameType: "Numbers are not accepted as names",
invalidEmail: "Enter a valid Email",
email: "Please enter your email address. Make sure there are no spaces",
service: "Select a service from the list",
phoneChar: "We only accept numbers as phone numbers",
message: "Please enter your message",
}

const emailPattern = /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;

//const emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function emailValidate(email){
  let result = emailPattern.test(email) ? true : false;
  return result;
}


//Validation processing
function validateData(){
  clearErrDivs(); //empty error divs
    email     = document.querySelector('#email').value;
    names     = document.querySelector('#name').value;
    service   = document.querySelector('#product__type');
    email     = email.trim();
    let msg, phone;
    msg = document.querySelector('#message');
    phone = document.querySelector('#phone');

    if (msg){
      phone = phone.value;
    }


    if (names == ""){
      nameError.innerHTML = errorMessages['name'];
      return false;
    }
    else if (names !== "" && names.length < 2){
      nameError.innerHTML = errorMessages['nameLength'];
      return false;
    }
    else if (!isNaN(names)){
      nameError.innerHTML = errorMessages['invalidNameType'];
      return false;
    }
    else if (email == ""){
      emailError.innerHTML = errorMessages['email'];
      return false;
    }
    else if (!emailValidate(email)){
      emailError.innerHTML = errorMessages['invalidEmail'];
      return false;
    }
    else if (service && service.value == 0){
      serviceError.innerHTML = errorMessages['service'];
      return false;
    }
    else if (phone !=="" && isNaN(phone)){
      phoneError.innerHTML = errorMessages['phoneChar'];
      return false;
    }
    else if (msg && msg.value.trim().length <= 0){
      msgError.innerHTML = errorMessages['message'];
      msg.focus();
      return false;
    }
    //process quote
    else {
      let formData, url;
      clearErrDivs();
      if (msg){
      //If form is contact form,
      url = './contact.php';
        formData = {
          'name': names,
          'email': email,
          'message': msg.value,
          'phone': phone,
          'send_contact': 'send_contact'
        };
      } else {
        url = './index.php';
        //If form is from home page
        formData = {
          'name': names,
          'email': email,
          'category': service.value,
          'submit_quote': 'submit_quote'
        };
      }


      const signInRequest =  postRequest(url,
        formData)
    }
}

  //Spinner Div
  const spinner = document.querySelector('.spinner');
  const formDiv = document.querySelector('.contact-form-wrapper');


  const postRequest = function (url, formData, redirect = ""){
    let fetchResults;  //variable to hold the returned fetch response

    //Show  spinner
     if (spinner){
      spinner.style.display = "flex";
     }

     //Make fetch request
     return fetch(url, {
       method: "POST",
       body: JSON.stringify(formData)
     })
     //convert the response to JSON
     .then(response => {
       const contentType = response.headers.get("content-type");
       //Check if response is json
       if (contentType && contentType.indexOf("application/json") !== -1) {
         //Make it a json response
        return response.json();
      } else {
        //Make it a response text
        return response.text();
      }

     })
     .then(data => {
       let response = data;
         //Validate the json response
         if(isJson(response)){
           response = JSON.parse(response);
         } else {
         response = getWordsBetweenCurlies(response);
         }
         fetchResults = response;
         //Return the fetched response
         return fetchResults;
     })
     //Put errors into json string
     .catch( err =>  {
       //renderError(err, '#renderError');
     })
     .finally(() => {
       //Hide Loading spinners
       if (spinner){
        spinner.style.display    = "none";
       }


  //Display feedback to UI
    if (fetchResults){
      if (fetchResults.feedback){
         feedBackMsg.innerHTML = fetchResults.feedback;
       }
       if (fetchResults.successResponse){
         //If succesful
         //Hide form elements
         if (popupDiv){
           if (Visible(popupDiv) || Visible(popupTxt)){
           popupDiv.style.display  = "none";
           popupTxt.style.display  = "none";
          }
        }

         //Show feedback message
         successMsg.innerHTML = fetchResults.successResponse;

         //Hide form
         if (formDiv){
           formDiv.style.display  = "none";
        }
      }

      emptyInputs();
      //clearErrDivs();
     }
   });
}
//End of post Request
