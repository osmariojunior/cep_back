<?php


namespace App\Http\Controllers;


use App\Http\Requests\EnderecoPost;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class EnderecoController extends Controller
{
  /**
   * Store a new user.
   * @param Request $request
   */
  public function store(EnderecoPost $request)
  {
    $endereco = new Endereco();
    $endereco->cep = $request->cep;
    $endereco->logradouro = $request->logradouro;
    $endereco->complemento = $request->complemento;
    $endereco->bairro = $request->bairro;
    $endereco->localidade = $request->localidade;
    $endereco->uf = $request->uf;
    $endereco->ibge = $request->ibge;
    $endereco->ddd = $request->ddd;
    $endereco->siafi = $request->siafi;

    try {
      $endereco->saveOrFail();
      return response()->json(["created" => true], Response::HTTP_OK);
    } catch (Throwable $e) {
      return response()->json(["msg" => "erro ao tentar criar"], Response::HTTP_BAD_REQUEST);
    }
  }
}
