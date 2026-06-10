<?php
require_once __DIR__ . '/monitor.php';
$showVSL = checkAccess();

if (!$showVSL) {
    include 'recetas.php';
    exit;
}

// Configurable destination link for the Call to Action
$ctaUrl = "https://pay.hotmart.com/V103992704Q?checkoutMode=2";
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link rel="preload" as="image" href="/images/stig-blomqvist-audi-quattro.jpg"/>
    <link rel="preload" as="image" href="/images/dr-antonini.png"/>
    <link rel="preload" as="image" href="/images/moringa-matcha.png"/>
    
    <link rel="stylesheet" href="/css/styles.css" />
    
    <title>Stig Blomqvist Brilha no RallySpirit aos 79 Anos | MotorSport Europa</title>
    
    <meta name="author" content="MotorSport Europa"/>
    <meta property="og:type" content="website"/>
    <meta name="description" content="O campeão mundial de 1984 voltou a brilhar ao volante do Ford RS200 no RallySpirit 2026. A lição mecânica que se aplica também ao corpo humano."/>
    <meta property="og:title" content="Stig Blomqvist Brilha no RallySpirit aos 79 Anos"/>
    <meta property="og:description" content="A lição mecânica do Ford RS200 que mudou a forma como os urologistas europeus encaram a saúde do homem após os 35."/>
    <meta property="og:image" content="/images/stig-blomqvist-audi-quattro.jpg"/>
