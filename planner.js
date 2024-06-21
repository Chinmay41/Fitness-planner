


let text=document.getElementById('data');
let add=document.getElementById('add');
let task=document.getElementById('task');



add.addEventListener('click',function(){
   //task.innerHTML= `<h3>${text.value}<h3>`
   
   
   var paragraph=document.createElement('p');
    paragraph.innerText=text.value;
    task.appendChild(paragraph); 
    text.value="";
    
   
    paragraph.addEventListener('click',function(){
        paragraph.style.textDecoration='line-through';
        
        })
    

    paragraph.addEventListener('dblclick',function(){
        paragraph.style.display='none';
    })
})

