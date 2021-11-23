<?php

session_start();

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {
    header("location: Login_students.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/styles2.css" rel="stylesheet" type="text/css">

    <script src="js/icons.js"></script>

    <title>Plataforma</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
        <button id="sidebarCollapse" class="btn navbar-btn">
            <i class="fas fa-lg fa-bars"></i>
        </button>
        <a class="navbar-brand" href="">
            <h3 id="logo">BIENVENIDO : <?php echo $_SESSION['nombre']; ?></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" id="link" href="cerrar_sesion.php">
                        <i class="fas fa-sign-out-alt"></i>
                        LogOut<span class="sr-only">(current) </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="link" href="#">
                        <i class="fas fa-id-card"></i>Chat</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper fixed-left">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-user"></i> </h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i>Inicio</a>
                </li>
                <li>
                    <a href="actividades.php"><i class="fas fa-clipboard"></i>Actividades</a>
                </li>
               
                <li>
                    <a href="notas.php"><i class="fas fa-hands-helping"></i>Notas</a>
                </li>
                <li>
                    <a href="estadomatricula.php"><i class="fas fa-info"></i>Estado Matricula</a>
                </li>
            </ul>
        </nav>


        <div class="container" id="tarjetas">

            <div class="card">
                <img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2020/03/fondo-matematicas_23-2148146270.jpg">
                <h4>Matematicas</h4>
            </div>

            <div class="card">
                <img src="https://lh3.googleusercontent.com/-R-PmZDQfOpA/V_QI05GbVII/AAAAAAAAGCc/qoLzZkofxvQslvp-EsbHIQa3tqxWw0nyQCKgB/s1600/CienciasNaturales.jpg">
                <h4>Naturales</h4>
            </div>

            <div class="card">
                <img src="https://grupogeard.com/co/wp-content/uploads/sites/3/2020/07/Blog-saber-11.jpg">
                <h4>Sociales</h4>
            </div>

            <div class="card">
                <img src="https://phantom-expansion.unidadeditorial.es/5f2bdd05b9dac546ffe6653b6c00c8d6/resize/414/f/jpg/assets/multimedia/imagenes/2020/12/15/16080660925480.jpg">
                <h4>Tecnologia</h4>
            </div>

            <div class="card">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISERURExMWFhUXGB8YFhgYFxcYGBsYHhgYFxkgGBkZHSggHyAlGxoYIjEhJSktLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGy0lICYvNS0tMjAtLS01LTAtLy0vLS8tLS8tLS0vLy0tLS01LS0tLS8tLS0tLS0tLS0tLS0tLf/AABEIALcBFAMBIgACEQEDEQH/xAAcAAEAAwEBAQEBAAAAAAAAAAAABQYHBAMCCAH/xABBEAABAwEFBgMGBAQGAgIDAAABAAIRAwQFEiExBiJBUWFxE4GRBzJSobHBFCNCYoKi0eEzcpKy8PGTwlNzFRYk/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAQFAgMGAQf/xAA1EQABAwIEAwcDAwQDAQAAAAABAAIRAwQhMUFREmFxBROBkaGx8CLB0RQy4RUjYvEzQoIG/9oADAMBAAIRAxEAPwDcURERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERedWoGiSQBzJgIi9EXDTvWzudhbXpF3IPaT9VTb/wBs3+KaVAgNaSC6AS4jXDOUeWa8JAUqhZ1azuFo544LQEVJ2V2oqVaoo1odinC4AAyATDgMogH/AJpdkBlYXFu+g/geiIuC9Le2hSNR2cZAcS46BHODQXHILU1pcQ1uZXeiz5+29onKnSieTj88X2VquG+W2hpywubGITIz0IPLIqPSu6VU8LTj4qVXsK9FvG4YdVLoiKSoaIiIiIou+76o2WnjquicmtGbnHk0fc5Kt0/aNRJ/wXhvPE2fTT5rBz2tzKkUrStVbxMbI8vdXhFH3RetK00/EpOkTBByLTycOakFmDK0OaWktcIIRFx2q8qNLKpVYw8nOaD6Er+2O3U6omnUa8DXC4GO8L2FjImF1oiLxeoiIiIiIiIiIiIiIiIiIiIiIiIiIiIqH7RGVH0yBIZTcD0LokmOQDmic5c8CBBJvijL+uz8RRdTmCYg8oc131aD5IpFpVFKs150Pks52U2cNrJc6W0m5EjUu5NnLLif+CFezDULDq1xBHUEg/NbBZmts1F2KGsaSchwJygD6LKLyd41qe6MHiVMugc+ATHTMx1WJbgr+yvn16zwT9IGA2+5mcT/AAFM7GMH4ynP7o74HLUVR7opMu+m6tUe2pj3aWAnMDMyDoZ11iOZhdDdsjP+D/OZ/wBqivu6NE8LzB6E+wKhXtGpd1eOkJaBEyBOZMTG8fIVwVX27nwaeRLfE3o190/3XTS2lbIDmOBPIh39FE37tBZq7PBpVA6oHB0Q7gDOF0YXGOROU8lrrXNKvbvNIzhz/wBqNaUKtOu1xaY15c5VSq16YqAZwMiQePTJWjZhzKL3vBJxNGpkayNB0KrNoog5wp3Za7jibvEh5Bg8AJmD1CoaTncbTTOMx1JwV5fR3Bkn86q4NvQQCRrpwmF/G3sOI9FxX6w+I3LLDA5ZErjBVi++q0qppudlhMZ4D4OS5h3Bw5Yn0VppVA4BzTIK9FD3Gc3CcsjHVTCt6FXvWB60rH/alanG2Bp0ZTaGjuSSfPL0CqFStIEaq5+1ukRamPAMOpAEwYkOqZTpMRkqGhZJkrs7Ej9NTI2Wh+yO1PNorM/QaYc7kHBwA8yHO9Fpd5VzTo1KgEljHOA7An7LO/Y8Kn55w/lnCA7LJ44c82uB5ZLSa9MOa5rvdIIPYiCtjRAhc72qZunRy9l+eKtte6o59RxcXGXE6yeK6rqvOpZrQyuxx3SCQDk5h95pHUT5weC4atNuIxmOB5hfFSq6k0VGE4mkYZ1BnIjrMFWxEDHJcJSMuaW5/dfpNFm930rTah4j6hGEAvqOMBpAkwGnXjA9V2t2mrtEAgtGhc3eI4YoMT2XN/1BoEvaQNOa713ZjphrgTqNvdXtFXbi2hFZ3hvAa/8ASRo7mM9CrEplKsyq3iYcFBq0X0ncLxBRERbFqRERERERERERERERERERERV7aDaalZtwb9Xg0HIdXnh21+qiNsNrfCxWegd/Rz/h5hv7uZ4d9Kvcdx17UZDTE51HThnjnqT2nqsHO2Vxadmjg764MN2OE9fsMyMtJ6bbfFauZe+c5wjJo7N+5kqHt1qa6sabiMQa1zSecSQe4II6yNXKV2usDLAaQh1QvaTJgNxA55ASBm3Kc51Czq8rT4j3HM4pxHmeMLNlPhaXv1wHVR73tZjatOnZ5tPEcIAEERp+6ZkbDGcrxYKtS0VvBJmo4SxpmSBk77Ge/ALQrDssxtMYyTUjNw0HQA8Ov0WCXE6rRtVB9KcYqMwRxJcBh85g8wV+oFC/prJLq31E7jDy+HbVandqvrCKf0tB0x8Jj7LONqbK6jgpF3+JMluopME1NdCd1o7lRthJYQW7g4BuXmeLj1Mr32jtfiXlVGuCl4bM8siHuy5zi9FyPrEat+aqr1v6fho0ZAiczmSeekK+tGOdTBfiTHqJyVp2WbTNR7ajW4nNyBAwuEySBoD0VhsNlAe54aGj3GACAGjKY6keizuneZBDgIc0yDOhHkrjT2lFWk11MbxG8To13EDn37KT2W/vGhjxi3HrP4k++aq+1Wmj/cJwdhntsOeHspO/i3wjMTIw85nh5Sq1QqAv8MEY/hne9NVw3hVEvdUMg+9Oc9P6KnNtTg90uMzuEy45ZAGM9AOy2dpWge9rwcYyAxInfx8sslW2VwypLKv0t0dz2Iw01GRgGJla7cVnIl5HQeuf0XntHtJRsbJecTyDhpj3jGs8gJGf1VDf7QH1aIpNOB7GgVHgy5xiN10ZdTryPOobS1/z3iZDNz/Tk71fid3cVJot7hndN0zPM/N+SsbSwFVoq1D9Jk+A32xjCJAzhT1XaL8VWqFwLXPyDXOBpvbwpuBAAHAE5TrE4hF0bBZn1TNSoxuEksaN9lQEDAZygySCc8iDmJNZ/EEz+kKc2as9WrWptY0lzzhJOQME8T5ei206YYePKcx91vv757aBbZt+qMMzlJwGM4AxP7SNiVZLtvq02ai2jSq4WNmAWs1JLjJwzqSvX/8AaLYXgPrTTIggQJnImQBmNV731s1WsrBUe5pBMQCTBgkSSByKi6NAVCAdIlx5DX1/6VhSa0gk5L5264vW3ADnONQkEDiJkk4YTGJ0y0XPtFd5DjVa3dOTwNGnQ5DQH6kjkpyy3DQNksxY0VLTVqSIe7daJnIGBh3Zkakr5o1sZJ5zI1Geo6gqW2artoVmwGhpApmdGtJ4E6Z5nnnPCI1Wu6pR7uY0nku5/ozLe+dcsAIEkN2dgRHLXllrhI3XeVmqWerY6D5qtaQMW74rv1FvMEyOcRwVVtdeS1okSRM94hVV7g21PosJMVXBpZJ0JMtjXScs+WathrNrRUpkVMZxMLf1OLsgP4so4acFUdr0KYdTdTx03jb7wOuy3dg167zU79uMzORJMzgdsPPrHUT4ZBBJfIwAfFOXzWn05gTrxWY3PdlWvaACCA135hzBZB00ydkYHRais+zGENcdMPSZ+eGi97VLZY2ZImfGI+eOqIiK0VQiIiIiIiIiIiIiIiIiIiIsl26uN1nrmu2TSqOJB+Fx3nNPnJHTLgtB2YvJtos1Oo2AQA14ECHAZiBoNCOhC7bwsVOvTdSe3E1wgj6EHgRqCqDYxUum1YXkus9TIOjhORgfqbxHEE9Fh+0yrvvP19sKR/5WYj/IR75dY6rt9rV3uq2Rr2Nl1N+Lu0ghwA1J0d2YVi+DdPOPUr9IWu0Ua1nqOa5lRmAmQQR7pPDQqmUXzJ0cdTxKxLiDDsRpy3+deSq2WJqglp4SDBkT01GkjyVX9nl2vp2gWurROCmJaHjC4uMNBa08gSZPSOmrs2iong8dwP6qL2aoh1RwcA4YeIkajmu3azw6FhtFUU2AtpODd1o3iMLOHxELIvfUxC9bbUbf+zBJ368lkNovSp+INpbkXPNQSJBxOJM9CCRHVTtgvkVCDgY0TvgAk6aS4mO4hUOzXnVa3CDploFN3IKrj4riAOG6Bi75aLx9s1xxaCRkeq6U12PZgNIVhvSzCBhPlwI5913bNU3MbUxiG5FoyknMENE9szlkpT8ADTo4oFQ8+bs4dyz4rjr0qj6n4djTjmCNI78h1VA91a0e1tMTORz8NyRsc+aqKYZetcKjpg4+BznbpzyyVXt941atQh0NIJAAkgDTXj3XJbdyk8jXCc/kVM3/AHb4FofTmSMMnqWNJj9skqKttOaTx+x3+0rorakWjjcPqIx8slxV7dtdcimP2MfHUB339czMquXXTc+qGMBLzugDUuLmgD1UhtOP/wCq0NOorVAf/IV67DZV50dmQe0R91130TUq1K7abCXPc5wwyMyScvqodW4DahZGOC+k21N/dBmEQSf/AEfwPfdVOqzD25rQfZnVFW1WcE50mv14u3j6xUZ/pVUvWzYHSAfDeMTJ+Hi0/uad09gdCFzWe3vs81KfGNZJaQZBBGYhTeFrwPRQrqlWo03Pt8RBBacMCCD4iTzkY4TG5e0FxFlBaBlUEyMWWF3Q8YWWW/aFrBhLsTtcDRlPWBAPzUNfe3VutVMUq1T8uBLWAMDo0LzqT5x0Ufd90uqDGd1nEnU9hp5rGqOFpccgtdhVYwNY1re8JgGACf8AGTmc8ASI0XQL9qeJ4kweEZQOXZWWx3i5721X5tyfB0iZ9VzXfc1D3sGh/UZ+uXyUvfwZSsj8MB1Vrqc8Q00ziMniN31UF1E3UNGAP35D8qzrXBsqT6taHQMv5z8go7Z84qtW0mGNaC4uO6GlzpzPDIFeGz20tOhWquaQ1uN9Whia4ta/ewhzRnDhh7EcJkVa76JLSHaTx+y6fwbevqpwtGUi4kzxcOGwbl4zr6Kqtabu5E8zO/Fmt52F2rp3jRe9rfDqscG1WSDBI3XA8WkAxIndI4SZO9L1FFxDoDfDLmnjiB0jrl6FUL2G2MNFsqfE9jB2YHH/AN/kpfbt2OqGNOjBI6yTHoR8lGvq/c0+Np1H8+krTb2rH3XdHL586KT2bvM1XtAMMDA3eObnQXEgTmSZPQNHNWpQGy10eBRaXj8wjPmAc4/qp9Z2rXtpjjz9tgtF65jqzu7y9+fz2RERSFFRERERERERERERERERQ201yttdA0icLpxMdEw4THkQSD0KmURZ03uY8OaYIyWN/hK13uexxDnPbhLWOOHDM/mZRwkAGYJnWD40r/qB0uYwjpIPkTI+S+L6tDnVXud7xcZ+f00UZSaajsDeX/c8h1W5rKWRE81SXHb19cV3VA8txgAeQkYyeoJWs7FV2VWPqsMjJvURJIPXMKme2naTCGWSnnvYqufGJY3/ANj/AArzuraD/wDF2OuSQ5zoNMDMeKd3M5SI3jGUMOeazG33ga/vuc55cXFx1cTrPWV5Spsx4DLQcF0dt3riKlwOF0DCIx6ab9dsl6XdaWvqNxty7698lpGxtmFqtTaZADGgvd1a0gR5ktHaVlDa2FwMEEGVeNh9t6FjruqVG1CxzC3INkHE08XDLJeu5KzLj3To/dp4rX9o7GMJqgZfrH0P/Oi97lvNtSkXvIDmDfJ+EZgk8o+YKrVX2mWctkUarmnqzMHzKp9Xa2hie3DUYx0ggwRgJkA4TPL0Ve4Gk/iaJBzA9wqSra16ePD80XVflu8evUrDRxyn4QABPkAouu84chrurptDQILDLDodDzhwMEHPlnqvCrUa1sv00y1J5DqrGg4HHRcRVZU7wsc36ycuefvj67qFuaiWYnSQWMdmPjcQAPm49g7kunxnBkxBOU/0Xtb7zZWe7AzwqZe52E8ySTiPEwYHCMhxn7pw8YQN0ak/bqqS4qAukjJfcrVgbS4pBmMjgAABnkdcvwT4UCHA0nzgcZkZmm7QOA+ThxHUAj2uzYO22h8CmGs18Rzh4ZbwLIzdI0y7wvqz0wRLdRqP7rcLBSFKhTacsFNoP8LQD9Fvs6jpLTkFW9s1u5hzM3TI6a9cVlF9bA2SwsY41i6q45yxpBjVzWyMIGWpOqjrU7E3CJDRoJnnmeZPPsOC9r8vOpaa7qztJ3R8LP0j016kleVESFJqPL28JySz7Mp2zhXImqRBO24aMgNDGcbL+3RGYPcL22/ui006VJzmfllsAgjJ7xJDhqDAHTdXNZ9yqCfdkTxyOuS7NrL5fbqhcZbSph2BnLLV3Nx9ANOJOPZ2ZnNsqP23R77gZ/1JBPhED5tyVVstUNaGYZH3XRZrOKtRtMNgucGyDpJ1jpr5LmZZ3EYsJgZych6lXz2Z7PeI+paKg3A0sZx33CHHuGn+fopdR22f3R5bRplxyGXsvvZ22fgK1QBssNMikOBOMGXHvjJ6nLIhTuztkNe0+K7MNOMk8Xfp+ef8K4bTcVd1XwcJJnJ2eDD8U8B8+CvV2WFtGmGN8zzPErn7enVrva6rIDSZnU4eHiOYGa13txTpsmnHE4RhsNfmuOi7URFdrn0RERERERERERERFz2muGNnjoO6xe8MBc7IL0CTASramtdhPmeS9gZzCgvExTJ7n7qu3dt02nUNKvRcxgMD4hn+tp155addVWWN8+4qOw+ka7cueRM/BMZZVKgPdiSMx+FoKLksNvpV2CpSe17TxB+R5HoV1q1UMggwc1lG3FjpG1uYJpuMOJGYJiSS355HyJUYyzCkCwTJO84/qjMRGjeI55GTlHV7RLVht1QQcgz/AGtKjKF5NdTcXCDTYXSY90ZkHry65cREaq55BaugteyrSjwXTWAO4QZ6jExkDuRvvioba4EikzgS4nyAH3K47ru2kBMYndeHYLzrWn8UXlwyndHwiMo68fNR4tFag4CcQ4E6Ed1NsnCmOFy03A7x3eDIrwo1gRheJIXkW8AFctjdgbRb/wA3/BoEk+I4SXZ5im3LFyxGB3zCu7fY3Zxn+Krf6af9FufUbgogqhhhx+6yW6rQ9n5bmktOnQ9Oisd33YCRVqQAQTTB4wSMR6TkPM8M79R9lFFkn8TU7lrcgq3el24auDESGNDWZRIAEHXU8esqJcU+9+mkcT0y5eJA8Vhd9p0aVDiqHWMjzMGByKiq1P8AMljndf7/ACUXfFoJqAE5N+up+y7MUOLRJzjLiZS3XR+Y44ssgcuOESAdNZHkoTH90eBx09oUaztqt5XNZrJgYHDDiwzPKcPGF53ZZjUDnDn8h91206oaIEhdV3sLWCAIHBfFss+PeAg8Rz/uolR/G8zkuqt6b6TBTdp18fCVy0mua7WDzzj6LQaG3IbQIrgOcWkNLI3jEbw5fuHoqBbKoDZ4/dR1ncSXEra1zgONpjfmvGxevFOuJGhyI5TtupKnUzE+q9WvgyFwNPEeanrnuZ1ooVa7H0wKYJcHOwugCSYOQETmYGR5KTTqd4rSu+nTHE8wOfNcFYhxy5Bcda2BjoBg6EHjyn6KLr3+A6WNlumeR1/58lx1LWak1KkN5duHmlO3LarnH5894VdcXLHM4G4465Yc8lN2qu+qYDXQOEH1K2D2e2qh+Dp0abjjYPzA9pa7GZJgHUaxBOQC/Pjryfia4OIw+7/fnyV/2bvRlekYOGoDvtBiIENLTyJLu0LfcvNCiXkTH3Mc/NVRfRvD3QJbjIyx/wBbeO4G4IqLce1Rpjw7Q4uEwH6uA4Yuf17q6UKzXtD2kOaRIIMgjosKFwysJaVWXNrUoOh2Wh0K9kRFvUdERERERERERERFH2xuJ4bE9Pr9vRSC/kLRcUO+ZwTGInw0WTXcJlcdO7mAzmenBQ9+bIWe0y6PDqH9TeJiBiboRpyPVWVF7St6VIQxoHQfCtjLiqx3E1xB+fNlilvslru6vk5zJ0cw7jh55Hq0jL0KsNye0J+MNtIBacsbRDh1LRlHaPPRX68LBSr0zTqsD2ngfqDqD1Cy3ajYKrQxVKE1aepH62jqB7w6jPpxWwgjJXtC7tb0cFyAHZTlPQ6HkcNs+FcXtArNfbnuaQ5rmMIIMgg0xBBUDSshqUa5GeBgI/8AI0n0biPkuXErXcNncyjiI984sxILYgT0InI81X3V53Ba8YwR4wZMeCtKtDgtxSB04Z6LOnWZpfDp0007qy7E3Uy0W2lQLvDYSS7m7CC7COpAOfDPjC9r62SDQ+00nuDKcYmEYg3E8MgPxTGeQIJy1MSvnZAxbrNE5VActYBLj8gVNN7RDe+Y76cTO2GPlyVSy0JY7iwgHzifwt/o0mtaGtADWgAAaADIAL1XI63UhrUaOcuAI7g6LgtG1VhZ71qoyOAeHH0bK2AgiVQNY537QSvraS3ClR1zecI7fq+WXmFTrRSZUAxjMaOBgj+y4r32ppWmqX4wGjJgOWXM9T/Tku+5fCLH169VraNPXeEuOuERmco0zMgDpW1BUfWD6ZIIwByVx+hpttuGu2QcwcZOgHPpzyVUtFip0JrYiXSQwGNeJy5LysttY5uF+U89PVf2+Kra9R1ZjYY4khvw55tMZZH7c1JWWyWZtLFUa0QYJMyfLiorAS48R4nTHrkrynSo2luIEDM8sNcdOq57O2BEyJyPRWu79jmGka1oqOY3DihuFuEc3FwPp/0qtQvCm1wfRpNaAZBMmXD9pMZdZX3a7zr1zNWqX9Cd3yA/orG2s+M/WFyna/8A9TTpOLLaSdTgMdp946SMVWLzM1XlhJZiOHEIcWzkT1K86DD6nzC7m3e+o8hg78gJ1K1jZfZez07MzGwPe8BznOzOckYfhyPBeuptcCxuY+Y7KF2L2vXbWNWp9TTM6Y7jT2w1mFjtuY5jvDcIMAkf5mgtnyIPmuQPc2cJIBBaY4g5EHmOiuftEuek2qalnqFzoHiMycG4QGjC7nuiWmeOfBUGtaSO6wBAHC0iRnG/+12wuWVKYe4HEbRn9lzWWznEJGmvorZcOwFW8Wl7X+Exkw5wlr3/AAiM+7uHIqb9k9x/iGVX1HbramFzee606acdfTmNK2gvSnd9jfWDAG02gU2AQC4nCxuWgxETyElWDKxeILYI136a+a5q7e2mDTa6Rry/n2X5y2g2br2KsaNYDGBiEOBBaZAII4GDrB6L62dqvZaKRbMlwaRzaTDh6Z+S9bfbqleo6tVdiqPOJxPPpyAGQHAALWfZPsq2nQ/G1mA1Kw/LBE4aR0IHN+s/DHMpXphzCDtCp7e4cagOxmehUM6iRieTny4R1UpcF+us+etM+82cu7eR+v0sG2Vgs7KOMNDHk4W4cgSQTmBloDms1dW9OXNc2+i+hUwMEahdrRcy9okkYTEH+Nt91tthtbK1NtVhlrhI/v1ByXWovZ2w+BZqdM6gS7/M44iPImPJSi6BhJaC7Ncq8NDiGmROCIiLJYoiIiIiIiIiIiIiIiIqZtdf8O8BmYH+IZ48G+XH05qVv+9/DBZTO+dT8I/qqld9h8Z5aN88vuTw7qk7SvgJosEnWPYczr8i37Ptmj+9VyGX5PRQ9ZtJ7sbqLXHrx75ZqxWK77TUGdHA3m7dEdiJ9ArLcuz1KgMXv1PiPDo3l31+ilbTTxNLZidDyPBYM7JDqc1JmMBPpjIx8ua2XHajSeGm2RuZ9BPv5LMdvXeHYhTbEGo3ERxMF2Xm0ZrOrI2sXjwRUL8/cDy6Iz9zOOa2Lbm5ALurkGXsDagMaBrhij+HEqT7Is7w7UX/AFaPupvZVtVo0QauBmYzjKBPzqdNlK5b3DyMYk9cvngq6brtEy6hWB4k06n1LVw2isAtq9om0bbPRNBjvzqrSMtWsMgnoTmB5ngqHsfs7Vtz85bRad9/zwt5uPyGZ4Az6tRzsApdvXfUtzWq/SNNcPmW6pTakr3/ABA04rctoLjslOzsYLPRwhzWgljS4NEkw4iZIBzmc1m+0N02SnQc9jSHkOwlrjhBETIJI4gQB589LKrRWFANJJEzoIznL5otDe0m06BrOkCY6kkAeZKrljvfwicpadWz8xyPVTdGm60HxCS1hGXA9gPuqxY7M0w5xJPKMj3M/Za97NaNCtSc54D61MwR+nCc2uDNOY7t4KRStmUyajx/OfydVQ9rX1zdNFOgYGMkyPtifQc5BELYdnq9ocBSpwyPfO6wZn18pVzuvYigwTVJqu7uaB2AMnzKta8bXaG02Oe4gACSTotj60mcgqmh2ZRpxxfUef4y85PNUJ1lpse5rGhjS4+k8SenNdF9bSGoTToEtYMpGTnDTLkPn9FWrwvI1X4Kc4Q7edBzg/T6qXuPZurWIcdyn8R1cP2jj307rm2d/EMnidnvGOe2eK6iwtaNFpqVoEZDbw35ffLkoXcahDWBzjyAnL+iyqvRwvc06hxB7gkL9PWGwU6LcNNsczxPcr88bXWXwrdaWHKKryOznF7f5XBWljZupAl5k9MB+VvZe/qHkaDKdVoXsLP5Np/+xv8As/6X17bLeQyz2cH3nOqO/hGFv+53ov77DWRZrS4//MPlTafuqNtrfRt1tfUZLmyKVEDMloMCBzc4k/xBWTGS/HRc/wBpVMXDdfOwezZt9rDHD8mnv1j+2cm93ER2DjwX6GYwAAAQBkANIVe2G2cFhsraZjxXb9Yji88AeTRkO08VZFrcZKwo0+BuOeqpHtAtW9Sp8gXnzOEfR3qq9szdArWpnwtPiOHCGmY8zA813bY2rHancmAMHkJPzJHkrLsTdvh0jVI3qsEdGD3fWSfMKiaDWuzsD6DCPP7rpXO/TWTTqRHidfAesKyoiK7XPoiIiIiIiIiIiIiIiLxrVQxpe4w1okk6AASSq0dq2VXPpUWuxNElzgBGbQYEzIxcdCFIbWVsNmdPEgdwN5w8w0jzWV2CjaLRXa2zkipJl8wAOOLpnnzmOKz7rvGOEwYz25qDWvHUa7GhvENRvy+eMK6Cx1LU7CzIj36h0Hfm7orVdN1UrMzCwZn3nH3nHqfsvawWXwqTKczhaAXQBiMZuIGUk5+a61AtLNtDE4u1P4+Yq4uLt1UcIwbt+fkDRERFMUVRG1lPFYbUOdCpHfw3R81jXs5t/gWupVicNnqmCYGWB2fottvgjwXsJjG0sGU5uBGkjRY3s5cNey21we0lga5niQMLgcMZHmNRwz89FS6ps4mcQDgJiRl80z1iFLovLaLxv68l93HdNa9bW+pUccGLFVfyGgawc4EAcAJMrZLvsNOgxtKm0NY0QAPnPMk5knMlcOy13so2fCxgYHOc4jPMkxJJ1yAHYBTS2sxErK9vf1DvpwYMh8+BVnba0YaIHMk+gLfXen+EqqXXs0+2U3tx4KfxFodLxmAGnUc+hI45XDa6jLGuiQDn9vqVLXfZhTpsYBEAeup+arQ0vvnTgGAHzy8MD7ZEraK4p2YYBi6QZx6/PHOFmVq9mtce6KR5eG9w/kqAj+cKHds7b7O/FTZVa4fqZiaQP8zd30cVuCK7Fd2uKrTjmsoF5XmynFd72gtOA+68w5ky5uZgHI9Trw4rdXtNeiynjq1AambS5zjMNw5E6e8fKeCu3tDpjwGP5OcPWk/7hvoon2cWVzqjq2Ya0Yehcf6CfUKFWHeEjJdBbFtOx7yBhPnJgL5uS5XUgC9oqHlIgHtx8wrRd95CmMDpjgNSP7KbcwHUA9wuSpdlJxnD8z9NFHbauYZYVQVH1KjuJxkros9drxLTI/5qsS9s1lwXgHgZVKLXE83AuYf5QxbZZrM2mIaI5rKfbpSh9kf+2q0nsaRGfmVZW/FxAHPktluYfiq3c20f4a7LRZ2E+LXqxPw0/DYHmeZ90dyeCkvZFcgr2t1ocJZZwC0cDVdIb/pAJ74V/dk7lIs7vFYCKhDgxzfdgENJB4kH0PUq1bOXqaFYUoApPcGwAAG/pBbGQGmWkKAe2KXeOo8JmYJwjQdc8DhhniFuf2VVqvNaRAEga4Z8ufPALRFzWu0inTfUOjWlx8hK6FnO39+u8ZtBpmm0b4Byc7MFpP7RGXAmeAUl5IBjNeWdqbmqGDqen5OQUVZKZtFpY0mTUfveZLnn0krWWNAAAyAyCyLZq8WUbVScBuk4XOdqGu3coyETJOuXDMLYFDsaHdNPFmfn5Vh20X8bARAjDrr6QiIinKlREREREREREREREREVY2+pOdZt3Lez/wBLgPUmO5C4vZnd7WWY1o36jiJ/a3IAecnzVwqUw4FpAIOoOi87NZmU2hjGhrROQ6mT6kkrPj+jhUc0JrCrOkfPXzXQiIsFIREREXBb7OXQQA4D9JMfNQl42YahpB5EK1LzqUw4QRI6qsuuzW1nF4ME7gH+fUjYBbBU+nhK47Bam4WsORgAdclILxFnaIy00Xsplu2q1sVCDtG3P5isXRovKrTDhBAI1z6ZheqIt8LFERERQm1V3G0WZzG5uG80dYLT54XGOsJsjYjRslJjmlrsy4EQZLic/kptF5GMrf8AqHdz3Okz6R85oiIvVoRR95tcS0DTOfkpBedWmHCCJCj3VE1qRYDEx6EH7Z6LJruEyq/eliBYSIxgZEmMXME9fkYWd25zg92RideR68j0+2a2GlZ2t91oH19V5Wm76VQy9jSdJiHR/mGar2dlgYyByA++HsrC37Q7nAiQoHYy8addhz/NaBjB5cHDmDHkfJed9bGMqufUpuDHOMuaW4qbjxMCCCeYPE8yrBYrso0STTYGk6nMn1JXcrC2t20aQpgDwWl125lY1KBIB3g+G0bbaYiVj977KVrPJI3eYOJnD9cCP4g3WAXKybL7Xxgs9pBacmtqHjwGMHMcN7jxjVXxRzrns5cH+E0EGchAnmWjInuFt4SMlMqdpsuKfBcMnYgwQfH1mZUiiIs1ToiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiL//2Q==">
                <h4>ED.fisica</h4>
            </div>

        </div>
            <br>
        






        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/script2.js"></script>
</body>

</html>