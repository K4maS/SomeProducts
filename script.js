btn.onclick = function click()
        {
        var value_1 = document.getElementById('value_1').value;
        var value_2 = document.getElementById('value_2').value;
        var sumbol = document.getElementById('select_sumb').value;
        var ansver
        if (sumbol == "plus")
            {
                ansver = Number(value_1) + Number(value_2);
            }
        else if (sumbol == "minus")
            {
                ansver = Number(value_1) - Number(value_2);
            }
        else if (sumbol == "multiplication")
            {
                ansver = Number(value_1) * Number(value_2);
            }
        else if (sumbol == "division")
            {
                ansver = Number(value_1) / Number(value_2);
            }
        else if (sumbol == "exponentiation")
            {
                ansver = Number(value_1) ** Number(value_2);
            }
        else (ansver = 'ошибка')
        pool_text.innerHTML ="Ответ: "+ansver
        }
//Смена блоков в окне
document.getElementById('calc_page_btn').onclick = function(){
    document.getElementById('main_page').style.display="none";
    document.getElementById('calc_page').style.display="block";
    document.getElementById('rand_page').style.display="none";
    }
document.getElementById('main_page_btn').onclick = function(){
    document.getElementById('main_page').style.display="block";
    document.getElementById('calc_page').style.display="none";
    document.getElementById('rand_page').style.display="none";
    }
document.getElementById('rand_page_btn').onclick = function(){
    document.getElementById('main_page').style.display="none";
    document.getElementById('calc_page').style.display="none";
    document.getElementById('rand_page').style.display="block";
    }