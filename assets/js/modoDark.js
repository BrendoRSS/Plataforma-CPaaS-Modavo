/* ==================== MODO DARK ======================*/
//CONFIGURAR!!!!
function mododark(){

    var icon = document.getElementById('iconetrocarcor');
    icon.onclick = function(){
      document.body.classList.toggle("escuro");
      if(document.body.classList.contains("escuro")){
        icon.src = "../assets/img/Icons/sun.webp";
      }
      else{
        icon.src = "../assets/img/Icons/lua.png"
      }
    }}
    
    /* ================== END MODO DARK ====================*/