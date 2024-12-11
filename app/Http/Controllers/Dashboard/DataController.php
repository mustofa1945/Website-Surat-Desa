<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Auth\RegisterService;

class DataController extends Controller
{

   private $validation;

   public function __construct(RegisterService $validation)
   {
      $this->validation = $validation;
   }
   public function ViewData()
   {

      //Eager loading
      $users = User::with('role')
         ->join('role', 'users.role_id', '=', 'role.id')
         ->orderBy('role.priority', 'asc')
         ->select('users.*') // Pilih kolom dari tabel users
         ->get();


      return view('dashboard.content.welcome', [
         'user' => $users
      ]);
   }

   public function handleDelete(Request $request)
   {
      $id = $request->input('id');

      $user = User::find($id);

      if ($user) {
         $user->delete();
         return redirect()->back()->with('success', 'Data Berhasil Dihapus');
      } else {
         return redirect()->back()->with('error', 'Data tidak ditemukan.');
      }
   }

   public function handleEdit(Request $request)
   {
    
      $edit = $request->input();

      $user = User::find($edit['id']);

      if ($user) {
         $user->update([
            'name' => $request->input('username'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'departement' => Str::title(str_replace('_' , ' ' , $edit['jabatan']))
         ]);
         $user->save();
         return redirect()->back()->with('success', 'Data Berhasil Diupdate');
      } else {
         return redirect()->back()->with('error', 'Data tidak ditemukan.');
      }


   }
}
