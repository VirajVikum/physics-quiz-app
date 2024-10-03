<x-app-layout>
    
    @role('super-admin')
    <livewire:admin.index>
    @endrole

    @role('client')
    <livewire:client.index>
    @endrole

</x-app-layout>
