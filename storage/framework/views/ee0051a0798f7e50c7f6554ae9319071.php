<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PB AGORA</title>
    <link rel="shortcut icon" type="image/jpeg" href="/assets/portal/imgs/logo.jpeg">

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <style>
        .today {
            background-color: #ffffcc; /* Cor de fundo amarela para destacar */
            font-weight: bold; /* Texto em negrito para maior destaque */
        }

        .green-height {
            color: rgb(50, 158, 50);
        }   
        .center {
            text-align: center;
        }

        body {
            font-size: 0.8rem !important;
            width: 100vw;
        }

        .under {
            background-color: #CD0000;
            color: white;
        }

        .over {
            background-color: #1E90FF;
            color: white;
        }

        .entregue {
            background-color: #0000FF;
            color: white;
        }

        @media print {
            @page {
                transform: rotate(-90deg);
            }
        }

        #calendar-container {
            margin-top: 20px;
            position: relative;
        }

        

        #calendar {
            width: 100%;
            border-collapse: collapse;
        }

        #calendar th, #calendar td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #calendar th {
            background-color: #f2f2f2;
        }

        #calendar tbody td {
            height: 100px; 
        }

        #calendar tbody td:hover {
            background-color: #f0f0f0;
        }

        .month-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .month {
            width: 100px;
            height: 50px;
            background-color: lightblue;
            margin: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .month:hover {
            background-color: skyblue;
        }

            /* Media query para dispositivos móveis */
        @media only screen and (max-width: 600px) {
            .day-column {
                display: block;
                cursor: pointer;
                margin-block-end: 10px; /* Adiciona um espaçamento à direita entre as colunas */
            }

            .day-column .day-name {
                background-color: #f2f2f2;
                padding: 30px;
                text-align: center;
            }

            .day-column .dates {
                display: none;
                padding: 30px;
            }

            .day-column.active .dates {
                display: block;
            }

            /* Ocultar tabela padrão em dispositivos móveis */
            #calendar-container table {
                display: none;
            }
        }

        /* Estilos para dispositivos móveis */
        @media only screen and (max-width: 600px) {
            /* Esconde os dados abaixo do calendário em dispositivos móveis */
            #mobile-calendar {
                display: block;
            }
        }
    
        /* Estilos para dispositivos de tela grande */
        @media only screen and (min-width: 601px) {
            /* Esconde os dados abaixo do calendário em dispositivos de tela grande */
            #mobile-calendar {
                display: none;
            }
        }

   
    
   
       /* Adiciona caixas ao redor dos eventos apenas em telas menores */