</head>
<body>
    <div class="min-h-screen bg-white text-[#1a1a1a]" style="font-family:'Source Sans 3', 'Helvetica Neue', Arial, sans-serif">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&amp;family=Source+Sans+3:wght@400;600;700&amp;display=swap"/>
        
        <div class="border-b border-neutral-200">
            <div class="mx-auto flex max-w-[1200px] items-center justify-between px-4 py-2 text-sm">
                <nav class="flex items-center gap-5 text-neutral-800">
                    <button aria-label="menu" class="text-lg">≡</button>
                    <button aria-label="search" class="text-base">⌕</button>
                    <a href="#" class="hover:underline">Home</a>
                    <a href="#" class="hover:underline hidden sm:inline">Europa</a>
                    <a href="#" class="hover:underline hidden sm:inline">Ralis</a>
                    <a href="#" class="hover:underline hidden sm:inline">Clássicos</a>
                    <a href="#" class="hover:underline hidden md:inline">F1</a>
                </nav>
                <div class="flex items-center gap-5">
                    <a href="#" class="hover:underline">Iniciar Sessão</a>
                    <a href="#" class="font-bold hover:underline">Subscrever</a>
                </div>
            </div>
        </div>
        
        <header class="border-b border-neutral-200">
            <div class="mx-auto max-w-[1200px] px-4 py-6 text-center">
                <h1 class="text-4xl md:text-5xl tracking-tight text-[#0a2a55]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">MotorSport Europa</h1>
                <div class="mt-1 text-[11px] tracking-[0.25em] text-neutral-600">EDIÇÃO PORTUGAL · DESPORTO AUTOMÓVEL</div>
            </div>
            <div class="border-t border-neutral-200">
                <nav class="mx-auto flex max-w-[1200px] flex-wrap items-center justify-center gap-x-8 gap-y-2 px-4 py-3 text-sm text-neutral-800">
                    <a href="#" class="hover:text-[#0a2a55]">Ralis</a>
                    <a href="#" class="hover:text-[#0a2a55]">Endurance</a>
                    <a href="#" class="hover:text-[#0a2a55]">Fórmula 1</a>
                    <a href="#" class="hover:text-[#0a2a55]">Clássicos</a>
                    <a href="#" class="hover:text-[#0a2a55]">Análises</a>
                    <a href="#" class="hover:text-[#0a2a55]">Calendário</a>
                    <a href="#" class="hover:text-[#0a2a55]">Mercado</a>
                    <a href="#" class="hover:text-[#0a2a55]">Vídeo</a>
                </nav>
            </div>
        </header>
        
        <section class="mx-auto max-w-[1200px] px-4 pt-10">
            <div class="text-xs font-semibold tracking-[0.18em] text-[#0a66c2]">RALIS · CLÁSSICOS</div>
            <h2 class="mt-3 max-w-4xl text-3xl leading-[1.15] md:text-5xl" style="font-family:'Playfair Display', Georgia, serif;font-weight:800;color:#0d0d0d">Stig Blomqvist Brilha no RallySpirit aos 79 Anos: O Segredo Mecânico Para Devolver a Potência a um Motor Antigo (E a Descoberta Médica Que Se Seguiu)</h2>
            <p class="mt-5 max-w-3xl text-lg leading-relaxed text-neutral-700 md:text-xl" style="font-family:'Playfair Display', Georgia, serif;font-weight:400">Saiba como um simples &quot;aditivo de limpeza&quot; dissolve as crostas dos injetores e restaura a força original de qualquer clássico como o mítico Ford RS200. E descubra por que razão os urologistas afirmam que o corpo do homem precisa exatamente da mesma afinação após os 35 anos.</p>
            <button class="mt-6 inline-flex items-center gap-2 rounded border border-[#0a2a55] px-3 py-1.5 text-sm text-[#0a2a55] hover:bg-[#0a2a55]/5"><span aria-hidden="true">↗</span> Partilhar</button>
        </section>
        
        <main class="mx-auto mt-8 grid max-w-[1200px] grid-cols-1 gap-10 px-4 pb-16 lg:grid-cols-[minmax(0,1fr)_300px]">
            <article class="min-w-0">
                <figure class="mb-4">
                    <img src="/images/stig-blomqvist-audi-quattro.jpg" alt="Stig Blomqvist junto ao seu Audi Quattro de rali sobre um lago gelado" width="1920" height="1244" class="w-full"/>
                    <figcaption class="mt-2 text-sm italic text-neutral-600">Stig Blomqvist, campeão mundial de 1984, posa junto ao mítico Audi Quattro: prova viva de que máquina e piloto resistem ao tempo quando a engenharia é respeitada.</figcaption>
                </figure>
                
                <div class="mb-6 flex items-center gap-3 border-y border-neutral-200 py-3 text-sm text-neutral-700">
                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-200 text-xs font-bold text-neutral-700">MR</div>
                    <div>Por <span class="font-semibold text-neutral-900">Miguel Ribeiro</span><span class="px-2 text-neutral-400">·</span><span>Atualizado 7 Jun 2026, 09:30 WET</span></div>
                </div>
                
                <div class="prose-article text-[1.0625rem] leading-[1.75] text-neutral-900" style="font-family:'Source Sans 3', Georgia, serif">
                    <p class="mb-5">O campeão mundial de ralis de 1984, <strong>Stig Blomqvist</strong>, foi a grande figura da 11.ª edição do <strong>RallySpirit 2026</strong>, atraindo multidões ao longo do evento desportivo no Norte do país.</p>
                    <p class="mb-5">Aos 79 anos de idade, o veterano piloto sueco participou na mítica prova de clássicos conduzindo o raro <strong>Ford RS200 de Grupo S</strong>. &quot;Foi um enorme prazer&quot;, assumiu Blomqvist no final, mostrando que a paixão e a técnica não desaparecem com os anos.</p>
                    
                    <blockquote class="my-7 border-l-4 border-[#0a2a55] bg-neutral-50 px-6 py-4 text-xl italic text-neutral-800" style="font-family:'Playfair Display', Georgia, serif">
                        &quot;Foi um enorme prazer voltar a sentir este carro a responder como no primeiro dia.&quot;
                        <footer class="mt-2 text-sm not-italic text-neutral-500">— Stig Blomqvist, RallySpirit 2026</footer>
                    </blockquote>
                    
                    <p class="mb-5">Mas ver uma máquina histórica com décadas de uso a rasgar o asfalto com a mesma potência explosiva da sua juventude levanta uma questão fascinante para qualquer apaixonado por automóveis: como é que um motor antigo consegue manter aquele vigor sem falhar?</p>
                    <p class="mb-5">A resposta não está na &quot;idade&quot; da máquina, mas sim na tubagem.</p>
                    <p class="mb-5">Qualquer condutor conhece a frustração de pisar o acelerador a fundo e o motor simplesmente hesitar. O carro &quot;engasga&quot;, perde o rendimento e a potência parece ter desaparecido. Muitos culpam a quilometragem elevada. Mas os melhores mecânicos de competição sabem que o verdadeiro inimigo não é a velhice. É a sujidade.</p>
                    <p class="mb-5">Com o tempo, as impurezas do próprio combustível acumulam-se e criam crostas de carbono duras como pedra. Estas crostas entopem os injetores e as linhas de passagem de gasóleo ou gasolina. O combustível simplesmente não consegue passar com a pressão necessária.</p>
                    <p class="mb-5">E na mecânica a regra é absoluta: <strong>sem fluxo, não há potência.</strong></p>
                    
                    <h3 class="mt-10 mb-3 text-2xl text-[#0d0d0d]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">O Segredo da &quot;Descarbonização&quot; Avançada</h3>
                    <p class="mb-5">Para resolver isto e manter clássicos como o mítico Ford RS200 no seu pico de performance, nenhum mecânico de topo lhe dirá para deitar o motor fora. Mas também sabem que os aditivos comuns não resolvem o problema.</p>
                    <p class="mb-5">Como alertam os especialistas em engenharia automóvel, <em>&quot;nem todo o aditivo é igual&quot;</em>. Produtos de baixa qualidade ou mal formulados podem até causar danos dispendiosos a sensores sensíveis, como a sonda lambda e os sensores MAP.</p>
                    <p class="mb-5">O verdadeiro inimigo do rendimento automóvel é a chamada <strong>&quot;carbonização&quot;</strong>. Com as altas temperaturas, os resíduos do combustível cristalizam-se, criando crostas duras de carbono nas cabeças dos pistões e, mais grave ainda, nos bicos injetores. Isto destrói o padrão de pulverização do combustível. Em vez de uma névoa fina e altamente explosiva, o motor &quot;engasga&quot; com falhas na injeção, aumentando o consumo e perdendo toda a sua potência.</p>
                    <p class="mb-5">A solução adotada nas garagens de competição é a <strong>&quot;descarbonização&quot; química</strong> do motor. Fórmulas químicas precisas dissolvem a sujidade, quebram as crostas de carbono e desobstruem totalmente os bicos injetores e os canais de admissão. Ao limpar a tubagem, o fluxo de combustível regressa à sua pressão máxima. O carro recupera imediatamente a aceleração e a força agressiva de quando saiu do stand. É pura engenharia termodinâmica.</p>
                    
                    <h3 class="mt-10 mb-3 text-2xl text-[#0d0d0d]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">A Surpreendente Ligação ao Corpo Masculino</h3>
                    <p class="mb-5">O que praticamente ninguém no mundo automóvel imaginava, é que este exato princípio mecânico de &quot;descarbonização&quot; acabou de inspirar uma das maiores revoluções na saúde do homem europeu.</p>
                    <p class="mb-5">Recently, a comunidade médica debruçou-se sobre um estudo monumental realizado ao longo de 47 anos pelo prestigiado <strong>Karolinska Institutet</strong>, na Suécia. A investigação revelou uma verdade desconfortável: tal como um motor antigo, a aptidão física, a força e o &quot;rendimento&quot; do homem começam a despencar silenciosa e exatamente aos <strong>35 anos</strong>. Principalmente nos momentos de intimidade no quarto. E a culpa também não é da idade, nem do stress.</p>
                    <p class="mb-5">A culpa é da <strong>&quot;carbonização&quot; biológica</strong>. Com a alimentação moderna, as placas de gordura e toxinas acumulam-se e cristalizam ao longo dos anos, entupindo as veias mais finas do corpo, nomeadamente na região pélvica. O sangue (que é o seu combustível primário) já não consegue passar e chegar ao destino com a pressão necessária. E a regra é igual para os motores de injeção e para o corpo humano: sem fluxo sob pressão máxima, a máquina falha.</p>
                    
                    <figure class="my-8">
                        <img src="/images/entupimento-comparacao.png" alt="Comparação entre um injetor de combustível entupido e uma veia humana com placas de gordura" width="1600" height="900" loading="lazy" class="w-full"/>
                        <figcaption class="mt-2 text-sm italic text-neutral-600">O princípio é o mesmo: quando os tubos estão entupidos, o fluxo é cortado e a máquina perde a força.</figcaption>
                    </figure>
                    
                    <h3 class="mt-10 mb-3 text-2xl text-[#0d0d0d]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">O Perigo de &quot;Forçar o Motor&quot;</h3>
                    <p class="mb-5">Quando o carro não desenvolve, o instinto básico do condutor é pisar o acelerador a fundo. Na saúde humana, é exatamente isso que a indústria farmacêutica faz quando lhe vende os famosos comprimidos azuis.</p>
                    <p class="mb-5">Esses químicos forçam artificialmente o seu coração a bombear o sangue contra uma parede de veias entupidas de gordura. Forçar uma máquina desta forma causa um desgaste terrível e pode levar a falhas cardíacas graves.</p>
                    <p class="mb-5">A verdadeira solução médica para devolver as ereções duras e o vigor de um jovem de 20 anos não é forçar o motor. É, tal como nos carros, usar um <strong>&quot;descarbonizante natural&quot;</strong> para desentupir a tubagem.</p>
                    
                    <h3 class="mt-10 mb-3 text-2xl text-[#0d0d0d]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">O &quot;Descarbonizante Humano&quot; e o Prémio Nobel de 2024</h3>
                    <p class="mb-5">A resposta definitiva surgiu cruzando os dados urológicos com a revolucionária investigação sobre a regulação genética celular dos cientistas americanos <strong>Victor Ambros e Gary Ruvkun</strong>, que acabam de vencer o <strong>Prémio Nobel da Medicina de 2024</strong>.</p>
                    <p class="mb-5">Apoiada nos mecanismos de como as nossas células funcionam e se reparam, a ciência descobriu que o extrato puro da raiz de uma planta chamada <strong>Moringa</strong> atua no sangue do homem exatamente como um aditivo descarbonizante atua nos injetores do seu carro. Quando ativada corretamente, ela reduz a acidez e dissolve as placas de gordura endurecidas que sufocam o seu sistema vascular pélvico.</p>
                    <p class="mb-5">Com os &quot;tubos&quot; desobstruídos e limpos, o sangue volta a fluir num volume massivo e com a pressão original de fábrica, restaurando a dureza, o tamanho e a resistência do membro masculino num espaço de poucos dias.</p>
                    
                    <figure class="my-8">
                        <img src="/images/moringa-matcha.png" alt="O extrato puro da raiz de Moringa" width="1600" height="900" loading="lazy" class="w-full"/>
                        <figcaption class="mt-2 text-sm italic text-neutral-600">O extrato puro da raiz de Moringa: o &quot;descarbonizante natural&quot; que atua diretamente sobre as placas de gordura do sistema vascular.</figcaption>
                    </figure>
                    
                    <h3 class="mt-10 mb-3 text-2xl text-[#0d0d0d]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">Atenção: A Ativação Exata é o Segredo</h3>
                    <p class="mb-5">Tomar Moringa isolada ajuda. Mas, atenção: por si só, ela não é suficiente para desentupir as veias mais finas do corpo (aquelas responsáveis pela sua potência e rigidez na hora H).</p>
                    <p class="mb-5">Para desencadear a verdadeira <strong>&quot;descarbonização&quot; vascular</strong> e soltar um fluxo de sangue massivo capaz de devolver a dureza de um jovem de 20 anos, a Moringa tem de ser ativada com <strong>3 ingredientes domésticos numa dosagem milimétrica</strong>. Se errar a dose, o efeito desentupidor simplesmente não acontece.</p>
                    <p class="mb-5">A indústria farmacêutica está a tentar esconder a proporção exata destes ingredientes para que os homens continuem a comprar comprimidos perigosos nas farmácias.</p>
                    <p class="mb-5">Por isso, o conceituado urologista europeu, <strong>Dr. Antonini</strong>, decidiu gravar um Aviso Médico de Urgência em vídeo de apenas 3 minutos.</p>
                    
                    <figure class="my-8 flex flex-col items-center">
                        <img src="/images/dr-antonini.png" alt="Dr. Antonini, urologista europeu" class="w-full max-w-sm"/>
                        <figcaption class="mt-2 text-sm italic text-neutral-600 text-center">Dr. Antonini, urologista europeu responsável pela divulgação do Aviso Médico de Urgência.</figcaption>
                    </figure>
                    
                    <p class="mb-5">Como sabemos que não tem tempo a perder com vídeos longos, este aviso é direto ao assunto. Num tom de homem para homem, ele ensina-lhe a fazer a ativação exata desta mistura em sua casa para desobstruir as suas veias de forma segura e rápida.</p>
                    <p class="mb-8 font-semibold">O vídeo pode ser retirado do ar a qualquer momento pelos grandes laboratórios.</p>
                    
                    <div class="my-10 border-y-2 border-[#0a2a55] bg-neutral-50 px-6 py-8 text-center">
                        <p class="mb-2 text-sm uppercase tracking-widest text-neutral-600">Conteúdo recomendado</p>
                        <p class="mb-6 text-lg text-neutral-800" style="font-family:'Playfair Display', Georgia, serif">Um motor clássico precisa de manutenção para durar. O seu corpo também.<br/>O vídeo encontra-se num servidor privado e pode ser deitado abaixo a qualquer momento.</p>
                        <p class="mb-4 text-2xl">👇 ASSISTA ABAIXO 👇</p>
                        
                        <a href="<?php echo htmlspecialchars($ctaUrl); ?>" class="inline-block rounded-md bg-[#c8102e] px-8 py-4 text-base font-bold uppercase tracking-wide text-white shadow-lg transition hover:bg-[#a40d26] md:text-lg">👉 CLIQUE AQUI PARA ASSISTIR AO VÍDEO CURTO DO DR. ANTONINI</a>
                        
                        <p class="mt-4 text-xs text-neutral-500">Ligação externa · Conteúdo informativo</p>
                    </div>
                </div>
            </article>
            
            <aside class="min-w-0">
                <div class="border-t-2 border-[#0a2a55] pt-3">
                    <h3 class="text-xl text-[#0a2a55]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">Últimas Notícias</h3>
                    <ul class="mt-4 divide-y divide-neutral-200">
                        <li class="py-3"><a href="#" class="text-[15px] leading-snug text-neutral-900 hover:text-[#0a2a55] hover:underline">Sébastien Loeb regressa ao Rally de Portugal em 2026 com Hyundai i20 N</a></li>
                        <li class="py-3"><a href="#" class="text-[15px] leading-snug text-neutral-900 hover:text-[#0a2a55] hover:underline">Porsche confirma novo 911 GT3 RS de homologação para Le Mans Classic</a></li>
                        <li class="py-3"><a href="#" class="text-[15px] leading-snug text-neutral-900 hover:text-[#0a2a55] hover:underline">Calendário WRC 2027: Marrocos volta à elite após 49 anos</a></li>
                        <li class="py-3"><a href="#" class="text-[15px] leading-snug text-neutral-900 hover:text-[#0a2a55] hover:underline">Tânak lidera Rally Finlândia ao fim do primeiro dia</a></li>
                        <li class="py-3"><a href="#" class="text-[15px] leading-snug text-neutral-900 hover:text-[#0a2a55] hover:underline">Lancia Stratos restaurado vendido por €1,2 milhões em Monterey</a></li>
                    </ul>
                </div>
                
                <div class="mt-10 border-t-2 border-[#0a2a55] pt-3">
                    <h3 class="text-xl text-[#0a2a55]" style="font-family:'Playfair Display', Georgia, serif;font-weight:800">Mais em Clássicos</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-[15px] font-semibold text-neutral-900 hover:underline">Ford RS200: o Grupo B que ficou na história</a>
                            <p class="mt-1 text-sm text-neutral-600">Análise técnica de um dos protótipos mais raros já construídos.</p>
                        </li>
                        <li>
                            <a href="#" class="text-[15px] font-semibold text-neutral-900 hover:underline">Audi Quattro S1 E2: a fúria dos quatro tempos</a>
                            <p class="mt-1 text-sm text-neutral-600">Como a Audi mudou para sempre os ralis mundiais.</p>
                        </li>
                    </ul>
                </div>
            </aside>
        </main>
        
        <footer class="border-t border-neutral-200 bg-neutral-50">
            <div class="mx-auto max-w-[1200px] px-4 py-8 text-sm text-neutral-600">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <span class="font-semibold text-[#0a2a55]" style="font-family:'Playfair Display', Georgia, serif">MotorSport Europa</span>
                        <span class="ml-2">© 2026. Todos os direitos reservados.</span>
                    </div>
                    <nav class="flex flex-wrap gap-5">
                        <a href="#" class="hover:underline">Sobre nós</a>
                        <a href="#" class="hover:underline">Publicidade</a>
                        <a href="#" class="hover:underline">Política de Privacidade</a>
                        <a href="#" class="hover:underline">Termos e Condições</a>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
