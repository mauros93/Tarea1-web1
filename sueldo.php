<?php
    $nHoras = 36;

    $total = ($nHoras <= 40) ? 20000 * $nHoras : 25000 * $nHoras;
    echo "Tu salario es $total";