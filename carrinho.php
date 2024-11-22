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

<style> body{
    background-color: #5e5e5e;
    
}

header{
    display: flex;
    background-color:rgb(206, 0, 0);
    height:150px;
}

header a{
    text-decoration: none;
    height: max-content;
    width: max-content;
    z-index: 1;
}

.logo{
    width: 227px; 
    position: relative;
    top: -18px;
    background-color: transparent;
}
    
input[type="text"] {
    padding: 5px;
    border: 1px solid #ffffff;
    border-radius: 90px;
    width: 500px;
    font-size: 16px;
    align-items: center;
    background-color: #fff;
    cursor: pointer;
    color:black;
    right: 150px;
    position: absolute;
    top: 70px;
    right: 400px;
    gap: 10px;
    background-position: 10PX;
    background-repeat: no-repeat;
    box-sizing: border-box;
    overflow: hidden;
}

.lupa{
    width: 20px; 
    height: auto; 
    position: fixed;
    top: 75px;
    right: 420px;
    position: absolute;
}

.botao{
    padding: 13px 50px;
    background-color: #68c993;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    position: fixed;
    top: 20px;
    right: 500px;
    text-decoration: none;
    text-align: center;
    position: absolute;   
   
}

.botao:hover{
    background-color: #1f5c17;
    color: #fff;
}

.botao2{
    padding: 13px 50px;
    background-color: #68c993;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    position: fixed;
    top: 20px;
    right: 250px;
    text-decoration: none;
    text-align: center;
    position: absolute;   
   
}

.botao2:hover{
    background-color: #1f5c17;
    color: #fff;
}


nav ul {
    list-style: none;
    display: flex;
    gap: 15px;
}

nav a {
    color: white;
    text-decoration: none;
}

.banner {
    background: url('banner.jpg') no-repeat center center;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.promocoes {
    padding: 20px;
}

.produtos {
    display: flex;
    gap: 20px;
}

.limao {
    width: 300px; 
    overflow: hidden; 
    position: relative; 
    top: 17px;
    right: -200PX;
    border: #0b3b04;
}

.limao img {
    display: block; 
    width: 100%; 
    transition: transform 0.4s ease; 
}

.limao:hover img {
    transform: scale(1.2); 
}

.limao::before {
    content: ''; 
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.1); 
    opacity: 0; 
    transition: opacity 0.3s ease; 
}

.limao:hover::before {
    opacity: 1; 
}
footer {
    text-align: center;
    padding: 20px;
    background: #b32323;
    color: white;
}
</style>
<body>
 
    <header>  
      
        <a href="file:///C:/xampp/htdocs/lojaWebKarate/index.html"><img  src="WhatsApp_Image_2024-10-28_at_14.18.57-removebg-preview.png" alt="" class="logo"></a>
 
        <nav>
            <ul>
                <h2>✧˚₊‧༉°~*</h2>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="catalogo.html">Catálogo</a></li>
             
                <h2>°~*༉‧₊˚✧</h2>
            </ul>
        </nav>
            
        

    </header>

    <main>

        <div class="produtos">
        
        <div class="kimono">
            <img src="Judogui Kimono Judô Kusakura JOEX IJF Approved Branco.jpg" alt="Camiseta do Time A">
            <h3>KIMONO</h3>
            <p>R$ 399,90</p>
            <button>Finalizar compra</button>
        </div>

        <div class="kimono">
            <img src="JP Sports Black Karate Uniform for Kids & Adults Lightweight Student Karate Gi Martial Arts Uniform with Belt.jpg" alt="Camiseta do Time A">
            <h3>KIMONO</h3>
            <p>R$ 399,90</p>
            <button>Finalizar compra</button>
        </div>

        <div class="kimono">
            <img src="transferir (1).jpg" alt="Camiseta do Time A">
            <h3>KIMONO</h3>
            <p>R$ 399,90</p>
            <button>Finalizar compra</button>
        </div>
    </div>

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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartItemsDiv = document.getElementById('cart-items');
            const totalDiv = document.getElementById('total');
            const checkoutButton = document.getElementById('checkout');

        
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let total = 0;

      
            cart.forEach(item => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('produto');
                productDiv.innerHTML = `
                    <h3>${item.name}</h3>
                    <p>${item.price}</p>
                `;
                cartItemsDiv.appendChild(productDiv);

            
                const priceValue = parseFloat(item.price.replace('R$ ', '').replace(',', '.'));
                total += priceValue;
            });

            
            totalDiv.innerHTML = `<h3>Total: R$ ${total.toFixed(2)}</h3>`;

            checkoutButton.addEventListener('click', function() {
                window.location.href = 'checkout.html'; // Redireciona para a página de checkout
            });
        });
    </script>
</body>
</html>
