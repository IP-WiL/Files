

//VALIDATE SEARCH FILTER
function jsSearchValidate(){

   var txtSearch = document.getElementById('txtSearch');

   if(txtSearch.value == ''){
      alert('Please define search parameter.')
      return false;
   }else{
      return true;
   }
}

//VALIDATE USER REGISTER
function jsRegisterValidate(){
   var strName = document.getElementById('fName').value;
   var strSurname = document.getElementById('lName').value;
   var strPhone = document.getElementById('phone').value;
   var strEmail = document.getElementById('email').value;
   var strStreet = document.getElementById('street').value;
   var strCity = document.getElementById('city').value;
}
