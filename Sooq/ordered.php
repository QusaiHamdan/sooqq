<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">

        <style>
            @media only screen and (max-width:2440px) {
                input,label{
                    margin: 2.5px 15px;
                    font-size: 18px;
                }
                input{
                    padding: 2.5px 5px;
                    outline: none;
                }
                label{
                    color: #fff;
                    float: left;
                }
            }
            @media only screen and (max-width:576px) {
                input,label{
                    margin: 2px 5px;
                    font-size: 16px;
                }
                input{
                    padding: .5px 2.5px;
                    outline: none;
                }
                label{
                    color: #fff;
                    font-size: 12.9px;
                }
            }
            body{
                background-color: #eee;
                font-family: 'Sawarabi Mincho', serif;
            }
            form{
                background-color: rgba(0, 0, 0, 0.253);
                backdrop-filter: blur(4px);
                box-shadow: 5px 10px 5px silver;
                border-radius: 8px;
                padding: 14px;
            }
            input[type="text"],input[type="number"]{
                display: grid;
                grid-column: 2;
                border: 0.5px solid silver;
                border-radius: 4px;
            }
            input[type="radio"],label{
                cursor: pointer;
            }
            input[type="radio"]:checked,
            input[type="radio"]::after{
                background: #000080;
            }
            
        </style>
    <title>Order</title>
</head>
<body>
    <div class="container p-5  d-flex justify-content-center text-center">
        <div class="row">
            <div class="col">
                <form action="order.php" method="post" class="form">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="title" value="Hody">
                    <input type="hidden" name="price" value="7JD">

                    <h2>Information</h2>
                    <label for="Name" class="label">Name : </label><br><br>
                    <input type="text" class="mx-auto" name="name" id="Name" required placeholder="ex: Qusai Hamdan"><br>
                    <label for="Phone" class="label">Phone Number : </label><br>
                    <input type="text" class="mx-auto" name="phone" id="Phone" required maxlength="10" placeholder="077-078-079"><br>
                    <label>Size : </label><br>
                    <div class="btn-group my-2">
                        <input type="radio" name="size" id="sm" value="small"><label for="sm">Small</label>
                        <input type="radio" name="size" id="md" value="medium"><label for="md">Medium</label>
                        <input type="radio" name="size" id="lg" value="large"><label for="lg">Large</label>
                    </div><br>                    
                    <label>Color : </label><br>
                    <div class="btn-group color my-2">
                        <input type="radio" name="color" id="black" value="black"><label for="black" id="radio">أسود</label>
                        <input type="radio" name="color" id="navy" value="navy"><label for="navy" id="radio">كحلي</label>
                        <input type="radio" name="color" id="gray" value="gray"><label for="gray" id="radio">رمادي</label>
                    </div><br>
                    <label for="Quantity">Quantity :</label><br><br>
                    <input type="number" class="mx-auto" name="quantity" id="quantity" min="1">



                    
                    <input type="submit" class="btn btn-secondary my-3" value="Sent">

                </form>
            </div>
        </div>
    </div>
</body>
</html>