const spans = document.querySelectorAll('.progress-bar span');


console.log(spans);



spans.forEach((span) => {
 span.style.width = span.dataset.width;
 span.innerHTML = span.dataset.width;

}); 