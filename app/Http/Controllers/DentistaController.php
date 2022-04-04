<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dentista;
use App\Especialidade;
use PhpParser\Node\Stmt\Foreach_;
use phpDocumentor\Reflection\Types\Array_;
use App\Destistas_especialidades;


class DentistaController extends Controller{
    public function paginacaoAjax(){
        $dentistas = Dentista::get(); //leitura de dentistas como pagina inicial
        return view('welcome',[
            'dentistas' => $dentistas
        ]);
    }
    public function paginacaoAjaxEspecialidades(){
        $especialidades = Especialidade::get(); //leitura de especialidades 
        return view('listaEspecialidades',[
            'especialidades' => $especialidades
        ]);
    }
    public function apagaDentista($id){
        //apaga o dentista selecionado
        $dentista = Dentista::find($id);
        $dentista->delete();

        //deletar todas as especialidades atribuidas ao dentista
        $especialidades = Destistas_especialidades::select("*")->where("dentista_id","=", $id)->get();

        foreach ( $especialidades as  $especialidade ) {
            $deletaESP = Destistas_especialidades::find($especialidade->id);
            $deletaESP->delete();
        }

        return redirect('/');
    }

    public function desvincularESP($id){
       //separa os ids vindos da URL
       $id = explode('-', $id);

        //desvincula o dentista selecionado
        
        $especialidade = Destistas_especialidades::select("*")->where("dentista_id","=", $id[0])->where("especialidade_id", "=", $id[1])->get();
        $especialidade = explode(":", $especialidade);
        $especialidade[1] = explode(",", $especialidade[1]);
        $idX = $especialidade[1][0];


        $deletaESP = Destistas_especialidades::find($idX);
        $deletaESP->delete();

        return redirect('/mostra-especialidadesAtb'.'/'.$id[0]);
      
    }
    
    public function adicionaEsp($id){
        $Especialidades = Especialidade::get(); //leitura de todas as especialidades
    
        return view ('/addEspecialidadeUser', [
            'Especialidades' => $Especialidades,
            'idDentista' =>$id
        ]); 
        
    }
    public function editaDentista($id){
        //retorna o dentista para editar
        $dentista = Dentista::find($id);
        return view ('editDentista', ['dentista' => $dentista]); //to use {{$dentista->}}
    }

    
    public function addDentista(Request $request){
        //criando um dentista novo no Banco de Dados
        Dentista::create([
        'name' => $request->nome,
        'email' => $request->email,
        'cro' => $request->cro,
        'cro_uf' => $request->cro_uf
         ]);
         return redirect('/');
    }

    public function  addEspecialidadeUser(Request $request){
        //adicina uma especialidade a um dentista 
        
         Destistas_especialidades::create([
        'especialidade_id' => $request->especialidade,
        'dentista_id' => $request->idUser
         ]);

         return redirect('/mostra-especialidadesAtb'."/".$request->idUser);
    }
   

    public function addEspecialidade(Request $request){
        //criando uma nova especialidade no Banco de Dados
        Especialidade::create([
        'name' => $request->nome
         ]);
         return redirect('/');
    }

    public function mostraEspecialidadesAtb($id){
        $especialidades_id = Destistas_especialidades::select("*")->where("dentista_id","=", $id)->get();
        $especialidades = Array();
    

        if ($especialidades_id != "[]") {
            foreach ($especialidades_id as $idE ) {
                array_push($especialidades, Especialidade::find($idE->especialidade_id));
            }
            return view('listaEspecialidadesATB',[
                'especialidades' => $especialidades,
                'especialidades_id' => $especialidades_id
            ]);
        }else{
            return redirect('/adicionar-especialidade'.'/'.$id);
        }
        

        
    }

    public function editDentista(Request $request, $id){
        //editando um dentista existente no Banco de Dados
        $dentista = Dentista::find($id);
        $dentista->update([
            'name' => $request->nome,
            'email' => $request->email,
            'cro' => $request->cro,
            'cro_uf' => $request->cro_uf
        ]);

         return redirect('/');
    }

    public function editaEspecialidade($id){
        //retorna a especialidade para editar
        $Especialidade = Especialidade::find($id);
        return view ('editEspecialidade', ['Especialidade' => $Especialidade]); //to use {{$dentista->}}
    }

    public function editEspecialidade(Request $request, $id){
        //editando uma especialidade existente no Banco de Dados
        $Especialidade = Especialidade::find($id);
        $Especialidade->update([
            'name' => $request->nome,
            
        ]);

        return redirect('/mostra-especialidades');
    }
    
}
