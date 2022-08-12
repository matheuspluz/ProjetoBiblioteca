<?php

    include '../model/conexao.class.php';
     
    //$NomeAutor = filter_input(INPUT_POST, 'NomeAutor');
    //$EmailAutor = filter_input(INPUT_POST, 'EmailAutor');
    //$TelefoneAutor = filter_input(INPUT_POST, 'TelefoneAutor');

    function PesquisaAutor($NomeAutor, $EmailAutor, $TelefoneAutor) {
    if (($NomeAutor <> '') && ($EmailAutor <> '') && ($TelefoneAutor <> '')) {
        
        $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE nome like '$NomeAutor' AND email like '$EmailAutor' AND telefone like '$TelefoneAutor'");
        $linhas = $sql->fetchAll();
    } else {
        if (($NomeAutor <> '') && ($EmailAutor <> '')) {

            $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE nome like '$NomeAutor' AND email like '$EmailAutor'");
            $linhas = $sql->fetchAll();            
        } else {
            if (($NomeAutor <> '') && ($TelefoneAutor <> '')) {

                $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE nome like '$NomeAutor' AND telefone like '$TelefoneAutor'");            
                $linhas = $sql->fetchAll();            
            } else {
                if (($EmailAutor <> '') && ($TelefoneAutor <> '')) {

                    $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE email like '$EmailAutor' AND telefone like '$TelefoneAutor'");            
                    $linhas = $sql->fetchAll();            
                } else {
                    if ($NomeAutor <> '') {

                        $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE nome like '$NomeAutor'");            
                        $linhas = $sql->fetchAll();            
                    } else {
                        if ($EmailAutor <> '') {

                            $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE email like '$EmailAutor'");            
                            $linhas = $sql->fetchAll();            
                        } else {
                            if ($TelefoneAutor <> '') {

                                $sql = Conexao::getInstance()->query("SELECT * FROM autor WHERE telefone like '$TelefoneAutor'");            
                                $linhas = $sql->fetchAll();            
                            } else {
                                $sql = Conexao::getInstance()->query("SELECT * FROM autor");            
                                $linhas = $sql->fetchAll();            
                                
                            }                           
                        }                        
                    }                   
                }                
            }
        }
    }
    
    return $linhas; }