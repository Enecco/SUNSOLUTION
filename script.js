// function changeLogo() {
//     var logoFile = document.getElementById("logo-file").files[0];
//     var logoImg = document.getElementById("logo-image");
  
//     var reader = new FileReader();
  
//     reader.onload = function(e) {
//       logoImg.src = e.target.result;
//       // Envoyer le fichier téléchargé au serveur si nécessaire
//       $.ajax({
//         url: '/upload',
//         type: 'post',
//         data: logoFile,
//         ...
//       });
//     }
function changeLogo() {
    var logoFile = document.getElementById("logo-file").files[0];
    var logoImg = document.getElementById("logo-image");
  
    var reader = new FileReader();
  
    reader.onload = function(e) {
      logoImg.src = e.target.result;
      // Envoyer le fichier téléchargé au serveur si nécessaire
      $.ajax({
        url: '/upload',
        type: 'post',
        data: logoFile,
        // Ajoutez ici d'autres paramètres de la requête si nécessaire
        success: function(response) {
          // Réponse réussie du serveur
          console.log(response);
        },
        error: function(error) {
          // Erreur de la requête
          console.log(error);
        }
      });
    };
  
    reader.readAsDataURL(logoFile);
  }
  
  
  
  function changeBackground() {
    var body = document.querySelector("body");
    body.style.background = "url(nouvel_arriere_plan.jpg)";
  }

//   function changeDynamicScreenBackground() {
//     var backgroundColor = document.getElementById("background-color").value;
//     var dynamicScreen = window.open("dynamic_screen.html");
//     dynamicScreen.onload = function() {
//         dynamicScreen.document.body.style.backgroundColor = backgroundColor;
//     };
// }

  
  
  function changeFont() {
    var heading = document.getElementById("heading");
    var Arial = document.getElementById("1");
    var Verdana = document.getElementById("2");
    var Times = document.getElementById("3");
    if (Arial) {
        heading.style.fontFamily = "Arial, sans-serif";
        console.log("1")
    } else if (Verdana) {
        heading.style.fontFamily = "Verdana";
        console.log("2")
    } else if (Times) {
        heading.style.fontFamily = "Times New Roman";
        console.log("3")
    }
    console.log("heading")
  }
  
  