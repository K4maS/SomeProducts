var value1 = 0;//активная переменная
var value2 = Array();//список состоящий из первой введенной переменной и оператра, назаначется прсле выбора опреатора
var num = 0;//длина строки переменнй
var have_dot = false;//определяет, введен ли дробный символ
var action_active = false; //определяет, выбран ли оператор
var first_in = true;//определяет, введен ли первый символ переменной, так как сначала нужно удалить 0 из строки


function monitor() { 
    //Функция вывода изображения на экран
    
    if(value2.length != 0  ){
        pool_calc.innerHTML = value2[0] + value2[1] + value1 ;
    }
    else{pool_calc.innerHTML = value1; 
        }
    
    
    }

function add_value(x){
    //строит из нажатых клавиш чилсло переменной
    if(first_in){
        value1 = String(x);
        first_in = false;
       }
     else {
        value1+= String(x);
        num+=1;
        
         }
    monitor();
    }





function posneg() {
    //перевод чилса в позитивный или негативный видs
    value1 = value1 * -1;
    
    monitor();
    }




function add_dot(){
    //добавляет знак дроби
    if(have_dot == false){
        if(value1 != 0){
        value1 = value1+'.';
        have_dot = true;}
        else{
            value1 = '0.';
        have_dot = true;
        first_in = false;
        }
    } 
   
    monitor();
    have_dot = true;
    }

    



function clear_all(){
    //отчищаются все переменные
    value1 = 0;
    num = 0;
    value2  = [];
    have_dot = false;
    action_active = false;
    first_in = true;
    monitor();
}

function clear_entery(){
    //отчистка только последнего введенного пременного
    value1 = 0;
    num = 0;
    have_dot = false;
    first_in = true;
    monitor();
    }

function clear_last_sumbol(){
    if (value1.length>=1){
            value1 = value1.substring(0, value1.length-1);
            let check = value1.substring(value1.length-1,value1.length+1);
            if (check == '.'){have_dot = false;}
        }
    else{ clear_entery()};
    monitor();
    }



function action(sumbol){
    //после нажатия на оператор, система передает значение 
    //первой переменной на другую переменную и знак оператора в список value2, value1 отчищается
    
    if(action_active == false) { 
     
        value2[0] = Number(value1);
        value2[1] = sumbol;
        value1 = 0;
        num = 0;
        have_dot = false;
        action_active = true;
        first_in = true;
        pool_calc.innerHTML = value2[0] + value2[1] ;
        return value2 
    }
     
}




function result(){
    //выведение результата
    var total;
    value1=Number(value1);
   
  
    if(action_active){
      
        switch(value2[1]){
            case '+':
                total = value2[0]+value1;
                break;
        
            case '-':
                total = value2[0]-value1;
                break;
            case '*':
                total = value2[0]*value1;
                break;
            case '/':
                total = value2[0]/value1;
                break;
            case '%':   
                total = value2[0]%value1; 
                break;
            default:  total = value1 ; 
    }
        pool_calc.innerHTML = value2[0] + value2[1] + value1 + '='+ total ;
        value2[0] = total;
        action_active = false;
        first_in = true;
        have_dot = false;
    }
    
    
}



function spec(x){
//функция для специальных действий по типу возведения в квадарт, корня и деленяи на x
var sumb;
switch(x){
    
    case '1/x':
        total = 1/value1;
        sumb = "1/"+value1;
        break;

    case 'x^2':
        total = value1**2;
        sumb = value1 + "<sup><small>2</small></sup>";
        break;
    case '2√x':
        total = Math.sqrt( value1);
        sumb = "2√<strong id='over'>"+value1+"</strong>";
        break;
    }
    pool_calc.innerHTML = sumb + '='+ total ;
        value2[0] = total;
       
        first_in = true;
        have_dot = false;
}
