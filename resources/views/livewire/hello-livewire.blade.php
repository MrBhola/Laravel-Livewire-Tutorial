<div style="margin-left: 10rem">
    <h1>Welcome to Laravel Live Wire Series Episode 3</h1>
    <h2>Methodes or function call, Click events,Event and Target, mouse enter, keydown ,Submit Form & Set</h2>
    <h1>Name :{{$name}}</h1>
    <input type="text" wire:model="name">
    <form action="#" wire:submit.prevent="$set('name', 'Toney Stark')">
        <button>Reset</button>
    </form>
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
