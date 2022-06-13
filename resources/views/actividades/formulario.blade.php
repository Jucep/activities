@csrf
<div class="block">
    <x-jet-label for="codigoActividad" value="{{__('Codigo actividad')}}"/>
    <x-jet-input id="codigoActividad" class="block mt-1 w-full" type="text" name="codigoActividad" :value="old('codigoActividad', $actividad->codigoActividad)" required autofocus/>

    
    <x-jet-label for="nombre_Actividad" value="{{__('Nombre actividad')}}"/>
    <x-jet-input id="nombre_Actividad" class="block mt-1 w-full" type="text" name="nombre_Actividad" :value="old('nombre_Actividad',$actividad->nombre)" required autofocus/>
       
    <x-jet-label for="duracion_Actividad" value="{{__('Duracion actividad')}}"/>
    <x-jet-input id="duracion_Actividad" class="block mt-1 w-full" type="text" name="duracion_Actividad" :value="old('duracion_Actividad',$actividad->duracion_Actividad)" required autofocus/>
  
    <x-jet-label for="insumo" value="{{__('Insumo')}}"/>
    <x-jet-input id="insumo" class="block mt-1 w-full" type="text" name="insumo" :value="old('insumo',$actividad->insumo)" required autofocus/> 
        
        <x-jet-label for="cantidad_Insumo" value="{{__('Cantidad insumo')}}"/>
        <x-jet-input id="cantidad_Insumo" class="block mt-1 w-full" type="text" name="cantidad_Insumo" :value="old('cantidad_Insumo',$actividad->cantidad_Insumo)" required autofocus/>   

    <div class="flex justify-center">
        <div class="p-2">
        <div class="flex justifity-end">
           <a href="{{('actividades.create')}}">
             <x-jet-button type="submit">
                 Guardar
             </x-jet-button>  

        </div>
        </div>
    </div>     
</div>