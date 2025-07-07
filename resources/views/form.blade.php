 <form wire:submit="create">
     <div>
         {{ $this->form }}
     </div>
     <div class="flex justify-end mt-3">
         <x-filament::button type="submit">
             <span class="fi-btn-label">Submit</span>
         </x-filament::button>
     </div>
 </form>
