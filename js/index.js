
var survey_options = document.getElementById('survey_options');
var add_more_fields = document.getElementById('add_more_fields');
var remove_fields = document.getElementById('remove_fields');

// add_more_fields.onclick = function(){
//   var newField = document.createElement('input');
//   newField.setAttribute('type','text');
//   newField.setAttribute('name','survey_options[]');
//   newField.setAttribute('class','survey_options');
//   newField.setAttribute('siz',50);
//   newField.setAttribute('placeholder','Name');
//   survey_options.appendChild(newField);
//   var newField1 = document.createElement('input');
//   newField1.setAttribute('type','text');
//   newField1.setAttribute('name','survey_options[]');
//   newField1.setAttribute('class','survey_options');
//   newField1.setAttribute('siz',50);
//   newField1.setAttribute('placeholder','Age');
//   survey_options.appendChild(newField1);
// }

// remove_fields.onclick = function(){
//   var input_tags = survey_options.getElementsByTagName('input');
//   if(input_tags.length > 2) {
//     survey_options.removeChild(input_tags[(input_tags.length) - 2]);
//   }
// }






//code for increment button
const plus = document.querySelector(".plus");
const  minus = document.querySelector(".minus");
 const num = document.querySelector(".num");

 let a=1;
 plus.addEventListener("click",()=>{

    a++;
    a= (a<10)? "0" + a : a;
    num.innerText =a;

    var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','pname[]');
  newField.setAttribute('class','survey_options');
  newField.setAttribute('siz',50);
  newField.setAttribute('placeholder','Name');
  survey_options.appendChild(newField);
  var newField1 = document.createElement('input');
  newField1.setAttribute('type','text');
  newField1.setAttribute('name','page[]');
  newField1.setAttribute('class','survey_options');
  newField1.setAttribute('siz',50);
  newField1.setAttribute('placeholder','Age');
  survey_options.appendChild(newField1);
    

 });

 minus.addEventListener("click",()=>{

    if(a>1){
     
        a--;
        a= (a<10)? "0" + a : a;
    num.innerText =a;

    }

    
 });
































