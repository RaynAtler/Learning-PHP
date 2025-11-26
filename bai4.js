alert("Final Ultimate Flash Bang Canon!!!! ");
var x = 12;
var y = 14;
function a(a,b) {
    return a + b
};

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btnTest');
  btn.addEventListener('click', () => {
    alert('Bạn vừa click!');
  });
});


let func = (a,b) => a+b;

window.onload = function() {
  document.getElementById("output").innerHTML =
    "Kết quả a(x,y): " + a(x, y) + "<br>" +
    "Kết quả func(x,y): " + func(x, y);
};

for(let i = 1; i <= 10 ; i++){
    if(i%=2 === 0){
        continue;
    }
    console.log(i);
}