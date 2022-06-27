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
