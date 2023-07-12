function changeDynamicScreenBackground() {
    var backgroundColor = document.getElementById("background-color").value;
    var dynamicScreen = window.open("dynamic_screen.html");
    dynamicScreen.onload = function() {
        dynamicScreen.document.body.style.backgroundColor = backgroundColor;
    };
}
