<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function personalDocuments($type)
    {
        switch ($type) {
            case "cpf":
                return $this->cpf();
            case "rg":
                return $this->rg();
            default:
                echo "O documentos informado não está cadastrado";
        }
    }

    public function getCpf()
    {
        return "cpf aqui";
    }

    public function getRg()
    {
        return "rg aqui";
    }

    public function setRg(Request $request)
    {
        return $request;
    }

    public function setCpf(Request $request)
    {
        return $request;
    }
}
