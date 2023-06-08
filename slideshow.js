const imgArea = document.getElementById('imgArea');

const preveousbutton = document.getElementById('preveousbutton');
const nextbutton = document.getElementById('nextbutton');


let currentIndex = 0;
showImage(currentIndex);

preveousbutton.addEventListener('click',() =>{
    currentIndex = (currentIndex -1 + imgArea.children.length) % 
    imgArea.children.length;
    showImage(currentIndex);
});

nextbutton.addEventListener('click',() =>{
    currentIndex = (currentIndex +1)%   imgArea.children.length; 
    imgArea.children.length;
    showImage(currentIndex);
});


function showImage(Index){
    for(i=0;i<imgArea.children.length;i++){
        const image = imgArea.children[i];
        image.style.display = i === index ? 'block' : 'none';
    }

}

