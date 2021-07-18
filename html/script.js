document.addEventListener("DOMContentLoaded", function(){
    let btn = document.getElementById('getData')
    btn.addEventListener('click', function(e){
        this.innerHTML = "Обновить курс"
        const url = 'http://iss.moex.com/iss/statistics/engines/currency/markets/selt/rates.json'
        let req = new XMLHttpRequest()
        req.open('GET', url)
        req.responseType = 'json';
        req.send()
        req.onload = function(){
            if (req.status != 200) {
                console.log(`Ошибка ${req.status}: ${req.statusText}`)
            } else {
                const usd = req.response.cbrf.data[0][3]
                const eur = req.response.cbrf.data[0][6]
                let usdspan = document.getElementById('usd')
                let eurspan = document.getElementById('eur')
                usdspan.innerHTML = usd
                eurspan.innerHTML = eur
            }
        }
        req.onerror = function() {
            console.log("Запрос не удался");
        };
    })

})