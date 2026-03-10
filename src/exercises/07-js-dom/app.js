console.log("Hello World")

let p = document.createElement("p");
p.innerHTML = "This is a paragraph"
document.body.appendChild(p);

let myButton = document.getElementById("myBtn");
let myInput = document.getElementById("title");

function addPar(){
    let p = document.createElement("p");
    p.innerHTML = myInput.value;
    document.body.appendChild(p);
}

myButton.addEventListener('click', addPar);
myInput.addEventListener('keyup', function(e){
    if(e.key == "Enter"){
        addPar();
    }
});