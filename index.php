<html>
  <head>
    <title>Atividade</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <header>
    <aside>
      <form action="">
        <div class="form-group  btn-lg col-md-6">
          <label for="txt_email">E-mail</label>
          <input type="email" name="txt_email" id="txt_email" class="form-control">
        </div>
        <div class="form-group btn-lg col-md-6">
          <label for="txt_senha">Senha</label>
          <input type="password" name="txt_senha" id="txt_senha" class="form-control">
        </div>
        <a href="#">Esqueci a senha</a>
        <div>
          <input type="submit" value="Login"
            class="btn btn-primary btn-dark">
          <a href="#" class="btn btn-primary btn-dark">Cadastre-se
          </a>   
        </div>
      </form>  
    </aside>
    <h1>
      <?= "Books"; ?>
    </h1>
<h2>
      <?php
       echo "book's favorites";
      ?>
</h2>
  </header>
  <main>
    <form action="ws/salvar-livro.php">
      <div class="form-inline justify-content-center">
      <input type="text" name="txt_livro" id="txt_livro" class="form-control">
      <input type="button" value="Salvar" class="btn btn-primary btn-outline-dark" onclick="criarLivro()">
      </div> 
      </form>
      <section id=sessaoLivros>
      <?php
      require_once "model/conexao.php";
      $sql = "SELECT * FROM book;";
     if(!conexao:: execWithReturn($sql)){
       echo conexao::getErro(); 
       exit(1);
  }
      //print_r(conexao::getData());

       foreach(conexao::getData() as $livro): 
        ?>
      <article>
        <div class="col-xs-6 col-md-3">
        <img src="https://images-na.ssl-images-amazon.com/images/I/91H5Os4GLAL.jpg"alt="Foto do livro"> 
        </div>
        <div class="livro-dados">
          Livro:
          <span id= "livro-paginas">
            
          <h3>Livro: <span> <?= $livro["nome"] ?></span></h3>
          <h3>Páginas: <span> <? $livro["paginas"] ?></span></h3>
          <h3>Autor /a/as/es: <span> <? $livro["autor"] ?></span></h3>
        </div>
        <div>
          <div class="marcador">
            <span class="material-icons">book</span>
            <span class="contador">12</span>    
        </div>  
        <div class="marcador">
            <span class="material-icons">favorite</span>
            <span class="contador">12</span>    
        </div>  
      </article>
     <?php endforeach; ?>
    </section>
  </main>


    <?php echo '<p>Hello World</p>'; ?> 

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>