<div class="wrapper_dishes ">
    <div class="text-about col-md-4 rounded">
        <h1 class="title">MENU</h1>
        <p class="subtitle" >Découvrez la carte du chef Michant Arnaud</p>
    </div>
</div>
<!--les formules-->
<section class="group-dishes">
    <div class="container">
        <hr>
        <div class="row col-sm-12 formule" id="formulas">
            <h2 class="m-5">Nos formules<br></h2>
            <?php
            if (isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] === '1') { ?>
             <div class="col-sm-6">
                    <form action="change_dishes.php">
                        <label class="content" for="noon">Modifier la formule midi :</label>
                        <input class="" type="text" value="Entrée">
                        <input class="" type="text" value="plats">
                        <input class="" type="text" value="dessert">
                        <button class="contact-link btn" type="submit">Enregistrer</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form action="change_dishes">
                        <label class="content" for="evening">Modifier la formule soir :</label>
                        <input type="text" value="Entrée">
                        <input type="text" value="plats">
                        <input type="text" value="dessert">
                        <button class="contact-link btn" type="submit">Enregistrer</button>
                    </form>
                </div>
                <div class="row col-sm-12">
                    <h2 class="m-5" id="carte">A la carte</h2>
                </div>
                <div class="col-sm-9">
                    <h3 class=" ">Entrée</h3></div>
                    <div class="col-sm-2">
                    <h3 class="">Prix</h3></div>
            
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>

                    <div class="row col-sm-12">
                    
                </div>
                <div class="col-sm-9">
                    <h3 class=" ">Burger</h3></div>
                    <div class="col-sm-2">
                    <h3 class="">Prix</h3></div>
            
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <input type="text" value="€" class="form-control" />
                        </div>
                        <div class="col-sm-1">
                            <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                        </div>
                    </div>
                    <hr>                    
                    <div class="row col-sm-12">
                    
                    </div>
                    <div class="col-sm-9">
                        <h3 class=" ">Dessert</h3></div>
                        <div class="col-sm-2">
                        <h3 class="">Prix</h3></div>
                
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="€" class="form-control" />
                            </div>
                            <div class="col-sm-1">
                                <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="€" class="form-control" />
                            </div>
                            <div class="col-sm-1">
                                <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="€" class="form-control" />
                            </div>
                            <div class="col-sm-1">
                                <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="€" class="form-control" />
                            </div>
                            <div class="col-sm-1">
                                <button class="btn " type="submit" style="font-size: 1.5em"><i class="bi bi-check2"></i></button>
                            </div>
                        </div>
                        <hr></div>
    </div>
            <?php } else { ?>
                <div class="col-sm-6">
                    <h3 class="m-5 time">Midi</h3>
                    <div class="content">
                        Burger du jour + boisson + dessert du jour<br><br> Prix : 18€
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="m-5 time">Soir</h3>
                    <div class="content">
                        Entrée (salade savoyarde ou soupe du jour) + Burger de votre choix + boisson + dessert du jour.<br><br> Prix : 25€.
                    </div>
                    
                </div>
           
<!--A la carte -->   
        <div class="row col-sm-12">
            <h2 class="m-5" id="carte">A la carte</h2>
            <h3 class="m-5 time">Entrée</h3>

        <div class="row">
            <div class="col-sm-9 content">La Salade Savoyarde : Salade verte, lardons fumés, croûtons, reblochon fondu, noix </div>
            <div class="col-sm-3">9 € 
        </div></div>
        <hr>
        <div class="row">
            <div class="col-sm-9 content">La Tartiflette en verrine : Pommes de terre, lardons fumés, oignons, reblochon fondu, crème fraîche, servi dans une verrine.  </div>
            <div class="col-sm-3">8 € 
        </div></div>
        <hr>
        <div class="row">
            <div class="col-sm-9 content">Le Velouté de potiron et châtaignes : Velouté de potiron, châtaignes grillées, crème fraîche. </div>
            <div class="col-sm-3">7 € 
        </div></div>
        <hr>
        <div class="row">
            <div class="col-sm-9 content">Les Crozets au gratin : Crozets (pâtes savoyardes), jambon cru, crème fraîche, comté râpé, cuit au four. </div>
            <div class="col-sm-3">8 € 
        </div></div>
        
<!--A la carte plats -->
 
        <div class="row col-sm-12">
            <h3 class="m-5 time">Burgers </h3>
            
            <div class="row">
            <div class="col-sm-9 content">Le Burger du Chef : Pain artisanal, steak haché de bœuf, fromage bleu, champignons sautés, salade, sauce béarnaise. Servi avec des frites maison. </div>
            <div class="col-sm-3">17 € 
        </div></div>
        <hr>
        <div class="row">
            <div class="col-sm-9 content" >Le Burger Savoyard : Pain artisanal, steak haché de bœuf, tomme de Savoie, lard fumé, oignons caramélisés, salade, sauce dijonnaise. Servi avec des frites maison. </div>
            <div class="col-sm-3">15 € 
        </div></div>
        <hr>
        <div class="row">
            <div class="col-sm-9 content">Le Burger Montagnard : Pain artisanal, steak haché de bœuf, raclette de Savoie, jambon cru, cornichons, salade, sauce tartare. Servi avec des frites maison</div>
            <div class="col-sm-3">16 € 
        </div></div>
        <hr>
        <div class="row">
            <div class="col-sm-9 content">Le Burger Végétarien : Pain artisanal, galette de légumes, chèvre frais, miel, noix, roquette, sauce au yaourt. Servi avec des frites maison</div>
            <div class="col-sm-3">13 € 
        </div></div>
        <hr>
<!--A la carte dessert -->
    
    <div class="row col-sm-12" id="dessert">
        <h3 class="m-5 time" >Déssert</h3>
    <div class="row">
        <div class="col-sm-9 content">La Tarte aux myrtilles : Tarte aux myrtilles de Savoie, crème fouettée.</div>
        <div class="col-sm-3">6 € 
    </div></div>
    <hr>
    <div class="row">
        <div class="col-sm-9 content" >La Crème brûlée à la liqueur de génépi : Crème brûlée, liqueur de génépi, sucre cassonade.  </div>
        <div class="col-sm-3">5 € 
    </div></div>
    <hr>
    <div class="row">
        <div class="col-sm-9 content">Le Fondant au chocolat et noisettes : Fondant au chocolat, noisettes grillées, crème anglaise</div>
        <div class="col-sm-3">7 € 
    </div></div>
    <hr>
    <div class="row">
        <div class="col-sm-9 content">croûte aux pommes : croûte de pain émiettée & pommes fraîches </div>
        <div class="col-sm-3">8 € 
    </div></div>
    <hr>

<!--Aperitif-->
    <div class="row col-sm-12 m-5" id="aperitif">
        <h2 class="m-5" >Boissons</h2>
    
        <div class="row">
            <h3 class="time col-sm-8">biere de la régions </h3>
            <div class="col-sm-1 ">25 cl (au verre)</div>
            <div class="col-sm-1 ">50cl</div>
            <div class="col-sm-2 ">bouteilles 75cl </div>
        </div>
    
        <div class="row">
            <div class="col-sm-8">Bière artisanale locale </div>
            <div class="col-sm-1 ">4 €</div>
            <div class="col-sm-1 ">7 €</div>
            <div class="col-sm-2 ">10 € </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">Vin chaud</div>
            <div class="col-sm-1 ">3 €</div>
            <div class="col-sm-1 ">5 €</div>
            <div class="col-sm-2 ">7 € </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">Apremont (blanc)</div>
            <div class="col-sm-1 ">3,50 €</div>
            <div class="col-sm-1 ">6.50 €</div>
            <div class="col-sm-2 ">9.50 € </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">Rosé de savoie </div>
            <div class="col-sm-1 ">4,50 €</div>
            <div class="col-sm-1 ">8 €</div>
            <div class="col-sm-2 ">11.50 € </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">Pinot noir (rouge)</div>
            <div class="col-sm-1 ">5,50 €</div>
            <div class="col-sm-1 ">10 €</div>
            <div class="col-sm-2  ">14.50 € </div>
            </div>
        </div>
        <?php } ?>  
    </div>
</section>