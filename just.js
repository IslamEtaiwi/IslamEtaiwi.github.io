const xhr= new XMLHttpRequest();
const here=document.getElementById('here');
xhr.onload=function(){
if(this.status===200){
  here.innerHTML=xhr.responseText;
} else {
console.warn('didnt load');
}
};
xhr.open('get','sub.html')
xhr.send();
const xh= new XMLHttpRequest();
const end=document.getElementById('end');
xh.onload=function(){
if(this.status===200){
  end.innerHTML=xh.responseText;
} else {
console.warn('didnt load');
}
};
xh.open('get','footer.html')
xh.send();