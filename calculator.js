function bmi(){
    var h=document.getElementById('height').value;
    var w=document.getElementById('weight').value;
    var b= w / (h/100 * h/100);
    var bmi=b.toFixed(2);
    let heatlh="normal";
    if(bmi<18.5){
        health="underweight"
    }

    if(bmi>18.5&&bmi<24.9){
        health="Normal"
    }
    if(bmi>25){
        health="Overweight"
    }

    document.getElementById('result').innerHTML="YOUR BMI IS: " + bmi+"("+health+")";
}