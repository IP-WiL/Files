<script>

function jsSearchValidate(){

   var txtSearch = document.getElementById('txtSearch');

   alert(txtSearch.value);

   if(txtSearch.value == ''){
      alert('Please define search parameter.')
      return false;
   }else{
      return true;
   }
}


</script>