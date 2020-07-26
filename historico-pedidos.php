<?php include_once("./inc/head.php"); ?>
<?php include_once("./inc/header.php"); ?>


<div class="historico-pedidos text-center">
    
    <h3>Histórico de Pedidos</h3>
    
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ITEM</th>
                <th scope="col">DATA DA COMPRA</th>
                <th scope="col">STATUS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Bicicleta X</td>
                <td>16/03/2020</td>
                <td>Entregue</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Patinete Y</td>
                <td>07/05/2020</td>
                <td>Entregue</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Monociclo Z</td>
                <td>24/06/2020</td>
                <td>Em andamento</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include_once("./inc/footer.php"); ?>