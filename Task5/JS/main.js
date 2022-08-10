function show(){
    setTimeout(function(){
            var sh = document.getElementById("showLink")
            sh.removeAttribute("hidden")
        },3000)
}

var cnt = 0;
var interval;

function start(){       
    var divCounter = document.getElementById("counter");
    interval = setInterval(function(){ 
        divCounter.innerHTML = "Count is " + cnt; 
        cnt++;
    }, 1000);
}

function stop(){
    if(cnt > 0)
        clearInterval(interval)
}

var newWin; 

function openWin(){
    newWin = window.open("hello.html", "newWindow", "width=300,height=300")
}

function closeWin(){
    newWin.close()
}

function mvtoWin(){
    newWin.moveTo(500, 200);
}

function mvbyWin(){
    newWin.moveBy(200, 200);
}

function rstoWin(){
    newWin.resizeTo(300, 300);
}

function rsbyWin(){
    newWin.resizeBy(200, 200);
}