@media only screen and (max-width: 600px) {
    .event-container {
        border: 1px solid #ddd;
        padding: 5px;
        margin-top: 5px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .day-column .dates div {
        
        background-color: #ffffff;
        padding: 40px; /* Aumenta o padding para expandir a caixa */
        font-size: 1.2em; /* Aumenta o tamanho da fonte do nome do dia */
        text-align: center;
    
      
    }

    .day-column .dates div strong {
        font-size: 1.5em; /* Aumenta o tamanho do número do dia */
        margin-bottom: 5px; /* Espaçamento entre o número do dia e os eventos */
    }
}
        /* Adiciona caixas ao redor dos eventos apenas em telas menores */
    @media only screen and (max-width: 600px) {
        .event-container {
            border: 1px solid #ddd;
            padding: 5px;
            margin-top: 5px;
            text-align: center; /* Centraliza o texto horizontalmente */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        }
        #botaoAlternar {
        margin: 0 auto; /* Centralizar horizontalmente */
        width: 200px; /* Largura do botão */
        height: 50px; /* Altura do botão */
        font-size: 16px; /* Tamanho da fonte */
        background-color: #6a92b9; /* Cor de fundo */
        color: #fff; /* Cor do texto */
        border: none; /* Remover borda */
        border-radius: 5px; /* Bordas arredondadas */
        cursor: pointer; /* Cursor do mouse */
    }
    .mobile-only {
            display: none;
        }

        /* Mostra o elemento apenas em dispositivos móveis */
        @media (max-width: 768px) {
            .mobile-only {
                display: block;
            }
        }
    </style>  
<script>
function alternarVisualizacao() {
    var visualizacaoComputador = localStorage.getItem('visualizacaoComputador');
    
    if (visualizacaoComputador === 'true') {
        localStorage.removeItem('visualizacaoComputador');
    } else {
        localStorage.setItem('visualizacaoComputador', 'true');
    }
    location.reload();
}

// Verificar se a visualização para computador foi ativada
var visualizacaoComputador = localStorage.getItem('visualizacaoComputador');
if (visualizacaoComputador === 'true') {
    // Mudar para visualização para computador
    var viewportMeta = document.querySelector('meta[name="viewport"]');
    viewportMeta.setAttribute('content', 'width=1024');
}
</script>
</head>
<center>
    <button id="botaoAlternar" onclick="alternarVisualizacao()">Alternar Visualização</button>
</center>

<body class="m-5">     
    <div class="container-fluid" style="overflow: hidden; padding: 2rem;">
        <div class="watermark"></div> <!-- Marca d'água -->   
        <div style="overflow-x: auto;">
            <h4 style="text-align: center;">PBAGORA | Tábua de Marés - Cabedelo - João Pessoa - Paraíba - <?php echo e(date('F Y')); ?></h4>
            <br>
            <h4 class="mobile-only" style="text-align: center;">Calendário semanal</h4>  
            <div id="calendar-container" style="margin-top: 20px; position: relative; overflow-x: auto;">
                
                <table id="calendar" style="min-width: 700pt;">
                    <thead>
                        <tr>
                            <th>Seg</th>
                            <th>Ter</th>
                            <th>Qua</th>
                            <th>Qui</th>
                            <th>Sex</th>
                            <th>Sáb</th>
                            <th>Dom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Os dados serão preenchidos aqui via JavaScript -->
                    </tbody>
                </table>
                
                <div id="mobile-calendar">
                    <div class="day-column" data-day="Seg">
                        <div class="day-name">Seg</div>
                        <div class="dates"></div>
                    </div>
                    <div class="day-column" data-day="Ter">
                        <div class="day-name">Ter</div>
                        <div class="dates"></div>
                    </div>
                    <div class="day-column" data-day="Qua">
                        <div class="day-name">Qua</div>
                        <div class="dates"></div>
                    </div>
                    <div class="day-column" data-day="Qui">
                        <div class="day-name">Qui</div>
                        <div class="dates"></div>
                    </div>
                    <div class="day-column" data-day="Sex">
                        <div class="day-name">Sex</div>
                        <div class="dates"></div>
                    </div>
                    <div class="day-column" data-day="Sáb">
                        <div class="day-name">Sáb</div>
                        <div class="dates"></div>
                    </div>
                    <div class="day-column" data-day="Dom">
                        <div class="day-name">Dom</div>
                        <div class="dates"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <a href="https://forecast7.com/pt/n7d12n34d85/joao-pessoa-paraiba/" target="_blank" style="display: block; text-align: center;">JOÃO PESSOA TEMPO</a>
    <script>
        // Verificar se a visualização para computador foi ativada
        var visualizacaoComputador = localStorage.getItem('visualizacaoComputador');
        if (visualizacaoComputador === 'true') {
            // Mudar para visualização para computador
            var viewportMeta = document.querySelector('meta[name="viewport"]');
            viewportMeta.setAttribute('content', 'width=1024');
        }
        </script>
    <script>
        $(document).ready(function() {
            if (window.innerWidth > 600) {
                $(document).ready(function() {
    var daysOfWeek = ["Seg", "Ter", "Qua", "Qui", "Sex", "Sáb", "Dom"];

    function populateCalendar(month) {
        var data = [
            <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                { date: '<?php echo e($iten->date); ?>', day: '<?php echo e($iten->day); ?>', week: '<?php echo e($iten->week); ?>', hour: '<?php echo e($iten->hour); ?>', height: '<?php echo e($iten->height); ?>' },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];

        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var numDays = new Date(year, month, 0).getDate();

        $('#calendar tbody').empty();
        $('.day-column .dates').empty();

        var firstDayOfWeekIndex = new Date(year, month - 1, 1).getDay();
        firstDayOfWeekIndex = (firstDayOfWeekIndex === 0) ? 6 : firstDayOfWeekIndex - 1;

        var $row = $('<tr>');
        for (var i = 0; i < firstDayOfWeekIndex; i++) {
            $row.append($('<td>'));
        }

        for (var day = 1; day <= numDays; day++) {
            var date = year + '-' + ('0' + month).slice(-2) + '-' + ('0' + day).slice(-2);
            var dayOfWeekIndex = new Date(date).getDay();
            var dayOfWeek = daysOfWeek[dayOfWeekIndex];

            var dateString = '<strong>' + day + '</strong><br>';
            var itemList = [];

            var eventsForDate = data.filter(function(item) {
                return item.date === date;
            });

            eventsForDate.forEach(function(item) {
                var time = item.hour.split(',');
                var height = item.height.split(',');

                for (var i = 0; i < time.length; i++) {
                    var hour = Math.floor(time[i] / 100);
                    var minute = time[i] % 100;
                    hour = hour < 10 ? '0' + hour : hour;
                    minute = minute < 10 ? '0' + minute : minute;
                    var formattedTime = hour + ':' + minute;
                    var heightClass = parseFloat(height[i]) < 1 ? 'green-height' : '';
                    var html = '<span class="' + heightClass + '" style="font-size: 16px;">' + formattedTime + ' - ' + height[i] + 'm</span>';
                    itemList.push(html);
                }
            });

            var html = dateString + '<div class="event-container">' + itemList.join('<br>') + '</div>';

            var $cell = $('<td>').attr('data-date', date).html(html);
            $row.append($cell);

            if ((firstDayOfWeekIndex + day - 1) % 7 === 6 || day === numDays) {
                $('#calendar tbody').append($row);
                $row = $('<tr>');
            }

            $('.day-column[data-day="' + dayOfWeek + '"] .dates').append('<div>' + html + '</div>');
        }
    }

    $('.day-column .day-name').click(function() {
        $(this).parent().toggleClass('active');
    });

    var monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    var currentDate = new Date();
    var currentMonthName = monthNames[currentDate.getMonth()];
    document.querySelector('h4').textContent = "PBAGORA | Tábua de Marés - Cabedelo - João Pessoa - Paraíba - " + currentMonthName + " " + currentDate.getFullYear();

    var currentMonth = new Date().getMonth() + 1;
    populateCalendar(currentMonth);
});

 
            }
        });
    </script>

<script>


    $(document).ready(function() {
        if (window.innerWidth <= 600) {
    var daysOfWeek = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];

    function populateCalendar(month) {
        var data = [
            <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                { date: '<?php echo e($iten->date); ?>', day: '<?php echo e($iten->day); ?>', week: '<?php echo e($iten->week); ?>', hour: '<?php echo e($iten->hour); ?>', height: '<?php echo e($iten->height); ?>' },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];

        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var numDays = new Date(year, month, 0).getDate();

        $('#calendar tbody').empty();
        $('.day-column .dates').empty();

        var firstDayOfWeekIndex = new Date(year, month - 1, 1).getDay();
        firstDayOfWeekIndex = (firstDayOfWeekIndex === 0) ? 6 : firstDayOfWeekIndex - 1;

        var $row = $('<tr>');
        for (var i = 0; i < firstDayOfWeekIndex; i++) {
            $row.append($('<td>'));
        }

        for (var day = 1; day <= numDays; day++) {
            var date = year + '-' + ('0' + month).slice(-2) + '-' + ('0' + day).slice(-2);
            var dayOfWeekIndex = new Date(date).getDay();
            var dayOfWeek = daysOfWeek[dayOfWeekIndex];

            var $cell = $('<td>').html('<strong>' + day + '</strong><br>');

            if (date === moment().format('YYYY-MM-DD')) {
                $cell.addClass('today');
            }

            data.forEach(function(item) {
                if (item.date === date) {
                    var colorClass = item.height > 2.5 ? 'over' : 'under';
                    if (item.week.includes('m')) {
                        colorClass = 'entregue';
                    }
                    $cell.append('<span class="' + colorClass + '">' + item.hour + ' - ' + item.height + 'm</span><br>');
                }
            });

            $row.append($cell);

            if (dayOfWeek === "Dom") {
                $('#calendar tbody').append($row);
                $row = $('<tr>');
            }

            var $mobileColumn = $('.day-column[data-day="' + dayOfWeek + '"] .dates');
            var $mobileCell = $('<div>').addClass('event-container').html('<strong>' + day + '</strong><br>');

            data.forEach(function(item) {
                if (item.date === date) {
                    var colorClass = item.height > 2.5 ? 'over' : 'under';
                    if (item.week.includes('m')) {
                        colorClass = 'entregue';
                    }
                    $mobileCell.append('<span class="' + colorClass + '">' + item.hour + ' - ' + item.height + 'm</span><br>');
                }
            });

            $mobileColumn.append($mobileCell);
        }

        $('#calendar tbody').append($row);
    }

    var currentMonth = moment().month() + 1;
    populateCalendar(currentMonth);

    if ($(window).width() <= 600) {
        $('.day-column').each(function() {
            $(this).find('.dates').show();
        });
    }

    $(document).on('click', '#calendar tbody td', function() {
        var clickedDate = $(this).data('date');
        populateCalendarForWeek(clickedDate);
    });

    function populateCalendarForWeek(clickedDate) {
        var data = [
            <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                { date: '<?php echo e($iten->date); ?>', day: '<?php echo e($iten->day); ?>', week: '<?php echo e($iten->week); ?>', hour: '<?php echo e($iten->hour); ?>', height: '<?php echo e($iten->height); ?>' },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];

        var clickedDayOfWeek = new Date(clickedDate).getDay();
        var daysToAdd = 1 - clickedDayOfWeek;

        var weekStartDate = new Date(clickedDate);
        weekStartDate.setDate(weekStartDate.getDate() + daysToAdd);

        var weekEndDate = new Date(weekStartDate);
        weekEndDate.setDate(weekEndDate.getDate() + 6);

        $('#calendar tbody').empty();
        $('.day-column .dates').empty();

        for (var currentDate = new Date(weekStartDate); currentDate <= weekEndDate; currentDate.setDate(currentDate.getDate() + 1)) {
            var month = currentDate.getMonth() + 1;
            var day = currentDate.getDate();
            var year = currentDate.getFullYear();
            var date = year + '-' + ('0' + month).slice(-2) + '-' + ('0' + day).slice(-2);
            var dayOfWeekIndex = currentDate.getDay();
            var dayOfWeek = daysOfWeek[dayOfWeekIndex];

            var dateString = '<strong>' + day + '</strong><br>';
            var itemList = [];

            var eventsForDate = data.filter(function(item) {
                return item.date === date;
            });

            eventsForDate.forEach(function(item) {
                var time = item.hour.split(',');
                var height = item.height.split(',');

                for (var i = 0; i < time.length; i++) {
                    var hour = Math.floor(time[i] / 100);
                    var minute = time[i] % 100;
                    hour = hour < 10 ? '0' + hour : hour;
                    minute = minute < 10 ? '0' + minute : minute;
                    var formattedTime = hour + ':' + minute;
                    var heightClass = parseFloat(height[i]) < 1 ? 'green-height' : '';
                    var html = '<span class="' + heightClass + '" style="font-size: 16px;">' + formattedTime + ' - ' + height[i] + 'm</span>';
                    itemList.push(html);
                }
            });

            var html = dateString + '<div class="event-container">' + itemList.join('<br>') + '</div>';

            var $cell = $('<td>').attr('data-date', date).html(html);
            $('#calendar tbody tr').append($cell);
            $('.day-column[data-day="' + dayOfWeek + '"] .dates').append('<div>' + html + '</div>');
        }
    }

    var currentDate = new Date();
    var currentWeekStartDate = new Date(currentDate);
    currentWeekStartDate.setDate(currentWeekStartDate.getDate() - currentDate.getDay());
    populateCalendarForWeek(currentWeekStartDate);

    var monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    var currentMonthName = monthNames[currentDate.getMonth()];
    document.querySelector('h4').textContent = "PBAGORA | Tábua de Marés - Cabedelo - João Pessoa - Paraíba - " + currentMonthName + " " + currentDate.getFullYear();
        }
});

