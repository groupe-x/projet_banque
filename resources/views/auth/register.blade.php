<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>register</title>
</head>
<body>


    <style>
        * {
            box-sizing: border-box;
        }

        #regForm {
            background-color: #ffffff;
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            width: 40%;
            min-width: 300px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        select {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }



        input.invalid {
            background-color: #ffdddd;
        }

        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        .step.finish {
            background-color: #4CAF50;
        }

        #sidebar .toggle-btn span {
            display: block;
            width: 30px;
            height: 3px;
            background: #fff;
            margin: 5px 0px;
        }
    </style>


    <div class="contents" style="background-image: url({{asset('images/bq.jpg')}});background-attachment: fixed;background-size: cover;">
    <h1 style="text-align:center; font-size:50px; margin-top:10px; color:#fff">PRUNI BANQUE</h1>
    <form id="regForm" method="post" action="{{route('register.store')}}">
        @csrf
        <h1>ENREGISTREMENT</h1>
        {{-- <p style="color: red;font-size: 14px;">NB : ce site ne traite pas les extraits faits au sein des sous-préfectures</p> --}}
        <div class="tab">
            Nom:
            <p><input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required=""></p>

            Prenom:
            <p><input type="text" name="prenoms" id="prenom" placeholder="Entrez le prenom" required=""></p>

            Sexe:
            <select name="sexe" id="sexe" required="">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            <br><br>
            Date de naissance:
            <p><input type="date" name="date_naissance" id="date" placeholder="Entrez la date de naissance" required=""></p>
        </div>
        <div class="tab">Profession:
            <p><input type="text" name="profession" id="heure" placeholder="Entrez votre profession" required=""></p>
            civilite:
            <p>
                <select name="civilite" id="">
                    <option value="marie">marie</option>
                    <option value="celibataire">celibataire</option>
                </select>
            </p>
            Numero:
            <p><input type="text" name="numero" id="lieu" placeholder="Entrez votre numero" required=""></p>
            email:<p><input type="email" name="email" id="pere" placeholder="entrez votre mail" required="">



        </div>
        <div class="tab">
            Adresse:
            <p><input type="text" name="adresse" id="piece" placeholder="Entrez votre adresse" required=""></p>

            Numero piece d'identité:
            <p><input type="text" name="num_piece" id="piece" placeholder="Entrez le numero de votre piece d'identité" required=""></p>

            Type de compte:
            <p>
                <select name="type_compte" id="">
                    <option value="1">epargne</option>
                    <option value="2">courant</option>
                </select>
            </p>
            Premier versement:
            <p><input type="text" name="num_piece" id="piece" value="50 000" disabled></p>

        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <a href="{{url('/')}}"> <span class="btn btn-outline-danger">Annuler</span></a>
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            {{-- <span class="step"></span> --}}
        </div>
    </form>

        </div>


    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Soumettre";
            } else {
                document.getElementById("nextBtn").innerHTML = "Suivant";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>


</body>
</html>
