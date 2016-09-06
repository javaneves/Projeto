$( document ).ready(function() {
 // DOM pronto

         // Dados de teste
         /*
          * Para testar o script você deve discomment a função
          * TestLocalStorageData e atualizar a página. A função
          * Irá carregar alguns dados de teste eo loadProfile
          * Vai fazer as mudanças na interface do usuário
          */
          TestLocalStorageData ();
         // Perfil de carga, se ele sai
    loadProfile();
});

/**
  * Função que obtém os dados do perfil no caso
  * Thar que já salvou em localStorage. Apenas o
  * UI será atualização no caso de que todos os dados estão disponíveis
  *
  * A chave não existente no return null localStorage
  *
  */
function getLocalProfile(callback){
    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
    var profileName        = localStorage.getItem("PROFILE_NAME");
    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

    if(profileName !== null
            && profileReAuthEmail !== null
            && profileImgSrc !== null) {
        callback(profileImgSrc, profileName, profileReAuthEmail);
    }
}

/**
  * A função principal que carrega o perfil se existir
  * Em localStorage
  */
function loadProfile() {
    if(!supportsHTML5Storage()) { return false; }
 
    // Temos de fornecer para o callback do básico
         // Informação para definir o perfil
    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
    
        // mudanças na interface do usuário
        $("#profile-img").attr("src",profileImgSrc);
        $("#profile-name").html(profileName);
        $("#reauth-email").html(profileReAuthEmail);
        $("#inputEmail").hide();
        $("#remember").hide();
    });
}

/**
  * Função que verifica se o browser suporta HTML5
  * Armazenamento local
  *
  * @returns {Boolean}
  */
function supportsHTML5Storage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}

/**
  * Dados de teste. Estes dados estarão seguros pela web app
  * No primeiro login bem-sucedido de um usuário auth.
  * Para testar os scripts, apagar os dados localStorage
  * E comentar esta chamada.
  *
  * @returns {Boolean}
  */
function testLocalStorageData() {
    if(!supportsHTML5Storage()) { return false; }
    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
}