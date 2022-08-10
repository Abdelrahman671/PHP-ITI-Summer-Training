
// View Button

var tableID = document.getElementById("showData")
var viewDataBtn = document.getElementById("view")

// Rows and Cells

var addRow, cell1, cell2, cell3;

// Methods

function addUser(){

    addRow = document.createElement("tr")        
    cell1 = document.createElement("td")
    cell2 = document.createElement("td")
    cell3 = document.createElement("td")

    var fn = document.getElementById("fn")
    var ln = document.getElementById("ln")
    var un = document.getElementById("un")
    var em = document.getElementById("em")

    cell1.innerHTML = fn.value + " " + ln.value
    cell2.innerHTML = un.value
    cell3.innerHTML = em.value
    

    addRow.append(cell1,cell2,cell3)

    tableID.append(addRow)

}

viewDataBtn.onclick = view

function view(){
    fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json())
    .then(json => myFunc(json))

    viewDataBtn.onclick = ""
}


function myFunc(data){
    for(var i=0; i < data.length; i++){

        addRow = document.createElement("tr")        
        cell1 = document.createElement("td")
        cell2 = document.createElement("td")
        cell3 = document.createElement("td")

        cell1.innerHTML = data[i].name
        cell2.innerHTML = data[i].username
        cell3.innerHTML = data[i].email

        addRow.append(cell1,cell2,cell3)

        tableID.append(addRow)

}
}