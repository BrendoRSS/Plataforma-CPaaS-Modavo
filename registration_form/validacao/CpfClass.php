<?php

class CPF
{


    /** Método responsável por verificar se um cpf realmente é válido
     * @param string $cpf
     * @return boolean
     */


    public static function validar($cpf)
    {
        //OBTEM SOMENTE OS NÚMEROS
        $cpf = preg_replace('/\D/', '', $cpf);

        //VERIFICA A QUANTIDADE DE CARACTERES
        if (strlen($cpf) != 11) {
            return false;
        }

        //DIGITO VERIFICADOR
        $cpfValidacao = substr($cpf, 0, 9);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);

        return $cpfValidacao == $cpf;
    }
    /** Método responsável por calcular um digito verificador com base em uma sequência numérica
     * @param string $base
     * @return string
     */

    public static function calcularDigitoVerificador($base)
    {
        //AUXILIARES
        $tamanho = strlen($base);
        $multiplicador = $tamanho +1;

        //SOMA
        $soma = 0;

        //ITERA OS NÚMEROS DO CPF

        for($i=0 ; $i <$tamanho ; $i++){
            $soma +=$base[$i] * $multiplicador;
            $multiplicador--;
        }
        //RESTO
        $resto = $soma % 11;

        //RETORNA O DIGITO VERIFICADOR
        return $resto > 1 ? 11 - $resto : 0;
    
        

    }
}
