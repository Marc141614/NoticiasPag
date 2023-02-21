<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://www.paypal.com/sdk/js?client-id=ASal_5-JMuDMcZihzYJ4nBTz6AH4sZjLnNoRrnZ8H7OaQKmvubyOtY9GH7OZdcKpw84k7UvrDTNEN6FI&currency=MXN"> 
    </script>
</head>
<body>
    <div id="paypal-button-conteiner"></div>

    <script>
            paypal.Buttons({
                style:{
                    color:'blue',
                    shape: 'pill',
                    label: 'pay'
                },
                createOrder: function(data, actions){

                    return actions.order.create({
                        purchase_units:[{
                            amount:{
                                value: 200
                            }
                        }]
                    })
                },
                onAprove: function(data,actions){
                    actions.order.capture().then(function(detalles){
                        console.log(detalles);
                    })
                },
                onCancel: function(data){
                    alert("Pago Cancelado");

                }
            }).render('#paypal-button-conteiner');
    </script>
</body>
</html>