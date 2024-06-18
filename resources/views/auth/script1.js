// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona o elemento <select> de tema
    const themeSelector = document.getElementById('theme-toggle');
    
    // Carrega o tema atual do localStorage, se disponível
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    // Aplica o tema atual ao <body>
    document.body.classList.add(currentTheme);
    
    // Define o valor atual do <select> baseado no tema carregado
    themeSelector.value = currentTheme;
    
    // Evento de mudança de tema
    themeSelector.addEventListener('change', function() {
        const selectedTheme = themeSelector.value;
        
        // Remove todos os temas aplicados ao <body>
        document.body.classList.remove('light', 'dark');
        
        // Adiciona o tema selecionado ao <body>
        document.body.classList.add(selectedTheme);
        
        // Salva o tema selecionado no localStorage
        localStorage.setItem('theme', selectedTheme);
    });
});
