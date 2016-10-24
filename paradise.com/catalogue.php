<?php session_start();?>
<!DOCTYPE html>

<html lang="en">

<?php include("header.php");?>

<body style="background-color:#F3F1EC;">

<?php include("menu.php");?>

    <div style="width:100%;height:200px;"></div>

<?php include_once("produits.php");?>
    <!-- Page Content -->
    <div class="container">
        <div style="">
            <div>
                <div style="background-color:#FFFFFF;margin-top:10px;float:left;box-shadow: 1px 1px 12px #555;;width:500px;height:200px;">
                    <div style="float:left;height:160px;width:230px;">
                        <img style="margin-top:10px;margin-left:10px;height:180px;width:240px;" src="images/croisiere1.jpg">
                    </div>
                    <div style="position:relative;top:10px;right:5px;float:right;width:230px;height:180px;">
                        <div style="font-size:16px;font-weight:bold;font-color:"><?php echo $_SESSION['nom_produit']?></div>
                        <hr>
                        <div style="">Départ de Los Angeles<br />7 à 21 jours</div>                        
                        <hr>
                        <div></div>

                        <a href="produit_1.php"><input class="btn btn-info" style="margin-left:120px;margin-top:2px;margin-bottom:2px;background-color:#4D0C92; border-color:#545A81;" type="button" name="Réserver" value="Plus d'infos!"></a>
                    </div>
                </div>


                <div style="background-color:#FFFFFF;margin-top:10px;float:right;box-shadow: 1px 1px 12px #555;;width:500px;height:200px;">
                    <div style="float:left;height:160px;width:230px;">
                        <img style="margin-top:10px;margin-left:10px;height:180px;width:240px;" src="images/hotel.jpg">
                    </div>
                    <div style="position:relative;top:10px;right:5px;float:right;width:230px;height:180px;">
                        <div style="font-size:16px;font-weight:bold;font-color:">Etats-Unis - Argentine - Brézil</div>
                        <hr>
                        <div style="">Départ de Los Angeles<br />7 à 21 jours</div>                        
                        <hr>
                        <div></div>

                        <a href="produit_1.php"><input class="btn btn-info" style="margin-left:120px;margin-top:2px;margin-bottom:2px;background-color:#4D0C92; border-color:#545A81;" type="button" name="Réserver" value="Plus d'infos!"></a>
                    </div>
                </div>
            </div>
            <div>
                <div style="background-color:#FFFFFF;margin-top:40px;float:left;box-shadow: 1px 1px 12px #555;;width:500px;height:200px;">
                    <div style="float:left;height:160px;width:230px;">
                        <img style="margin-top:10px;margin-left:10px;height:180px;width:240px;" src="images/derniere_minute.jpg">
                    </div>
                    <div style="position:relative;top:10px;right:5px;float:right;width:230px;height:180px;">
                        <div style="font-size:16px;font-weight:bold;font-color:">Etats-Unis - Argentine - Brézil</div>
                        <hr>
                        <div style="">Départ de Los Angeles<br />7 à 21 jours</div>                        
                        <hr>
                        <div></div>

                        <a href="produit_1.php"><input class="btn btn-info" style="margin-left:120px;margin-top:2px;margin-bottom:2px;background-color:#4D0C92; border-color:#545A81;" type="button" name="Réserver" value="Plus d'infos!"></a>
                    </div>
                </div>
                <div style="background-color:#FFFFFF;margin-top:40px;float:right;box-shadow: 1px 1px 12px #555;;width:500px;height:200px;">
                    <div style="float:left;height:160px;width:230px;">
                        <img style="margin-top:10px;margin-left:10px;height:180px;width:240px;" src="images/week-end.jpg">
                    </div>
                    <div style="position:relative;top:10px;right:5px;float:right;width:230px;height:180px;">
                        <div style="font-size:16px;font-weight:bold;font-color:">Etats-Unis - Argentine - Brézil</div>
                        <hr>
                        <div style="">Départ de Los Angeles<br />7 à 21 jours</div>                        
                        <hr>
                        <div></div>

                        <a href="produit_1.php"><input class="btn btn-info" style="margin-left:120px;margin-top:2px;margin-bottom:2px;background-color:#4D0C92; border-color:#545A81;" type="button" name="Réserver" value="Plus d'infos!"></a>
                    </div>
                </div>
            </div>
            <div>
                <div style="background-color:#FFFFFF;margin-top:40px;float:left;box-shadow: 1px 1px 12px #555;;width:500px;height:200px;">
                    <div style="float:left;height:160px;width:230px;">
                        <img style="margin-top:10px;margin-left:10px;height:180px;width:240px;" src="images/sejour.jpg">
                    </div>
                    <div style="position:relative;top:10px;right:5px;float:right;width:230px;height:180px;">
                        <div style="font-size:16px;font-weight:bold;font-color:">Etats-Unis - Argentine - Brézil</div>
                        <hr>
                        <div style="">Départ de Los Angeles<br />7 à 21 jours</div>                        
                        <hr>
                        <div></div>

                        <a href="produit_1.php"><input class="btn btn-info" style="margin-left:120px;margin-top:2px;margin-bottom:2px;background-color:#4D0C92; border-color:#545A81;" type="button" name="Réserver" value="Plus d'infos!"></a>
                    </div>
                </div>
                <div style="background-color:#FFFFFF;margin-top:40px;float:right;box-shadow: 1px 1px 12px #555;;width:500px;height:200px;">
                    <div style="float:left;height:160px;width:230px;">
                        <img style="margin-top:10px;margin-left:10px;height:180px;width:240px;" src="images/croisiere2.jpg">
                    </div>
                    <div style="position:relative;top:10px;right:5px;float:right;width:230px;height:180px;">
                        <div style="font-size:16px;font-weight:bold;font-color:">Etats-Unis - Argentine - Brézil</div>
                        <hr>
                        <div style="">Départ de Los Angeles<br />7 à 21 jours</div>                        
                        <hr>
                        <div></div>

                        <a href="produit_1.php"><input class="btn btn-info" style="margin-left:120px;margin-top:2px;margin-bottom:2px;background-color:#4D0C92; border-color:#545A81;" type="button" name="Réserver" value="Plus d'infos!"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                    <hr>
                <br />
                <h1>Envie De Rêver?</h1>
                <p style="font-size:20px;">Chaque jour des offres exceptionnelles pour partir en couple, en famille ou entre amis!</code></p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <br />
                <h2>Rejoignez-nous!</h2>
                <a href="https://www.facebook.com"><img style="width:30px; height:30px;" src="images/fb.png"></a>
                <a href="https://https://twitter.com/?lang=fr"><img style="width:30px; height:30px; margin-left:13px;" src="images/Twitter.png"></a>
                <a href="https://getbootstrap.com"><img style="width:30px; height:30px;margin-left:13px;" src="images/Boostrap.png"></a>
                <a href="https://www.youtube.fr"><img style="width:30px; height:30px;margin-left:13px;" src="images/Youtube.png"></a>
                <a href="https://www.google.fr"><img style="width:35px; height:35px;margin-left:13px;" src="images/google.png"></a>
                
            </div>
        </div>
        <hr style="color:#FFF !important;">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                                    <input class="btn btn-info" type="button" name="Réserver" style="background-color:#4D0C92; border-color:#545A81;" value="Contact">
                                    <input class="btn btn-info" type="button" name="Réserver" style="background-color:#4D0C92; border-color:#545A81;" value="FAQ">
                    <p>Copyright &copy; 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

        function Index()
    {
        window.location = "index.php";
    }

        function Catalogue()
    {
        window.location = "catalogue.php";
    }    
    </script>

</body>

</html>
