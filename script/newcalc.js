var value1 = 0;
var value2 = Array();
var num = 0;
var have_dot = false;
var action_active = false;
function add_value(x){
    //строит из нажатых клавиш чилсло переменной
    if(value1 == 0){
        value1 = String(x);
        }
    else {
        value1+= String(x);
        num+=1;
        value1 = Number(value1);
        }
    if(value2.length != 0  ){
        pool_calc.innerHTML = value2[0] + value2[1] + value1 ;
       
        
    }
    else{pool_calc.innerHTML = value1; 
        document.getElementById('value_input').value = value2[0] + value2[1] + value1;}
    }
function posneg() {
    //перевод чилса в позитивный или негативный вид
    value1 = value1 * -1;
    if(value2.length != 0  ){
        pool_calc.innerHTML = value2[0] + value2[1] + value1 ;
    }
    else{pool_calc.innerHTML = value1; 
        document.getElementById('value_input').value = value2[0] + value2[1] + value1;}
    }
function add_dot(){
    //
    if(have_dot == false){
    value1 = String(value1)+'.';
    if(value2.length != 0  ){
        pool_calc.innerHTML = value2[0] + value2[1] + value1 ;
    }
    else{pool_calc.innerHTML = value1; 
        document.getElementById('value_input').value = value2[0] + value2[1] + value1;}
    have_dot = true;
    }}
    
function clear_all(){
    //отчищаются переменные
    value1 = 0;
    num = 0;
    value2  = [];
    have_dot = false;
    action_active = false;
    pool_calc.innerHTML = value1+' '+value2;
    }
function action(sumbol){
    //после нажатия на оператор, система передает значение 
    //первой переменной на другую переменную и знак оператора в список value2, value1 отчищается
    if(action_active == false) {    
        value2[0] = value1;
        value2[1] = sumbol;
        value1 = 0;
        num = 0;
        have_dot = false;
        action_active = true;
        pool_calc.innerHTML = value2[0] + value2[1] ;
        return value2 
    }
}



function result(){
    //выведение результата
    var total;
    
    //if( isEmpty( value2[0] ) ){value2[0] = 0; value2[1]=' ';}
    if(typeof value1 === 'string' && typeof value2[0] === 'string'){
        value1 = Number(value1);
        value2[0] = Number(value2[0]);
     }
    if(action_active){
        if(value2[1]=='+'){
        total = value2[0]+value1;
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
        else{ total = value1 ;}

        pool_calc.innerHTML = value2[0] + value2[1] + value1 + '='+ total ;
        value2[0] = total;
        }
    action_active = false;
    }