function countTo(){

    let from = 0;
    let to = 4006;
    let step = to > from ? 1 : -1;
    let interval = 1;

    if(from == to){
        document.querySelector("#output").textContent = from;
        return;
    }

    let counter = setInterval(function(){
        from += step;
        document.querySelector("#output").textContent = from;

        if(from == to){
            clearInterval(counter);
        }
    }, interval);

}

countTo();

//============================================================================//

function countTo2(){

    let froms = 0;
    let tos = 61344;
    let steps = tos > froms ? 1 : -1;
    let intervals = 1;

    if(froms == tos){
        document.querySelector("#output2").textContents = froms;
        return;
    }

    let counters = setInterval(function(){
        froms += steps;
        document.querySelector("#output2").textContents = froms;

        if(froms == tos){
            clearInterval(counters);
        }
    }, intervals);

    }

countTo2();
  
//============================================================================//