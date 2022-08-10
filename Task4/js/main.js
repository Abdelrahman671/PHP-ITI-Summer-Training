var change = document.getElementById("text1") // text1 in hold
var change2 = document.getElementById("text2") // text2 in hold
var result = document.getElementById("text3")
var para = document.getElementById("myPara") // para in hold

function changeHTML(){
    para.innerHTML = change.value
}

function changeTEXT(){
    para.innerText = change.value
}

function changeCONTENT(){
    para.textContent = change.value
}

function multiply(){
    result.value = Number(change.value) * Number(change2.value)
}

function changeStyle(){
    var divs = document.getElementsByTagName("div")
    var paras = document.getElementsByTagName("p")
    divs[0].style.backgroundColor = "black"
    divs[1].style.backgroundColor = "green"
    paras[1].style.color = "green"
    paras[1].style.fontStyle = "italic"
    paras[1].style.fontSize = "18px"
}