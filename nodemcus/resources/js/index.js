function store( value ) {

    let values = value;


    let dataValue = document.getElementById('myButton');
    let dataValue2 = document.getElementById('myButton2');
    let dataValue3 = document.getElementById('myButton3');
    

    let inputValue = 0;

    if(values == 1){

        if (dataValue.value == "ON") {
        
            inputValue = 1;
            window.location.href = "../../routes/web.php?value=" + inputValue + "&action=update" + "&switch=led" + values;
    
            
    
        }else if (dataValue.value == "OFF"){
    
            inputValue = 0;
            window.location.href = "../../routes/web.php?value=" + inputValue + "&action=update" + "&switch=led" + values;
            
    
        }
    } else if(values == 2){
            
        if (dataValue2.value == "ON") {
        
            inputValue = 1;
            window.location.href = "../../routes/web.php?value=" + inputValue + "&action=update" + "&switch=led" + values;
    
            
    
        }else if (dataValue2.value == "OFF"){
    
            inputValue = 0;
            window.location.href = "../../routes/web.php?value=" + inputValue + "&action=update" + "&switch=led" + values;
            
    
        }
    } else if( values == 3){
            
        if (dataValue3.value == "ON") {
        
            inputValue = 1;
            window.location.href = "../../routes/web.php?value=" + inputValue + "&action=update" + "&switch=led" + values;
    
            
    
        }else if (dataValue3.value == "OFF"){
    
            inputValue = 0;
            window.location.href = "../../routes/web.php?value=" + inputValue + "&action=update" + "&switch=led" + values;
            
    
        }
    }

}