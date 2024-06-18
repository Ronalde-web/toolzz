<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use DB;

class SiteController extends Controller
{
    private $post;
    protected $name     = 'Post';
 
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

  
    public function relatorios()
    {       
        // Obtém o mês atual e o próximo mês
        $currentMonth = date('m');
        $nextMonth = date('m', strtotime('+1 month'));
    
        // Define o título
        $title = "Listagem {$this->name}s";    
    
        // Consulta para obter os dados dos meses de maio e junho
        $itens = DB::table('importacoes')
            ->select(
                DB::raw('DATE(importacoes.date) as date'),
                DB::raw('GROUP_CONCAT(importacoes.day) as day'),
                DB::raw('GROUP_CONCAT(importacoes.week) as week'),
                DB::raw('GROUP_CONCAT(importacoes.hour) as hour'),
                DB::raw('GROUP_CONCAT(importacoes.height) as height')
            )
            ->whereRaw('(MONTH(importacoes.date) = ? OR MONTH(importacoes.date) = ?)', [$currentMonth, $nextMonth]) 
            ->groupBy('importacoes.date')
            ->get();
    
        return view('site.relatorios.index', compact('title', 'itens'));
    }   
    
}
