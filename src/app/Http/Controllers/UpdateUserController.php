<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\UserUpdateRequest;

class UpdateUserController extends Controller
{
    /**
     * Método para editar as informações de um usuário
    */
    public function update(UserUpdateRequest $request, User $user)
    {
        try{

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('user.edit',['user'=>$user->id])->with('success', 'Editado com sucesso!');

        } catch (\Exception $e){
            // Redireciona para a mesma página
            return back()->withInput()->with('error', 'Usuário não editado');
        }
    }
}
