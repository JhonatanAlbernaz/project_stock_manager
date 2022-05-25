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