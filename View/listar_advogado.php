<?php include_once('../Controller/config/verifica_login.php'); ?>
<?php include_once('js/script_menu.php');?>   <!-- Importa os arquivos para o funcionamento dos menus -->
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<br />
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de Advogados</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>OAB N°</th>
                      <th>NOME</th>
                      <th>CPF</th>
                      <th>RG</th>
                      <th>Atuação</th>
                      <th>Telefone:</th>
                      <th>Seccional</th>
                      <th>Expedição de Licensa</th>
                      <th>Validade Licensa</th>
                      
                      
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>OAB N°</th>
                      <th>NOME</th>
                      <th>CPF</th>
                      <th>RG</th>
                      <th>Atuação</th>
                      <th>Telefone:</th>
                      <th>Seccional</th>
                      <th>Expedição de Licensa</th>
                      <th>Validade Licensa</th>
                      <th>Editar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                    
                      
                      
                    </tr>
                   
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>55</td>
                      <td>2010/10/14</td>
                      <td>$327,900</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Javascript Developer</td>
                      <td>San Francisco</td>
                      <td>39</td>
                      <td>2009/09/15</td>
                      <td>$205,500</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Sonya Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>23</td>
                      <td>2008/12/13</td>
                      <td>$103,600</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Jena Gaines</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>30</td>
                      <td>2008/12/19</td>
                      <td>$90,560</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Quinn Flynn</td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2013/03/03</td>
                      <td>$342,000</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Charde Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>36</td>
                      <td>2008/10/16</td>
                      <td>$470,600</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Haley Kennedy</td>
                      <td>Senior Marketing Designer</td>
                      <td>London</td>
                      <td>43</td>
                      <td>2012/12/18</td>
                      <td>$313,500</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Tatyana Fitzpatrick</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>19</td>
                      <td>2010/03/17</td>
                      <td>$385,750</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Michael Silva</td>
                      <td>Marketing Designer</td>
                      <td>London</td>
                      <td>66</td>
                      <td>2012/11/27</td>
                      <td>$198,500</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Paul Byrd</td>
                      <td>Chief Financial Officer (CFO)</td>
                      <td>New York</td>
                      <td>64</td>
                      <td>2010/06/09</td>
                      <td>$725,000</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Gloria Little</td>
                      <td>Systems Administrator</td>
                      <td>New York</td>
                      <td>59</td>
                      <td>2009/04/10</td>
                      <td>$237,500</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>$132,000</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Dai Rios</td>
                      <td>Personnel Lead</td>
                      <td>Edinburgh</td>
                      <td>35</td>
                      <td>2012/09/26</td>
                      <td>$217,500</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Jenette Caldwell</td>
                      <td>Development Lead</td>
                      <td>New York</td>
                      <td>30</td>
                      <td>2011/09/03</td>
                      <td>$345,000</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Yuri Berry</td>
                      <td>Chief Marketing Officer (CMO)</td>
                      <td>New York</td>
                      <td>40</td>
                      <td>2009/06/25</td>
                      <td>$675,000</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Caesar Vance</td>
                      <td>Pre-Sales Support</td>
                      <td>New York</td>
                      <td>21</td>
                      <td>2011/12/12</td>
                      <td>$106,450</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Doris Wilder</td>
                      <td>Sales Assistant</td>
                      <td>Sidney</td>
                      <td>23</td>
                      <td>2010/09/20</td>
                      <td>$85,600</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Angelica Ramos</td>
                      <td>Chief Executive Officer (CEO)</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2009/10/09</td>
                      <td>$1,200,000</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Gavin Joyce</td>
                      <td>Developer</td>
                      <td>Edinburgh</td>
                      <td>42</td>
                      <td>2010/12/22</td>
                      <td>$92,575</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                     
                    </tr>
                    <tr>
                      <td>Jennifer Chang</td>
                      <td>Regional Director</td>
                      <td>Singapore</td>
                      <td>28</td>
                      <td>2010/11/14</td>
                      <td>$357,650</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <tr>
                      <td>Brenden Wagner</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>28</td>
                      <td>2011/06/07</td>
                      <td>$206,850</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      <td>EM BRANCO</td>
                      
                    </tr>
                    <!-- editar e exluir -->
                
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->


</html>
