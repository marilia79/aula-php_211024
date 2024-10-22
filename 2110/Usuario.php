<?php
class Usuario{

    # definição de atributos
    public $nome;
    # a partir do php 7.4
    public string $sobrenome;

    #método construtor
    # é o método que é executado automaticamente quando um objeto é instancionado

    function __construct($nome)
    {
       $this-> nome = $nome;
    }

    # Método para retornar nome completo
    function getNomeCompleto(){
        return "$this->nome $this->sobrenome";
    }

    #Objeto como uma função
    function __invoke()
    {
        echo $this-> getNomeCompleto();

    }

    #é chamado quando tentado atribuir valor para um atributo não existente
    function __set($nome, $valor)
    {
        echo "<p>Foi chamado o atributo $nome com o valor $valor</p>";
    }

    #é chamado quando tentar pegar o valor de um atributo inexistente
    function __get($nome){
        echo "<p>Foi chamado o atributo inexistente $nome</p>";
    }


}