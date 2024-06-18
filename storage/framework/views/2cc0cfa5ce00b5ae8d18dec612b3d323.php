<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>METRIKE</title>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <style>
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
            position: relative; /* Define a posição relativa para que a marca d'água possa ser posicionada */
        }

        /* Classe para a marca d'água */
        .watermark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            opacity: 0.2; 
            background-image: url('caminho/para/sua/imagem.jpg'); 
            background-repeat: repeat; 
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
            height: 100px; /* Ajuste conforme necessário */
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
            body {
                font-size: 0.6rem !important;
            }

            #calendar {
                font-size: 0.6rem !important;
            }

            #calendar th, #calendar td {
                padding: 4px;
            }
        }

    </style>
</head>
<body class="m-5">     
    <div class="container-fluid" style="overflow: hidden; padding: 2rem;">
        <div class="watermark"></div> <!-- Marca d'água -->
        <div class="month-container w-100">
            <div class="month" data-month="1">Janeiro</div>
            <div class="month" data-month="2">Fevereiro</div>
            <div class="month" data-month="3">Março</div>
            <div class="month" data-month="4">Abril</div>
            <div class="month" data-month="5">Maio</div>
            <div class="month" data-month="6">Junho</div>
            <div class="month" data-month="7">Julho</div>
            <div class="month" data-month="8">Agosto</div>
            <div class="month" data-month="9">Setembro</div>
            <div class="month" data-month="10">Outubro</div>
            <div class="month" data-month="11">Novembro</div>
            <div class="month" data-month="12">Dezembro</div>
        </div>
        <div style="overflow-x: auto;">
        
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
        </div>

    </div>
    <script>
        $(document).ready(function() {
            // Função para preencher o calendário com os dados do banco de dados
            function populateCalendar(month) {
                // Limpa o conteúdo da tabela do calendário
                $('#calendar tbody').empty();
        
                // Dados do banco de dados (substitua esta parte pelo código que busca os dados do seu banco de dados)
                var data = [
                    <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        { date: '<?php echo e($iten->date); ?>', day: '<?php echo e($iten->day); ?>', week: '<?php echo e($iten->week); ?>', hour: '<?php echo e($iten->hour); ?>', height: '<?php echo e($iten->height); ?>' },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ];
        
                console.log('Dados do banco de dados:', data); // Adicionando console.log para verificar os dados
        
                // Função para calcular o primeiro dia da semana para o mês especificado
                function getFirstDayOfWeek(year, month) {
                    var firstDay = new Date(year, month - 1, 1); // Primeiro dia do mês
                    var firstDayOfWeek = firstDay.getDay(); // Dia da semana do primeiro dia do mês
                    return (firstDayOfWeek === 0) ? 6 : firstDayOfWeek - 1; // Ajusta para que segunda-feira seja 0 e domingo seja 6
                }
        
                // Percorre os dias do mês
                var currentDate = new Date();
                var year = currentDate.getFullYear();
                var firstDayOfWeekIndex = getFirstDayOfWeek(year, month); // Índice do primeiro dia da semana
                var numDays = new Date(year, month, 0).getDate(); // Número de dias no mês atual
                var $tbody = $('#calendar tbody');
                var $row = $('<tr>');
        
                // Adiciona células vazias para preencher os dias anteriores ao primeiro dia da semana
                for (var i = 0; i < firstDayOfWeekIndex; i++) {
                    $row.append($('<td>'));
                }   
             // Preenche os dias do mês
                for (var day = 1; day <= numDays; day++) {
                    var date = year + '-' + ('0' + month).slice(-2) + '-' + ('0' + day).slice(-2);
                    var formattedDate = moment(date).format('DD/MM/YYYY'); // Formata a data para o formato brasileiro
                    var $cell = $('<td>').attr('data-date', date);
                    var itemList = [];
                    var dateString = '<strong>Data:</strong> ' + formattedDate + '<br>'; // String da data formatada
                    data.forEach(function(item) {
                        if (item.date === date) {
                            var time = item.hour.split(','); // Dividir as horas em uma lista
                            var height = item.height.split(','); // Dividir as alturas em uma lista
                            for (var i = 0; i < time.length; i++) {
                                // Extrair as horas e minutos
                                var hour = Math.floor(time[i] / 100);
                                var minute = time[i] % 100;
                                // Adicionar um zero à esquerda, se necessário
                                hour = hour < 10 ? '0' + hour : hour;
                                minute = minute < 10 ? '0' + minute : minute;
                                // Formatando para HH:MM
                                var formattedTime = hour + ':' + minute;
                                // Adicionando ao array
                                itemList.push(formattedTime + ' - ' + height[i] + 'm');
                            }
                        }
                    });
                    var html = dateString + itemList.join('<br>'); // Une os itens da lista com quebras de linha
                    $cell.html(html);
                    $row.append($cell);

                    // Se for sábado (índice 6) ou o último dia do mês, fecha a linha e inicia uma nova linha
                    if ((firstDayOfWeekIndex + day - 1) % 7 === 6 || day === numDays) {
                        $tbody.append($row);
                        $row = $('<tr>');
                    }
                }
            }
        
            // Evento para chamar a função populateCalendar quando um mês é selecionado
            $('.month').click(function() {
                var selectedMonth = $(this).data('month');
                populateCalendar(selectedMonth);
                $('#current-month').text($(this).text());
            });
        
            // Chama a função para preencher o calendário com o mês atual quando a página carregar
            var currentMonth = new Date().getMonth() + 1; // Mês atual
            populateCalendar(currentMonth);
        });
    </script>
    <?php $__env->stopSection(); ?>
  
</body>
</html>

<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/portal pb/resources/views/painel/relatorios/index.blade.php ENDPATH**/ ?>