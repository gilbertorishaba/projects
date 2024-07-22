const registerButton = document.getElementById('registerButton');
const registerform = document.getElementById('registerform');
// console.log(registerLink);

registerButton.addEventListener('click',() => {
    // alert(' button clicked');
    registerform.style.display = "block"
});
    const registeredUsers = [];
function register(){
    
    //alert('button register clicked');
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let regNumber = document.getElementById('regNumber').value;
    let yearOfStudy = document.getElementById('yearOfStudy').value;
    
    let newUser = {
        newUserfirstName : firstName,
        newUserlastName : lastName,
        newUserregNumber : regNumber,
        newUseryearOfStudy : yearOfStudy,
    }
    registeredUsers.push(newUser);
    alert(`New User ${firstName} ${lastName}, has been registered`);
    clearForm();

    function clearForm(){
        let firstName = document.getElementById('firstName').value='';
        let lastName = document.getElementById('lastName').value='';
        let regNumber = document.getElementById('regNumber').value='';
        let yearOfStudy = document.getElementById('yearOfStudy').value='';
        
    }
    // if (firstName == "patricia") {
    //     alert('user registered');
    //     }else{
    //         alert('user not registered');
        
    // }
      


}