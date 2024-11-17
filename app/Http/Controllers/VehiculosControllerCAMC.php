<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Mockery\Exception;
/*class VehiculosControllerCAMC
{

    public function __invoke()
    {
        
        return view("Vehiculos",["posts"=> $_POST]);
       
    }
}
*/

class VehiculosControllerCAMC
{
    // Método para mostrar todos los vehículos (vista index)
    public function index()
    {
        $vehiculos = Vehiculo::all();  // Obtener todos los vehículos
        return view('vehiculos', compact('vehiculos')); // Retorna la vista con los datos
    }

    // Método para mostrar el formulario de creación (vista create)
    public function create()
    {
        return view('vehiculos.create'); // Muestra el formulario para crear un vehículo
    }

    // Método para almacenar un nuevo vehículo
    public function store(Request $request)
    {
      /*  $validator = Validator::make($request->all(), [
            'Motor_T_Vehiculo' => 'required',
            'Serie_T_Vehiculo' => 'required',
            'Marca_T_Vehiculo' => 'required',
            'Modelo_T_Vehiculo' => 'required',
            'Color_T_Vehiculo' => 'required',
            'F_Venta_T_Vehiculo' => 'required|date',
            'Vehiculo_T_Vehiculo' => 'required',
        ]);
 
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            dd($error);
        }
*/

      //  dd($request->all());
        // Validar los datos del formulario
      /*  $request->validate([
            'Motor_T_Vehiculo' => 'required',
            'Serie_T_Vehiculo' => 'required',
            'Marca_T_Vehiculo' => 'required',
            'Modelo_T_Vehiculo' => 'required',
            'Color_T_Vehiculo' => 'required',
            'F_Venta_T_Vehiculo' => 'required|date',
            'Vehiculo_T_Vehiculo' => 'required',
        ]); */

        // Crear el vehículo usando los datos validados
        try{
            Vehiculo::create($request->all());
        }
    catch(\Exception $e)
   {}
        // Redirigir a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo creado con éxito');
    }

    // Método para mostrar el formulario de edición de un vehículo
    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id); // Buscar el vehículo por su ID
        return view('vehiculos.edit', compact('vehiculo')); // Retorna la vista de edición con el vehículo encontrado
    }

    // Método para actualizar un vehículo existente
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'Motor_T_Vehiculo' => 'required',
            'Serie_T_Vehiculo' => 'required',
            'Marca_T_Vehiculo' => 'required',
            'Color_T_Vehiculo' => 'required',
            'F_Venta_T_Vehiculo' => 'required|date',
            'Vehiculo_T_Vehiculo' => 'required',
        ]);

        // Buscar el vehículo y actualizar sus datos
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($request->all());

        // Redirigir a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado con éxito');
    }

    // Método para eliminar un vehículo
    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);  // Buscar el vehículo por su ID
        $vehiculo->delete();  // Eliminar el vehículo

        // Redirigir a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado con éxito');
    }

    // Método invocable para mostrar los datos de los vehículos
    public function __invoke()
    {
        return view("Vehiculo", ["posts" => $_POST]);  // Este método puede usarse para alguna vista particular, como un listado general
    }
}
