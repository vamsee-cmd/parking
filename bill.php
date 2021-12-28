<?php require 'header.php'; ?>
<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             <a class="pt-2 d-inline-block" href="index.html" data-abc="true">EZ park</a>
             <div class="float-right">
                 <h3 class="mb-0">Invoice #BBB10234</h3>
                 Date:19 Dec,2021
             </div>
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     <h3 class="text-dark mb-1">Vamshikrishna</h3>
                     <div>vehicle no: TS02AZ2002</div>
                     <div>9989962024</div>
                     <div>vamshi.embadi1234@gmail.com</div>
                 </div>
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="center">#</th>
                             <th>Description</th>
                             <th class="right">Price</th>
                             <th class="center">hours</th></th>
                             <th class="right">Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td class="center">1</td>
                             <td class="left">Base fare</td>
                             <td class="right">10</td>
                             <td class="center">-</td>
                             <td class="right">10</td>
                         </tr>
                         <tr>
                             <td class="center">2</td>
                             <td class="left">0-24 hours</td>
                             <td class="right">10</td>
                             <td class="center">24</td>
                             <td class="right">240</td>
                         </tr>
                         <tr>
                             <td class="center">3</td>
                             <td class="left">After 24 hours</td>
                             <td class="right">15</td>
                             <td class="center">3</td>
                             <td class="right">45</td></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Subtotal</strong>
                                 </td>
                                 <td class="right">295</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">GST (10%)</strong>
                                 </td>
                                 <td class="right">29</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-success">Total</strong> </td>
                                 <td class="right">
                                     <strong class="text-success">324</strong>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="card-footer bg-white">
             <p class="mb-0">EZ parking , jits karimnagar, 505527</p>
         </div>
     </div>
 </div>
<?
require 'footer.php';
?>