/* ==================== MODO DARK ======================*/

function mododark(){
  var navbar = document.getElementById("navbar");
  document.body.classList.toggle("escuro");

  if (onoff1.checked){
      console.log('checked')
      document.body.classList.add("escuro");
      document.classlist.add('navbar-dark bg-dark');
      
  }else{
      console.log('no checked')
      document.body.classList.remove("escuro");
  }
}