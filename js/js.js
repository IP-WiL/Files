

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
