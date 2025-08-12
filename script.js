// Função para rolagem suave para seções
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
// Placeholder para futuros scripts, como animações adicionais
console.log("Post 1 - A Importância de Ter uma Portaria 24 Horas carregado");

function mostrarPreload() {
    // Desativa o botão de envio e exibe o spinner
    const enviarBtn = document.getElementById('enviar-btn');
    enviarBtn.disabled = true;

    const spinner = document.getElementById('spinner');
    spinner.style.display = 'inline-block';

    // Evita que o formulário seja enviado de forma instantânea (para testes)
    return true; // Permite o envio do formulário
}

// Exemplo de animação JavaScript se necessário
document.addEventListener('DOMContentLoaded', () => {
    const posts = document.querySelectorAll('.post');
    posts.forEach((post, index) => {
        post.style.animationDelay = `${index * 0.1}s`;
    });
});

// Example: You can add a smooth scroll effect, animations, etc.
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded!');
});

function hamburg(){
    const navbar = document.querySelector(".dropdown")
    navbar.style.transform = "translateY(0px)"
}

function cancel(){
    const navbar = document.querySelector(".dropdown")
    navbar.style.transform = "translateY(-500px)"
}

// Typewriter Effect

const texts = [
    "MANUTENÇÃO ",
    "EM GERAL.",
    "SOLDAS E ",
    "USINAGEM"
]

let speed  =100;
const textElements = document.querySelector(".typewriter-text");

let textIndex = 0;
let charcterIndex = 0;

function typeWriter(){
    if (charcterIndex < texts[textIndex].length){
        textElements.innerHTML += texts[textIndex].charAt(charcterIndex);
        charcterIndex++;
        setTimeout(typeWriter, speed); 
    }
    else{
        setTimeout(eraseText, 1000)
    }
}

function eraseText(){
    if(textElements.innerHTML.length > 0){
        textElements.innerHTML = textElements.innerHTML.slice(0,-1);
        setTimeout(eraseText, 50)
    }
    else{
        textIndex = (textIndex + 1) % texts.length;
        charcterIndex = 0;
        setTimeout(typeWriter, 500)
    }
}

window.onload = typeWriter
