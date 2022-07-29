<table class="table table-striped dataTable">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Modelo</th>
            <th>Combustible</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($objVehiculo->listar() as $vehiculo) { ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        <?php
            }
        ?>
    </tbody>

</table>