<!-- HEADER -->

<?php require_once './Views/base/header.php';?>


<div class="container-fluid mt-5">

    <h4 class="display-3 text-center mt-3">Reporte por Fecha Terminacion</h4>

        <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>

            <th scope="col">N</th>
            <th scope="col">ID</th>
            <th scope="col">CEDULA</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">FECHA CONTRATACION</th>
            
            <th scope="col">FECHA TERMINACION</th>
            
            <th scope="col">BONOS EXTRAS</th>
            <th scope="col">EMAIL</th>
            <th scope="col">FK VEHICULO</th>
            <th scope="col">FECHA</th>
 
            </tr>
          
        </thead>
        <tbody>


        <?php
            require_once './controllers/reporte_controller.php';

            $rep = new ControllerReporte();

            $array = json_decode($rep->generar());

            #var_dump($array);

                        
            $j = 1;

            #var_dump($array);


            for ($i=0; $i <  count($array); $i++) { 
                echo 
                "<tr><td>" . $j . "</td>"

                . "<td>" . $array[$i]->id_conductor . "</td>"

                . "<td>" . $array[$i]->cedula . "</td>"
                . "<td>" . $array[$i]->nombres . "</td>"
                . "<td>" . $array[$i]->apellidos . "</td>"
                
                . "<td>" . $array[$i]->fecha_contratacion . "</td>"
                . "<td>" . $array[$i]->fecha_terminacion . "</td>"
                . "<td>" . $array[$i]->bono_extras . "</td>"
                
                . "<td>" . $array[$i]->email . "</td>"



                . "<td>" . $array[$i]->id_vehiculo . "</td>"
                . "<td>" . $array[$i]->FECHA . "</td>
                </tr>";
                $j++;
            }

        ?>

        


        </tbody>
    </table>
</div>






<!-- FOOTER -->

<?php include_once './Views/base/footer.php';?>