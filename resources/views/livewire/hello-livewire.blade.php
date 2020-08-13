<div style="margin-left: 10rem">
    <h1>Laravel Livewire Episode 4 - Life cycle hooks</h1>
    <h2>Mount , hydrate, updating, updated , updated_scope</h2>
    <h1>Name :{{$name}}</h1>
    <input type="text" wire:model="name">
    <input type="text" wire:model="updated">

    <form action="#" wire:submit.prevent="$set('name', 'Toney Stark')">
        <button style="margin: 5px; font-size:20px">Reset</button>
    </form>
    <h1>{{$hydrate}}</h1>
    <h1>{{$updated}}</h1>
</div>
<style>
    input {
        height: 30px;
        width: 300px;
        font-size: 24px
    }

    select {
        font-size: 22px
    }

</style>
