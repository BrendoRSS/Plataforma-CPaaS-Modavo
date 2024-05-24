function fontsize(action){
 const element = [div, h2, p, h1, em, span, h3];
element.map(element =>{
 let value = getComputedStyle(document.querySelector(element)).getPropertyValue('font-size');
 value = value.replace('px', '');
 value = action === 'aumentar' ? parseInt(value) + 1 : parseInt(value) - 1;
 document.querySelector(element).style.fontsize = '$(value)px';    
})
}