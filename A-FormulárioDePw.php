<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script type="text/javascript">
     window.onload=()=>{

     //var,let, const 
     const nome = document.getElementById("nome");
     let bt =  document.getElementById("bt_");
     let email = document.getElementById("email");
     let Logradouro = document.getElementById("Logradouro");
     let frm = document.getElementsByTagName("form")[0]


     
     bt.onclick=()=>{
//-------------------------------------------------------------------------------------------//    
        if(nome.value.length <= 3 ){
            alert("campo nome obrigatorio");
            nome.style.borderColor = "red";
            nome.focus();
         } 
//-------------------------------------------------------------------------------------------//
        if(Logradouro.value.length <= 4 ){
            alert("campo Logradouro obrigatorio");
        Logradouro.style.borderColor = "red";
        Logradouro.focus();
          return;
         }
//-------------------------------------------------------------------------------------------//
        if(NumResidencia.value.length <= 1 ){
            alert("campo Número de Residência obrigatorio");
            NumResidencia.style.borderColor = "red";
            NumResidencia.focus();
         } 
//-------------------------------------------------------------------------------------------//
        if(cep.value.length <= 7 ){
            alert("campo CEP obrigatorio");
            cep.style.borderColor = "red";
            cep.focus();
         } 
//-------------------------------------------------------------------------------------------//
        if(Complemento.value.length <= 2 ){
            alert("campo Complemento obrigatorio");
            Complemento.style.borderColor = "red";
            Complemento.focus();
         } 
        
//-------------------------------------------------------------------------------------------//
        if(Bairro.value.length <= 2 ){
            alert("campo Bairro obrigatorio");
            Bairro.style.borderColor = "red";
            Bairro.focus();
         } 
//-------------------------------------------------------------------------------------------//
        if(Cidade.value.length <= 2 ){
            alert("campo Cidade obrigatorio");
            Cidade.style.borderColor = "red";
            Cidade.focus();
         } 
//-------------------------------------------------------------------------------------------//
if(Estado.value.length <= 3 ){
            alert("campo Estado obrigatorio");
            Estado.style.borderColor = "red";
            Estado.focus();
         } 
//-------------------------------------------------------------------------------------------//        
         frm.submit();

       }
     }

   </script>
   </head>

   <body>

<h1> Formulário de PW </h1>

    <form action="A-processamento.php" method="post" enctype="multipart/form-data">
      
<div>
         <label> Nome: </label><br>
         <input type="text" name="nome" id="nome" placeholder="escreva aqui...">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "nome"){

               echo "<span style='color:red'>*</span>";
         } ?>
<br>
         <label> Logradouro: </label><br>
         <input type="text" name="Logradouro" id="Logradouro" value="" placeholder="escreva aqui...">        
         <?php  if( isset( $_REQUEST["erro"])  &&  $_REQUEST["erro"] == "Logradouro"){

             echo "<span style='color:red'>*</span>";
     } ?> <br>
</div>
<div>
         <label> Número: </label><br>
         <input type="text" name="NumResidencia" id="NumResidencia" placeholder="0000">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "Número"){

               echo "<span style='color:red'>*</span>";
         } ?> <br>


         <label> CEP: </label><br>
         <input type="text" name="cep" id="cep" placeholder="00000-000">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "CEP"){

               echo "<span style='color:red'>*</span>";
         } ?> <br>
</div>
<div>
         <label> Complemento: </label><br>
         <input type="text" name="Complemento" id="Complemento" placeholder="escreva aqui...">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "Complemento"){

               echo "<span style='color:red'>*</span>";
         } ?> <br>

         <label> Bairro: </label><br>
         <input type="text" name="Bairro" id="Bairro" placeholder="escreva aqui...">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "Bairro"){

               echo "<span style='color:red'>*</span>";
         } ?> <br>
</div>
<div>
         <label> Cidade: </label><br>
         <input type="text" name="Cidade" id="Cidade" placeholder="escreva aqui...">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "Cidade"){

               echo "<span style='color:red'>*</span>";
         } ?>  <br>

         <label> Estado: </label><br>
         <input type="text" name="Estado" id="Estado" placeholder="escreva aqui...">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "Estado"){

               echo "<span style='color:red'>*</span>";
         } ?> <br>
</div>

<h3> Envie uma foto do comprovante de endereço: </h3>

<div>
         <label>Imagem</label>
         <input type="file" name="arq" id=""/>
        </div>
<div>

            <input type="button" id="bt_"  value="Enviar Fromulário" />
</div>

</form>

</body>