<?php 




session_set_cookie_params(0);
session_start();

require_once("Filtro.php");

class Sql extends PDO{

    public $conn;    

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=peixes;host=localhost", "root", "root");
    }

    public function listar(){

        $nome = $_SESSION["nome"];
        $oceano = $_SESSION["oceano"];
        $agua = $_SESSION["agua"];
        $tamanho = $_SESSION["tamanho"];
        $continente = $_SESSION["continente"];
        $comportamento = $_SESSION["comportamento"];
        $continente = $_SESSION["continente"];

       
       

        $sql = "SELECT * FROM catalogo_peixes WHERE 1";

        if($nome == "default" || $nome == ""){
          
            
        } else{
            $sql .= " AND nome LIKE '%$nome%'";
        }


        if($oceano == "default" || $oceano == ""){
          


        } else{
            $sql .= " AND oceano LIKE '%$oceano%'";
        }


        if($agua == "default" || $agua == ""){
          

        }else{
            $sql .= " AND tipo_de_agua = '$agua'";
        }
        if($tamanho == "default" || $tamanho == ""){


        }else{
            $sql .= " AND tamanho LIKE '%$tamanho%'";
        }


        if($continente == "default" || $continente == ""){
           


        }else{
            $sql .= " AND continente LIKE '%$continente%'";
        }


        if($comportamento == "default" || $comportamento == ""){

        
           
        }else{
            $sql .= " AND comportamento_alimentar = '$comportamento'";
        }

        $pagina = isset($_SESSION["pagina"]) ? $_SESSION["pagina"] : 1;
        $quantidade = 9;
       

        

        $_SESSION["sql"] = $sql;

        $offset = ($pagina - 1 ) * 9;

        unset($_SESSION["pagina"]);
        
        
        $sql .= " LIMIT $quantidade OFFSET $offset";
        
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $limite_descricao = 100;

       
        foreach($resultados as $resultado){
            echo " <div class='col-md-12 col-sm-6'>
                        <div class='single-service-item'>
                            <form action='processamentoPeixe.php'  method='POST'>
                            <input type='hidden' name='imagem1' value='" . $resultado['imagem1'] . "'  />
                            <input type='hidden' name='imagem2' value='" . $resultado['imagem2'] . "'  />
                            <input type='hidden' name='imagem3' value='" . $resultado['imagem3'] . "'  />
                            <input type='hidden' name='nome' value='" . $resultado['nome'] . "'  />
                            <input type='hidden' name='nome_cientifico' value='" . $resultado['nome_cientifico'] . "'  />
                            <input type='hidden' name='descricao' value='" . $resultado['descricao'] . "'  />
                            <input type='hidden' name='tipo_de_agua' value='" . $resultado['tipo_de_agua'] . "'  />
                            <input type='hidden' name='tamanho' value='" . $resultado['tamanho'] . "'  />
                            <input type='hidden' name='habitat' value='" . $resultado['habitat'] . "'  />
                            <input type='hidden' name='continente' value='" . $resultado['continente'] . "'  />
                            <input type='hidden' name='paises' value='" . $resultado['pais'] . "'  />
                            <input type='hidden' name='oceano' value='" . $resultado['oceano'] . "'  />
                            <input type='hidden' name='comportamento_alimentar' value='" . $resultado['comportamento_alimentar'] . "'  />
                            <input type='hidden' name='temperamento' value='" . $resultado['temperamento'] . "'  />
                            <input type='hidden' name='cores' value='" . $resultado['cores'] . "'  />
                               
        
                                <div class='single-service-icon' style='margin-bottom:20px;'>
                                    <img style='border-radius:10px;' src= ' " . $resultado["imagem1"] . " '  />
                                </div>

                                <h2> " . $resultado["nome"] . "</h2> ";

                                if(strlen($resultado["descricao"]) > $limite_descricao){
                                    echo "<p> " .
                                            substr($resultado["descricao"], 0 , $limite_descricao) . "...
                                        </p>
                                    <button type='submit' style='margin-top:20px; width:250px !important; border:none; padding:7px; border-radius:5px; color:#fff; background-color:#4e4ffa';>Ver Mais</button>
                            </form> 
                        </div>
                
                    </div>
                ";
                }

                
            
        }  

                      
        
       
    }

            public function Paginacao(){
            $query = $_SESSION["sql"];
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $quantidadeRegistros =  $stmt->rowCount();
            $quantidadePorPagina = 9;
            $result = ceil($quantidadeRegistros / $quantidadePorPagina);
            $i = 1;
            $_SESSION["quantidade"] = $quantidadePorPagina;

            
            

            echo " <ul class='pagination'> ";
            
            while( $i  <= $result){
                if($quantidadeRegistros > 9){
                    echo "<li style='color:#4e4ffa !important;' class='page-item'><a class='page-link' href='processamentoPaginacao.php?pagina=$i'>$i</a></li>";
                }
                
                
                $i++;
            }

            


            echo"</ul>";
           

           
           
        

    }

    
    
                        
                        
                       
                    


}

 



    


?>