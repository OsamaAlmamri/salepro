<?php

namespace NumberToWords\NumberTransformer;

class PortugueseBrazilianNumberTransformerTest extends NumberTransformerTest
{
    protected function setUp(): void
    {
        $this->numberTransformer = new PortugueseBrazilianNumberTransformer();
    }

    public function providerItConvertsNumbersToWords(): array
    {
        return [
            [0, 'zero'],
            [1, 'um'],
            [2, 'dois'],
            [3, 'três'],
            [4, 'quatro'],
            [5, 'cinco'],
            [6, 'seis'],
            [7, 'sete'],
            [8, 'oito'],
            [9, 'nove'],
            [10, 'dez'],
            [11, 'onze'],
            [12, 'doze'],
            [16, 'dezesseis'],
            [19, 'dezenove'],
            [20, 'vinte'],
            [21, 'vinte e um'],
            [26, 'vinte e seis'],
            [30, 'trinta'],
            [31, 'trinta e um'],
            [40, 'quarenta'],
            [43, 'quarenta e três'],
            [50, 'cinquenta'],
            [55, 'cinquenta e cinco'],
            [60, 'sessenta'],
            [67, 'sessenta e sete'],
            [70, 'setenta'],
            [79, 'setenta e nove'],
            [80, 'oitenta'],
            [90, 'noventa'],
            [99, 'noventa e nove'],
            [100, 'cem'],
            [101, 'cento e um'],
            [111, 'cento e onze'],
            [120, 'cento e vinte'],
            [121, 'cento e vinte e um'],
            [151, 'cento e cinquenta e um'],
            [199, 'cento e noventa e nove'],
            [203, 'duzentos e três'],
            [287, 'duzentos e oitenta e sete'],
            [300, 'trezentos'],
            [356, 'trezentos e cinquenta e seis'],
            [410, 'quatrocentos e dez'],
            [434, 'quatrocentos e trinta e quatro'],
            [578, 'quinhentos e setenta e oito'],
            [689, 'seiscentos e oitenta e nove'],
            [717, 'setecentos e dezessete'],
            [729, 'setecentos e vinte e nove'],
            [800, 'oitocentos'],
            [894, 'oitocentos e noventa e quatro'],
            [900, 'novecentos'],
            [909, 'novecentos e nove'],
            [919, 'novecentos e dezenove'],
            [990, 'novecentos e noventa'],
            [999, 'novecentos e noventa e nove'],
            [1000, 'um mil'],
            [1001, 'um mil e um'],
            [1097, 'um mil e noventa e sete'],
            [1104, 'um mil cento e quatro'],
            [1243, 'um mil duzentos e quarenta e três'],
            [2000, 'dois mil'],
            [2200, 'dois mil e duzentos'],
            [2385, 'dois mil trezentos e oitenta e cinco'],
            [3766, 'três mil setecentos e sessenta e seis'],
            [4000, 'quatro mil'],
            [4196, 'quatro mil cento e noventa e seis'],
            [5000, 'cinco mil'],
            [5846, 'cinco mil oitocentos e quarenta e seis'],
            [6459, 'seis mil quatrocentos e cinquenta e nove'],
            [7232, 'sete mil duzentos e trinta e dois'],
            [8569, 'oito mil quinhentos e sessenta e nove'],
            [9539, 'nove mil quinhentos e trinta e nove'],
            [11000, 'onze mil'],
            [21000, 'vinte e um mil'],
            [999000, 'novecentos e noventa e nove mil'],
            [999999, 'novecentos e noventa e nove mil novecentos e noventa e nove'],
            [1000000, 'um milhão'],
            [1000001, 'um milhão e um'],
            [2000000, 'dois milhões'],
            [2000025, 'dois milhões e vinte e cinco'],
            [4000000, 'quatro milhões'],
            [5000000, 'cinco milhões'],
            [5015004, 'cinco milhões quinze mil e quatro'],
            [5100000, 'cinco milhões e cem mil'],
            [5123000, 'cinco milhões cento e vinte e três mil'],
            [7100100, 'sete milhões cem mil e cem'],
            [8000016, 'oito milhões e dezesseis'],
            [8100345, 'oito milhões cem mil trezentos e quarenta e cinco'],
            [100000001, 'cem milhões e um'],
            [345199054, 'trezentos e quarenta e cinco milhões cento e noventa e nove mil e cinquenta e quatro'],
            [999000000, 'novecentos e noventa e nove milhões'],
            [999000999, 'novecentos e noventa e nove milhões novecentos e noventa e nove'],
            [999999000, 'novecentos e noventa e nove milhões novecentos e noventa e nove mil'],
            [999999999, 'novecentos e noventa e nove milhões novecentos e noventa e nove mil novecentos e noventa e nove'],
            [1000077000, 'um bilhão e setenta e sete mil'],
            [1000777000, 'um bilhão setecentos e setenta e sete mil'],
            [1174315110, 'um bilhão cento e setenta e quatro milhões trezentos e quinze mil cento e dez'],
            [1174315119, 'um bilhão cento e setenta e quatro milhões trezentos e quinze mil cento e dezenove'],
            [15174315119, 'quinze bilhões cento e setenta e quatro milhões trezentos e quinze mil cento e dezenove'],
            [35174315119, 'trinta e cinco bilhões cento e setenta e quatro milhões trezentos e quinze mil cento e dezenove'],
            [935174315119, 'novecentos e trinta e cinco bilhões cento e setenta e quatro milhões trezentos e quinze mil cento e dezenove'],
            [2935174315119, 'dois trilhões novecentos e trinta e cinco bilhões cento e setenta e quatro milhões trezentos e quinze mil cento e dezenove'],
            [5492935174315119, 'cinco quatrilhões quatrocentos e noventa e dois trilhões novecentos e trinta e cinco bilhões cento e setenta e quatro milhões trezentos e quinze mil cento e dezenove'],
        ];
    }
}
