var value1 = 0;
var value2 = Array();
var num = 0;
function add_value(x){
    if(value1 == 0){
        value1 = x;
        }
    else {
        value1+= String(x);
        num+=1;
        value1 = Number(value1);
        }
    if(value2.length != 0){
        pool_calc.innerHTML = value2[0] + value2[1] + value1 ;
       
        
    }
    else{pool_calc.innerHTML = value1; 
        document.getElementById('value_input').value = value2[0] + value2[1] + value1;}
    }
clearall.onclick = function clear_all(){
    value1 = 0;
    num = 0;
    pool_calc.innerHTML = value1;
    }
function action(sumbol){
    value2[0] = value1;
    value2[1] = sumbol;
    value1 = 0;
    num = 0;
    pool_calc.innerHTML = value2[0] + value2[1] ;
    return value2 
}
function result(){
    var total;
    if(value2[1]=='+'){
       total = value2[0]+value1

    }
    else if(value2[1]=='-'){
        total = value2[0]-value1
 
     }
     else if(value2[1]=='*'){
        total = value2[0]*value1
 
     }
     else if(value2[1]=='/'){
        total = value2[0]/value1
 
     }

    pool_calc.innerHTML = value2[0] + value2[1] + value1 + '='+ total ;
    }