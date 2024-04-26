function changeImage() {
    var image = document.getElementById('myImage');
    if (image.src.match("images/art.png")) {
        image.src = "images/firefox2.png";
    } else {
        image.src = "images/art.png";
    }
}

function changeColor() {
    var div = document.getElementById('myDiv');
    
    div.style.backgroundColor = "red";
}


function changeText() {
    var div = document.getElementById('text');
    div.textContent = "Fate of the World in his hands..."; 
}
