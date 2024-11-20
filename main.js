function ValidateForm(myForm)
{

    if (myForm.fullname.value == "")
        {
        alert("You must enter a name");
        return false;
        }
        else if(myForm.email.value == ""){
            alert("You must enter a email");
            return false;
        }
        else if(myForm.mobile.value == ""){
            alert("You must enter a mobile number");
            return false;
        }
        else if(myForm.nic.value == ""){
            alert("You must enter a nic");
            return false;
        } 
        else if(myForm.Date.value == ""){
            alert("You must enter date");
             return false;
        } 
        else if(myForm.car_model.value == ""){
            alert("You must choose a car");
            return false;
        } 
        return true;    
     

}

