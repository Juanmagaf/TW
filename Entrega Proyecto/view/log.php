<main>
    <h3>Eventos del sistema</h3>
    <article>
        <section id="scroll">
        <table id ="log">
            <tr>
                <th>Tiempo </th>
                <th>Contenido</th>
            </tr>
            <?php
            foreach($datoslog as $log) {
                echo '
                <tr>
                    <th>'.$log["tiempo"].'</th>
                    <th>'.$log["contenido"].'</th>
                </tr>
                ';
            }
            ?> 
            </table>
        </section>       
    </article>
</main> 