<?php
session_start();
/*
include("connection.php");
include("functions.php");

$user_data = check_login($con);
*/

class ArrayList {

  public $list = array();
  
  
  public function Add($obj)
  {
      array_push($this->list, $obj);
  }
  
  public function Remove($key)
  {
      if(array_key_exists($key, $this->list))
      {
          unset($this->list[$key]);
      }
  }
  
  public function Size()
  {
      return count($this->list);
  }
  
  public function IsEmpty()
  {
      return empty($this->list);
  }
  
  public function GetObj($key)
  {
      if(array_key_exists($key, $this->list))
      {
          return $this->list[$key];
      }
      else
      {
          return NULL;
      }
  }
  
  public function GetKey($obj)
  {
      $arrKeys = array_keys($this->list, $obj);
  
      if(empty($arrKeys))
      {
          return -1;
      }
      else
      {
          return $arrKeys[0];
      }
  }
  
  }
  
  function multiplying($name){
    $quan = "";
    $result = $name * $quan;
    return $result;
}
//if (.cart post ){  Add(valasztott);}

?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <title>Profil</title>
    <style>
    body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
        background-image: url(image/veg_rendeles_ph.jpg);
    }

    * {
        box-sizing: border-box;
    }

    .row {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%;
        /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%;
        /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 20px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 20px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }


    .btn {
        background-color: #04AA6D;
        color: white;
        border: none;
        width: 100%;
        border-radius: 20px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    hr {
        border: 1px solid lightgrey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;

        }

        .col-25 {
            margin-bottom: 20px;
        }
    }

    .card2 {
        margin: auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        align-content: center;
        width: 40%;
        align-items: center;
        background-color: aqua;

    }

    .container2 {
        padding: 2px 16px;
        max-width: 960px;

    }

    .card {
        margin: auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        align-content: center;
        background-color: #36f46f;
        width: 100%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }


    h2 {
        margin: auto;
    }

    .lh-condensed {
        line-height: 1.25;
    }

    .del {
        height: 50px;
        width: 50px;
        cursor: pointer;
        transition: opacity 1s;
    }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="fo.html">Vegetár</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="recept.html">Receptek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rendeles.php">Rendelés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hozzavalo.php">Hozzávalók</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kapcs.html">Kapcsolat</a>
                    </li>
                </ul>
            </div>
    </nav>

    <?php $arrAlap = array(1000,1100,940,220,340,500,290,900,300,870,480,185,260,190,180,100,110,270,310,1200,1250,950,500,330,600,230,2500,550,450,1350,800,680,450,1100,100,1800,2400,610,780,1550,675,1120);
    $hozzList = array("paradicsom (1 kg)","cukkini (1kg)","kígyóuborka (1 kg)","vöröshagyma (500g)","lilahagyma (500g)","csemege uborka (Huangro - 720g)","olajbogyó (Giana - 200g)","fokhagyma (500g)","Kaliforniai piros paprika (200g)","Avokádó (260g)","Spenót (Eisberg - 80g)","só (Konyha finom - 1 kg)","cukor (Koronás cukor - 1 kg)","liszt (Kunsági - 1 kg)","őrölt feketebors (Horváth Rozi - 20g)","bazsalikom (Horváth Rozi - 5g)","őrölt kömény (Horváth Rozi - 20g)","fokhagyma-granulátum (Kotányi - 20g)","őrölt szegfűszeg (Kotányi - 20g)","ketchup (Heinz - 460g)","majonéz (Heinz - 460ml)","mustár (Heinz - 445g)","fűszerpaprika (csípős, Kotányi, 50g)","Tikka masala fűszerkeverék (30g)","Sniding (20g)","Citrom (200g)","Ételízesítő (Vegeta - 1 kg)","szójaszósz (Kofa - 170g)","Citromlé (Olympos - 1l)","Koriander (1 csokor - 100g)","Étkezési lencse (1 kg)","Rukkola (1 doboz - 100g)","Cékla (1kg)","Csicseriborsó (500g)","Kapor (20g)","Kecskesajt (P180g)","Parmezán sajt (200g)","Olaj (Kunsági - 1l)","Tojás (Farm Tojás - 10 db)","Gomba (1 kg)","Rizs (Nagykun - 1 kg)","Alaplé (STAR - 1l)");
     $valasList = array();
     $arTermek = 0; 
     $listHoss = count($valasList);
     ?>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Fizetés véglegesítés</h2>
        </div>


        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Kosár tartalma</span>
                    <span class="badge badge-secondary badge-pill"><?php echo $listHoss; ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>

                            <h6 class="my-0">1. tétel</h6>
                        </div>
                        <span class="text-muted">12 Ft</span>
                        <div class="del"><i class="fa fa-trash"></i>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">2. tétel</h6>
                        </div>
                        <span class="text-muted">8 Ft</span>
                        <div class="del"><i class="fa fa-trash"></i>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">3. tétel</h6>
                        </div>
                        <span class="text-muted">5 Ft</span>
                        <div class="del"><i class="fa fa-trash"></i>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promócios kód</h6>
                            <small>#First23</small>
                        </div>
                        <span class="text-success">-5 Ft</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Végösszeg (HUF)</span>
                        <strong>20 Ft</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Kedvezmény kód">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">-%</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Szállítási cím</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Vezetéknév</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Keresztnév</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Felhasználónév</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Nem kötelező)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Cím</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Cím 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Ország</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Ország...</option>
                                <option>Magyar</option>
                                <option>Olasz</option>
                                <option>Litvánia</option>
                                <option>Szlovákia</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Irányítószám</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Fizetés</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Kártya tulajdonosa</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Kártyán feltüntetett teljes név</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Kártya szám</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Lejárata</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Véglegesít</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">Vegetár: Minden jog fentartva 2023</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="altalanos_jog.html">Privacy</a></li>
                <li class="list-inline-item"><a href="rolunk.html">Terms</a></li>
                <li class="list-inline-item"><a href="kapcs.html">Support</a></li>
            </ul>
        </footer>
    </div>


    <div class="card2">
        <h2>Felhasználó</h2>
        <img src="image/avatar01.png" alt="Avatar">
        <div class="container2">
            <h4><b>
                    <?php echo $user_data['username'];   ?>
                </b></h4>
            <h4><b>
                    <?php echo $user_data['email'];   ?>
                </b></h4>

        </div>
    </div>
    <script>

    </script>



</body>

</html>