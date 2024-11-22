<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>NINEDOJO</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="java.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="karate (1).png " type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
</head>


<body>

    <header>  
    <a href="file:///C:/xampp/htdocs/lojaWebKarate/teste.html"><img src="WhatsApp_Image_2024-10-28_at_14.18.57-removebg-preview.png" alt="" class="logo"></a>

<input type="text" name="search" placeholder="Pesquisar items...">
<img src="lupa-arredondada.png" alt="" class="lupa">
<form method="POST" id="search-form">
    <input type="text" name="search" id="search-input" placeholder="Pesquisar items...">
    
</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lojaKarate";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['search'])) {
$search = $_POST['search'];
$search = $conn->real_escape_string($search);

$sql = "SELECT * FROM produtos WHERE nome LIKE '%$search%' OR descricao LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo '<div id="resultados">';
while ($row = $result->fetch_assoc()) {
    
    echo "<div class='resultado-item'>";
    echo "<a href='catalogo.php?id=" . $row['id'] . "'>"; 
    echo "<img src='" . $row['imagem'] . "' alt='" . $row['nome'] . "' style='width:100px; height:auto;'>";
    echo "<p><strong>" . $row['nome'] . "</strong></p>";
    echo "</a>"; 
    echo "</div>";
}
echo '</div>';
} else {
echo "<p>Nenhum resultado encontrado.</p>";
}
}

$conn->close();
?>

       <div class="barras">
        <nav>
        <ul>
          <h2>✧˚₊‧༉°~*</h2>
                
          <li><a href="index.php">Home</a></li>
          <li><a href="carrinho.html">Carrinho</a></li>
       
          <h2>°~*༉‧₊˚✧</h2>
        </ul>
    </nav>

       </div>
        
    </header>

    <main>
        <section class="promocoes">
            
            <div class="produtos">
               

                <div class="kimono">
                    <img src="Judogui Kimono Judô Kusakura JOEX IJF Approved Branco.jpg" alt="Camiseta do Time A">
                    <h3>KIMONO</h3>
                    <p>R$ 399,90</p>
                    <button type="submit">Adicionar ao Carrinho</button>
                </div>

                <div class="kimono">
                    <img src="JP Sports Black Karate Uniform for Kids & Adults Lightweight Student Karate Gi Martial Arts Uniform with Belt.jpg" alt="Camiseta do Time A">
                    <h3>KIMONO</h3>
                    <p>R$ 399,90</p>
                    <button>Adicionar ao Carrinho</button>
                </div>

                <div class="kimono">
                    <img src="transferir (1).jpg" alt="Camiseta do Time A">
                    <h3>KIMONO</h3>
                    <p>R$ 399,90</p>
                    <button>Adicionar ao Carrinho</button>
                </div>

                
               

                    <div class="kimono">
                        <img src="faixa preta.jpg" alt="Camiseta do Time A">
                        <h3>KIMONO</h3>
                        <p>R$ 399,90</p>
                        <button type="submit">Adicionar ao Carrinho</button>
                    </div>
    
                    <div class="kimono">
                        <img src="picture.jpg" alt="Camiseta do Time A">
                        <h3>KIMONO</h3>
                        <p>R$ 399,90</p>
                        <button>Adicionar ao Carrinho</button>
                    </div>
    
                    <div class="kimono">
                        <img src="transferir (1).jpg" alt="Camiseta do Time A">
                        <h3>KIMONO</h3>
                        <p>R$ 399,90</p>
                        <button>Adicionar ao Carrinho</button>
                    </div>
            </div>
        </section>
    </main>

    <footer>
        <div id="footer-content">
          <div id="footer-contacts">
            <h2>ℕ𝕚𝕟𝕕𝕠𝕦𝔻𝕠𝕛𝕠</h2>
      
            <div id="footer-social-media">
              <a href="https://www.instagram.com/" class="footer-link" id="instagram">
                <i class="fa-brands fa-instagram"></i>
              </a>
      
              <a href="https://www.facebook.com/?locale=pt_BR" class="footer-link" id="fecebook">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
      
              <a href="https://www.whatsapp.com/download" class="footer-link" id="whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
      
            </div>
          </div>
      
          <ul class="footer-list">
            <li>
              <h3>Política de Privacidade</h3>
            </li>
            <p>
              Nós coletamos informações <br> pessoais para processar suas <br> reservas e melhorar sua experiência. Seus dados são protegidos e não compartilhados, exceto com <br> parceiros de confiança e conforme exigido por lei. Para mais detalhes, <br> leia nossa Política de Privacidade Completa.
            </p>
          </ul>
      
          <ul class="footer-list">
            <li>
              <h3>Termos de Uso</h3>
            </li>
            <p>
              Ao usar nosso site, você concorda <br> com nossos Termos de Uso. O conteúdo é protegido e o uso <br> do site deve ser pessoal e não comercial. Não garantimos a disponibilidade contínua do site <br>e não somos responsáveis por danos resultantes do uso. Para detalhes, consulte nossos Termos de Uso.
            </p>
          </ul>

          <div id="footer-payment">
            <h3>Formas de pagamento</h3>
            <img src="forma de pagamento.jpg" alt="">

          </div>
      
          <div id="footer-subscribe">
        
        <h3>follow</h3>
        <p>@NindouDojo</p><br>
    
    </div>
      
        </footer>
        <!-- 
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll("button");

    buttons.forEach(button => {
        button.addEventListener("click", function() {
            console.log("Botão clicado!"); 
            alert("Produto adicionado ao carrinho!");
        });
    });
});

    </script>
    -->

</body>
</html>
