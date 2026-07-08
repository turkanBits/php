<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Currency Exchange</h1>

    <input type="number" id="number" placeholder="Mebleg daxil edin">

    <select id="currency">
        <option value="EUR">EUR</option>
        <option value="AZN">AZN</option>
        <option value="GBP">GBP</option>
    </select>

    <button id ="show_exchange_btn">Hesabla</button>


    <p id="show_exchange">Netice burada gosterilecek...</p>
    

    <script>
        document.getElementById("show_exchange_btn").addEventListener("click",function () {

            const amount    =    document.getElementById("number").value;
            const currency  =    document.getElementById("currency").value;

            if(amount && currency) {

                fetch("process_exchange.php", {

                    method:"POST",
                    header: {"Content-Type" : "application/json"},
                    body: JSON.stringify ( {  amount: amount, currency:currency} )

                    }).then(  response => response.json()  ).then( data =>{
                       document.getElementById("show_exchange").innerText=`${amount} USD ->${data.covertedAmount} ${currency}`
                    });
                

            }else{
                alert("Xahis olunur ki mebleg ve valyutani secesiniz!");
            }

        })
    </script>
</body>
</html>