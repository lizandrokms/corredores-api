<?php

namespace App\Services;

use App\Repositories\Eloquent\ClassificacaoRepository;
use Exception;

class ClassificacaoService
{

    private $repository;

    public function __construct()
    {
        $this->repository = new ClassificacaoRepository();
    }


    public function listar()
    {
        return $this->repository->all();
    }


    public function criar(array $dados = []): bool
    {
        return $this->repository->create($dados);
    }

    public function obterPorId(int $id)
    {
        return $this->repository->find($id);
    }

    public function atualizar(array $dados = [], int $id): bool
    {

        $registro = $this->repository->update($dados, $id);

        if (!$registro) {
            throw new Exception('Registro não encontrado.');
        }

        return $registro;
    }

    public function deletar(int $id): bool
    {
        $registro = $this->repository->delete($id);

        if (!$registro) {
            throw new Exception('Registro não encontrado.');
        }

        return $registro;
    }

    public function classificacoesPorIdade()
    {

    }

    public function classificacoesGerais()
    {
        
    }
}