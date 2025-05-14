
<?php


class Validacao
{

    public $validacoes;

    public static function validar($regras, $dados)
    {

        $validacoes = new self;

        // campo = email 
        // $regrasDocampo = 'required', 'email', 'confirmed';

        foreach ($regras as $campo => $regrasDoCampo) {

            //$regra = required, $regra = email, $regra = $confimed

            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];
                if ($regra == 'confirmed') {
                    $validacoes->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmacao"]);
                }elseif(str_contains($regra, ':')){
                    $temp = explode(':', $regra);
                    $regra = $temp[0];
                    $regraAr = $temp[1];  
                    $validacoes->$regra($regraAr, $campo, $valorDoCampo);
                }else {
                    $validacoes->$regra($campo, $valorDoCampo);
                }
            }
        }
        return $validacoes;
    }

    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->validacoes[] = "O $campo é obrigatorio.";
        }
    }
    private function email($campo, $valor)
    {
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes[] = "O $campo é invalido.";
        }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao)
    {
        if ($valor != $valorDeConfirmacao) {
            $this->validacoes[] = "O $campo de confirmação esta diferente.";
        }
    }

    public function strong($campo, $valor)
    {
        if (!strpbrk($valor, '!@#$%^*&()')) {
            $this->validacoes[] = "O $campo precisa ter no minimo um caracter especial";
        }
    }

    public function min ($min, $campo, $valor){
        if ($valor < $min) {
            $this->validacoes[] = "O $campo precisa ter no minimo $min caracteres";
        }
    }

    public function max ($max, $campo, $valor){
        if ($valor > $max) {
            $this->validacoes[] = "O $campo precisa ter no maximo $max caracteres";
        }
    }

    public function naoPassou()
    {
        return sizeof($this->validacoes) > 0;
    }
}
