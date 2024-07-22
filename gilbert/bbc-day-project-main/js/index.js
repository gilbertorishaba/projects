// const registerLink = document.getElementById("registerLink");

// console.log(registerLink);
// registerLink.addEventListener('click',()=> {

//     alert ('button clicked');
// });

const registerLink = document.getElementById('registerLink');//doc-stem
// constant variable
const registerForm = document.getElementById('registerForm');

// registerLink.addEventListener('click', () => {

registerLink.addEventListener('click',( )=>{
        // alert ('button clicked');

        registerForm.style.display ="block"
});
// function register(){
// // alert( 'button register Clicked')
// let firstName =document.getElementById('firstName').value;
// let lastName =document.getElementById('lastName').value;
// let regNumber =document.getElementById('regNumber').value;
// let yearOfStudy =document.getElementById('yearOfStudy').value;

// // conditional statements if
// // if (firstName.toLowerCase()=="gilbert") {//casting
//         if (firstName.toLowerCase()==="gilbert") {//casting
//         alert('user registered')
        
// }else {


//         alert( 'user not registered')
// }

// }
// function register(){

//         // alert('function invoked');
//         let firstName =document.getElementById("firstName").value;

// if (firstName.toLowerCase() =='gilbert') {
//         alert('user registered');
        
// } else {
 
//         alert( 'user not registered');
// } 

// }
const registeredUsers =[];//we dont want anyone to assign it any different value//Global variable can be accessed any where.

function register(){

let firstName = document.getElementById('firstName').value
let lastName = document.getElementById('firstName').value
let regNumber = document.getElementById('regNumber').value
let yearOfStudy = document.getElementById('yearOfStudy').value

let  newUser={ 
newUserFirstName: firstName,
newUserlastName:lastName,
newUserregNumber:regNumber,
newUseryearOfStudy:yearOfStudy,

}
registeredUsers.push(newUser);
alert(`New user ${ firstName},has been registered`);

clearForm()//after registering

}
function clearForm(){
        let firstName = document.getElementById('firstName').value='';
        let lastName = document.getElementById('lastName').value='';
        let regNumber = document.getElementById('regNumber').value='';
        let yearOfStudy = document.getElementById('yearOfStudy').value='';

       
}
