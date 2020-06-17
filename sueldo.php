<?php
    $nHoras = 36;
    $total = ($nHoras <= 40) ? 20000 * $nHoras : 20000 * $nHoras + ($nHoras-40)*5000;
    echo "Tu salario es $total";