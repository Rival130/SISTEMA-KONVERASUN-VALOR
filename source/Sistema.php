<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KONVERSAUN VALOR UNTL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.css">

    <style>
        p.text-heading {
            font-size:
                35px;
            margin-top:
                45px;
            font-weight:
                bold;
        }

        img {
            margin-left: 140px;
        }

        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-size: 1550px 800px;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        footer {
            background-color: #ffffff;
            margin-top: 225px;
        }

        .costume-alert {
            color: white;
            font-weight: bolder;
            display: none;
            position: fixed;
            text-align: center;
            width: 300px;
            top: 33%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: rgb(219, 11, 11);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
    </style>
</head>

<body style="background-image: url('../img/la.jpg');">
    <?php include "menu_top.php" ?>
    <!-- Header -->
    <br>
    <div class=" header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1" id="logo">
                    <img src="../img/UNTLBG.png" alt="" width="130px" height="150px">
                </div>

                <div class="col-sm-9" id="titulu">
                    <p class="text-heading" style="color: black;">SISTEMA KONVERSAUN VALOR UNTL</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Taka Header -->
    <br>
    <!-- Prinsipal -->
    <section class="hero">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Prense Valor
                        </div>
                        <div class="card-body">
                            <form method="dialog">
                                <div class="form-group">
                                    <label for="valor">Valor :</label>
                                    <input type="text" class="form-control" id="input-text" placeholder="Prense Valor" step="any">
                                    <label>Grade :</label>
                                    <input type="text" class="form-control" readonly id="output-text" required>
                                </div>
                                <button type="submit" id="konv-btn" class="btn btn-primary">KONVERTE</button>
                                <button type="reset" id="reset-btn" class="btn btn-danger">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Taka Prinsipal -->

    <div id="costumAlert" class="costume-alert"></div>


    <!-- Taka Footer -->

    <!-- JavaScrip -->
    <script src="../source/script.js"></script>
    <!-- Taka JavaScrip -->
</body>

</html>