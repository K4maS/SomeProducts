//рандомайзер
rand_btn.onclick = function(){
    var rand_value_start = document.getElementById('rand_value_start').value;
    var rand_value_end = document.getElementById('rand_value_end').value;
    var random_value = (Math.random()*(rand_value_start - rand_value_end)+rand_value_start)*(-1);
    pool_rand.innerHTML = "Выпало: " + Math.trunc(random_value);
}