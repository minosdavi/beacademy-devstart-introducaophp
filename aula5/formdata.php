<select>
    <option>-- Selecione o dia --</option>
    <?php
        for($dia=1; $dia<= 31; $dia++){
            echo "<option>{$dia}</option>";
        }
    ?>
</select>

<select>
    <option>-- Selecione o mês --</option>
    <?php
        for($mes=1; $mes<= 12; $mes++){
            $mesaux = match($mes){
                1 => 'Janeiro',
                2 => 'Feveireiro',
                3 => 'Março',
                4 => 'Abril',
                5 => 'Maio',
                6 => 'Junho',
                7 => 'Julho',
                8 => 'Agosto',
                9 => 'Setembro',
                10 => 'Outubro',
                11 => 'Novembro',
                12 => 'Dezembro',
                default => 'Mes invalido'
            
            };
            
            echo "<option>{$mesaux}</option>";
        }
    ?>
</select>

<select>
    <option>-- Selecione o ano --</option>
    <?php
        for($ano=2022; $ano>= 1900; $ano--){
            echo "<option>{$ano}</option>";
        }
    ?>
</select>
<br>

<button>Enviar</button>