</script>

<script>
    $(document).ready(function() {
        // Função para alternar entre a visualização para desktop e para celular
        function toggleView() {
            if ($('#calendar-container').hasClass('desktop-view')) {
                // Esconder a visualização para desktop e mostrar a visualização para celular
                $('#calendar-container.desktop-view').hide();
                $('#calendar-container.mobile-view').show();
            } else {
                // Esconder a visualização para celular e mostrar a visualização para desktop
                $('#calendar-container.mobile-view').hide();
                $('#calendar-container.desktop-view').show();
            }
        }

        // Evento de clique no botão para alternar as visualizações
        $('#viewMobileVersion').click(function() {
            toggleView();
        });

        // Lógica para detectar o tamanho da tela e definir a classe apropriada para o contêiner do calendário
        function setViewClass() {
            if (window.innerWidth <= 600) {
                $('#calendar-container').removeClass('desktop-view').addClass('mobile-view');
            } else {
                $('#calendar-container').removeClass('mobile-view').addClass('desktop-view');
            }
        }

        // Chamar a função setViewClass() quando a página é carregada e quando o tamanho da tela é alterado
        setViewClass();
        $(window).resize(function() {
            setViewClass();
        });
    });
</script>
<script>
    function ajustarTextoBotao() {
      var botao = document.getElementById('botaoAlternar');
      if (window.innerWidth <= 768) {
          botao.textContent = 'Alternar Mês completo';
      } else {
          botao.textContent = 'Alternar para semanal';
      }
      // Verificar se a visualização para computador está ativada
      var visualizacaoComputador = localStorage.getItem('visualizacaoComputador');
      if (visualizacaoComputador === 'true') {
          // Se a visualização para computador estiver ativada, remover a classe mobile-only
          botao.classList.remove('mobile-only');
      } else {
          // Se a visualização para computador não estiver ativada, adicionar a classe mobile-only
          botao.classList.add('mobile-only');
      }
  }
  
  // Chama a função ao carregar a página
  ajustarTextoBotao();
  
  // Adiciona um ouvinte de evento para ajustar o texto ao redimensionar a janela
  window.addEventListener('resize', ajustarTextoBotao);
  </script>
</body>
</html>
<?php /**PATH /home/rafael/docker/portal pb/resources/views/site/relatorios/index.blade.php ENDPATH**/ ?>