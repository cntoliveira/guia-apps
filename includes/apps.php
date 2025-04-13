<?php
$apps = [
    [
        'id' => 1,  // WhatsApp (original)
        'nome' => 'WhatsApp',
        'categoria' => 'Comunicação',
        'tipo' => 'Mensagens',
        'descricao' => 'App de mensagens instantâneas com chamadas de vídeo.',
        'imagem' => 'whatsapp.png',
        'nota' => 5,
        'link' => 'https://whatsapp.com'
    ],
    [
        'id' => 2,  // TikTok (original)
        'nome' => 'TikTok',
        'categoria' => 'Entretenimento',
        'tipo' => 'Vídeos',
        'descricao' => 'Plataforma de vídeos curtos com recomendações personalizadas.',
        'imagem' => 'tiktok.png',
        'nota' => 4,
        'link' => 'https://www.tiktok.com/'
    ],
    [
        'id' => 3,  // Canva (original)
        'nome' => 'Canva',
        'categoria' => 'Design',
        'tipo' => 'Edição',
        'descricao' => 'Crie designs profissionais com templates prontos.',
        'imagem' => 'canva.png',
        'nota' => 5,
        'link' => 'https://www.canva.com/'
    ],
    [
        'id' => 4,  // Duolingo (original)
        'nome' => 'Duolingo',
        'categoria' => 'Educação',
        'tipo' => 'Idiomas',
        'descricao' => 'Aprenda idiomas de forma gamificada e divertida.',
        'imagem' => 'duolingo.png',
        'nota' => 4,
        'link' => 'https://www.duolingo.com/'
    ],
    [
        'id' => 5,  // Google Drive (substitui Smart Launcher)
        'nome' => 'Google Drive',
        'categoria' => 'Produtividade',
        'tipo' => 'Armazenamento',
        'descricao' => 'Armazene arquivos na nuvem e acesse de qualquer dispositivo.',
        'imagem' => 'googledrive.png',
        'nota' => 5,
        'link' => 'https://drive.google.com/'
    ],
    [
        'id' => 6,  // ChatGPT (original)
        'nome' => 'ChatGPT',
        'categoria' => 'Produtividade',
        'tipo' => 'IA',
        'descricao' => 'Assistente de IA para respostas e automação de tarefas.',
        'imagem' => 'chatgpt.png',
        'nota' => 5,
        'link' => 'https://chat.openai.com/'
    ],
    [
        'id' => 7,  // iFood (original)
        'nome' => 'IFood',
        'categoria' => 'Alimentação',
        'tipo' => 'Delivery',
        'descricao' => 'Peça comida de restaurantes locais com acompanhamento em tempo real.',
        'imagem' => 'ifood.png',
        'nota' => 4,
        'link' => 'https://www.ifood.com.br/'
    ],
    [
        'id' => 8,  // Telegram (original)
        'nome' => 'Telegram',
        'categoria' => 'Comunicação',
        'tipo' => 'Mensagens',
        'descricao' => 'Mensageiro com criptografia e grupos grandes.',
        'imagem' => 'telegram.png',
        'nota' => 5,
        'link' => 'https://telegram.org/'
    ],
    [
        'id' => 9,  // Notion (novo)
        'nome' => 'Notion',
        'categoria' => 'Produtividade',
        'tipo' => 'Organização',
        'descricao' => 'Tudo em um só lugar: notas, tarefas e bancos de dados.',
        'imagem' => 'notion.png',
        'nota' => 5,
        'link' => 'https://www.notion.so/'
    ],
    [
        'id' => 10,  // Nubank (novo)
        'nome' => 'Nubank',
        'categoria' => 'Finanças',
        'tipo' => 'Banco Digital',
        'descricao' => 'Cartão sem tarifas e conta 100% digital.',
        'imagem' => 'nubank.png',
        'nota' => 5,
        'link' => 'https://nubank.com.br/'
    ],
    [
        'id' => 11,  // Discord (novo)
        'nome' => 'Discord',
        'categoria' => 'Comunicação',
        'tipo' => 'Chat em Grupo',
        'descricao' => 'Voz, vídeo e chat para comunidades.',
        'imagem' => 'discord.png',
        'nota' => 5,
        'link' => 'https://discord.com/'
    ],
    [
        'id' => 12,  // Strava (novo)
        'nome' => 'Strava',
        'categoria' => 'Saúde',
        'tipo' => 'Exercícios',
        'descricao' => 'Rastreie corridas e ciclismo.',
        'imagem' => 'strava.png',
        'nota' => 4,
        'link' => 'https://www.strava.com/'
    ]
];
if(isset($_SESSION['apps_adicionados'])) {
    $apps = array_merge($apps, $_SESSION['apps_adicionados']);
}
?>