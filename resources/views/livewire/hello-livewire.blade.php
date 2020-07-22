<div style="margin-left: 10rem">
    <h1>Welcome to Laravel Live Wire Series !!!</h1>
    <h1>Name :{{$name}}</h1>
    <input type="text" wire:model="name">
    <h1>Age : {{$age}}</h1>
    <input type="number" wire:model="age">
    <h1>Test : {{implode(', ',$test)}}</h1>
    <select wire:model="test" multiple>
        <option>Blood</option>
        <option>Urine</option>
        <option>Stool</option>
    </select>
    <h1>Status : @if($status) Completed @else Testing @endif</h1>
    <input type="checkbox" wire:model="status">
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
