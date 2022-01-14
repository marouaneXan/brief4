
     <div class="content_dashboard">
         <div class="title">Admin / Demande</div>
 

         <div class="searchProduct">
            <form action="" method="post">
               <select name="" id="">
                  <option value="" selected disabled>Sélectionner une catégorie</option>
                  <option value="">Tableau</option>
                  <option value="">Chaise</option>
                  <option value="">Lit</option>
                  <option value="">Porte</option>
                  <option value="">Tiroir</option>
                  <option value="">Placard</option>
               </select>
               <input type="date">
            </form>
         </div>



          <div class="produit_content">
               <table>
                  <tr>
                     <th>Email</th>
                     <th>Marque</th>
                     <th>Total</th>
                     <th>Date</th>
                     <th>Image</th>
                     <th>Action</th>
                  </tr>
                  <tr>
                     <td>str@gmail.com</td>
                     <td>Tableau</td>
                     <td>122</td>
                     <td>12/03/2021</td>
                     <td><img src="images/table.jpg" alt="" width="40" height="40" srcset=""></td>
                     <td><a class="supprimer" href="?domande&id_delD"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>s@gmail.com</td>
                     <td>Chaise</td>
                     <td>4</td>
                     <td>15/03/2021</td>
                     <td><img src="images/chaise.jpg" alt="" width="40" height="40" srcset=""></td>
                      <td><a class="supprimer" href="?domande&id_delD"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>dn@gmail.com</td>
                     <td>Lit</td>
                     <td>12</td>
                     <td>12/04/2021</td>
                     <td><img src="images/Lit.jpg" alt="" width="40" height="40" srcset=""></td>
                      <td><a class="supprimer" href="?domande&id_delD"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>snd@gmail.com</td>
                     <td>Porte</td>
                     <td>42</td>
                     <td>12/06/2021</td>
                     <td><img src="images/porte.jpeg" alt="" width="40" height="40" srcset=""></td>
                      <td><a class="supprimer" href="?domande&id_delD"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>st@gmail.com</td>
                     <td>Placard</td>
                     <td>142</td>
                     <td>12/07/2021</td>
                     <td><img src="images/placard.jpg" alt="" width="40" height="40" srcset=""></td>
                      <td><a class="supprimer" href="?domande&id_delD"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                
                 
               </table>

               <!-- pagination -->

                <div class="pagination">
                   <nav>
                        <a href="?domande&page=prev"   <?php if(isset($_GET["page"]) && $_GET["page"]=='prev'){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>Avant</a>
                        <a href="?domande&page=1"  <?php if(isset($_GET["page"]) && $_GET["page"]==1){ echo 'style="background-color:#D57E7E;color: white;"'; }  elseif(!isset($_GET["page"]) && empty($_GET["page"])){ echo 'style="background-color:#D57E7E;color: white;"';}?> >1</a>
                        <a href="?domande&page=2"   <?php if(isset($_GET["page"]) && $_GET["page"]==2){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>2</a>
                        <a href="?domande&page=3"   <?php if(isset($_GET["page"]) && $_GET["page"]==3){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>3</a>
                        <a href="?domande&page=next"   <?php if(isset($_GET["page"]) && $_GET["page"]=='next'){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>Après</a>
                   </nav>
                </div>

          </div>
     </div>






