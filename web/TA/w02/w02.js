function clicked() {
    alert("Clicked");
}

// function colorChange()
// {
//     document.getElementById("div1").style.backgroundColor = document.getElementById("inputColor").value;;
// }

$(document).ready(function () {
    $(colorButton).click(function () {
        $(div1).css("background-color", $(inputColor).val());
    });
});

$(document).ready(function () {
    $(visButton).click(function () {
        $(div3).toggle(1000);
    });
});